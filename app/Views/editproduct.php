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
                            <?php //echo $breadcrumb; ?>
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

        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header" style="background-color: #23A9F2 !important; color: white !important;">
                <h3 class="card-title">
                    <?php echo $breadcrumb; ?>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <style>
                    /* Chrome, Safari, Edge, Opera */
                    input::-webkit-outer-spin-button,
                    input::-webkit-inner-spin-button {
                        -webkit-appearance: none;
                        margin: 0;
                    }

                    /* Firefox */
                    input[type=number] {
                        -moz-appearance: textfield;
                    }

                    .select2-container .select2-selection--single {
                        height: 38px !important;
                    }
                </style>
                <form method="post" action="<?php echo base_url('form/updateproduct'); ?>"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="hidden" class="form-control" id="productid" name="productid"
                                    value="<?= $products['id'] ?>">
                                <input type="text" name="productname" id="productname" class="form-control"
                                    placeholder="Name ..." value="<?= $products['productname'] ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Stock in Caton</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="stockincotton"
                                    id="stockincotton" class="form-control" placeholder="Stock in Caton ..." >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Stock in Box</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="stockinbox"
                                    id="stockinbox" class="form-control" placeholder="Stock in Box ..."
                                     >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Box Price</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="boxprice" id="boxprice"
                                    class="form-control" placeholder="Box Price ..." step="any"
                                    value="<?= $products['boxprice'] ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Piece Price</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="pieceprice"
                                    id="pieceprice" class="form-control" placeholder="Piece Price ..." step="any"
                                    value="<?= $products['pieceprice'] ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Box Per Caton</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="boxpercaton"
                                    id="boxpercaton" class="form-control" placeholder="Piece Per Box ..."
                                    value="<?= $products['boxpercaton'] ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Piece Per Box</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="pieceperbox"
                                    id="pieceperbox" class="form-control" placeholder="Piece Per Box ..."
                                    value="<?= $products['pieceperbox'] ?>" required>
                            </div>
                        </div>
                        <?php
                        $vendor = $products['vendor'];
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
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Vendor</label>
                                <select name="vendor" id="vendor" class="form-control select2" style="width: 100%;"
                                    required>
                                    <option value="<?= $products['vendor'] ?>"><?php echo $vendor; ?></option>
                                    <option value="1">Danial</option>
                                    <option value="2">Usama</option>
                                    <option value="3">Subhan</option>
                                    <option value="4">Younas</option>
                                    <option value="5">Local Purchase</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <center><a href="" data-toggle="modal" data-target="#modal-add-vendor"
                                        class="btn btn-primary">Add New Vendor</a></center>
                            </div>
                        </div> -->
                    </div>
                    <div class="card-footer">
                        <center><button type="submit" class="btn btn-primary">Update Product</button></center>
                    </div>
                </form>





                <div class="modal fade" id="modal-add-vendor">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add New Vendor</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo base_url('form/addvendor'); ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Vendor Name</label>
                                        <input type="text" name="vendorname" id="vendorname" class="form-control"
                                            placeholder="Vendor Name ..." required>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal"
                                        style="color:black">Close</button>
                                    <button type="button" class="btn btn-outline-light delete-member-confirm-button"
                                        style="color:black">Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->




               
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- general form elements disabled -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('footer.php'); ?>