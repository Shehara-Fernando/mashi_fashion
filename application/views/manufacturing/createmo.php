
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <ol class="breadcrumb mb-4 mt-2">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('manufacturing/Manufacturing')?>">Manufacturing </a></li>
                    <li class="breadcrumb-item active">Create Manufacturing Ordert</li>
                </ol>
                  <div class="card mb-4 mt-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Manufacturing</div>
                    <div class="card-body">
                        <form>
                        <div class="form-row">
                            <div class="form-group col-md-4 ">
                                <label >Mo Number</label>

                            </div>
                            <div class="form-group col-md-4 ">
                                <label >Date</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                        <div class="table-responsive">
                            <table style="width:100%" border-collapse="collapse" class="table table-bordered">
                                <tr>
                                    <th>Build of materials</th>
                                    <th>Material Type</th>
                                    <th>Quantity</th>
                                    <th>units Of Measures</th>
                                    <th class="text-center"><button type="button" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> </button></th>
                                </tr>
                                <tr>
                                    <div class="col-md-6"><td><select id="mcat_id" name="mcat_id" class="form-control">
                                                <option selected disabled>Select one</option></select></td></div>
                                  <div class="col-md-6"><td><select id="mcat_id" name="mcat_id" class="form-control">
                                            <option selected disabled>Select one</option></select></td></div>
                                   <div class="col-md-6"><td><input type="text" class="form-control" name="quantity" id="quantity"  placeholder="Enter Quantity"></td>
                                                      <td></td>
                                                         <td class="text-center"></td>

                                </tr>

                                </table>

                        </form>
                        </div>
                    </div>
                             <div class="text-right mt-3-2">
								 <button type="reset" class="btn btn-danger text-right">Resset</button>
                                <button type="submit" class="btn btn-success text-right">Order</button>
                             </div>
                </div>
            </div>
        </main>
