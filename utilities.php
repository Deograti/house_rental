<?php include('db_connect.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-10">
			<form action="" id="manage-house">
				<div class="card">
					<div class="card-header">
						    Utilities
				  	</div>
					<div class="card-body">
							<div class="form-group" id="msg"></div>
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Electricity bill</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
							<div class="form-group">
								<label class="control-label">Water bill</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
							<div class="form-group">
								<label class="control-label">Repair costs</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
							<form method="POST" action="" enctype="multipart/form-data">

                           <div class="form-group">
						   <label class="control-label">Contract</label>
                          <input class="form-control" type="file" name="Contract" value="" />

                       </div>

							

							
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
								<button class="btn btn-sm btn-default col-sm-3" type="reset" > Cancel</button>
							</div>
							