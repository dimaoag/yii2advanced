<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 08.02.18
 * Time: 11:48
 */

ob_start();
echo 'Output'.'<br>';
echo 'Output'.'<br>';
echo 'Output'.'<br>';
echo 'Output'.'<br>';
echo 'Output'.'<br>';
echo 'Output'.'<br>';
echo 'Output'.'<br>';

$content = ob_get_contents();
ob_clean();

$content = strtr($content, 'put', 'Hel');

echo $content;