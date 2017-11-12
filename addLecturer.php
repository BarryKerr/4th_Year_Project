<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 08/03/2017
 * Time: 00:28
 */
if(isset($_COOKIE["username"])) {

    require_once('conn.php');//get connection to the database
    $department = $_POST['department'];
    $name = $_POST['name'];

    if (isset($_POST)) {
        $sql = "insert into lecturer (name,department)values ( :name,:department)";
        $stmt = $handler->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':department', $department);

        $stmt->execute();

        header('Location: http://52.26.52.79/editDeleteLecturer.php');
    }
}