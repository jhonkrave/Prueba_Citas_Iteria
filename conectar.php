<?php 
class conectar{

  function __construct(){
	$conn = oci_connect('sys', '12345678', 'localhost:1522/orcl2','DUAL');
	if (!$conn) {
       $e = oci_error();
       trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	   $stid = oci_parse($conn, 'SELECT * FROM DUAL');
	   oci_execute($stid);

	   echo "<table border='1'>\n";
	   while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
        echo "<tr>\n";
        foreach ($row as $item) {
          echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "") . "</td>\n";
        }
        echo "</tr>\n";
      }
		echo "</table>\n";
	 }	
	}
 }	

 new conectar();



?>