<?php

namespace WCKZ\Generator;

class FileBuilder
{

    protected $content = '';

    public function __toString()
    {
        return $this->content;
    }

    public function add($format, $args = null)
    {
        $this->content .= call_user_func_array('sprintf', func_get_args());

        return $this;
    }

    public function indent($count = 1, $indentStyle = '    ')
    {
        for($i = 0; $i < $count; $i++)
        {
            $this->add($indentStyle);
        }

        return $this;
    }

    public function newLine()
    {
        $this->add(PHP_EOL);
    }

}