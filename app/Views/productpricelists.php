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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $displayedProducts = []; // Array to track displayed products
                                        foreach ($products as $product):
                                            $productid = $product->productid;
                                            if (!in_array($productid, $displayedProducts)) {
                                                // Check if this product has already been displayed
                                                $displayedProducts[] = $productid; // Add the product id to the displayed list
                                                $product = $productData[$productid];
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php
                                                        echo $product['productname'];
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#modal-danger"
                                                            data-id="<?= $product['id'] ?>"
                                                            data-productname="<?= $product['productname'] ?>"
                                                            class="reset-button"><img
                                                                src="<?php echo base_url() ?>public/dist/img/eraser.png" alt=""
                                                                width="30px"></a>

                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        endforeach;
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Product Name</th>
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
        .centered-text {
        text-align: center;
        }

        <div class="modal fade" id="modal-danger">
            <div class="modal-dialog">
                <div class="modal-content bg-danger">
                    <div class="modal-header">
                        <h4 class="modal-title">Reset Price</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to Reset the Price <span id="product-name-placeholder" style="color: yellow;font-size: 25px;"></span></p>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                        <button type="button" class="btn btn-outline-light reset-price-confirm-button">Yes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
    <!-- /.content-wrapper -->


    <script>
        $(document).ready(function () {
            // Listen for the "Delete" button click
            $('.reset-button').click(function () {
                var productName = $(this).data('productname');
                $('#product-name-placeholder').text(productName);
            });

            // Add an event listener for the delete confirmation button if needed
            $('.delete-member-confirm-button').click(function () {
                // Handle delete confirmation logic here
            });
        });
    </script>
    <?php include('footer.php'); ?>