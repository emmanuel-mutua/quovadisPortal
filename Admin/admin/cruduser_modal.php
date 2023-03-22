<!-- Add User -->
<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New User</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form>
				<div class="form-group input-group">
					<span class="input-group-addon" style="width:150px;">First Name:</span>
					<input type="text" style="width:350px;" class="form-control" id="ufirstname" required>
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon" style="width:150px;">Last Name:</span>
					<input type="text" style="width:350px;" class="form-control" id="ulastname" required>
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon" style="width:150px;">ID Number:</span>
					<input type="text" style="width:350px;" class="form-control" id="uidno" required>
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon" style="width:150px;">Institution:</span>
					<input type="text" style="width:350px;" class="form-control" id="uinstitution" required>
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon" style="width:150px;">Date of Birth:</span>
					<input type="date" style="width:350px;" class="form-control" id="udateofbirth" required>
				</div>

				<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Gender:</span>
						<select style="width:350px;" class="form-control" id="Gender">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>

				<div class="form-group input-group">
					<span class="input-group-addon" style="width:150px;">Home County:</span>
					<input type="text" style="width:350px;" class="form-control" id="uhomecounty" required>
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon" style="width:150px;">Phone Number:</span>
					<input type="text" style="width:350px;" class="form-control" id="uphonenumber" required>
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon" style="width:150px;">Password:</span>
					<input type="password" style="width:350px;" class="form-control" id="upassword" required>
				</div>
				
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Access:</span>
						<select style="width:350px;" class="form-control" id="uaccess">
							<option value="2">User</option>
							<option value="1">Admin</option>
						</select>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" class="btn btn-primary" id="adduser"><span class="glyphicon glyphicon-check"></span> Add</button>
				</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

<!-- Delete User -->
    <div class="modal fade" id="delete_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Deleting User...</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<h3><center>Are you sure?</center></h3>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete"><span class="glyphicon glyphicon-check"></span> Delete</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

<!-- Edit User -->
<div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit User</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">First Name:</span>
						<input type="text" style="width:350px;" class="form-control" id="user_fname">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Last Name:</span>
						<input type="text" style="width:350px;" class="form-control" id="user_lname">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Institution:</span>
						<input type="text" style="width:350px;" class="form-control" id="user_institution">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Phone Number:</span>
						<input type="text" style="width:350px;" class="form-control" id="user_phonenumber">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">New Password:</span>
						<input type="password" style="width:350px;" class="form-control" id="user_pass">
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" class="btn btn-success" id="confirm_update"><span class="glyphicon glyphicon-check"></span> Update</button>
				
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

<!-- /.modal -->

