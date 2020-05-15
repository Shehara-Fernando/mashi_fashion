
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
                            <div class="form-group col-md-4 text-right">
                                <label >Date</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                            <div class="form-group col-md-4 text-right">
                                <label > Recieved Date</label>
                                <input type="date" class="form-control" id="rec_date">
                            </div>
                        </div>
                        <div class="clearfix">&nbsp;</div>
						<div class="form-row">
							<div class="form-group col-md-2">
								<label>Products</label>
								<select id="item_id" name="item_id" class="form-control">
									<option selected disabled>Select One</option>
								</select>
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="form-group col-md-2">
								<label>Quantity</label>
								<input type="text" id="quantity" name="quantity" class="form-control">
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="form-group col-md-2">
								<label>Units Of Measure</label>
								<select id="unit_id" name="unit_id" class="form-control">
									<option selected disabled>Select One</option>
								</select>
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="form-group col-md-2">
								<label>Unit Price</label>
								<input type="text" id="unit_price" name="unit_price" class="form-control">
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="form-group col-md-2">
								<label>Total Price</label>
								<input type="text" id="quantity" name="quantity">
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

