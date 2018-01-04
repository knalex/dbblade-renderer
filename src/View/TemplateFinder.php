<?php

namespace Knalex\DbTemplate\View;

use Exception;
use Knalex\DbTemplate\Models\BladeTemplate as Template;

class TemplateFinder
{
    /**
     * @param string $name
     * @return \Exception
     */
    public function find(string $name)
    {
        if (!$template = Template::virtualrootFilter($name)->first()) {
            throw new Exception('Template not found: ' . $name);
        }
        return $template;
    }


    public function lastModified($path)
    {
        $template = $this->find($path);
        return strtotime($template->updated_at);
    }
}