<?php include('header.php'); ?>



<?php 


if(isset($_POST['productType']))
{

     $productType = $_POST['productType'];
     $modelName = $_POST['modelName'];
     $productqty = $_POST['productqty'];
     $Price = $_POST['Price'];



     $productDetails =array("productType"=>"$productType","modelName"=>"$modelName","productqty"=>"$productqty","Price"=>"$Price");
     

     $respboolean = $es->addproduct($productDetails);

}



?>
			
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Product Stock Maintenance</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="stockMaintance.php" method="POST">
						  <fieldset>
							<legend>Add Product</legend>

							<?php if(@$respboolean){?>
					<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Product Added SucessFully !!!
						</div>
					<?php }?>



                <div class="control-group">
								<label class="control-label" for="selectError">Product Type</label>
								<div class="controls">
								  <select id="selectError" name="productType">
								  <option>Frame</option>
									<option>Lense</option>
									
								  </select>
								</div>
							  </div>



							<div class="control-group">
							  <label class="control-label" for="typeahead">Model Name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name='modelName'>
						
							  </div>
							</div>
							

							

									<div class="control-group">
							  <label class="control-label" for="typeahead">QTY</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name='productqty'>
						
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="typeahead">Price</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name='Price'>
						
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
