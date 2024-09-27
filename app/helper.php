<?php

if (!function_exists('isActiveRoute')) {
    /**
     * Check if the given route is active.
     *
     * @param string $route
     * @return string
     */
    function isActiveRoute($route)
    {
        return request()->is($route) ? 'active' : '';
    }
}
