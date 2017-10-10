<?php

function request($name, $default = null) {
    
    return \codingbootcamp\tinymvc\request::get($name,$default);
}