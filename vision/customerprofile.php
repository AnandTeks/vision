<?php 
session_start();
if(isset($_SESSION["login"])){
include('header.php'); 

?>


		<?php
if(isset($_POST['customerName'])){

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


$customerProfileArray =array("customerName"=>"$customerName",
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


 $respboolean = $es->addCustomerprofile($customerProfileArray);
 

}

		
		?>	
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Customer Profile Entry Form</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="customerprofile.php" method="POST">
						  <fieldset>
							<legend>Customer Details</legend>


							<?php if(@$respboolean){?>
					<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Customer Profile Added SucessFully !!!
						</div>
					<?php }?>



							<div class="control-group">
							  <label class="control-label" for="typeahead">CustomerName </label>
							  <div class="controls">
								<input type="text" required class="span6 typeahead" id="typeahead" name='customerName'>
						
							  </div>
							</div>
							

							

							       
							<div class="control-group">
							  <label class="control-label" for="textarea2">Address</label>
							  <div class="controls">
								<textarea class="autogrow" required   name="address"></textarea>
			
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
								<td><input type="text" name="GlassRighEyeDistanceSph" style="width:40px;"></td>
								<td><input type="text" name="GlassRighEyeDistanceCyl" style="width:40px;"></td>
								<td><input type="text" name="GlassRighEyeDistanceAxis" style="width:40px;"></td>
								<td><input type="text" name="GlassRighEyeDistancePrism" style="width:40px;"></td>
								<td><input type="text" name="GlassRighEyeDistanceBase" style="width:40px;"></td>
								<td><input type="text" name="GlassRighEyeDistanceVA" style="width:40px;"></td>

								 <td><b>Distance</b></td>
								<td><input type="text" name="GlassLeftEyeDistanceSph" style="width:40px;"></td>
								<td><input type="text" name="GlassLeftEyeDistanceCyl" style="width:40px;"></td>
								<td><input type="text" name="GlassLeftEyeDistanceAxis" style="width:40px;"></td>
								<td><input type="text" name="GlassLeftEyeDistancePrism" style="width:40px;"></td>
								<td><input type="text" name="GlassLeftEyeDistanceBase" style="width:40px;"></td>
								<td><input type="text" name="GlassLeftEyeDistanceVA" style="width:40px;"></td>
								
								
							</tr>

							<tr>
							  <td><b>Near</b></td>
								<td><input type="text" name="GlassRighEyeNearSph" style="width:40px;"></td>
								<td><input type="text" name="GlassRighEyeNearCyl" style="width:40px;"></td>
								<td><input type="text" name="GlassRighEyeNearAxis" style="width:40px;"></td>
								<td><input type="text" name="GlassRighEyeNearPrism" style="width:40px;"></td>
								<td><input type="text" name="GlassRighEyeNearBase" style="width:40px;"></td>
								<td><input type="text" name="GlassRighEyeNearVA" style="width:40px;"></td>

								<td><b>Near</b></td>
								<td><input type="text" name="GlassLeftEyeNearSph" style="width:40px;"></td>
								<td><input type="text" name="GlassLeftEyeNearCyl" style="width:40px;"></td>
								<td><input type="text" name="GlassLeftEyeNearAxis" style="width:40px;"></td>
								<td><input type="text" name="GlassLeftEyeNearPrism" style="width:40px;"></td>
								<td><input type="text" name="GlassLeftEyeNearBase" style="width:40px;"></td>
								<td><input type="text" name="GlassLeftEyeNearVA" style="width:40px;"></td>
								
								
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
							<td><input type="text"  name="LensRightEyeBrand" style="width:40px;"></td>
							<td><input type="text"  name="LensRightEyeBC" style="width:40px;"></td>
							<td><input type="text"  name="LensRightEyeDio" style="width:40px;"></td>
							<td><input type="text"  name="LensRightEyeSph" style="width:40px;"></td>
						    <td><input type="text"  name="LensRightEyeCyl" style="width:40px;"></td>
						    <td><input type="text"  name="LensRightEyeAdd" style="width:40px;"></td>
						    <td><input type="text"  name="LensRightEyeTint" style="width:40px;"></td>
						    <td><input type="text"  name="LensRightEyeOZ" style="width:40px;"></td>
						    <td><input type="text"  name="LensRightEyeVA" style="width:40px;"></td>

							</tr>
							 

							 	<tr>
							<td>Left Eye</td>
							<td><input type="text"  name="LensLeftEyeBrand" style="width:40px;"></td>
							<td><input type="text"  name="LensLeftEyeBC" style="width:40px;"></td>
							<td><input type="text"  name="LensLeftEyeDio" style="width:40px;"></td>
							<td><input type="text"  name="LensLeftEyeSph" style="width:40px;"></td>
						    <td><input type="text"  name="LensLeftEyeCyl" style="width:40px;"></td>
						    <td><input type="text"  name="LensLeftEyeAdd" style="width:40px;"></td>
						    <td><input type="text"  name="LensLeftEyeTint" style="width:40px;"></td>
						    <td><input type="text"  name="LensLeftEyeOZ" style="width:40px;"></td>
						    <td><input type="text"  name="LensLeftEyeVA" style="width:40px;"></td>

							</tr>


							
						  </tbody>
					  </table>            
				
			</div><!--/row-->



							<div class="control-group">
							  <label class="control-label" for="typeahead"> Email</label>
							  <div class="controls">
								<input type="email" required class="span6 typeahead" id="typeahead" name='email'>
						
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Phone No </label>
							  <div class="controls">
								<input type="number"  required class="span6 typeahead" id="typeahead" name='phno'>
						
							  </div>
							</div>



						<div class="control-group">
							  <label class="control-label" for="date01">Date of Birth</label>
							  <div class="controls">
								<input type="text" required class="input-xlarge datepicker" id="date01" name="dateofbirth" value="02/16/92">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Age</label>
							  <div class="controls">
								<input type="text" readonly class="input-xlarge datepicker" id="Age" name="Age">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Date of Join</label>
							  <div class="controls">
								<input type="text" required class="input-xlarge datepicker" id="date01" name="dateofjoin" value="<?php echo date("m/d/y");?>">
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
    <?php

}else
{
	header('Location:login.php');
}

 include('footer.php'); ?>


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