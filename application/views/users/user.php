
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
                            <th>User Code</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th class="text-center" width="10%">Actions</th>
                        </tr>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
							<td class="text-center">
								<button type="button" class="btn btn-sm btn-primary"> <i class="fas fa-pencil-alt"></i> </button></a>
								<button type="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
								<button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times" ></i></button>
							</td>
                        </tr>
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
                        <form id="userform"action="<?php echo base_url('users/Users/add_users');?>" method="post">
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="user_fname">First Name</label>
                                        <input type="text" class="form-control" name="user_fname" id="userfname"  placeholder="Enter First Name" data-validation="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="user_lname">Last Name</label>
                                        <input type="text" class="form-control" name="user_lname" id="userlname"  placeholder="Enter Last Name" data-validation="required">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="user_email">Email</label>
                                        <input type="email" class="form-control" name="user_email" id="user_email" data-validation="email" placeholder="Enter User Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="user_tel">Telephone Number</label>
                                        <input type="tel" class="form-control" name="user_tel" id="usertel"  placeholder="Enter Telephone Number" data-validation="length" data-validation-length="9-10">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="user_nic">NIC</label>
                                        <input type="text" class="form-control" name="user_nic" id="usernic"  placeholder="Enter NIC Number" data-validation="custom" data-validation-regexp="[0-9]{9}[x|X|v|V]|[0-9]{11}[x|X|v|V]">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="role_id">User Role</label>
                                        <select name="role_id" id="roleid" class="form-control" data-validation="required">
											<option selected disabled>Admin</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="user_image">User Image</label>
                                        <input type="file" name="user_image" id="userimage" class="form-control" data-validation="required">
                                    </div>
									<div class="form-group col-md-6">
										<div class="row">
											<legend class="col-form-label col-sm-2 pt-0">Gender</legend>
											<div class="col-sm-10">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="user_gender" id="usergender" value="male" data-validation="required">
													<label class="form-check-label" for="user_gender">
														Male
													</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio" name="user_gender" id="usergender" value="female"data-validation="required" >
													<label class="form-check-label" for="user_gender">
														Female
													</label>
												</div>
											</div>
										</div>
									</div>
                                </div>

                                <div class="modal-footer">
                                    <div class="text-right">
										<button type="reset" class="btn btn-secondary text-right">Resset</button>
										<button type="submit" class="btn btn-primary text-right">Submit</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--end modal-->

        </div>
    </main>



