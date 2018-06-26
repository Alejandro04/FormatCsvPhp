
<?php 

	$fp = fopen('file.csv', 'w');

	foreach ($data as $d) { 
      $list = array ( array($item1, ";", $item2) );

      foreach ($list as $fields) {
	   	   fputcsv($fp,$fields, chr(0));  //chr0 escapes special characters
		  }
	}

	fclose($fp);

?>