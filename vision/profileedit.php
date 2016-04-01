<?php include('header.php'); ?>

<?php

if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT * from customerprofile  where id=$id";
$resp = $es->doStandaredQuery($sql);
}


if(isset($_POST['customerName'])){

$id = $_POST['id'];
 $customerName = $_POST['customerName'];
 $address = $_POST['address'];
 $GlassRighEyeDistanceSph=$_POST['GlassRighEyeDistanceSph'];
 $GlassRighEyeDistanceCyl=$_POST['GlassRighEyeDistanceCyl'];
 $GlassRighEyeDistanceAxis=$_POST['GlassRighEyeDistanceAxis'];
 $GlassRighEyeDistancePrism=$_POST['GlassRighEyeDistancePrism'];
 $GlassRighEyeDistanceBase=$_POST['GlassRighEyeDistanceBase'];
 $GlassRighEyeDistanceVA=$_POST['GlassRighEyeDistanceVA'];



 $GlassLeftEyeDistanceSph=$_POST['GlassLeftEyeDistanceSph'];
 $GlassLeftEyeDistanceCyl=$_POST['GlassLeftEyeDistanceCyl'];
 $GlassLeftEyeDistanceAxis=$_POST['GlassLeftEyeDistanceAxis'];
 $GlassLeftEyeDistancePrism=$_POST['GlassLeftEyeDistancePrism'];
 $GlassLeftEyeDistanceBase=$_POST['GlassLeftEyeDistanceBase'];
 $GlassLeftEyeDistanceVA=$_POST['GlassLeftEyeDistanceVA']; 


 $GlassRighEyeNearSph=$_POST['GlassRighEyeNearSph']; 
 $GlassRighEyeNearCyl=$_POST['GlassRighEyeNearCyl']; 
 $GlassRighEyeNearAxis=$_POST['GlassRighEyeNearAxis'];
 $GlassRighEyeNearPrism=$_POST['GlassRighEyeNearPrism'];
 $GlassRighEyeNearBase=$_POST['GlassRighEyeNearBase'];
 $GlassRighEyeNearVA=$_POST['GlassRighEyeNearVA']; 


 $GlassLeftEyeNearSph=$_POST['GlassLeftEyeNearSph']; 
 $GlassLeftEyeNearCyl=$_POST['GlassLeftEyeNearCyl']; 
 $GlassLeftEyeNearAxis=$_POST['GlassLeftEyeNearAxis'];
 $GlassLeftEyeNearPrism=$_POST['GlassLeftEyeNearPrism'];
 $GlassLeftEyeNearBase=$_POST['GlassLeftEyeNearBase'];
 $GlassLeftEyeNearVA=$_POST['GlassLeftEyeNearVA']; 


 $LensRightEyeBrand=$_POST['LensRightEyeBrand']; 
 $LensRightEyeBC=$_POST['LensRightEyeBC']; 
 $LensRightEyeDio=$_POST['LensRightEyeDio']; 
 $LensRightEyeSph=$_POST['LensRightEyeSph']; 
 $LensRightEyeCyl=$_POST['LensRightEyeCyl']; 
 $LensRightEyeAdd=$_POST['LensRightEyeAdd']; 
 $LensRightEyeTint=$_POST['LensRightEyeTint']; 
 $LensRightEyeOZ=$_POST['LensRightEyeOZ']; 
 $LensRightEyeVA=$_POST['LensRightEyeVA']; 



 $LensLeftEyeBrand=$_POST['LensLeftEyeBrand']; 
 $LensLeftEyeBC=$_POST['LensLeftEyeBC']; 
 $LensLeftEyeDio=$_POST['LensLeftEyeDio']; 
 $LensLeftEyeSph=$_POST['LensLeftEyeSph']; 
 $LensLeftEyeCyl=$_POST['LensLeftEyeCyl']; 
 $LensLeftEyeAdd=$_POST['LensLeftEyeAdd']; 
 $LensLeftEyeTint=$_POST['LensLeftEyeTint']; 
 $LensLeftEyeOZ=$_POST['LensLeftEyeOZ']; 
 $LensLeftEyeVA=$_POST['LensLeftEyeVA']; 
 $email = $_POST['email'];
 $phno = $_POST['phno'];
 $dateofbirth = $_POST['dateofbirth'];
 $Age = $_POST['Age'];
$dateofjoin = $_POST['dateofjoin'];


$customerProfileUpdateArray =array(
	"id"=>"$id",
	"customerName"=>"$customerName",
	"address"=>"$address",
	"GlassRighEyeDistanceSph"=>"$GlassRighEyeDistanceSph",
	"GlassRighEyeDistanceCyl"=>"$GlassRighEyeDistanceCyl",
	"GlassRighEyeDistanceAxis"=>"$GlassRighEyeDistanceAxis",
	"GlassRighEyeDistancePrism"=>"$GlassRighEyeDistancePrism",
	"GlassRighEyeDistanceBase"=>"$GlassRighEyeDistanceBase",
	"GlassRighEyeDistanceVA"=>"$GlassRighEyeDistanceVA",
	"GlassLeftEyeDistanceSph"=>"$GlassLeftEyeDistanceSph",
	"GlassLeftEyeDistanceCyl"=>"$GlassLeftEyeDistanceCyl",
	"GlassLeftEyeDistanceAxis"=>"$GlassLeftEyeDistanceAxis",
	"GlassLeftEyeDistancePrism"=>"$GlassLeftEyeDistancePrism",
	"GlassLeftEyeDistanceBase"=>"$GlassLeftEyeDistanceBase",
	"GlassLeftEyeDistanceVA"=>"$GlassLeftEyeDistanceVA",
	"GlassRighEyeNearSph"=>"$GlassRighEyeNearSph",
	"GlassRighEyeNearCyl"=>"$GlassRighEyeNearCyl",
	"GlassRighEyeNearAxis"=>"$GlassRighEyeNearAxis",
	"GlassRighEyeNearPrism"=>"$GlassRighEyeNearPrism",
	"GlassRighEyeNearBase"=>"$GlassRighEyeNearBase",
	"GlassRighEyeNearVA"=>"$GlassRighEyeNearVA",
	"GlassLeftEyeNearSph"=>"$GlassLeftEyeNearSph",
	"GlassLeftEyeNearCyl"=>"$GlassLeftEyeNearCyl",
	"GlassLeftEyeNearAxis"=>"$GlassLeftEyeNearAxis",
	"GlassLeftEyeNearPrism"=>"$GlassLeftEyeNearPrism",
	"GlassLeftEyeNearBase"=>"$GlassLeftEyeNearBase",
	"GlassLeftEyeNearVA"=>"$GlassLeftEyeNearVA",
	"LensRightEyeBrand"=>"$LensRightEyeBrand",
	"LensRightEyeBC"=>"$LensRightEyeBC",
	"LensRightEyeDio"=>"$LensRightEyeDio",
	"LensRightEyeSph"=>"$LensRightEyeSph",
	"LensRightEyeCyl"=>"$LensRightEyeCyl",
	"LensRightEyeAdd"=>"$LensRightEyeAdd",
	"LensRightEyeTint"=>"$LensRightEyeTint",
	"LensRightEyeOZ"=>"$LensRightEyeOZ",
	"LensRightEyeVA"=>"$LensRightEyeVA",
	"LensLeftEyeBrand"=>"$LensLeftEyeBrand",
	"LensLeftEyeBC"=>"$LensLeftEyeBC",
	"LensLeftEyeDio"=>"$LensLeftEyeDio",
	"LensLeftEyeSph"=>"$LensLeftEyeSph",
	"LensLeftEyeCyl"=>"$LensLeftEyeCyl",
	"LensLeftEyeAdd"=>"$LensLeftEyeAdd",
	"LensLeftEyeTint"=>"$LensLeftEyeTint",
	"LensLeftEyeOZ"=>"$LensLeftEyeOZ",
	"LensLeftEyeVA"=>"$LensLeftEyeVA",
	"phno"=>"$phno",
	"dateofbirth"=>"$dateofbirth",
	"Age"=>"$Age",
	"email"=>"$email",
	"dateofjoin"=>"$dateofjoin"
);

 $respboolean = $es->updateCustomerprofile($customerProfileUpdateArray);

if(isset($_POST['id'])){
$id = $_POST['id'];
$sql = "SELECT * from customerprofile  where id=$id";
$resp = $es->doStandaredQuery($sql);
}






}



