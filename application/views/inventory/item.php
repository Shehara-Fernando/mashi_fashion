
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
<<<<<<< HEAD
                                <th >Item Code</th>
=======
                                <th>Item Code</th>
>>>>>>> origin/development
                                <th >Item Name</th>
                                <th> Item Category And Type</th>
                                <th>Item Price</th>
                                <th>Quantity</th>
                                <th>Units Of Measure</th>
								<th width="10%">Status</th>
                                <th class="text-center"width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php foreach ($items as $item) {?>
								<tr>
									<td><?php  echo $item->code; ?></td>
									<td> <?php echo $item->name; ?></td>
<<<<<<< HEAD
									<td><?php echo $item->category_id." ".$item->type_id; ?></td>
=======
									<td><?php echo $item->id." ".$item->id; ?></td>
>>>>>>> origin/development
									<td class="text-right"><?php echo $item->price; ?></td>
									<td class="text-right"><?php echo $item->quantity?></td>
									<td></td>
									<td>
										<?php if($item->status == 0) { ?>
											<span class="badge badge-secondary">Inactive</span>
										<?php } else { ?>
											<span class="badge badge-success">Active</span>
										<?php } ?>
									</td>
									<td class="text-center">
										<button type="button" class="btn btn-sm btn-secondary"> <i class="fas fa-pencil-alt"></i> </button>
<<<<<<< HEAD
										<?php  if ($item->status ==0){?>
										<button type="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
										<?php }elseif($item->status ==1){?>
=======
										<?php  if ($item->status ==1){?>
										<button type="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
										<?php }elseif($item->status ==0){?>
>>>>>>> origin/development
										<button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times" ></i></button>
										<?php } ?>
									</td>
								</tr>
							<?php } ?>

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
                                        <label for="category_id">Item Category </label>
                                        <select id="category_id" name="category_id" class="form-control" data-validation="required">
											<option selected disabled>Select one</option>
											<?php foreach ($categorys as $category){?>
											<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
											<?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="typeid">Item Type</label>

                                        <select id="typeid" name="type_id" class="form-control" data-validation="required">
                                            <option selected disabled>Select one</option>
											<?php foreach ($types as $type){?>
											<option value="<?php echo $type->id; ?>"><?php echo$type->name?></option>
											<?php } ?>
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
                                    <input type="file" name="item_image" id="item_image"  >
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

