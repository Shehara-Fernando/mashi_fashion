
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <ol class="breadcrumb mb-4 mt-2">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Customer Management</li>
                </ol>
            <div class="text-right">
                <p>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCustomer">
                        <i class="glyphicon glyphicon-plus"></i>
                        Add customer
                    </button>
                </p>
            </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>NIC</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th class="text-center" width="10%">Actions</th>
                            </tr>
                            </thead>
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
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
            <!-- Modal -->
            <div class="modal fade" id="addCustomer">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Customer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cus_name">First Name</label>
                                    <input type="text" class="form-control" name="cus_fname" id="cus_fname"  placeholder="Enter Customer First Name  ">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cus_nic">Last Name </label>
                                    <input type="text" class="form-control" name="cus_lname" id="cus_lname"  placeholder="Enter Customer Last Name ">
                                </div>
                                </div>
                                <div class="form-group">

                                </div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="cus_address">Address 1</label>
										<input type="text" class="form-control" name="cus_address" id="cus_address"  placeholder="Enter The Address">
									</div>
									<div class="form-group col-md-6">
										<label for="cus_address">Address 2</label>
										<input type="text" class="form-control" name="cus_address" id="cus_address"  placeholder="Enter Address">
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="province">Province</label>
										<select id="pro_id" name="pro_id" class="form-control">
											<option selected disabled>Select one</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="district">District</label>
										<select id="dis_id" name="dis_id" class="form-control">
											<option selected disabled>Select one</option>
										</select>
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="city">City</label>
										<select id="city_id" name="city_id" class="form-control">
											<option selected disabled>Select one</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="country">Country</label>
										<select id="country_id" name="country_id" class="form-control">
											<option selected disabled>Select one</option>
										</select>
									</div>
								</div>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cus_address">Customer Telephone</label>
                                    <input type="tel" class="form-control" name="cus_tel" id="cus_tel"  placeholder="Enter Telephone Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cus_email">Customer Email</label>
                                    <input type="email" class="form-control" name="cus_email" id="cus_email"  placeholder="Enter Email">
                                </div>
                                </div>

                                <div class="form-row">
									<div class="form-group col-md-6">
										<label for="cus_nic">NIC </label>
										<input type="text" class="form-control" name="cus_nic" id="cus_nic"  placeholder="Enter Customer NIC  ">
									</div>
								<div class="form-group col-md-6">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cus_gender" id="cus_gender" value="option1" checked>
                                            <label class="form-check-label" for="cus_gender">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cus_gender" id="cus_gender" value="option2">
                                            <label class="form-check-label" for="cus_gender">
                                                Female
                                            </label>
                                        </div>
                                    </div>
								</div>
								</div>
                                </div>
                                <div class="modal-footer">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary text-right">Submit</button>
                                        <button type="reset" class="btn btn-danger text-right">Resset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end modal-->
        </div>
    </main>

