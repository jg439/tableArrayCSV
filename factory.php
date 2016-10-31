
<?php
function readCSV($csvFile){
     $file_handle = fopen($csvFile, 'r');
     $line_count = 0;

     while (!feof($file_handle) ) {
       if($line_count == 0){
               $field_names = '<th>'array_values(fgetCSV($file_handle,1024)) '<th>';

       }

       $records[] = array_combine($field_names, fgetcsv($file_handle, 1024));
          foreach($records as $row){
            $this->records .=
          }

       $line_count++;

    }
     print_r($records);
     fclose($file_handle);
     return $records;
   }


   $cars = readCSV('data.csv');



}


   class htmlArray extends html{
     public function getArray(array $array) {
   	$this->html = '<table border="2 cellspacing="0" cellpadding="4">';
   	foreach($array as $row=>$value) {
    	  $this->html .= '<tr>';
   	  foreach($value as $key=>$value2){
   	    $this->html .= '<td>' . $value2 . '</td>';
   	  }
   	  $this->html .= '</tr>';
     }
     $this->html .= '</table>';
     return $this->html;
   }
   }

   function readCSV($csvFile){
   	$file_handle = fopen($csvFile, 'r');
   	while (!feof($file_handle) ) {
   		$line_of_text[] = fgetcsv($file_handle, 1024);
   	}
   	fclose($file_handle);
   	return $line_of_text;
   }


   // Set path to CSV file
   $csvFile = 'data.csv';
   $csv = readCSV($csvFile);
   $obj = new htmlArray;
   echo $obj->getArray($csv);

   ?>
