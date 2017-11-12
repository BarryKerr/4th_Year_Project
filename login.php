<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 26/02/2017
 * Time: 23:07
 */

require_once('conn.php');//get connection to the database

$result='';
//get values posted from the login.php page
if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    //use to set values for the cookie
    $name = "username";
    $value = "root";
    $expire = time() + (60*60*24*7);//expire in 1 week

    $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";//check database to confirm user exists
    $stmt = $handler->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    if($stmt->rowCount() > 0)
    {
        $result="true";
    }
    else
    {
        $result="false";
    }


    if($result=="true")
    {

        header('Location: http://52.26.52.79/home.php');
        setcookie($name,$value,$expire);
    }


    else
    {
        header('Location: http://52.26.52.79/login.html');
    }

}