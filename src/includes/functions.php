<?php

/**
 * Get the header
 *
 * @param  string $title
 * @param  string $layout
 * @return void
 */
function get_header(string $title, string $layout = 'admin'): void
{
    global $router;
    require_once '../src/views/layouts/' . $layout . '/header.php';
}

/**
 * Get the footer
 *
 * @param  string $layout The layout for user
 * @return void
 */
function get_footer(string $layout = 'public'): void
{
    global $router;
    require_once '../src/views/layouts/' . $layout . '/footer.php';
}

// /**
//  * Check if user is logged in
//  * 
//  * @param array $match The match array from AltoRouter
//  * @param AltoRouter $router The router
//  */
// function checkAdmin(array $match, AltoRouter $router)
// {
//     $existAdmin = strpos($match['target'], 'admin_');
//     if ($existAdmin !== false && empty($_SESSION['user']['id'])) {
//         header('Location: ' . $router->generate('login'));
//         die;
//     }
// }