<?php

/*
 * Check if given URI equals to the current URI
 * If true, the matching navbar point gets highlighted
 */

function echoActiveClassIfRequestMatches($requestUri) {
    $current_file_name = basename($_SERVER['REQUEST_URI']);

    if ($current_file_name == 'index.php' . $requestUri)
        return 'active';

    return '';
}