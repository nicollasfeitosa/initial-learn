<?php

// Unserialize Filtrada
/*
class User
{
    public $name;
    public $email;

    public function __toString()
    {
        return "User: {$this->name}, E-mail: {$this->email}";
    }
}

class Blog
{
    public $title;
    public $desc;

    public function __toString()
    {
        return "Title: {$this->title}, Desc: {$this->desc}";
    }
}

$user = new User;
$user->name = "Nicollau";
$user->email = "nicollau@gmail.com";
echo $user;


$blog = new Blog;
$blog->title = "Titulo do Blog";
$blog->desc = "Descriçao do Blog";
echo $blog;

file_put_contents("data.save", serialize([$user, $blog]));

 
*/

$data = file_get_contents("data.save");

$data = unserialize($data, ["allowed_classes" => ["blog"]]);

foreach ($data as $objeto) {
    if (is_object($objeto)) {
        echo $objeto;
    }
} 
