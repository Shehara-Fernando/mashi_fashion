
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<ol class="breadcrumb mb-4 mt-2">
				<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
				<li class="breadcrumb-item active">User Management</li>
			</ol>
			<div class="text-right">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addUser">
					<i class="glyphicon glyphicon-plus"></i>
					Add User
				</button>
			</div>
			<div class="mt-4">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Gender</th>
							<th>Telephone </th>
							<th>Role</th>
							<th>Status</th>
							<th class="text-center" width="10%">Actions</th>
						</tr>
						<tbody>
						<?php foreach ($users as $user) {?>
							<tr>
								<td><?php echo $user->first_name." ".$user->last_name; ?></td>
								<td><?php echo $user->email; ?></td>
								<td><?php if ($user->gender == "female"){ echo "Female";}else{ echo "Male";}?></td>
								<td><?php echo  $user->telephone_number;  ?></td>
								<td><?php echo  $user->roles;  ?></td>
								<td class="text-center" >
									<?php if($user->status == 0) { ?>
										<span class="badge badge-secondary">Inactive</span>
									<?php } else { ?>
										<span class="badge badge-success">Active</span>
									<?php } ?>
								</td>
								<td class="text-center">
									<button type="button" class="btn btn-sm btn-secondary"> <i class="fas fa-pencil-alt"></i> </button>
									<?php if($user->status == 0) { ?>
										<button type="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
									<?php } elseif($user->status == 1) { ?>
										<button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times" ></i></button>
									<?php } ?>
								</td>
							</tr>
						<?php } ?>

						</tbody>
					</table>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="addUser">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New User</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form id="userform"action="<?php echo base_url('users/Users/add_users');?>" method="post" enctype="multipart/form-data">
							<div class="modal-body">

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="user_fname">First Name</label>
										<input type="text" class="form-control" name="first_name" id="first_name"  placeholder="Enter First Name"  data-validation="custom" data-validation-regexp="[A-Z]|[a-z]">
									</div>
									<div class="form-group col-md-6">
										<label for="user_lname">Last Name</label>
										<input type="text" class="form-control" name="last_name" id="last_name"  placeholder="Enter Last Name"  data-validation="custom" data-validation-regexp="[A-Z]|[a-z]">
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="user_email">Email</label>
										<input type="email" class="form-control" name="email" id="email" data-validation="email" placeholder="Enter User Email">
									</div>
									<div class="form-group col-md-6">
										<label for="user_tel">Telephone Number</label>
										<input type="tel" class="form-control" name="telephone" id="telephone"  placeholder="Enter Telephone Number" data-validation="length" data-validation-length="9-10">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="user_nic">NIC</label>
										<input type="text" class="form-control" name="nic" id="nic"  placeholder="Enter NIC Number" data-validation="custom" data-validation-regexp="[0-9]{9}[x|X|v|V]|[0-9]{11}[x|X|v|V]">
									</div>
									<div class="form-group col-md-6">
										<label for="role_id">User Role</label>
										<select name="role_id" id="role_id" class="form-control" data-validation="required">
											<option selected disabled>Select Role</option>
											<?php foreach ($roles as $role) { ?>
												<option value="<?php echo $role->id; ?>"><?php echo $role->name; ?></option>
											<?php } ?>
										</select>
									</div>

								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="province">Gender</label>
										<select id="gender" name="gender" class="form-control" data-validation="required">
											<option selected disabled>Select one</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
								</div>
							</div>

							<div class="modal-footer">
								<div class="text-right">
									<button type="reset" class="btn btn-secondary text-right">Reset</button>
									<button type="submit" class="btn btn-primary text-right">Create</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!--end modal-->

		</div>
	</main>



