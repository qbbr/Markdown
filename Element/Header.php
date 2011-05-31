<?php
/**
 * Header
 *
 * @package Q_Logger
 * @author Sokolov Innokenty, <sokolov.innokenty@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 * @copyright Copyright (c) 2011, qbbr
 */
class Q_Markdown_Element_Header extends Q_Markdown_Element_Abstract
{
    public function parse()
    {
        return preg_replace_callback('!(#{1,})([^#]+)(#{1,})?!', 'self::callback', $this->_text);
    }
    
    protected function callback($matches)
    {
        $len = strlen($matches[1]);
        
        return sprintf('<h%1$d>%2$s</h%1$d>', $len, trim($matches[2]));
    }
}