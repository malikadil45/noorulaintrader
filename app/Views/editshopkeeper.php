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
                <form method="post" action="<?php echo base_url('form/updateshopkeeper'); ?>"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Shopkeeper Name</label>
                                <input type="hidden" class="form-control" id="shopkeeperid" name="shopkeeperid"
                                    value="<?= $shopkeepers['id'] ?>">
                                <input type="text" name="shopkeepername" id="shopkeepername" class="form-control"
                                    placeholder="shopkeeper Name..." required
                                    value="<?= $shopkeepers['shopkeepername'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" inputmode="text" name="address" id="address" class="form-control"
                                    placeholder="Address ..." required value="<?= $shopkeepers['address'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Google Map</label>
                                <input type="text" inputmode="text" name="googlemap" id="googlemap" class="form-control"
                                    placeholder="Google Map ..." value="<?= $shopkeepers['googlemap'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" pattern="[0-9]*" inputmode="tel" name="phonenumber"
                                    id="phonenumber" class="form-control" placeholder="Phone Number ..."
                                    value="<?= $shopkeepers['phonenumber'] ?>">
                            </div>
                        </div>
                        <?php
                        $shopkeeperarea = $shopkeepers['area'];
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
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Area</label>
                                <select name="area" id="area" class="form-control select2" style="width: 100%;"
                                    required>
                                    <option value="<?php echo $shopkeepers['area'] ?>"><?php echo $shopkeeperarea ?></option>
                                    <option value="1">Salamat Pura</option>
                                    <option value="2">Ganj bazar + Medical Sckeem</option>
                                    <option value="3">Boghiwal + Sheller Chowk</option>
                                    <option value="4">Lal Pul + Momen Pura</option>
                                    <option value="5">Pagat Pura + Karol Bazar</option>
                                    <option value="6"> Shalamar + Shahar Road</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <center><button type="submit" class="btn btn-primary">Update</button></center>
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