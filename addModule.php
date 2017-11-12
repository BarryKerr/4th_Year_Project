<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 07/03/2017
 * Time: 23:27
 */
if(isset($_COOKIE["username"])) {

    require_once('conn.php');//get connection to the database
    $moduleID = $_POST['module_id'];
    $name = $_POST['name'];
    $Lecturer_ID = $_POST['Lecturer_ID'];



    if (isset($_POST)) {
        $sql = "insert into module values ( :mID,:mName,:lID)";
        $stmt = $handler->prepare($sql);
        $stmt->bindParam(':mID', $moduleID);
        $stmt->bindParam(':mName', $name);
        $stmt->bindParam(':lID', $Lecturer_ID);

        $stmt->execute();

        header('Location: http://52.26.52.79/editDeleteModule.php');
    }
}