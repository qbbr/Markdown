<?php
/**
 * Image
 *
 * @package Q_Markdown
 * @author Sokolov Innokenty, <sokolov.innokenty@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 * @copyright Copyright (c) 2011, qbbr
 */
class Q_Markdown_Element_Image extends Q_Markdown_Element_Abstract
{
    public function parse()
    {
        return preg_replace_callback('#!\[([^\]]+)\]\(([^ ")]+)( "([^"]+)")?\)#', 'self::callback', $this->_text);
    }

    protected function callback($matches)
    {
        $title = (isset($matches[4])) ? ' title="' . $matches[4] . '"' : '';

        return sprintf('<img src="%2$s" alt="%1$s"%3$s />', $matches[1], $matches[2], $title);
    }
}
