<?php

$users = (new \App\Model\Users)->getAll();

echo '<ul>';
foreach ($users as $user) {
    echo '<li>'.$user['name'].'</li>';
}
echo '</ul>';

