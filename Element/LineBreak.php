<?php
/**
 * LineBreak
 *
 * @package Q_Markdown
 * @author Sokolov Innokenty, <sokolov.innokenty@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 * @copyright Copyright (c) 2011, qbbr
 */
class Q_Markdown_Element_LineBreak extends Q_Markdown_Element_Abstract
{
    public function parse()
    {
        return preg_replace('# {2,}(\r?\n)#', '<br />$1', $this->_text);
    }
}
