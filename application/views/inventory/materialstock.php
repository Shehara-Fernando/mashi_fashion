
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <ol class="breadcrumb mb-4 mt-2">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>

                <li class="breadcrumb-item"><a href="<?php echo base_url('inventory/Materials')?>">Material Management</a></li>
                <li class="breadcrumb-item active">Material Stock</li>
            </ol>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>

                                <th>Material code </th>
                                <th>Material Name</th>
                                <th>Material Category </th>
                                <th>Forcast Quantity</th>
                                <th>Onhand Quantity</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="<?php echo  base_url('inventory/MaterialStockDetails')?>">Stock Details </a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
        </div>

    </main>
