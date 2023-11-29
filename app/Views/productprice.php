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
                <!-- Add this code to display error message if it exists -->
                <?php if (session()->has('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo session('error'); ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo session('success'); ?>
                    </div>
                <?php endif; ?>


                <form method="post" action="<?php echo base_url('form/addproductprice'); ?>"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Shopkeeper's</label>
                                <select name="shopkeeper" id="shopkeeper" class="form-control select2"
                                    style="width: 100%;" required>

                                    <option value="">Select Shopkeeper</option>
                                    <?php foreach ($shopkeepers as $shopkeeper): ?>
                                        <?php
                                        $shopkeeperarea = $shopkeeper->area;
                                        $area1 = "Salamat Pura";
                                        $area2 = "Ganj bazar + Medical Sckeem";
                                        $area3 = "Boghiwal + Sheller Chowk";
                                        $area4 = "Lal Pul + Momen Pura";
                                        $area5 = "Pagat Pura + Karol Bazar";
                                        $area6 = "Shalamar + Shahar Road";
                                        if ($shopkeeperarea == "1") {
                                            $shopkeeperarea = $area1;
                                        } else if ($shopkeeperarea == "2") {
                                            $shopkeeperarea = $area2;
                                        } else if ($shopkeeperarea == "3") {
                                            $shopkeeperarea = $area3;
                                        } else if ($shopkeeperarea == "4") {
                                            $shopkeeperarea = $area4;
                                        } else if ($shopkeeperarea == "5") {
                                            $shopkeeperarea = $area5;
                                        } else if ($shopkeeperarea == "6") {
                                            $shopkeeperarea = $area6;
                                        }
                                        ?>
                                        <option value="<?php echo $shopkeeper->id; ?>"><span style="font-weight: 700;">
                                                <?php echo $shopkeeper->shopkeepername; ?>
                                            </span>/
                                            <?php echo $shopkeeper->address; ?>/
                                            <?php echo $shopkeeperarea; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Product Lists</label>
                                <select name="productid" id="productid" class="form-control select2"
                                    style="width: 100%;" required>
                                    <option value="">Select Products's</option>
                                    <?php foreach ($products as $product): ?>
                                        <option value="<?php echo $product->id; ?>">
                                            <?php echo $product->productname; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Box Price</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" step="any" name="boxprice"
                                    id="boxprice" class="form-control" placeholder="Box Price..." required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Piece Price</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" step="any" inputmode="text"
                                    name="pieceprice" id="pieceprice" class="form-control"
                                    placeholder="Piece Price ...">
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <center><button type="submit" class="btn btn-primary" id="saveshopkeeper">Save</button></center>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- general form elements disabled -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('footer.php'); ?>