<!DOCTYPE html>
<html>
<head>

			<title>Table</title>
			<meta charset = "utf-8">
			<link rel = "stylesheet" type ="text/css" href = "styles.css">

</head>



<body>

<?php
// include array functions

include 'tableArray.php';

function csv_converter($csv_file) {
  $array = array_map('str_getcsv', file($csv_file));
  return $array;
}
$csv_file = 'data.csv';
$array = csv_converter($csv_file);
//instantiate htmlarray class
$obj = new htmlArray;
echo $obj->getArray($array);
?>
</body>
</html>
