
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <ol class="breadcrumb mb-4 mt-2">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Notification  Management</li>
            </ol>
            <div class="text-right">
                <p>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addNotification">
                        <i class="glyphicon glyphicon-plus"></i>
                        Add Notification
                    </button>
                </p>
            </div>
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Notification</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th> ID</th>
                                <th>message</th>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Generated by</th>
                                <th>status</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>

                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="addNotification">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Notification</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <select id="type" name="type" class="form-control" >
                                        <option value="">Select a type</option>
                                        <option value="Email Notification">Email Notification</option>
                                        <option value="special alerts">Special alerts </option>
                                        <option value="General alerts ">General alerts</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="mcat_id">Maessage</label>
                                    <textarea class="form-control" name="msg" id="msg" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="mtype_id">Role</label>

                                    <input type="checkbox" name="role[]" value="<?php //echo $rowrole['role_id']; ?>"/>


                                </div>
                                <div class="modal-footer">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary text-right">Submit</button>
                                        <button type="reset" class="btn btn-danger text-right">Resset</button>
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
