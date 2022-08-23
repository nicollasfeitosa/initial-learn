<?php

// PROTEÇÃO CAPTCHA

$captcha = $_SESSION['captcha'] ?? false;

if (!$captcha or $captcha !== filter_input(INPUT_POST, '_captcha')) {
    die('Captcha Validation Fail');
}