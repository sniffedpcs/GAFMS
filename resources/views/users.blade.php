@include('header')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Users</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">GAF MS</a></li>
                                            <li class="breadcrumb-item active">Users</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title"></h4>
                                        <button type="button" class="card-desc mb-4 btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">
                                            <i class="bx bx-plus bx-spin font-size-16 align-middle me-2"></i>Add User
                                        </button>
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Num</th>
                                                <th>Service Number</th>
                                                <th>Rank</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td> cn </td>
                                                    <td>servno</td>
                                                    <td>rank</td>
                                                    <td>lastname othernames</td>
                                                    <td>department</td>
                                                    <td style="width: 185px;">
                                                        <div style="width: 100%;" class="btn-group">
                                                            <button class="btn btn-sm btn-outline-secondary" title="Edit" data-bs-toggle="modal" data-bs-target="#editmodal">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-outline-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deletemodal">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Delete modal -->
                                                <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalScrollableTitle">Delete User?</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card-body">

                                                            <form action="" method="POST">
                                                                    <div class="row">
                                                                        <h5><b>Service Number: </b></h5>
                                                                        <h5><b>Name: </b></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="text" name="deluser" value="" hidden>
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-danger" name="deleteuser">Confirm</button>
                                                            </div>
                                                            </form>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->

                                                <!-- Edit modal -->
                                                <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalScrollableTitle">Edit User Information</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card-body">

                                                            <form action="" method="POST">
                                                                    <div class="row">
                                                                        <input class="form-control form-control-lg mb-3" type="text" value="" disabled>

                                                                        <input class="form-control form-control-lg mb-3" type="text" value="" disabled>
                                                                        
                                                                        <select class="form-control form-control-lg mb-3" required name="updRank">
                                                                            <option value="">rank</option>
                                                                            
                                                                        </select>
                                                                        
                                                                        <input class="form-control form-control-lg mb-3" type="text" name="updlastn" value="">
                                                                        
                                                                        <input class="form-control form-control-lg mb-3" type="text" name="updfname" value="">
                                                                        
                                                                        <input class="form-control form-control-lg mb-3" type="text" name="updphone" value="">

                                                                        <select class="form-control form-control-lg mb-3" required name="updrole">
                                                                            <option value=" "> </option>
                                                                            <option value="CLERK">CLERK</option>
                                                                            <option value="OFFICER">OFFICER</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="text" name="eduser" value=" " hidden>
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-primary" name="editUser">Save Changes</button>
                                                            </div>
                                                            </form>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Scrollable modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">User Information</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">

                                <form action="" method="POST">
                                    <div class="row mb-3">
                                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Department:</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2" name="userdept" required>
                                            <option selected disabled> Select Department </option>
                                            <option value="ARMY">ARMY</option>
                                            <option value="NAVY">NAVY</option>
                                            <option value="AIR FORCE">AIR FORCE</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Rank:</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2" name="userrank" required>
                                                <option selected disabled>Select Rank</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="horizontal-lastname" class="col-sm-3 col-form-label">Service No:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="horizontal-lastname" placeholder="Enter User Service Number" name="userserv" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">First Name:</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Enter User Firstname" name="ufname" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="horizontal-lastname" class="col-sm-3 col-form-label">Last Name:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="horizontal-lastname" placeholder="Enter User Lastname" name="ulname" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="horizontal-lastname" class="col-sm-3 col-form-label">Phone No:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="horizontal-lastname" placeholder="Enter User Phone Number" name="uphonenum" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Role:</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2" name="userrole" required>
                                            <option selected disabled> Assign Role </option>
                                            <option value="ADMIN">ADMIN</option>
                                            <option value="CLERK">CLERK</option>
                                            <option value="OFFICER">OFFICER</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="adduser">Add User</button>
                            </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->


                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © GAF MS.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Developed by Sniffedpcs
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        @include('footer')

    </body>
</html>
