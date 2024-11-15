<?php
include(__DIR__ . "/functions/info.php");

function thedir($paths)
{
    return __DIR__ . $paths;
}
function myurl($paths){
    
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];
    $actual_path = $host . parse_url($url, PHP_URL_PATH);
    return $actual_path.$paths;
}
function getFontList()
{
    $font_dir = thedir("/fonts");
    $font_files = scandir($font_dir);
    $fontList = [];
    foreach ($font_files as $f) {
        if ($f !== "." && $f !== "..") {
            $fontList[] = array(
                "id" => strtolower(str_replace(' ', '', substr($f, 0, strrpos($f, ".")))),
                "name" => substr($f, 0, strrpos($f, ".")),
                "url" => "fonts/".str_replace(' ', '%20', $f)
            );
        }
    }
    return $fontList;
}
