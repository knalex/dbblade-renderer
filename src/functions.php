<?php

use Knalex\DbTemplate\View\DatabaseTemplateFactory;

if (!function_exists('dbview')) {
    /**
     * Get the evaluated view contents for the given view.
     *
     * @param  string $view
     * @param  array $data
     * @param  array $mergeData
     */
    function dbview($view = null, $data = [], $mergeData = [])
    {
        $factory = app(DatabaseTemplateFactory::class);

        if (func_num_args() === 0) {
            return $factory;
        }
        return $factory->make($view, $data, $mergeData);
    }
}