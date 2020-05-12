
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <ol class="breadcrumb mb-4 mt-2">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
                    <li class="breadcrumb-item active">Manufacturing Order</li>
                </ol>
                <div class="text-right">
                    <p>
                        <a href="<?php echo base_url('manufacturing/CreateManufacturing')?>">
                        <button type="button" class="btn btn-success" >
                            <i class="glyphicon glyphicon-plus"></i>
                           Create Mo
                        </button>
                        </a>
                    </p>
                </div>
                    <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Mo Number</th>
                                    <th>Current Date</th>
                                    <th>Requested Date</th>
                                    <th>Status</th>
                                     <th class="text-center"width="20%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                     <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-success"> <i class="fas fa-edit"></i> </button></a>
										 <button type="button" class="btn btn-sm btn-success"><i class="fas fa-check-circle"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash" ></i></button>
                                    </td>
                                </tr>
                                </td>
                                </tbody>
                            </table>
                    </div>
            </div>
        </main>

