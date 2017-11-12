<?php
try {
$handler = new PDO('mysql:host=barrykerrdb.c0n612lprhs7.us-west-2.rds.amazonaws.com;dbname=project', 'root', 'Riley0scar');
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
echo $e->getMessage();
die();
}
