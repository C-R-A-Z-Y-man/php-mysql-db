<?php

require_once '../database/db_config.php';

echo "<pre>";

print_r($_POST);


$user_input_name =   $_POST['user_input_name'];
$some_user_email =   $_POST['some_user_email'];
$tell_me_something =  $_POST['tell_me_something'];



/*

INSERT INTO `user_data` (`id`, `name`, `email`, `subject`, `created_time`, `updated_time`)
 VALUES (NULL, 'superman', 'hello@gmail.com', 'I save this world', current_timestamp(), current_timestamp()); 



 DELETE FROM `user_data` WHERE `user_data`.`id` = 1


*/



$insert_query = "INSERT INTO `user_data` (`id`, `name`, `email`, `subject`, `created_time`, `updated_time`)
                    VALUES (NULL, '$user_input_name', '$some_user_email', '$tell_me_something', current_timestamp(), current_timestamp()); ";

$insert_met_to_the_db = mysqli_query($connec_to_db, $insert_query);

if($insert_met_to_the_db){
    echo "<script>alert('inserted 1 recored')</script>";
}else{
    echo "<script>alert('sorry something went wrong')</script>";

}