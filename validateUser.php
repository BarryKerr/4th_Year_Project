<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 06/02/2017
 * Time: 22:20
 */
require_once('conn.php');

$result='';
if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM student WHERE Student_ID = :username AND password = :password";
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

    echo $result;
}
