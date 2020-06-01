
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<ol class="breadcrumb mb-4 mt-2">
				<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
				<li class="breadcrumb-item active">Supplier Management</li>
			</ol>
			<div class="text-right">
				<p>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addSupplier">
						<i class="glyphicon glyphicon-plus"></i>
						Add Supplier
					</button>
				</p>
			</div>

			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
					<tr>
						<th> Name</th>
						<th> Email</th>
						<th> Contact Number</th>
						<th>Status </th>
						<th class="text-center">Action</th>

					</tr>
					</thead>

					<tbody>
					<?php foreach ($suppliers as $supplier) {?>
					<td><?php echo $supplier->name; ?></td>
					<td><?php echo $supplier->email; ?></td>
					<td><?php echo $supplier->telephone;  ?></td>
					<td class="text-center">
						<?php if($supplier->status == 0) { ?>
							<span class="badge badge-secondary">Inactive</span>
						<?php } else { ?>
							<span class="badge badge-success">Active</span>
						<?php } ?>
					</td>
					<td class="text-center">
						<button type="button" class="btn btn-sm btn-secondary"> <i class="fas fa-pencil-alt"></i> </button></a>
						<?php if($supplier->status == 0) { ?>
							<button type="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
						<?php } elseif($supplier->status == 1) { ?>
							<button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times" ></i></button>
						<?php } ?>
					</td>
					</tbody>
					<?php } ?>
				</table>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="addSupplier">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Supplier</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form is="sup_form" action="<?php echo base_url('suppliers/Suppliers/add_supplier')?>" method="post">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="sup_name"> Name</label>
										<input type="text" class="form-control" name="name" id="name"  placeholder="Enter supplier name " data-validation="length" data-validation-length="10-100">

									</div>
									<div class="form-group col-md-6">
										<label for="sup_email"> Email </label>
										<input type="email" class="form-control" name="email" id="email"  placeholder="Enter supplier email" data-validation="email">

									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="sup_tel">Telephone Number</label>
										<input type="tel" class="form-control" name="telephone_number" id="telephone_number"  placeholder="Enter Telephone number" data-validation="length" data-validation-length="9-10">
									</div>
									<div class="form-group col-md-6">
										<label for="sup_address">Address </label>
										<input type="text" class="form-control" name="address" id="address"  placeholder="Enter Address" data-validation="required">
									</div>

								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="sup_tel">Address 2</label>
										<input type="text" class="form-control" name="address_two" id="address_two"  placeholder="Enter Address" >
									</div>
									<div class="form-group col-md-6">
										<label for="city">City</label>
										<select id="city_id" name="city_id" class="form-control" data-validation="required">
											<option selected disabled>Select one</option>
											<?php foreach ($cities as $city) {?>
												<option value="<?php echo $city->id; ?>"><?php echo $city->name_en; ?></option>
											<?php } ?>
										</select>

									</div>

								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="district">District</label>
										<select id="district_id" name="district_id" class="form-control" data-validation="required">
											<option selected disabled>Select one</option>
											<?php foreach ($districts as $district) {?>
												<option value="<?php echo $district->id; ?>"><?php echo $district->name_en?></option>
											<?php } ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="province">Province</label>
										<select id="province_id" name="province_id" class="form-control" data-validation="required" readonly="">
											<option selected disabled>Select one</option>
											<?php foreach ($provinces as $province) {?>
												<option value="<?php echo $province->id; ?>"><?php echo $province->name_en?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="modal-footer">
									<div class="text-right">
										<button type="reset" class="btn btn-secondary text-right">Reset</button>
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
	<script>
		$(document).ready(function () {

			var district_id = ''
			$('#district_id').change(function () {
				district_id  = $(this).val();
				$.ajax({
					type: 'post',
					url: base_url + 'suppliers/Suppliers/get_province',
					async: false,
					dataType: 'json',
					data: {'district_id' : district_id},
					success: function (response) {
						$('#province_id').children('option:not(:first)').remove();
						for (var i = 0; i<response.length; i++){
							$('#province_id').append('<option value="'+ response[i].id+'">'+response[i].name_en+'</option>')


						}
					},

				});
			})

		})
	</script>
