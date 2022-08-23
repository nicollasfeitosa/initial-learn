<?php

// PROTEÇÃO CSRF - Cross-site Request Forgery

$csrf_token = $_SESSION['CSRF_TOKEN'] ?? false;

if (!$csrf_token or $csrf_token !== filter_input(INPUT_POST, '_csrf_token')) {
    die('CSRF Validation Fail');
}