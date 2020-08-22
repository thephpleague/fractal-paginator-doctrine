<?php

/*
 * This file is part of the League\Fractal package.
 *
 * (c) Phil Sturgeon <me@philsturgeon.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\Fractal\Pagination;

use Doctrine\ORM\Tools\Pagination\Paginator;
use Exception;
use RuntimeException;

/**
 * A paginator adapter for doctrine pagination.
 *
 * @author Fraser Stockley <fraser.stockley@gmail.com>
 */
class DoctrinePaginatorAdapter implements PaginatorInterface
{
    /**
     * The paginator instance.
     * @var Paginator<mixed>
     */
    private $paginator;

    /**
     * The route generator.
     *
     * @var callable
     */
    private $routeGenerator;

    /**
     * Create a new DoctrinePaginatorAdapter.
     * @param Paginator<mixed> $paginator
     * @param callable $routeGenerator
     *
     */
    public function __construct(Paginator $paginator, callable $routeGenerator)
    {
        $this->paginator = $paginator;
        $this->routeGenerator = $routeGenerator;
    }

    /**
     * Get the current page.
     *
     * @return int
     */
    public function getCurrentPage()
    {
        return (int) ($this->paginator->getQuery()->getFirstResult() / $this->paginator->getQuery()->getMaxResults()) + 1;
    }

    /**
     * Get the last page.
     *
     * @return int
     */
    public function getLastPage()
    {
        return (int) ceil($this->getTotal() / $this->paginator->getQuery()->getMaxResults());
    }

    /**
     * Get the total.
     *
     * @return int
     */
    public function getTotal()
    {
        return count($this->paginator);
    }

    /**
     * Get the count.
     *
     * @return int
     *
     * @throws Exception If the iterator cannot be resolved
     * @throws RuntimeException If the returned iterator can't be counted
     */
    public function getCount()
    {
        $iterator = $this->paginator->getIterator();
        if (!is_callable([$iterator, 'count'])) {
            throw new RuntimeException('Invalid iterator returned by paginator. Must have a callable "count" method.');
        }
        return $iterator->count();
    }

    /**
     * Get the number per page.
     *
     * @return int
     */
    public function getPerPage()
    {
        return (int) $this->paginator->getQuery()->getMaxResults();
    }

    /**
     * Get the url for the given page.
     *
     * @param int $page
     *
     * @return string
     */
    public function getUrl($page)
    {
        return call_user_func($this->getRouteGenerator(), $page);
    }

    /**
     * Get the the route generator.
     *
     * @return callable
     */
    private function getRouteGenerator()
    {
        return $this->routeGenerator;
    }
}
