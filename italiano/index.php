<?php

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);

$lang_config = array(    "it" => "italiano/",
                 "en" => "english/",
                  //"de" => "deutsch/",
                  "default" => "italiano/");

if(array_key_exists($lang, $lang_config))
{
    $location = $lang_config[$lang];
}
else
{
    $location = $lang_config['default'];
}

header('Location: ' . $location);

?>
