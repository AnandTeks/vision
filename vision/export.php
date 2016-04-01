<?php
// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=".date("Y-M-D-h:i:s")."GlobalVisionCustomerProfile.xls");
 
// Add data table
include 'customerprofileexport.php';
?>