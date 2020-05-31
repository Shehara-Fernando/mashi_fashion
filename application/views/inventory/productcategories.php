
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<ol class="breadcrumb mb-4 mt-2">
				<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
				<li class="breadcrumb-item active"> Product Categories</li>
			</ol>
			<div class="text-right">
				<p>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCategory">
						<i class="glyphicon glyphicon-plus"></i>
						Add Category
					</button>
				</p>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
					<tr>
						<th width="40%">Category Name</th>
						<th width="10%">Status</th>
						<th class="text-center"width="10%">Action</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($categories as $category) {?>
						<tr>
							<td><?php echo $category->name ; ?></td>
							<td class="text-center" >
								<?php if($category->status == 0) { ?>
									<span class="badge badge-secondary">Inactive</span>
								<?php } else { ?>
									<span class="badge badge-success">Active</span>
								<?php } ?>
							</td>
							<td>
								<button type="button" class="btn btn-sm btn-secondary"> <i class="fas fa-pencil-alt"></i> </button>
								<?php if($category->status == 0) { ?>
									<button type="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
								<?php } elseif($category->status == 1) { ?>
									<button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times" ></i></button>
								<?php } ?>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="addCategory">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Category</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="categoryform" action="<?php echo base_url('inventory/Categories/add_category')?>"method="post" enctype="multipart/form-data">
								<div class="form-row">
									<div class="form-group col-md-6">
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">Is Sell</label>
											<div class="col-sm-10">
												<select id="is_sell" name="is_sell" class="form-control" data-validation="required">
													<option selected disabled>Select one</option>
													<option value="1">Sell</option>
													<option value="0">Purchase</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group col-md-6">
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">Code</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="code" id="code"  placeholder="Enter Code " data-validation="required">
											</div>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="name" id="name"  placeholder="Enter Category Name " data-validation="required">
											</div>
										</div>
									</div>
								</div>

								<div class="modal-footer">
									<div class="text-right">
										<button type="reset" class="btn btn-secondary text-right">Resset</button>
										<button type="submit" class="btn btn-primary text-right">Create</button>
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

