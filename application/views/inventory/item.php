
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

						<th> Code</th>
						<th width="20%"> Name</th>
						<th>  Categories </th>
						<th>  Types</th>
						<th class="text-right"> Price</th>
						<th class="text-right">Quantity</th>
						<th width="5%">Status</th>
						<th class="text-center"width="10%">Action</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($items as $item) {?>
						<tr>
							<td><?php  echo $item->code; ?></td>
							<td> <?php echo $item->name; ?></td>
							<td><?php echo $item->categories; ?></td>
							<td><?php echo $item->types; ?></td>
							<td class="text-right"><?php echo $item->price; ?></td>
							<td class="text-right"><?php echo $item->quantity." ".$item->unit_measure?></td>
							<td>
								<?php if($item->status == 0) { ?>
									<span class="badge badge-secondary">Inactive</span>
								<?php } else { ?>
									<span class="badge badge-success">Active</span>
								<?php } ?>
							</td>
							<td class="text-center">
								<button type="button" class="btn btn-sm btn-secondary"> <i class="fas fa-pencil-alt"></i> </button>

								<?php  if ($item->status ==0){?>
									<button type="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
								<?php }elseif($item->status ==1){?>
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
							<form id="itemform" action="<?php echo base_url('inventory/Inventory/add_item')?>"method="post" enctype="multipart/form-data">
								<div class="form-group col-md-6">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_sell" value="1" data-validation="required">
												<label class="form-check-label" for="user_gender">
													Sell
												</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_sell" value="0" data-validation="required" >
												<label class="form-check-label" for="user_gender">
													Purchase
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix">&nbsp;</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="category_id">Item Category </label>
										<select id="category_id" name="category_id" class="form-control" data-validation="required">
											<option selected disabled>Select one</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="item_code">Item Code</label>
										<input type="text" class="form-control" name="code" id="code" readonly>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="typeid">Item Type</label>

										<select id="type_id" name="type_id" class="form-control" data-validation="required">
											<option selected disabled>Select one</option>

										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="item_name">Item Name</label>
										<input type="text" class="form-control" name="name" id="name"  placeholder="Enter Item Name"  data-validation="required" >
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="item_price">Item Price</label>
										<input type="text" class="form-control" name="price" id="price"  placeholder="Enter Item Price"data-validation="number" data-validation-allowing="float">
									</div>
									<div class="form-group col-md-6">
										<label for="quantity">Quantity</label>
										<input type="text" class="form-control" name="quantity" id="quantity" placeholder="Enter Quantity" data-validation="number" data-validation-allowing="range[1;100]">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="units_id">Units Of Measure</label>
										<select id="units_id" name="units_id" class="form-control" data-validation="required">
											<option selected disabled>Select one</option>
											<?php foreach ($units as $unit) { ?>
												<option value="<?php echo $unit->id; ?>"><?php echo $unit->unit; ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label>Image</label>
										<div class="input-group mb-3 ">
											<div class="custom-file">
												<label class="custom-file-label">Choose file</label>
												<input type="file" class="custom-file-input form-control"  id="item_image" name="item_image" data-validation="required">

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
	<script>
		// ajax to load the categories accordingly to the selected radio button
		$(document).ready(function() {
			var is_sell = ''
			$('input[type=radio][name=is_sell]').change(function() {
				if (this.value == 0) {
					is_sell = 0;
				}
				else if (this.value == 1) {
					is_sell = 1;
				}

				$.ajax({
					type: 'post',
					url: base_url + 'inventory/Inventory/get_categories',
					async: false,
					dataType: 'json',
					data: {'is_sell': is_sell},
					success: function (response) {
						$('#category_id').children('option:not(:first)').remove();
						for (var i = 0; i<response.length; i++){
							$('#category_id').append('<option value="'+ response[i].id+'">'+response[i].name+'</option>')

						}
					},
				});
				// ajax get the types according to the selected radio button
				$.ajax({
					type: 'post',
					url: base_url + 'inventory/Inventory/get_types',
					async: false,
					dataType: 'json',
					data: {'is_sell': is_sell},
					success: function (response) {
						$('#type_id').children('option:not(:first)').remove();
						for (var i = 0; i<response.length; i++){
							$('#type_id').append('<option value="'+ response[i].id+'">'+response[i].name+'</option>')

						}
					},
				});
			});
           // ajax to generate the code automatically
			var category_id =""
			$('#category_id').change(function () {
				category_id  = $(this).val();
				$.ajax({
					type: 'post',
					url: base_url + 'inventory/Inventory/generate_code',
					async: false,
					dataType: 'json',
					data: {'category_id' : category_id},
					success: function (response) {
						$('#code').val(response);

					}

				});
			})

		});
	</script>

