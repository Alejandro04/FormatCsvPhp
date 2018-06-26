
<?php 

function storage(){

	$fp = fopen('file.csv', 'w');

	foreach ($data as $d) { 
    	$list = array ( array($data->item1, ";", $data->item2) );

    	foreach ($list as $fields) {
	   		fputcsv($fp,$fields, chr(0));  //chr0 escapes special characters
		}
	}

	fclose($fp);
}



function outputbrowser{
	header("Content-type: text/csv");
    header("Cache-Control: no-store, no-cache");
    header('Content-Disposition: attachment; filename="filename.csv"');

    $json = getCustomers("json");
    $outstream = fopen("php://output",'w');

    foreach ($data as $d) { 
    	$list = array ( array($data->item1, ";", $data->item2) );

    	foreach ($list as $fields) {
	   		fputcsv($outstream,$fields, chr(0));  //chr0 escapes special characters
		}
	}

   fclose($outstream);
}

?>