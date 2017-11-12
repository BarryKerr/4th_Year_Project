<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 08/03/2017
 * Time: 00:23
 */
require_once('conn.php');//open connection to the database

if(isset($_POST)) {
    $id = $_GET['id'];
    $sql = "DELETE FROM project.lecturer WHERE Lecturer_ID = :id";
    $stmt = $handler->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header('Location: http://52.26.52.79/editDeleteLecturer.php');
}