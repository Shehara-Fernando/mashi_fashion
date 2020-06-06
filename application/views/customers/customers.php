
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<ol class="breadcrumb mb-4 mt-2">
				<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
				<li class="breadcrumb-item active">Customer Management</li>
			</ol>
			<div class="text-right">
				<p>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCustomer">
						<i class="glyphicon glyphicon-plus"></i>
						Add customer
					</button>
				</p>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
					<tr>
						<th> Name</th>
						<th>NIC</th>
						<th>Gender</th>
						<th>Address</th>
						<th>Email</th>
						<th>Status</th>
						<th class="text-center" width="10%">Actions</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($customers as $customer) {?>
						<tr>
							<td><?php echo $customer->first_name." ".$customer->last_name ; ?></td>
							<td><?php echo $customer->nic ; ?></td>
							<td><?php echo $customer->gender ; ?></td>
							<td><?php echo $customer->address ; ?></td>
							<td><?php echo $customer->email ; ?></td>
							<td class="text-center" >
								<?php if($customer->status == 0) { ?>
									<span class="badge badge-secondary">Inactive</span>
								<?php } else { ?>
									<span class="badge badge-success">Active</span>
								<?php } ?>
							</td>
							<td class="text-center">
								<button type="button" class="btn btn-sm btn-primary"> <i class="fas fa-pencil-alt"></i> </button></a>
								<?php if($customer->status == 0) { ?>
									<button type="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
								<?php } elseif($customer->status == 1) { ?>
									<button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times" ></i></button>
								<?php } ?>
							</td>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="addCustomer">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Customer</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="addcustomer" action="<?php echo base_url('customers/Customer/add_customer')?>"  method="post"  >
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="cus_name">First Name</label>
										<input type="text" class="form-control" name="first_name" id="first_name"  placeholder="Enter Customer First Name  " data-validation="custom" data-validation-regexp="[A-Z]|[a-z]">
									</div>
									<div class="form-group col-md-6">
										<label for="cus_nic">Last Name </label>
										<input type="text" class="form-control" name="last_name" id="last_name"  placeholder="Enter Customer Last Name "  data-validation="custom" data-validation-regexp="[A-Z]|[a-z]">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="cus_email"> Email</label>
										<input type="email" class="form-control" name="email" id="email"  placeholder="Enter Email"data-validation="email">
									</div>
									<div class="form-group col-md-6">
										<label for="cus_nic">NIC </label>
										<input type="text" class="form-control" name="nic" id="nic"  placeholder="Enter Customer NIC  " data-validation="custom" data-validation-regexp="[0-9]{9}[x|X|v|V]|[0-9]{11}[x|X|v|V]">
									</div>
								</div>

								<div class="form-row">

									<div class="form-group col-md-6">
										<label for="cus_address"> Telephone</label>
										<input type="tel" class="form-control" name="telephone" id="telephone"  placeholder="Enter Telephone Number"  data-validation="length"data-validation-length="9-10">
									</div>
									<div class="form-group col-md-6">
										<label for="cus_address">Address </label>
										<input type="text" class="form-control" name="address" id="address"  placeholder="Enter The Address" data-validation="required">
									</div>

								</div>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="cus_address">Address 2</label>
										<input type="text" class="form-control" name="address_two" id="address_two"  placeholder="Enter Address">
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
										<label for="city">Postal Code</label>
										<input type="text" name="postcode" id="postcode" disabled class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="district">District</label>
										<select id="district_id" name="district_id" class="form-control" data-validation="required">
											<option selected disabled>Select one</option>
											<?php foreach ($districts as $district) {?>
												<option value="<?php echo $district->id; ?>"><?php echo $district->name_en?></option>
											<?php } ?>
										</select>
									</div>

								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="province">Province</label>
										<input type="text" id="province_id" name="province_id" class="form-control" disabled>
									</div>
									<div class="form-group col-md-6">
										<label for="province">Gender</label>
										<select id="gender" name="gender" class="form-control" data-validation="required">
											<option selected disabled>Select one</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
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
					url: base_url + 'customers/Customer/get_province',
					async: false,
					dataType: 'json',
					data: {'district_id' : district_id},
					success: function (response) {
						$('#province_id').val(response[0].provinces);



					},

				});
			})
			var city_id =""
			$('#city_id').change(function () {
				city_id  = $(this).val();
				$.ajax({
					type: 'post',
					url: base_url + 'customers/Customer/get_postcode',
					async: false,
					dataType: 'json',
					data: {'city_id' : city_id},
					success: function (response) {
						$('#postcode').val(response[0].postcode);


					}

				});
			})
			var city_id =""
			$('#city_id').change(function () {
				city_id  = $(this).val();
				$.ajax({
					type: 'post',
					url: base_url + 'suppliers/Suppliers/get_district',
					async: false,
					dataType: 'json',
					data: {'city_id' : city_id},
					success: function (response) {
						$('#district_id').val(response[0].districts);


					}

				});
			})


		})
	</script>

