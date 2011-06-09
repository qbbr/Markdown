<?php
/**
 * Markdown
 *
 * @package Q_Markdown
 * @author Sokolov Innokenty, <sokolov.innokenty@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 * @copyright Copyright (c) 2011, qbbr
 */
class Q_Markdown
{
    static public function toHTML($text)
    {
        $text = (string) new Q_Markdown_Element_Header($text);
        $text = (string) new Q_Markdown_Element_HorizontalRule($text);
        $text = (string) new Q_Markdown_Element_LineBreak($text);
        $text = (string) new Q_Markdown_Element_Image($text);
        $text = (string) new Q_Markdown_Element_Link($text);
        $text = (string) new Q_Markdown_Element_Code($text);
        $text = (string) new Q_Markdown_Element_Bold($text);
        $text = (string) new Q_Markdown_Element_Italic($text);

        return $text;
    }
}
