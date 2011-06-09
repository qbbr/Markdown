<?php
/**
 * HorizontalRule
 *
 * @package Q_Markdown
 * @author Sokolov Innokenty, <sokolov.innokenty@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 * @copyright Copyright (c) 2011, qbbr
 */
class Q_Markdown_Element_HorizontalRule extends Q_Markdown_Element_Abstract
{
    public function parse()
    {
        return preg_replace('#([-*] ?){3,}#', '<hr />', $this->_text);
    }
}
