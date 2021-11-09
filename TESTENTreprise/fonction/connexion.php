<?php
try {
$bd=new pdo("mysql:host=localhost;dbname=testEn","root","");	
} catch (Exception $e) {
	echo "la bd n existe pas";
}

?>