<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <h5 class="card-title fw-semibold mb-4">USER Record</h5>
                    <?php if (session()->has('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->has('succes')): ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('succes'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="main-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-wrapper">
                                    <div class="table-title">
                                        <div class="row">
                                            <div
                                                class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                                <h2 class="ml-lg-2"></h2>
                                            </div>
                                            <?php if(session()->get('role')==='super admin'):?>
                                            <div
                                                class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                                                    <i class="material-icons">&#xE147;</i>
                                                    <span>Add User</span>
                                                </a>
                                                <a href="#deleteEmployeeModal" class="btn btn-danger"
                                                    data-toggle="modal">
                                                    <i class="material-icons">&#xE15C;</i>
                                                    <span>Delete</span>
                                                </a>
                                            </div>
                                            <?php endif;?>
                                        </div>
                                    </div>

                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID User</th>
                                                <th>Email</th>
                                                <th>Jabatan</th>
                                                <?php if(session()->get('role')==='super admin'):?>
                                                <th>Actions</th>
                                                <?php endif;?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = $offset ?>
                                            <?php foreach ($users as $user): ?>
                                                <tr>
                                                    <td><?= ++$no; ?></td>
                                                    <td><?php echo $user['uidUsers']; ?></td>
                                                    <td><?php echo $user['emailUsers']; ?></td>
                                                    <td><?php echo $user['jabatan']; ?></td>
                                                    <td>
                                                        <?php if(session()->get('role')==='super admin'):?>
                                                        <div class="btn-group">
                                                            <a href="#" class="btn btn-primary update-btn"
                                                                data-id="<?= $user['uidUsers'] ?>" data-toggle="modal"
                                                                data-target="#updateModal"
                                                                style="width:auto; color:#ffffff; font-size:0.7em;">Update</a>
                                                            <a href="<?= base_url('pages/delete/' . $user['uidUsers']) ?>"
                                                                class="btn btn-danger"
                                                                style="width:auto; color:#ffffff; font-size:0.7em;">Delete</a>
                                                        </div>
                                                        <?php endif;?>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center mt-4">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <?php if ($current_page > 1): ?>
                                                    <li class="page-item">
                                                        <a class="page-link" href="?page=<?php echo ($current_page - 1); ?>"
                                                            aria-label="Previous">
                                                            <span aria-hidden="true">&laquo;</span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>

                                                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                                    <li
                                                        class="page-item <?php echo ($i == $current_page) ? 'active' : ''; ?>">
                                                        <a class="page-link"
                                                            href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                                    </li>
                                                <?php endfor; ?>

                                                <?php if ($current_page < $total_pages): ?>
                                                    <li class="page-item">
                                                        <a class="page-link" href="?page=<?php echo ($current_page + 1); ?>"
                                                            aria-label="Next">
                                                            <span aria-hidden="true">&raquo;</span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </nav>
                                    </div>

                                    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog"
                                        aria-labelledby="updateModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="updateModalLabel">Update Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form id="updateForm" action="<?= base_url('pages/update') ?>"
                                                    method="post">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" id="updateId">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="text" class="form-control" id="email"
                                                                name="email" required>
                                                        </div>
                                                        <div class="form-group"d>
                                                            <label for="jabatan">Jabatan</label>
                                                            <select class="form-control" id="jabatan" name="jabatan"
                                                                required>
                                                                <option value="">Pilih Jabatan</option>
                                                                <option value="Admin">Admin</option>
                                                                <option value="User">User</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!----add-modal start--------->
                                <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add new user?</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <p class="text-center">Please click the sign up button to add new
                                                        user
                                                    </p>
                                                </div>
                                                <!-- <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="email" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>E-mail</label>
                                                            <input type="text" class="form-control" required></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>QTY</label>
                                                            <input type="number" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Customer</label>
                                                            <input type="text" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Date</label>
                                                            <input type="date" class="form-control" required></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>PIC</label>
                                                            <input type="text" class="form-control" required>
                                                        </div> -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-lg btn-block"
                                                    data-dismiss="modal">Cancel</button>
                                                <a href="<?= base_url('auth/regis'); ?>"
                                                    class="btn btn-primary btn-lg btn-block">Sign Up New
                                                    User</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!----edit-modal end--------->
                                <!----edit-modal start--------->
                                <div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Employees</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>ID RFQ</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Product</label>
                                                    <input type="email" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Production Type</label>
                                                    <input type="text" class="form-control" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>QTY</label>
                                                    <input type="number" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Customer</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input type="date" class="form-control" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>PIC</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-success">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!----edit-modal end--------->
                                <!----delete-modal start--------->
                                <div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete Employees</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this Records</p>
                                                <p class="text-warning"><small>This Action Cannot be Undone,</small></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-success">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!----edit-modal end--------->
                            </div>
                        </div>
                        <!------main-content-end----------->
                        <!----footer-design------------->

                        <footer class="footer">
                            <div class="container-fluid">
                                <div class="footer-in">
                                    <p class="mb-0">&copy Politeknik Manufaktur Bandung.</p>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script> -->
    <script src="../assets/js/index.crud.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>


    <script src="../assets/js/record.siderbar.js"></script>
    <script src="../assets/js/app.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simplebar@6.2.5/dist/simplebar.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".xp-menubar").on('click', function () {
                $("#sidebar").toggleClass('active');
                $("#content").toggleClass('active');
            });
            $('.xp-menubar,.body-overlay').on('click', function () {
                $("#sidebar,.body-overlay").toggleClass('show-nav');
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.update-btn').click(function () {
                var userId = $(this).data('id');
                console.log('User ID: ' + userId);
                $.ajax({
                    url: '<?= base_url("auth/getDataById/") ?>' + userId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        if (data) {
                            $('#updateId').val(data.uidUsers);
                            $('#email').val(data.emailUsers);
                            $('#jabatan').val(data.jabatan);
                            $('#updateModal').modal('show');
                        } else {
                            alert('User not found');
                        }
                    },
                    error: function (xhr, status, error) {
                        alert('Error: ' + error);
                    }
                });
            });
        });
    </script>