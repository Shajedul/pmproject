<?php

require 'view/login.view.php';
//var_dump($app['database']->selectAll());
//$uname ='not set yet';
$pwd =null;
if (isset($_POST['submit']))
{
    if ($_POST['uname']!=null)
    {
           echo ' if block is working';

    }
    else
    {

        header('Location:');

    }


}
