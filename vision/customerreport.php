<?php 
session_start();
if(isset($_SESSION["login"])){
include('header.php'); 

?>


<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>


					
					<div class="box-content">
						<form class="form-horizontal" action="report2.php" method="POST" >
						  <fieldset>
						
							
							<div class="control-group">
							  <label class="control-label" for="date01">From Date</label>
							  <div class="controls">
								<input type="text" name="fromDate" class="input-xlarge datepicker" id="date01" value="<?php echo date("m/d/y");?>">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">To Date</label>
							  <div class="controls">
								<input type="text" name="toDate" class="input-xlarge datepicker" id="date0" value="<?php echo date("m/d/y");?>">
							  </div>
							</div>

							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">check</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

    
<?php

}else
{
	header('Location:login.php');
}

 include('footer.php'); ?>

