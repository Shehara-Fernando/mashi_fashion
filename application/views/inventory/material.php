
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <ol class="breadcrumb mb-4 mt-2">
                <li class="breadcrumb-item"><a href="<?php echo  base_url('dashboard')?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Material Management</li>
            </ol>
            <div class="text-right">
                <p>
                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addMaterial">
                        <i class="glyphicon glyphicon-plus"></i>
                        Add Material
                    </button>
                </p>
            </div>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>

                            <tr>
                                <th>Material Code</th>
                                <th class="text-center">Material Name</th>
                                <th> Material Category and Type</th>
                                <th>Quantity</th>
								<th>Status</th>
                                <th class="text-center"width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php foreach ($materials as $material) { ?>
                             <tr>
                                 <td><?php echo $material->code; ?></td>
                                 <td class="text-center"><?php echo $material->name; ?></td>
                                 <td><?php echo $material->mcat_id." ".$material->mtype_id; ?></td>
                                 <td><?php echo $material->quantity?></td>
                                 <td>
									 <?php if($material->status == 0) { ?>
										 <span class="badge badge-secondary">Inactive</span>
									 <?php } else { ?>
										 <span class="badge badge-success">Active</span>
									 <?php } ?>
								 </td>
								 <td class="text-center">
									 <button type="button" class="btn btn-sm btn-secondary"> <i class="fas fa-pencil-alt"></i> </button></a>
									 <?php if ($material->status == 1) {?>
									 <button type="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
									 <?php }elseif ($material->status == 0){?>
									 <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times" ></i></button>
									 <?php } ?>
								 </td>
                                </tr>
							<?php } ?>

                            </tbody>
                        </table>
                    </div>
                <!-- Modal -->
            <div class="modal fade" id="addMaterial">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Material</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="materialform" action="<?php echo base_url('inventory/Materials/add_materials')?>" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="mat_code">Material Code</label>
                                        <input type="text" class="form-control" name="mat_code" id="mat_code"  placeholder="Enter Material Code "data-validation="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="mcat_id">Material Category </label>
                                        <select id="mcat_id" name="mcat_id" class="form-control" data-validation="required">
											<option selected disabled>Select one</option>
											<?php foreach ($categories as $category) {?>
											<option value="<?php echo $category->mcat_id;  ?>"><?php echo $category->mcat_name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="mtype_id">Material Type</label>
                                        <select id="mtype_id" name="mtype_id" class="form-control" data-validation="required">
											<option selected disabled >Select One</option>
											<?php foreach ($types as $type) {?>
											<option value="<?php echo $type->mtype_id; ?>"><?php echo $type->mtype_name; ?></option>
											<?php }?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="mat_name">Material Name</label>
                                        <input type="text" class="form-control" name="mat_name" id="mat_name"  placeholder="Enter Material Name"  data-validation="required" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="quantity">Quantity</label>
                                        <input type="text" class="form-control" name="quantity" id="quantity"  placeholder="Enter Quanity" data-validation="number"data-validation-allowing="range[1;100]">
                                    </div>
                                    <div class="form-group col-md-6">
										<label for="user_image">Material Image</label>
										<input type="file" name="mat_image" id="mat_image">
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
    </main>
