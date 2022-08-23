<?php

function setInternalServerError($errno = null, $errstr = null, $errfile = null, $errline = null){
    http_response_code(500);
    
    echo '<h1>Error</h1>';

    if (!DEBUG) {
        exit;
    }

    if(is_object($errno)){
        $err = $errno;
        $errno = $err->getCode();
        $errstr = $err->getMessage();
        $errfile= $err->getFile();
        $errline = $err->getLine();
    }

    switch($errno) {
        case E_USER_ERROR:
            echo "<strong>ERROR</strong> [ $errno ] $errstr <br>\n";
            echo "Fatal Error on line $errline in file $errfile";
        break;

        case E_USER_WARNING:
            echo "<strong>WARNING</strong> [ $errno ] $errstr <br>\n";

        break;

        case E_USER_NOTICE:
            echo "<strong>NOTICE</strong> [ $errno ] $errstr <br>\n";

        break;

        default:
            echo "<strong>Unknown error type:</strong> [ $errno ] $errstr <br>\n";
        break;
    }
    exit;
}

set_error_handler('setInternalServerError');
set_exception_handler('setInternalServerError');