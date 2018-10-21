<html>
	<head>
		<title>Create users</title>
		<link rel="stylesheet" href="<?php echo base_url();?>vendor/css/bootstrap.min.css">
		<script src="<?php echo base_url(); ?>vendor/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>vendor/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<form class="form-horizontal">
				<div class="col-sm-6" style="border-bottom:solid 1px;"><b>Genral Info.</b></div><br/><br/>
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-sm-2 control-label">First Name</label>
						<div class="col-sm-6">
							<input type="email" class="form-control" id="" placeholder="First Name">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Last Name</label>
						<div class="col-sm-6">
							<input type="email" class="form-control" id="" placeholder="Last Name">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Photo</label>
						<div class="col-sm-6">
							<input type="file" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">signature</label>
						<div class="col-sm-6">
							<input type="file" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">DOB</label>
						<div class="col-sm-6">
							<input type="date" class="form-control" id="">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Cast</label>
						<div class="col-sm-6">
							<select class="form-control">
								<option value="0">Select Cast</option>
								<option value="gen">GENRAL</option>
								<option value="obc">OBC</option>
								<option value="st">ST</option>
								<option value="sc">SC</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Gender</label>
						<div class="col-sm-6">
							<select class="form-control">
								<option value="0">Select Gender</option>
								<option value="m">Male</option>
								<option value="f">Female</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Email Id</label>
						<div class="col-sm-6">
							<input type="email" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Contact No.</label>
						<div class="col-sm-6">
							<input type="email" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">DOB</label>
						<div class="col-sm-6">
							<input type="date" class="form-control" id="">
						</div>
						
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Address</label>
						<div class="col-sm-6">
							<textarea col="" rows="5" class="form-control"></textarea>
						</div>
					</div>
					<div class="col-sm-offset-2">
						<input type="submit" class="btn btn-info" value="submit">
						<input type="reset" class="btn btn-danger" value="Cancel">
					</div>
				</div>
			</form>
		</div>
	</body>
</html>


