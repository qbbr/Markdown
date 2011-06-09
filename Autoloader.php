<?php
/**
 * Autoloads Q_Markdown classes
 *
 * @package Q_Markdown
 * @author Sokolov Innokenty, <sokolov.innokenty@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 * @copyright Copyright (c) 2011, qbbr
 */
class Q_Markdown_Autoloader
{
    /**
     * Registers Q_Markdown_Autoloader as an SPL autoloader
     */
    static public function register()
    {
        ini_set('unserialize_callback_func', 'spl_autoload_call');
        spl_autoload_register(array(new self, 'autoload'));
    }

    /**
     * Handles autoloading of classes.
     *
     * @param string $class Class name
     * @return boolean Returns true if the class has been loaded
     */
    static public function autoload($class)
    {
        if (0 !== strpos($class, 'Q_Markdown')) {
            return;
        }

        if ($class == 'Q_Markdown') {
            $file = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Markdown.php';
        } else {
            $file = dirname(dirname(__FILE__))  . DIRECTORY_SEPARATOR . str_replace('_', DIRECTORY_SEPARATOR, str_replace('Q_', '', $class)) . '.php';
        }

        if (file_exists($file)) {
            require $file;
        }
    }
}
