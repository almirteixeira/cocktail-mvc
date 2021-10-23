<?php

spl_autoload_register(function ($file) {
    require_once(str_replace('\\', '/', $file . '.php'));
  
});
?>