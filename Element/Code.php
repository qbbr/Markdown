<?php
/**
 * Code
 *
 * @package Q_Logger
 * @author Sokolov Innokenty, <sokolov.innokenty@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 * @copyright Copyright (c) 2011, qbbr
 */
class Q_Markdown_Element_Code extends Q_Markdown_Element_Abstract
{
    public function parse()
    {
        return preg_replace_callback('#`([^`]+)`#', 'self::callback', $this->_text);
    }
    
    protected function callback($matches)
    {
        return '<code>' . htmlentities($matches[1]) . '</code>';
    }
}