?>
<div class="box-content">
						<form class="form-horizontal" action="profileedit.php" method="POST">
						  <fieldset>
							<legend>Customer Profile View</legend>


							
							<input type="hidden"    class="span6 typeahead" id="typeahead" value ="<?php echo $resp[0]['id'];?>"name='id'>

							<div class="control-group">
							  <label class="control-label" for="typeahead">CustomerName </label>
							  <div class="controls">
								<input type="text" value ="<?php echo $resp[0]['Name'];?>"  required class="span6 typeahead" id="typeahead" name='customerName'>
						
							  </div>
							</div>
							

							

							       
							<div class="control-group">
							  <label class="control-label" for="textarea2">Address</label>
							  <div class="controls">
								<input type="text" value ="<?php echo $resp[0]['address'];?>"  required class="span6 typeahead" id="typeahead"  name='address'>
			
							  </div>
							</div>




										
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Previous Glass Prescription</b>			
					<div class="box-content">
						<table class="table  table-bordered bootstrap-datatable ">
						  <thead>

						     <tr><td colspan=7><center><b>Right Eye</b></center></td>
                            <td colspan=7><center><b>Left Eye</b></center></td>
                                   </tr>
							  <tr>
							     <th></th>
								  <th>Sph</th>
								  <th>Cyl</th>
								  <th>Axis</th>
								  <th>Prism</th>
								  <th>Base</th>
								  <th>VA</th>
								    
								    <th></th>
								   <th>Sph</th>
								   <th>Cyl</th>
								  <th>Axis</th>
								  <th>Prism</th>
								  <th>Base</th>
								   <th>VA</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
							  <td><b>Distance</b></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeDistanceSph'];?>"  name="GlassRighEyeDistanceSph" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeDistanceCyl'];?>"  name="GlassRighEyeDistanceCyl" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeDistanceAxis'];?>"  name="GlassRighEyeDistanceAxis" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeDistancePrism'];?>"  name="GlassRighEyeDistancePrism" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeDistanceBase'];?>"  name="GlassRighEyeDistanceBase" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeDistanceVa'];?>"  name="GlassRighEyeDistanceVA" style="width:40px;"></td>

								 <td><b>Distance</b></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeDistancesph'];?>"  name="GlassLeftEyeDistanceSph" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeDistanceCyl'];?>"  name="GlassLeftEyeDistanceCyl" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeDistanceAxis'];?>"  name="GlassLeftEyeDistanceAxis" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeDistancePrism'];?>"  name="GlassLeftEyeDistancePrism" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeDistanceBase'];?>"  name="GlassLeftEyeDistanceBase" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeDistanceVA'];?>"  name="GlassLeftEyeDistanceVA" style="width:40px;"></td>
								
								
							</tr>

							<tr>
							  <td><b>Near</b></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeNearSph'];?>"  name="GlassRighEyeNearSph" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeNearCyl'];?>"  name="GlassRighEyeNearCyl" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeNearAxis'];?>"  name="GlassRighEyeNearAxis" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeNearPrism'];?>"  name="GlassRighEyeNearPrism" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeNearBase'];?>"  name="GlassRighEyeNearBase" style="width:40px;"></td>
