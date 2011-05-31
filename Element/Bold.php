<?php
/**
 * Bold
 *
 * @package Q_Logger
 * @author Sokolov Innokenty, <sokolov.innokenty@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 * @copyright Copyright (c) 2011, qbbr
 */
class Q_Markdown_Element_Bold extends Q_Markdown_Element_Abstract
{
    const TAG = 'b';

    public function parse()
    {
        return preg_replace('#\*\*([^*]+)\*\*#', sprintf('<%1$s>$1</%1$s>', self::TAG), $this->_text);
    }
}