<?php

require 'view/login.view.php';
//var_dump($app['database']->selectAll());
if (isset($_POST['submit']))
{

    if (!empty($_POST['uname']))
    {
        $uname=trim($_POST['uname']);

        if (!empty($_POST['password']))
        {
            $pword=trim($_POST['password']);
            // code for login credential verification
        }
        else
        {
            echo "Notification for empty password";
        }
    }
    else
    {

        header('Location:');

    }


}