GlassRighEyeNear
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeNearVA'];?>"  name="GlassRighEyeNearVA" style="width:40px;"></td>

								<td><b>Near</b></td>
                                <td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeNearSph'];?>"  name="GlassLeftEyeNearSph" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeNearCyl'];?>"  name="GlassLeftEyeNearCyl" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeNearAxis'];?>"  name="GlassLeftEyeNearAxis" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeNearPrism'];?>"  name="GlassLeftEyeNearPrism" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeNearBase'];?>"  name="GlassLeftEyeNearBase" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeNearVA'];?>"  name="GlassLeftEyeNearVA" style="width:40px;"></td>
								
								
							</tr>
							
						  </tbody>
					  </table>            
				
			</div><!--/row-->

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Previous contact Lens Details</b>

							<div class="box-content">
						<table class="table  table-bordered bootstrap-datatable ">
						  <thead>

						   
							  <tr>
							     <th></th>
								  <th>Brand</th>
								  <th>BC</th>
								  <th>Dio</th>
								  <th>Sph</th>
								  <th>Cyl</th>
								  <th>Add</th>
							       <th>Tint</th>
								   <th>OZ</th>
								  <th>VA</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
							<td>Right Eye</td>
							<td><input type="text" value ="<?php echo $resp[0]['LensRightEyeBrand'];?>"   name="LensRightEyeBrand" style="width:40px;"></td>
							<td><input type="text" value ="<?php echo $resp[0]['LensRightEyeBC'];?>"   name="LensRightEyeBC" style="width:40px;"></td>
							<td><input type="text" value ="<?php echo $resp[0]['LensRightEyeDio'];?>"   name="LensRightEyeDio" style="width:40px;"></td>
							<td><input type="text" value ="<?php echo $resp[0]['LensRightEyeSph'];?>"   name="LensRightEyeSph" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensRightEyeCyl'];?>"   name="LensRightEyeCyl" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensRightEyeAdd'];?>"   name="LensRightEyeAdd" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensRightEyeTint'];?>"   name="LensRightEyeTint" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensRightEyeOZ'];?>"   name="LensRightEyeOZ" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensRightEyeVA'];?>"   name="LensRightEyeVA" style="width:40px;"></td>

							</tr>
							 

							 	<tr>
							<td>Left Eye</td>
							<td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeBrand'];?>"   name="LensLeftEyeBrand" style="width:40px;"></td>
							<td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeBC'];?>"   name="LensLeftEyeBC" style="width:40px;"></td>
							<td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeDio'];?>"   name="LensLeftEyeDio" style="width:40px;"></td>
							<td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeSph'];?>"   name="LensLeftEyeSph" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeCyl'];?>"   name="LensLeftEyeCyl" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeAdd'];?>"   name="LensLeftEyeAdd" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeTint'];?>"   name="LensLeftEyeTint" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeOZ'];?>"   name="LensLeftEyeOZ" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeVA'];?>"   name="LensLeftEyeVA" style="width:40px;"></td>

							</tr>


							
						  </tbody>
					  </table>            
				
			</div><!--/row-->



							<div class="control-group">
							  <label class="control-label" for="typeahead"> Email</label>
							  <div class="controls">
								<input type="email"  required value ="<?php echo $resp[0]['email'];?>" class="span6 typeahead" id="typeahead" name='email'>
						
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Phone No </label>
							  <div class="controls">
								<input type="number"   required value ="<?php echo $resp[0]['phno'];?>" class="span6 typeahead" id="typeahead" name='phno'>
						
							  </div>
							</div>



						<div class="control-group">
							  <label class="control-label" for="date01">Date of Birth</label>
							  <div class="controls">
								<input type="text" value ="<?php echo $resp[0]['dateofbirth'];?>"  required class="input-xlarge datepicker" id="date01" name="dateofbirth" value="02/16/92">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Age</label>
							  <div class="controls">
								<input type="text" value ="<?php echo $resp[0]['Age'];?>"  readonly class="input-xlarge datepicker" id="Age" name="Age">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Date of Join</label>
							  <div class="controls">
								<input type="text" value ="<?php echo $resp[0]['dateofjoin'];?>"  required class="input-xlarge datepicker" id="date01" name="dateofjoin" value="<?php echo date("m/d/y");?>">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save </button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


			
			</div><!--/row-->
    
<?php include('footer.php'); ?>


<script >
	
	$( document ).ready(function() {

var calculateAge = function(birthday) {
    var now = new Date();
    var past = new Date(birthday);
    var nowYear = now.getFullYear();
    var pastYear = past.getFullYear();
    var age = nowYear - pastYear;

    return age;
};




$("#date01").change(function(){
  var val =$("#date01").val();

 

var formattedDate = new Date(val);
var d = formattedDate.getDate();
var m =  formattedDate.getMonth();
m += 1;  // JavaScript months are 0-11
var y = formattedDate.getFullYear();
var convertedDate=(y + "-" + m + "-" + d);
var age = calculateAge(convertedDate);

$("#Age").val(age);


});

});

</script>