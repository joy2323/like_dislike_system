<?php

// connect to the database
$db = mysqli_connect("localhost", "root", "", "like_dislike");

// lets assume a user is logged in with id $user_id
$user_id = 2;

if (!$db) {
    die("Error connecting to the database: ". my_sqli_connect_error($db));
    exit();
}

// if user clicks like or dislike button
if (isset($_POST['action'])) {
    $post_id = $_POST['post_id'];
    $action = $_POST['action'];
    switch ($action) {
        case 'like':
            $sql="INSERT INTO rating_info (user_id, post_id, rating_action) 
                   VALUES ($user_id, $post_id, 'like') 
                   ON DUPLICATE KEY UPDATE rating_action='like'";
            break;

         case 'dislike':
             $sql="INSERT INTO rating_info (user_id, post_id, rating_action) 
                  VALUES ($user_id, $post_id, 'dislike') 
                   ON DUPLICATE KEY UPDATE rating_action='dislike'";
            break;

         case 'unlike':
             $sql="DELETE FROM rating_info WHERE user_id=$user_id AND post_id=$post_id";
             break;

         case 'undislike':
               $sql="DELETE FROM rating_info WHERE user_id=$user_id AND post_id=$post_id";
         break;

        default:
    break;

    }

    
    // execute query to effect changes in the database ...

}







?>