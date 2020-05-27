
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <ol class="breadcrumb mb-4 mt-2">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('manufacturing/Manufacturing')?>">Manufacturing </a></li>
                    <li class="breadcrumb-item active">Create Manufacturing Ordert</li>
                </ol>
                  <div class="card mb-4 mt-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Manufacturing</div>
                    <div class="card-body">
                        <form id="moform" action="<?php echo base_url('manufacturing/CreateManufacturing/add_mo')?>" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-4 ">
                                <label >Mo Number</label>

                            </div>
                            <div class="form-group col-md-4 ">
                                <label >Date</label>
                                <input type="date" class="form-control" name="date" id="date" data-validation="required">
                            </div>
                        </div>
                        <div class="clearfix">&nbsp;</div>
							<div class="clearfix">&nbsp;</div>
							<div class="form-row">
								<div class="form-group col-md-2">
									<label>Material Category</label>
									<select id="mcat_id" name="mcat_id" class="form-control" data-validation="required">
										<option selected disabled>Select One</option>
									</select>
								</div>
								<div class="form-group col-md-2">
									<label>Material Type</label>
									<select id="mtype_id" name="mtype_id" class="form-control" data-validation="required">
										<option selected disabled>Select One</option>
									</select>
								</div>
								<div class="form-group col-md-2">
									<label>Quantity</label>
									<input type="text" id="quantity" name="quantity" class="form-control" data-validation="number" data-validation-allowing="range[1;100]">
								</div>
								<div class="form-group col-md-2">
									<label>Units Of Measure</label>
									<select id="unit_id" name="unit_id" class="form-control">
										<option selected disabled>Select One</option>
									</select>
								</div>
								<div class="form-group col-md-2">
									<label>Unit Price</label>
									<input type="text" id="unit_price" name="unit_price" class="form-control" data-validation="number">
								</div>
								<div class="form-group col-md-2">
									<label>Total Price</label>
									<input type="text" id="total_price" name="total_price"  class="form-control" data-validation="number">
								</div>
							</div>
						</form>
                    </div>
                             <div class="text-right mt-3-2">
								 <button type="reset" class="btn btn-danger text-right">Resset</button>
                                <button type="submit" class="btn btn-success text-right">Order</button>
                             </div>
                </div>
            </div>
        </main>
