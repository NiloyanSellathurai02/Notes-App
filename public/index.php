<?php

const BASE_PATH = __DIR__.'/../';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {
    require base_path("Core/{$class}.php");
});

require base_path('Core/router.php');



//$id= $_GET['id'];
//$query= "select * from posts where id = ?";



//$posts = $db->query($query, [$id])->fetch();



//dd($posts['title']);
//connect to MySQL database.


//foreach ($posts as $post){
//    echo "<li>" . $post['title'] . "</li>";
//}