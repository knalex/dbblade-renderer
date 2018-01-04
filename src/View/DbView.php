<?php

namespace Knalex\DbTemplate\View;

use Illuminate\View\View as LaraView;
use Knalex\DbTemplate\View\Compiler\DatabaseTemplateCompilerEngine;

class DbView extends LaraView
{
    /**
     * DbView constructor.
     * @param DatabaseTemplateFactory $factory
     * @param DatabaseTemplateCompilerEngine $engine
     * @param string $view
     * @param string $path
     * @param array $data
     */
    public function __construct(
        DatabaseTemplateFactory $factory,
        DatabaseTemplateCompilerEngine $engine,
        $view,
        $path,
        $data = []
    )
    {
        parent::__construct($factory, $engine, $view, $path, $data);
    }

}
