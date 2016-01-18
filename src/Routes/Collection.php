<?php

namespace Axn\Laroute\Routes;

use Illuminate\Routing\Route;
use Lord\Laroute\Routes\Collection as BaseCollection;

class Collection extends BaseCollection
{
    /**
     * Get the route information for a given route.
     *
     * @param $route     \Illuminate\Routing\Route
     * @param $filter    string
     * @param $namespace string
     *
     * @return array
     */
    protected function getRouteInformation(Route $route, $filter, $namespace)
    {
        $data = parent::getRouteInformation($route, $filter, $namespace);

        if (!$data) {
            return null;
        }

        return array_only($data, ['uri', 'name']);
    }
}
