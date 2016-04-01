<?php 
include "lib/visionlib.php";
include "lib/config.php";
$es = new visionlib($DB->con);
?>
<?php
if(isset($_POST['productType'])){
	$productType = $_POST['productType'];
$sql = "SELECT Modelname from product where productType='$productType'";
$resp = $es->doStandaredQuery($sql);
for($i=0;$i<count($resp);$i++)
{
	$newresp[$i] = $resp[$i]['Modelname'];
}
echo json_encode($newresp);
}

if(isset($_POST['productName'])){
$productName = $_POST['productName'];
 $sql = "SELECT * from product where Modelname='$productName'";
 $resp = $es->doStandaredQuery($sql);
for($i=0;$i<count($resp);$i++)
{
$newresp[$i] = $resp[$i]['Price'];
}
echo json_encode($newresp);


}


if(isset($_POST['productStock'])){
$productStock = $_POST['productStock'];
$sql = "SELECT * from product where Modelname='$productStock'";
$resp = $es->doStandaredQuery($sql);
for($i=0;$i<count($resp);$i++)
{
$newresp[$i] = $resp[$i]['qty'];
}
echo json_encode($newresp);
}


if(isset($_POST['billNo'])){
$billNo = $_POST['billNo'];
$sql = "SELECT * from billing where id='$billNo'";
 $resp = $es->doStandaredQuery($sql);


echo json_encode($resp);
}



?>
