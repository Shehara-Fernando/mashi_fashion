
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <ol class="breadcrumb mb-4 mt-2">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('purchaseorders/Purchaseorders')?>">Purchase Order </a></li>
                    <li class="breadcrumb-item active">Create Purchase Order Management</li>
                </ol>
                <div class="card mb-4 mt-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Purchase Orders</div>
                    <div class="card-body">
                        <form id="addpo" action="" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-4 w-25">
                                <label >Supplier</label>
                                <select id="sup_id" name="sup_id" class="form-control" data-validation="required">
                                    <option selected disabled>Select One</option></select>
                            </div>
                        </div>
						<div class="form-row">
							<div class="form-group col-md-4 ">
								<label >Date</label>
								<input type="date" class="form-control" id="date">
						     </div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4 ">
								<label> Recieved Date</label>
								<input type="date" class="form-control" id="rec_date">
							</div>
						</div>
							<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
								<tr>
									<th>Products</th>
									<th>Quantity</th>
									<th>Units Of Measure</th>
									<th>Unit Price</th>
									<th>Total Price</th>
									<th class="text-center"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addPo">Add Row</button></th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								</td>
								</tbody>
							</table>
								<!-- Modal -->
								<div class="modal fade" id="addPo">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Add New Row</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<form id="itemform" action="<?php echo base_url('inventory/Inventory/add_item')?>"method="post">

													<div class="form-row">
														<div class="form-group col-md-6">
															<label for="typeid">Item Name</label>

															<select id="item_id" name="item_id" class="form-control" data-validation="required">
																<option selected disabled>Select One</option>
															</select>
														</div>
														<div class="form-group col-md-6">
															<label for="category">Item Category</label>
															<select id="category_id" name="category_id" class="form-control" data-validation="required">
																<option selected disabled>Select One</option>
															</select>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-md-6">
															<label for="item_type">Item Type</label>
															<select id="type_id" name="type_id" class="form-control" data-validation="required">
																<option selected disabled>Select One</option>
															</select>
														</div>
														<div class="form-group col-md-6 ">
															<label for="quantity">Quantity</label>
															<input type="text" class="form-control" name="quantity" id="qty" placeholder="Enter Quantity" data-validation="number" data-validation-allowing="range[1;100]">
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
								</div>
								<!--end modal-->
							</div>
							<div class="form-row">
								<div class="col col-md-6">

								</div>
								<div class="form-group col col-md-4 w-12 text-right">
									<label>Sub Total</label>
									<input type="text" class="form-control" id="disabledTextInput"placeholder="Disabled input">
								</div>
							</div>

                        </form>

                    </div>
                        <div class="text-right mt-4">
                            <button type="reset" class="btn btn-secondary text-right">Resset</button>
							<button type="submit" class="btn btn-primary text-right">Order</button>
                         </div>
                </div>
            </div>
        </main>

