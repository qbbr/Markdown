<?php
/**
 * Abstract
 *
 * @package Q_Markdown
 * @author Sokolov Innokenty, <sokolov.innokenty@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 * @copyright Copyright (c) 2011, qbbr
 */
abstract class Q_Markdown_Element_Abstract
{
    protected $_text;

    public function __construct($text)
    {
        $this->_text = $text;
    }

    public function __toString()
    {
        return (string) $this->parse();
    }

    abstract public function parse();
}
