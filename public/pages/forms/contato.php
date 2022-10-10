<?php 

require '../../../bootstrap.php';

$validate = validate([
    'name' => 's',
    'sobrenome' => 's',
    'message' => 's'
]);


dd($validate->name);