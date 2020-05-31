
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<ol class="breadcrumb mb-4 mt-2">
				<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
				<li class="breadcrumb-item active"> Product Categories</li>
			</ol>
			<div class="text-right">
				<p>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addunits">
						<i class="glyphicon glyphicon-plus"></i>
						Add New Units
					</button>
				</p>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
					<tr>
						<th width="40%">Units Name</th>
						<th>Unit</th>
						<th width="10%">Status</th>
						<th class="text-center"width="10%">Action</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($units as $unit) {?>
						<tr>
							<td><?php echo $unit->name ; ?></td>
							<td><?php echo  $unit->unit ;?> </td>
							<td class="text-center" >
								<?php if($unit->status == 0) { ?>
									<span class="badge badge-secondary">Inactive</span>
								<?php } else { ?>
									<span class="badge badge-success">Active</span>
								<?php } ?>
							</td>
							<td>
								<button type="button" class="btn btn-sm btn-secondary"> <i class="fas fa-pencil-alt"></i> </button>
								<?php if($unit->status == 0) { ?>
									<button type="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
								<?php } elseif($unit->status == 1) { ?>
									<button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times" ></i></button>
								<?php } ?>
							</td>
						</tr>
					<?php  } ?>
					</tbody>
				</table>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="addunits">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Units</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="categoryform" action="<?php echo base_url('inventory/Unitsmeasure/add_units')?>"method="post" enctype="multipart/form-data">
								<div class="form-row">

									<div class="form-group col-md-6">
										<label for="item_code"> Name </label>
										<input type="text" class="form-control" name="name" id="name"  placeholder="Enter Unit Name " data-validation="required">
									</div>
									<div class="form-group col-md-6">
										<label for="item_code"> Unit </label>
										<input type="text" class="form-control" name="unit" id="unit"  placeholder="Enter Unit Name " data-validation="required">
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

