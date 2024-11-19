<?php

// call all the goddamn class inside
spl_autoload_register(function ($class) {
    require_once __DIR__ . '/login/' . $class . '.php';
});
