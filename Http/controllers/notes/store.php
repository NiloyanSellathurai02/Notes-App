<?php

use Core\Validator;
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$errors =[];

    if(! Validator::string($_POST['body'],1,100)){
        $errors['body'] ='A Body of no more than 100 characters is required';
    }

    if(! empty($errors)) {
         view("notes/create.view.php", [
            'heading' => 'Create Note',
            'errors' => $errors
        ]);
    }

$db->query('INSERT INTO notes (body, user_id) VALUES(:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => 1
]);


header('location: /notes');
die();
