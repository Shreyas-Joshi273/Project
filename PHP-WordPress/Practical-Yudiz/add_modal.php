<!-- Add New -->

<!--Main Container Start-->

<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           
            <!--Header Container Start-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <!--Header Container End-->

            <!--Body Container Start-->
            <div class="modal-body">
			<div class="container-fluid">

			<form method="POST" action="add.php">

                <!--Form Sub Containers Start-->

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Fullname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fullname" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="email" required>
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
						<select name="country" id="country">
							<option value="india">India</option>
							<option value="usa">USA</option>
							<option value="uk">UK</option>
							<option value="canada">Canada</option>
							<option value="australia">Australia</option>
						</select>
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<textarea name="address" id="address" cols="30" rows="4"></textarea>
				</div>

                <!--Form Sub Containers End-->

            </div>
			</div> 

            <!--Body Container End-->

            <!--Footer Container Start-->

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel
                </button>

                <button type="submit" name="add" class="btn btn-primary">
                	<span class="glyphicon glyphicon-floppy-disk"></span> Save</a>

			    </form>
            </div>

            <!--Footer Container End-->

        </div>
    </div>

    <!--Main Container End-->

</div>

