
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <ol class="breadcrumb mb-4 mt-2">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('purchaseorders/Purchaseorders')?>">Purchase Order </a></li>
                    <li class="breadcrumb-item active">Create Purchase Order Management</li>
                </ol>
                <div class="card mb-4 mt-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Purchase Orders</div>
                    <div class="card-body">
                        <form>
                        <div class="form-row">
                            <div class="form-group col-md-4 w-25">
                                <label >Supplier</label>
                                <select id="sup_id" name="sup_id" class="form-control" data-validation="required">
                                    <option selected disabled>Select one</option></select>
                            </div>
                            <div class="form-group col-md-4 text-right">
                                <label >Date</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                            <div class="form-group col-md-4 text-right">
                                <label > Recieved Date</label>
                                <input type="date" class="form-control" id="rec_date">
                            </div>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                        <div class="table-responsive">
                        <table style="width:100%" border-collapse="collapse" class="table table-bordered">
                                <tr>
                                    <th>Build of items</th>
                                    <th>Item type</th>
                                    <th>Quantity</th>
                                    <th>Units of Measure</th>
                                    <th>Unit Price</th>
                                    <th>Total price</th>
                                    <th class="text-center"><button type="button" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> </button></th>
                                </tr>
                                <tr>
                                    <div class="col-md-6"><td><select id="item_id" name="item_id" class="form-control">
                                                <option selected disabled>Select one</option></select></td></div>
                                    <div class="col-md-6"><td><select id="item_id" name="item_id" class="form-control">
                                                <option selected disabled>Select one</option></select></td></div>
                                    <div class="col-md-6"><td><input type="text" class="form-control" name="quantity" id="quantity"  placeholder="Enter Quantity"></td>
                                                          <td></td>
                                    <div class="col-md-6"><td><input type="text" class="form-control" name="unit_price" id="unit_price"  placeholder="Enter the price"></td>
                                    <div class="col-md-6"><td><input type="text" class="form-control" name="total_price" id="total_price"  placeholder="Enter the  total price"></td>
                                                          <td class="text-center"></td>
                                </tr>
                        </table>
                        </form>
                        </div>
                    </div>
                        <div class="text-right mt-4">
                                 <button type="submit" class="btn btn-primary text-right">Order</button>
                                  <button type="reset" class="btn btn-danger text-right">Resset</button>
                         </div>
                </div>
            </div>
        </main>

