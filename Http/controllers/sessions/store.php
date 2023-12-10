<?php

use Http\Forms\LoginForm;
use Core\Authenticator;

$form = LoginForm::validate($attributes =[
        'email' => $_POST['email'],
        'password' => $_POST['password']
]);


if((new Authenticator)->attempt($attributes['email'] , $attributes['password'])) {
    redirect('/');
}

$form->error('email' , 'No Matching Account found for that email address and password');

return redirect('/login');







