<?php


// alias for \codingbootcamp\tinymvc\request::get
function request($name, $default = null) {
    
    return \codingbootcamp\tinymvc\request::get($name,$default);
}

// alias for \polakjan\tinymvc\config\request::get
function  config($key, $default = null) {
    return \polakjan\config::get($key,$default);
}