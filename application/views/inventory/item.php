
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <ol class="breadcrumb mb- mt-2">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Item Management</li>
            </ol>
            <div class="text-right">
                <p>
                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addItem">
                        <i class="glyphicon glyphicon-plus"></i>
                        Add Item
                    </button>
                </p>
            </div>
              <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Item Code</th>
                                <th>Item Name</th>
                                <th> Item Type</th>
                                <th>Category</th>
                                <th class="text-center">Item Price</th>
                                <th>Quantity</th>
                                <th>Units Of Measure</th>
                                <th class="text-center"width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-right"></td>
                                    <td></td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-primary"> <i class="fas fa-pencil-alt"></i> </button></a>
										<button type="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times" ></i></button>
                                      </td>
                                </tr>
                               </td>
                            </tbody>
                        </table>
              </div>

            <!-- Modal -->
            <div class="modal fade" id="addItem">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Item</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="itemform" action="<?php echo base_url('inventory/Inventory/add_item')?>"method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="item_code">Item Code</label>
                                        <input type="text" class="form-control" name="item_code" id="itemcode"  placeholder="Enter Item Code " data-validation="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cat_id">Item Category </label>
                                        <select id="catid" name="cat_id" class="form-control" data-validation="required">
											<option selected disabled>Select one</option>
											<option>Saree</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="typeid">Item Type</label>

                                        <select id="typeid" name="type_id" class="form-control" data-validation="required">
                                            <option selected disabled>Select one</option>
											<option>Floral print</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="item_name">Item Name</label>
                                        <input type="text" class="form-control" name="item_name" id="itemname"  placeholder="Enter Item Name"  data-validation="required" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="item_price">Item Price</label>
                                        <input type="text" class="form-control" name="item_price" id="itemprice"  placeholder="Enter Item Price"data-validation="number" data-validation-allowing="float">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="quantity">Quantity</label>
                                        <input type="text" class="form-control" name="quantity" id="qty" placeholder="Enter Quantity" data-validation="number" data-validation-allowing="range[1;100]">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="item_image">Item Image</label>
                                    <input type="file" name="item_image" id="itemimage"  >
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
    </main>

