<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 08/03/2017
 * Time: 00:15
 */
require_once('conn.php');//open connection to the database

$id = $_POST['lecturerID'];
$name = $_POST['name'];
$department = $_POST['department'];

if(isset($_POST)) {
    $sql = "update lecturer set name = :name,department = :d where Lecturer_ID = :id";
    $stmt = $handler->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':d', $department);

    $stmt->execute();

    header('Location: http://52.26.52.79/editDeleteLecturer.php');
}