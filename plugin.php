<?php
/*
Plugin Name: Unambiguous ShortURLs
Description: Removes ambiguous characters from generated YOURLS short URLs.
Version: 1.0
Author: ETH Zürich, Matteo Corti
*/

yourls_add_filter('get_shorturl_charset', 'eth_unambiguous_shorturl_charset');

function eth_unambiguous_shorturl_charset($charset) {
    return str_replace(
        array('0', 'O', 'o', '1', 'I', 'l'),
        '',
        $charset
    );
}
