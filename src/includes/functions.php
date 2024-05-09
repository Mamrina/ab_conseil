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