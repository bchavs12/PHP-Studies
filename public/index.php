<?php
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'functions.php';

// SPL (Standard PHP Library) -> é usada para registrar uma função de carregamento automático de classes 
// to make a file lazy load, until it's not required.

spl_autoload_register(function ($class) {
  require base_path("Core/{$class}.php");
});

require base_path('router.php');
