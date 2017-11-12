<?php

require_once('conn.php');


$query = $handler->query('SELECT * FROM lecturer');
while($row = $query->fetch()) {
	print('name = ' . $row['name']);
	print('<br>Department = ' . $row['department']);
}
//echo json_encode($query->fetchAll());
