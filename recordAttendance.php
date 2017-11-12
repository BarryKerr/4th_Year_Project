<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 22/02/2017
 * Time: 09:20
 */
require_once('conn.php');
$result='';
if(isset($_POST['username']) && isset($_POST['moduleID']))
{
    $username = $_POST['username'];
    $moduleID = $_POST['moduleID'];

    $sql = "INSERT INTO module_attendance (Student_ID,module_id,status,created_at) VALUES (:username,:moduleID,1,NOW())";
    $stmt = $handler->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':moduleID', $moduleID);
    $stmt->execute();
    if($stmt)
    {
        $result="true";
    }
    else
    {
        $result="false";
    }

    echo $result;
}