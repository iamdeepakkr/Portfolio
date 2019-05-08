<?php
   
   if(isset($_POST['file_name'])){
   	$file = $_POST['file_name'];
   	header('Content-type: doc/pdf');
   	header('Content-Disposition: attachment; filename="'.$file.'"');
   	readfile('files/'.$file);
   	exit();
   }

?>