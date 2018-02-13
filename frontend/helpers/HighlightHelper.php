<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 13.02.18
 * Time: 21:57
 */

namespace frontend\helpers;

class HighlightHelper
{
    public static function process($text, $content)
    {
        $words = explode(' ', trim($text));
       return preg_replace('/' . implode('|', $words) . '/i', '<b>$0</b>', $content);
    }
}