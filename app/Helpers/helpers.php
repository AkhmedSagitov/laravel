<?php

if (! function_exists('active_link')) {
    function active_link($route, $class = 'active')
    {
        return request()->routeIs($route) ? $class : '';
    }
}
