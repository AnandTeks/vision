<?php include('header.php'); ?>

<?php

$id = $_GET['id'];

$sql = "SELECT * from customerprofile  where id=$id";
 $resp = $es->doStandaredQuery($sql);


?>
<div class="box-content">
						<form class="form-horizontal" action="customerprofile.php" method="POST">
						  <fieldset>
							<legend>Customer Profile View</legend>


							


							<div class="control-group">
							  <label class="control-label" for="typeahead">CustomerName </label>
							  <div class="controls">
								<input type="text" value ="<?php echo $resp[0]['Name'];?>" disabled required class="span6 typeahead" id="typeahead" value ="<?php echo $resp[0]['Name'];?>"name='customerName'>
						
							  </div>
							</div>
							

							

							       
							<div class="control-group">
							  <label class="control-label" for="textarea2">Address</label>
							  <div class="controls">
								<input type="text"  disabled required class="span6 typeahead" id="typeahead" value ="<?php echo $resp[0]['address'];?>"name='customerName'>
			
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
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeDistanceSph'];?>" disabled name="GlassRighEyeDistanceSph" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeDistanceCyl'];?>" disabled name="GlassRighEyeDistanceCyl" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeDistanceAxis'];?>" disabled name="GlassRighEyeDistanceAxis" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeDistancePrism'];?>" disabled name="GlassRighEyeDistancePrism" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeDistanceBase'];?>" disabled name="GlassRighEyeDistanceBase" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeDistanceVa'];?>" disabled name="GlassRighEyeDistanceVA" style="width:40px;"></td>

								 <td><b>Distance</b></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeDistancesph'];?>" disabled name="GlassLeftEyeDistanceSph" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeDistanceCyl'];?>" disabled name="GlassLeftEyeDistanceCyl" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeDistanceAxis'];?>" disabled name="GlassLeftEyeDistanceAxis" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeDistancePrism'];?>" disabled name="GlassLeftEyeDistancePrism" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeDistanceBase'];?>" disabled name="GlassLeftEyeDistanceBase" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeDistanceVA'];?>" disabled name="GlassLeftEyeDistanceVA" style="width:40px;"></td>
								
								
							</tr>

							<tr>
							  <td><b>Near</b></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeNearSph'];?>" disabled name="GlassRighEyeNearSph" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeNearCyl'];?>" disabled name="GlassRighEyeNearCyl" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeNearAxis'];?>" disabled name="GlassRighEyeNearAxis" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeNearPrism'];?>" disabled name="GlassRighEyeNearPrism" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeNearBase'];?>" disabled name="GlassRighEyeNearBase" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassRighEyeNearVA'];?>" disabled name="GlassRighEyeNearVA" style="width:40px;"></td>

								<td><b>Near</b></td>
                                <td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeNearSph'];?>" disabled name="GlassLeftEyeNearSph" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeNearCyl'];?>" disabled name="GlassLeftEyeNearCyl" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeNearAxis'];?>" disabled name="GlassLeftEyeNearAxis" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeNearPrism'];?>" disabled name="GlassLeftEyeNearPrism" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeNearBase'];?>" disabled name="GlassLeftEyeNearBase" style="width:40px;"></td>
								<td><input type="text" value ="<?php echo $resp[0]['GlassLeftEyeNearVA'];?>" disabled name="GlassLeftEyeNearVA" style="width:40px;"></td>
								
								
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
							<td><input type="text" value ="<?php echo $resp[0]['LensRightEyeBrand'];?>" disabled  name="LensRightEyeBrand" style="width:40px;"></td>
							<td><input type="text" value ="<?php echo $resp[0]['LensRightEyeBC'];?>" disabled  name="LensRightEyeBC" style="width:40px;"></td>
							<td><input type="text" value ="<?php echo $resp[0]['LensRightEyeDio'];?>" disabled  name="LensRightEyeDio" style="width:40px;"></td>
							<td><input type="text" value ="<?php echo $resp[0]['LensRightEyeSph'];?>" disabled  name="LensRightEyeSph" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensRightEyeCyl'];?>" disabled  name="LensRightEyeCyl" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensRightEyeAdd'];?>" disabled  name="LensRightEyeAdd" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensRightEyeTint'];?>" disabled  name="LensRightEyeTint" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensRightEyeOZ'];?>" disabled  name="LensRightEyeOZ" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensRightEyeVA'];?>" disabled  name="LensRightEyeVA" style="width:40px;"></td>

							</tr>
							 

							 	<tr>
							<td>Left Eye</td>
							<td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeBrand'];?>" disabled  name="LensLeftEyeBrand" style="width:40px;"></td>
							<td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeBC'];?>" disabled  name="LensLeftEyeBC" style="width:40px;"></td>
							<td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeDio'];?>" disabled  name="LensLeftEyeDio" style="width:40px;"></td>
							<td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeSph'];?>" disabled  name="LensLeftEyeSph" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeCyl'];?>" disabled  name="LensLeftEyeCyl" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeAdd'];?>" disabled  name="LensLeftEyeAdd" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeTint'];?>" disabled  name="LensLeftEyeTint" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeOZ'];?>" disabled  name="LensLeftEyeOZ" style="width:40px;"></td>
						    <td><input type="text" value ="<?php echo $resp[0]['LensLeftEyeVA'];?>" disabled  name="LensLeftEyeVA" style="width:40px;"></td>

							</tr>


							
						  </tbody>
					  </table>            
				
			</div><!--/row-->



							<div class="control-group">
							  <label class="control-label" for="typeahead"> Email</label>
							  <div class="controls">
								<input type="email" disabled required value ="<?php echo $resp[0]['email'];?>" class="span6 typeahead" id="typeahead" name='email'>
						
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Phone No </label>
							  <div class="controls">
								<input type="number"  disabled required value ="<?php echo $resp[0]['phno'];?>" class="span6 typeahead" id="typeahead" name='phno'>
						
							  </div>
							</div>



						<div class="control-group">
							  <label class="control-label" for="date01">Date of Birth</label>
							  <div class="controls">
								<input type="text" value ="<?php echo $resp[0]['dateofbirth'];?>" disabled required class="input-xlarge datepicker" id="date01" name="dateofbirth" value="02/16/92">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Age</label>
							  <div class="controls">
								<input type="text" value ="<?php echo $resp[0]['Age'];?>" disabled readonly class="input-xlarge datepicker" id="Age" name="Age">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Date of Join</label>
							  <div class="controls">
								<input type="text" value ="<?php echo $resp[0]['dateofjoin'];?>" disabled required class="input-xlarge datepicker" id="date01" name="dateofjoin" value="<?php echo date("m/d/y");?>">
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

