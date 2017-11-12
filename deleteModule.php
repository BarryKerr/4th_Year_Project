<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 07/03/2017
 * Time: 23:20
 */
require_once('conn.php');//open connection to the database

if(isset($_POST)) {
    $moduleName = $_GET['id'];
    $sql = "DELETE FROM project.module WHERE name = :moduleName";
    $stmt = $handler->prepare($sql);
    $stmt->bindParam(':moduleName', $moduleName);
    $stmt->execute();

    header('Location: http://52.26.52.79/editDeleteModule.php');
}