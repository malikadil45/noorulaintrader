<?php include('header-dashboard.php'); ?>
<div class="wrapper">
    <?php include('navbar.php'); ?>

    <?php include('sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>
                            <?php echo $breadcrumb; ?>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">
                                <?php echo $breadcrumb; ?>
                            </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <style>
            .dtr-data {
                float: right;
                padding-right: 48px;
            }

            .dtr-details {
                width: 100%;
            }

            .dropdown {
                margin-top: -15px;
                margin-right: -50px;
            }
        </style>



        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div> -->
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Stock in Caton</th>
                                            <th>Stock in Box</th>
                                            <th>Box Per Caton</th>
                                            <th>Piece Per Box</th>
                                            <th>Box Price(s)</th>
                                            <th>Piece Price</th>
                                            <th>Vendor</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($products as $product): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $product->productname; ?>
                                                </td>
                                                <td>
                                                    <?php echo $product->stockincotton; ?>
                                                </td>
                                                <td>
                                                    <?php echo $product->stockinbox; ?>
                                                </td>
                                                <td>
                                                    <?php echo $product->boxpercaton; ?>
                                                </td>
                                                <td>
                                                    <?php echo $product->pieceperbox; ?>
                                                </td>
                                                <td>Rs.
                                                    <?php echo $product->boxprice; ?>
                                                </td>
                                                <td>Rs.
                                                    <?php echo $product->pieceprice; ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $vendor = $product->vendor;
                                                    $vendor1 = "Danial";
                                                    $vendor2 = "Usama";
                                                    $vendor3 = "Subhan";
                                                    $vendor4 = "Younas";
                                                    $vendor5 = "Local Purchase";
                                                    if ($vendor == "1") {
                                                        $vendor = $vendor1;
                                                    } else if ($vendor == "2") {
                                                        $vendor = $vendor2;
                                                    } else if ($vendor == "3") {
                                                        $vendor = $vendor3;
                                                    } else if ($vendor == "4") {
                                                        $vendor = $vendor4;
                                                    } else if ($vendor == "5") {
                                                        $vendor = $vendor5;
                                                    }
                                                    ?>
                                                    <?php echo $vendor; ?>
                                                </td>
                                                <td>
                                                    <ul class="nav nav-pills ml-auto p-2">
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                                                href="#">
                                                                Action <span class="caret"></span>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" tabindex="-1"
                                                                    href="<?php echo site_url('/editproductbyid/' . $product->id); ?>">Edit</a>
                                                                <a class="dropdown-item" tabindex="-1" href="#">Delete</a>
                                                                <a class="dropdown-item" tabindex="-1" href="#">View</a>
                                                                <!-- <div class="dropdown-divider"></div> -->
                                                                <!-- <a class="dropdown-item" tabindex="-1" href="#">Separated link</a> -->
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>


                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Stock in Caton</th>
                                            <th>Stock in Box</th>
                                            <th>Box Per Caton</th>
                                            <th>Piece Per Box</th>
                                            <th>Box Price(s)</th>
                                            <th>Piece Price</th>
                                            <th>Vendor</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <div class="modal fade" id="modal-danger-member">
            <div class="modal-dialog">
                <div class="modal-content bg-danger">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Record</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this record</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                        <button type="button" class="btn btn-outline-light delete-member-confirm-button">Yes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('footer.php'); ?>