
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">

			<ol class="breadcrumb mb-4 mt-2">
				<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>

				<li class="breadcrumb-item"><a href="<?php echo base_url('inventory/Categories')?>">Product Categories </a></li>
				<li class="breadcrumb-item active">Product Types</li>
			</ol>
			<div class="text-right">
				<p>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addTypes">
						<i class="glyphicon glyphicon-plus"></i>
						Add Types
					</button>
				</p>
			</div>

			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
					<tr>
						<th>Product Category</th>
						<th>Type Name </th>
						<th>Status</th>
						<th class="text-center">Action</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($types as $type) {?>
						<tr>
							<td><?php echo $type->categories ;?></td>
							<td><?php echo $type->name ;?></td>
							<td class="text-center" >
								<?php if($type->status == 0) { ?>
									<span class="badge badge-secondary">Inactive</span>
								<?php } else { ?>
									<span class="badge badge-success">Active</span>
								<?php } ?>
							</td>
							<td>
								<button type="button" class="btn btn-sm btn-secondary"> <i class="fas fa-pencil-alt"></i> </button>
								<?php if($type->status == 0) { ?>
									<button type="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
								<?php } elseif($type->status == 1) { ?>
									<button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times" ></i></button>
								<?php } ?>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="addTypes">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add New Types</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form id="typeform" action="<?php echo base_url('inventory/Types/add_type')?>"method="post" >
							<div class="form-group col-md-6">
								<div class="row">
									<div class="col-sm-12">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="is_sell" id="sell" value="1" data-validation="required">
											<label class="form-check-label" for="user_gender">
												Sell
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="is_sell" id="purchase" value="0"data-validation="required" >
											<label class="form-check-label" for="user_gender">
												Purchase
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="category"> Category  </label>
									<select  id="category_id" name="category_id" class="form-control" data-validation="required">
										<option selected disabled>Select One</option>
										<?php foreach ($categories as $category){?>
											<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
										<?php }?>
									</select>
								</div>

								<div class="form-group col-md-6">
									<label for="item_code"> Name </label>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter Category Name " data-validation="required">
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

	</main>
