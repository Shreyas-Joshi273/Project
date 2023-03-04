<!-- Edit -->

<!--Main Edit Container Start-->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit User</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">

            <!--Form Sub Containers Start-->

				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Fullname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fullname" value="<?php echo $row['fullname']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Gender:</label>
					</div>
					<div class="col-sm-10">
						<input type="radio" id="gender" name="gender" value="Male">Male
						<input type="radio" id="gender" name="gender" value="Female">Female
					</div>
					</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Hobbies:</label>
					</div>
					<div class="col-sm-10">
						<input type="checkbox" id="hobbies" name="hobbies" value="Music" class="form-control" name="hobbies" value="<?php echo $row['hobbies']; ?>">
						<label for="hobbies">Music</label><br>
						<input type="checkbox" id="hobbies" name="hobbies" value="Acting" class="form-control" name="hobbies" value="<?php echo $row['hobbies']; ?>">
						<label for="hobbies">Acting</label><br>
						<input type="checkbox" id="hobbies" name="hobbies" value="Singing" class="form-control" name="hobbies" value="<?php echo $row['hobbies']; ?>">
						<label for="hobbies">Singing</label><br>
						<input type="checkbox" id="hobbies" name="hobbies" value="Dancing" class="form-control" name="hobbies" value="<?php echo $row['hobbies']; ?>">
						<label for="hobbies">Dancing</label>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Country:</label>
					</div>
					<div class="col-sm-10">
						<select name="country" id="country" value="<?php echo $row['country']; ?>">
							<option value="india">India</option>
							<option value="india">USA</option>
							<option value="india">UK</option>
							<option value="india">Canada</option>
							<option value="india">Australia</option>
						</select>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<textarea name="address" id="address" cols="30" rows="4" value="<?php echo $row['address']; ?>"></textarea>
					</div>
				</div>

            <!--Form Sub Containers End-->

            </div>
			</div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>

    <!--Main Edit Container End-->

</div>

<!-- Delete -->

    <!--Delete Container Start-->

<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete User</h4></center>
            </div>
            <div class="modal-body">
            	<p class="text-center">Are you sure you want to Delete.?</p>
				<h2 class="text-center"><?php echo $row['fullname'].' '.$row['email']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>

<!--Delete Container End-->

</div>
