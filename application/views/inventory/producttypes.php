
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">

			<ol class="breadcrumb mb-4 mt-2">
				<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>

				<li class="breadcrumb-item"><a href="<?php echo base_url('inventory/Categories')?>">Product Categories </a></li>
				<li class="breadcrumb-item active">Product Types</li>
			</ol>

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
					<tr>
						<td></td>
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
		</div>

	</main>
