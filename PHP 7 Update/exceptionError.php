<?php 

// Nova arquitetura para Exception e Error

interface MyPackageThrowable extends Throwable {

}

class MyPackageException extends Exception implements MyPackageThrowable
{

}

function add (int $left, int $right) {
    if ($left < 0) {
        throw new MyPackageException("Left < 0");
    }
    return $left + $right;
}

try {
    echo add(-1,5);

} catch (Exception $e) {
    echo "Exception " . $e->getMessage();
}