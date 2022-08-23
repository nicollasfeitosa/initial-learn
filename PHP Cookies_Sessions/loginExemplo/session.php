<?php

//usar sqlite 
// ini_set('session.save_handler', 'sqlite');
// ini_set('session.save_patch', __DIR__.'/sessions.db');

session_set_cookie_params(0, '/', null, false, true);
//  lifetime   caminho que ele pode ser lido    dominio    https  http only

session_start();