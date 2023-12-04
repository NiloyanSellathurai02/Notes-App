<?php

use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

//Validate the form inputs.
$errors=[];
if(!Validator::email($email)){
    $errors['email'] = 'Please provide a valid email address';
}

if(!Validator::string($password , 7 , 255)){
    $errors['password'] = 'Please provide a password of at least 7 character ';
}

if(! empty($errors)){
    return view('registration/create.view.php' , [
        'errors' => $errors
    ]);
}

//Check if the account already exists
    //If yes, redirect to a login page
    //if not , save on the database , and then log the user in, and redirect...


