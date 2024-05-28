            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <h5 class="card-title fw-semibold mb-4">Customer ID Record</h5>
                                <div class="main-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-wrapper">

                                                <div class="table-title">
                                                    <div class="row">
                                                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                                            <h2 class="ml-lg-2"></h2>
                                                        </div>
                                                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                                                                <i class="material-icons">&#xE147;</i>
                                                                <span>Add New Employees</span>
                                                            </a>
                                                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
                                                                <i class="material-icons">&#xE15C;</i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Customer ID</th>
                                                            <th>Company</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Address Delivery</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <!-- Mulai Tabel -->
                                                    <tbody id='show_posts'>

                                                    </tbody>

                                                </table>
                                                <div class="clearfix ">
                                                    <div class="hint-text">showing <b>5</b> out of <b>25</b></div>
                                                    <ul class="pagination">
                                                        <li class="page-item disabled"><a href="#">Previous</a></li>
                                                        <li class="page-item "><a href="#" class="page-link">1</a></li>
                                                        <li class="page-item "><a href="#" class="page-link">2</a></li>
                                                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                                        <li class="page-item "><a href="#" class="page-link">4</a></li>
                                                        <li class="page-item "><a href="#" class="page-link">5</a></li>
                                                        <li class="page-item "><a href="#" class="page-link">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <!----add-modal start--------->
                                        <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Add Employees</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="#" method="post" id="add_post_form">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label>Customer ID</label>
                                                                <input type="text" class="form-control" id="id_customer" name="id_customer" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Company</label>
                                                                <input type="text" class="form-control" id="company" name="company">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Name</label>
                                                                <input type="text" class="form-control" id="name" name="name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="email" class="form-control" id="email" name="email">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address Delivery</label>
                                                                <textarea class="form-control" required id="address_delivery" name="address_delivery"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-success">Add</button>
                                                        </div>
                                                    </form>
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
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Customer ID</label>
                                                            <input type="text" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Company</label>
                                                            <input type="text" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Address Delivery</label>
                                                            <textarea class="form-control" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to delete this Records</p>
                                                        <p class="text-warning"><small>this action Cannot be Undone,</small></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <button href="#" type="button" class="btn btn-danger" id="deletebtn" name="deletebtn">Delete</button>
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

                        <!-------complete html----------->

                        <!-- Optional JavaScript -->
                        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                        <!-- <script src="js/jquery-3.3.1.slim.min.js"></script>
                        <script src="js/popper.min.js"></script>
                        <script src="js/bootstrap.min.js"></script>
                        <script src="js/jquery-3.3.1.min.js"></script> -->

                        <!-------complete html----------->

                        <!-- Optional JavaScript -->
                        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                        <!-- <script src="js/jquery-3.3.1.slim.min.js"></script>
                    <script src="js/popper.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>
                    <script src="js/jquery-3.3.1.min.js"></script> -->
                    </div>
                </div>
            </div>
            </div>
            <!-- ga ada yg berubah kalo pake footer yg ini. skrg lg pake footer dr template -->
            <!-- Custom Javascript -->
            <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
            <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="../assets/js/index.crud.js"></script>
            <script src="../assets/js/sidebarmenu.js"></script>


            <script src="../assets/js/record.siderbar.js"></script>
            <script src="../assets/js/app.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/simplebar@6.2.5/dist/simplebar.min.js"></script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $(".xp-menubar").on('click', function() {
                        $("#sidebar").toggleClass('active');
                        $("#content").toggleClass('active');
                    });

                    $('.xp-menubar,.body-overlay').on('click', function() {
                        $("#sidebar,.body-overlay").toggleClass('show-nav');
                    });

                });
            </script>

            <!-- Fungsi Sidebar -->
            <div id="recordSidebar">

            </div>

            <!-- Dropdown Record (awalnya disembunyikan) -->
            <div id="recordDropdown" style="display: none;">
                Dropdown Record
            </div>

            <script>
                // Ambil elemen sidebar dan dropdown
                var recordSidebar = document.getElementById('recordSidebar');
                var recordDropdown = document.getElementById('recordDropdown');

                // Tambahkan event listener untuk klik pada sidebar
                recordSidebar.addEventListener('click', function(event) {
                    // Cegah aksi default dari link
                    event.preventDefault();

                    // Toggle tampilan dropdown
                    if (recordDropdown.style.display === 'block') {
                        recordDropdown.style.display = 'none';
                    } else {
                        recordDropdown.style.display = 'block';
                    }
                });

                // Tambahkan event listener untuk setiap item sidebar list record
                var recordItems = recordDropdown.querySelectorAll('.nav__dropdown-item');
                recordItems.forEach(function(item) {
                    item.addEventListener('click', function(event) {
                        // Cegah aksi default dari link
                        event.preventDefault();

                        // Dapatkan URL dari atribut href
                        var url = item.getAttribute('href');

                        // Navigasi ke halaman yang sesuai
                        window.location.href = url;
                    });
                });
            </script>

            <script>
                $(function() {
                    fetchAllPosts();

                    function fetchAllPosts() {

                        $.ajax({
                            url: '<?= base_url('RecordHandle/CustomerRead') ?>',
                            method: 'get',
                            success: function(response) {
                                $("#show_posts").html(response.message);
                                console.log(response);
                            }
                        });

                    }
                    // Add Data

                    $("#add_post_form").submit(function(e) {
                        e.preventDefault();
                        var formdata = {
                            'company': $('#company').val(),
                            'name': $('#name').val(),
                            'email': $('#email').val(),
                            'address_delivery': $('#address_delivery').val(),
                        }

                        console.log(formdata)

                        $.ajax({
                            method: "post",
                            url: '<?= base_url('RecordHandle/CustomerCreate') ?>',
                            data: formdata,
                            dataType: "JSON",
                            success: function(response) {
                                console.log(response);
                                $("#addEmployeeModal").modal('hide');
                                $("#addEmployeeModal").find('input').val('');
                                fetchAllPosts();
                            },
                            error: function(xhr, ajaxOption, thrownError) {
                                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                            }
                        })

                        // delete data
                        $(document).delegate('.post_delete_btn', 'click', function(e) {
                            e.preventDefault();
                            const id = $(this).attr('id');
                            console.log(id);

                            $.ajax({
                                url: '<?= base_url('RecordHandle/CustomerDelete') ?>/' + id,
                                method: 'get',
                                success: function(response) {
                                    console.log(response);
                                    $("#DeleteEmployeeModal").modal('hide');
                                    fetchAllPosts();
                                },
                                error: function(xhr, ajaxOption, thrownError) {
                                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                                }
                            });



                        });
                    });
                })
            </script>

            </body>

            </html>