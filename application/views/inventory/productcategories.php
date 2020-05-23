
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<ol class="breadcrumb mb-4 mt-2">
				<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
				<li class="breadcrumb-item active"> Product Categories</li>
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
						<th>Category Name</th>
						<th>Status</th>
						<th class="text-center"width="10%">Action</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td></td>
						<td></td>
						<td>
							<button type="button" class="btn btn-sm btn-secondary"> <i class="fas fa-pencil-alt"></i> </button>
							<button type="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
							<button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times" ></i></button>
						</td>
					</tr>
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
							<form id="itemform" action="<?php echo base_url('inventory/Inventory/add_item')?>"method="post" enctype="multipart/form-data">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="item_code">Item Code</label>
										<input type="text" class="form-control" name="code" id="code"  placeholder="Enter Item Code " data-validation="required">
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

