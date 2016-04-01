<?php 
include "lib/visionlib.php";
include "lib/config.php";


$es = new visionlib($DB->con);

 ?>
<?php


echo $id = $_GET['id'];
$resp = $es->deleteproducts($id);
header('Location:customerprofileview.php');
exit;

?>
