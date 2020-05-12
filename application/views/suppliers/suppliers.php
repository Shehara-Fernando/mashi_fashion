
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <ol class="breadcrumb mb-4 mt-2">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Supplier Management</li>
            </ol>
            <div class="text-right">
                <p>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addSupplier">
                        <i class="glyphicon glyphicon-plus"></i>
                        Add Supplier
                    </button>
                </p>
            </div>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Supplier Name</th>
                                <th>Supplier Email</th>
                                <th>Supplier contact number</th>
                                <th class="text-center">Action</th>

                            </tr>
                            </thead>

                            <tbody>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-center">
								<button type="button" class="btn btn-sm btn-primary"> <i class="fas fa-pencil-alt"></i> </button></a>
								<button type="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
								<button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times" ></i></button>
							</td>
                            </tbody>
                        </table>
                    </div>
                   <!-- Modal -->
            <div class="modal fade" id="addSupplier">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Supplier</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="sup_name">Supplier Name</label>
                                    <input type="text" class="form-control" name="sup_name" id="sup_name"  placeholder="Enter supplier name " data-validation="length" data-validation-length="10-100">

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sup_email">Supplier Email </label>
                                    <input type="email" class="form-control" name="sup_email" id="sup_email"  placeholder="Enter supplier email" data-validation="email">

                                </div>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="sup_tel">Telephone Number</label>
                                        <input type="tel" class="form-control" name="sup_tel" id="sup_tel"  placeholder="Enter Telephone number"data-validation="length" data-validation-length="9-10">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sup_address">Address 1</label>

                                    <input type="text" class="form-control" name="sup_address" id="sup_address"  placeholder="Enter Address" data-validation="required">
                                </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="sup_tel">Address 2</label>
                                        <input type="text" class="form-control" name="sup_address" id="sup_address"  placeholder="Enter Address" data-validation="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="province">Province</label>
                                        <select id="pro_id" name="pro_id" class="form-control" data-validation="required">
                                            <option selected disabled>Select one</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="city">City</label>
                                        <select id="city_id" name="city_id" class="form-control" data-validation="required">
                                            <option selected disabled>Select one</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="country">Country</label>
                                        <select id="country_id" name="country_id" class="form-control"data-validation="required">
                                            <option selected disabled>Select one</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary text-right">Submit</button>
                                        <button type="reset" class="btn btn-danger text-right">Reset</button>
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

