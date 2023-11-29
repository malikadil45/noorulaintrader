<?php include('header-dashboard.php'); ?>
<div class="wrapper">
    <?php include('navbar.php'); ?>

    <?php include('sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


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






        <!-- <style>
            .btntoday {
                flex: 1 1 auto;
                margin: 10px;
                padding: 30px;
                text-align: center;
                text-transform: uppercase;
                transition: 0.5s;
                background-size: 200% auto;
                color: white;
                /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
                box-shadow: 0 0 20px #eee;
                border-radius: 10px;
            }

            .btntoday-2 {
                background-image: linear-gradient(to right, #fbc2eb 0%, #a6c1ee 51%, #fbc2eb 100%);
            }

            .btntoday:hover {
                background-position: right center;
                /* change the direction of the change here */
            }
        </style> -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="form-group">
                    <a type="button" class="btn btn-block btn-dark btn-sm" data-toggle="modal"
                        data-target="#modal-add-todaystock" data-target="#modal-add-product">Add Today Stock</a>
                </div>

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

                <div class="modal fade" id="modal-add-todaystock">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Today Stock</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo base_url('updatetodaystock'); ?>" method="post">
                                <div class="modal-body">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Product Lists</label>
                                            <select name="productid" id="productid" class="form-control select2"
                                                style="width: 100%;" required>
                                                <?php foreach ($products as $product): ?>
                                                    <option value="<?php echo $product->id; ?>">
                                                        <?php echo $product->productname; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Stock in Caton</label>
                                        <input type="number" pattern="[0-9]*" inputmode="numeric" name="todaycaton"
                                            id="todaycaton" class="form-control" placeholder="Today Caton..."
                                            step="any">
                                    </div>
                                    <div class="form-group">
                                        <label>Stock in Box</label>
                                        <input type="number" pattern="[0-9]*" inputmode="numeric" name="todaystock"
                                            id="todaystock" class="form-control" placeholder="Today Box..." step="any">
                                    </div>
                                    <div class="form-group">
                                        <label>Stock in Piece</label>
                                        <input type="number" pattern="[0-9]*" inputmode="numeric" name="todaystockpiece"
                                            id="todaystockpiece" class="form-control" placeholder="Today Piece..."
                                            step="any">
                                    </div>

                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal"
                                        style="color:black">Close</button>
                                    <button type="submit" class="btn btn-outline-light"
                                        style="color:black">Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Daily Sale Report</h5>

                                <!-- <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a class="dropdown-divider"></a>
                                        <a href="#" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div> -->
                            </div>
                            <!-- /.card-header -->

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-3 col-12" style="background-color: #17A2B8;
   border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    color: #fff;">
                                        <div class="description-block ">
                                            <!-- <span class="description-percentage text-success"><i
                                                class="fas fa-caret-up"></i> 17%</span> -->
                                            <?php
                                            $amount = 0; // Initialize the variable outside the loop to accumulate amounts
                                            foreach ($today_data as $today_datas):
                                                // Assuming 'amount' is the column from your 'orders' table
                                                $amount += $today_datas->amount; // Assuming the amount is an object property
                                            endforeach;
                                            ?>

                                            <h5 class="description-header" style="font-size: 26px;">Rs.
                                                <?php echo $amount; ?>
                                            </h5>


                                            <span class="description-text" style="font-weight: 700;">Total Sale</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-6" style="background-color: #FFC107;
   
    color: #fff;">
                                        <div class="description-block">
                                            <!-- <span class="description-percentage text-danger"><i
                                                class="fas fa-caret-down"></i> 18%</span> -->
                                            <h5 class="description-header" style="font-size: 26px;">Rs. 0</h5>
                                            <span class="description-text" style="font-weight: 700;">AMOUNT
                                                PAYABLE</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <div class="col-sm-3 col-6" style="background-color: #DC3545;
    
    color: #fff;">
                                        <div class="description-block ">
                                            <!-- <span class="description-percentage text-success"><i
                                                class="fas fa-caret-up"></i> 20%</span> -->
                                            <?php
                                            $amount = 0; // Initialize the variable outside the loop to accumulate amounts
                                            $totalamount = 0; // Initialize the variable outside the loop to accumulate amounts
                                            $creditamount = 0; // Initialize the variable outside the loop to accumulate amounts
                                            foreach ($all_data_credit as $all_data_credits):
                                                // Assuming 'amount' is the column from your 'orders' table
                                                $totalamount += $all_data_credits->amount; // Assuming the amount is an object property
                                                $creditamount += $all_data_credits->creditamount; // Assuming the amount is an object property
                                            endforeach;
                                            $amount = $totalamount - $creditamount;
                                            ?>
                                            <h5 class="description-header" style="font-size: 26px;">Rs.
                                                <?php echo $amount; ?>
                                            </h5>
                                            <span class="description-text" style="font-weight: 700;">AMOUNT
                                                RECEIVABLE</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->


                                    <div class="col-sm-3 col-12" style="background-color: #1BA172;
    
    color: #fff;">
                                        <div class="description-block ">
                                            <!-- <span class="description-percentage text-warning"><i
                                                class="fas fa-caret-left"></i> 0%</span> -->
                                            <?php
                                            $cashamount = 0; // Initialize the variable outside the loop to accumulate amounts
                                            $amount = 0; // Initialize the variable outside the loop to accumulate amounts
                                            foreach ($today_data_cash as $today_data_cashs):
                                                // Assuming 'amount' is the column from your 'orders' table
                                                $cashamount += $today_data_cashs->amount; // Assuming the amount is an object property
                                            endforeach;
                                            $creditamount = 0; // Initialize the variable outside the loop to accumulate amounts
                                            foreach ($today_data_credit as $today_data_credits):

                                                $creditamount += $today_data_credits->creditamount; // Assuming the amount is an object property
                                            endforeach;
                                            $amount = $cashamount + $creditamount;
                                            ?>
                                            <h5 class="description-header" style="font-size: 26px;">Rs.
                                                <?php echo $amount; ?>
                                            </h5>
                                            <span class="description-text" style="font-weight: 700;">NET AMOUNT
                                            </span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->



                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Order</span>
                                <span class="info-box-number">
                                    <?php echo $totalRows; ?>
                                    <!-- <small>%</small> -->
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Products</span>
                                <span class="info-box-number">
                                    <?php echo $totalproductsRows; ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i
                                    class="fas fa-shopping-cart"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Sales</span>
                                <span class="info-box-number">
                                    <?php
                                    $amount = 0; // Initialize the variable outside the loop to accumulate amounts
                                    foreach ($gettotalsale as $gettotalsales):
                                        // Assuming 'amount' is the column from your 'orders' table
                                        $amount += $gettotalsales->amount; // Assuming the amount is an object property
                                    endforeach;
                                    ?>
                                    <?php echo $amount; ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Shopkeeper</span>
                                <span class="info-box-number">
                                    <?php echo $totalshopkeeperRows; ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Today Stock List's</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Caton</th>
                                        <th>Box</th>
                                        <th>Piece</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($stockdetails as $stockdetail): ?>
                                        <tr>
                                            <td>
                                                <a class="edit-button" data-toggle="modal"
                                                    data-target="#modal-edit-todaystock"
                                                    data-productid="<?php echo $stockdetail->id; ?>"
                                                    data-productname="<?php echo $stockdetail->productname; ?>"
                                                    data-todaycaton="<?php echo $stockdetail->todaycaton; ?>"
                                                    data-todaystock="<?php echo $stockdetail->todaystock; ?>"
                                                    data-todaystockpiece="<?php echo $stockdetail->todaystockpiece; ?>">
                                                    <?php echo $stockdetail->productname; ?>
                                                </a>
                                            </td>
                                            <td>
                                                <?php echo $stockdetail->todaycaton; ?>
                                            </td>
                                            <td>
                                                <?php echo $stockdetail->todaystock; ?>
                                            </td>
                                            <td>
                                                <?php echo $stockdetail->todaystockpiece; ?>
                                            </td>
                                            <!-- <td>Action</td> -->
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>


            <div class="modal fade" id="modal-edit-todaystock">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Today Stock</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?php echo base_url('edittodaystock'); ?>" method="post">
                            <div class="modal-body">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Product Lists</label>
                                        <select name="productidedit" id="productidedit" class="form-control select2"
                                            style="width: 100%;" required>
                                            <?php foreach ($products as $product): ?>
                                                <option value="<?php echo $product->id; ?>">
                                                    <?php echo $product->productname; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Stock in Caton</label>
                                    <input type="number" pattern="[0-9]*" inputmode="numeric" name="todaycatonedit"
                                        id="todaycatonedit" class="form-control" placeholder="Today Caton..."
                                        step="any">
                                </div>
                                <div class="form-group">
                                    <label>Stock in Box</label>
                                    <input type="number" pattern="[0-9]*" inputmode="numeric" name="todaystockedit"
                                        id="todaystockedit" class="form-control" placeholder="Today Box..." step="any">
                                </div>
                                <div class="form-group">
                                    <label>Stock in Piece</label>
                                    <input type="number" pattern="[0-9]*" inputmode="numeric" name="todaystockpieceedit"
                                        id="todaystockpieceedit" class="form-control" placeholder="Today Piece..."
                                        step="any">
                                </div>

                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal"
                                    style="color:black">Close</button>
                                <button type="submit" class="btn btn-outline-light" style="color:black">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->





            <div class="form-group">
                <a href="" class="btn btn-block btn-warning  btn-sm" data-toggle="modal"
                    data-target="#modal-end-today">End Today
                </a>
            </div>

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Latest Orders</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th style="width: 23%;">Order ID</th>
                                    <th>Shopkeeper</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <!-- <th>Popularity</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orders as $order): ?>
                                    <tr>
                                        <td style="width: 23%;">
                                            <a href="<?php echo site_url('/invoice/' . $order->orderid); ?>">#
                                                <?php echo $order->orderid; ?>
                                            </a>
                                        </td>
                                        <td>
                                            <?php
                                            $shopkeeperid = $order->shopkeeperid;
                                            $shopkeeper = $shopkeepers[$shopkeeperid];
                                            ?>


                                            <?php echo $shopkeeper['shopkeepername']; ?>
                                        </td>
                                        <td>
                                            <?php echo $order->amount; ?>
                                        </td>
                                        <td>
                                            <?php
                                            $paymentmethod = $order->paymentmethod;
                                            $cash = "Cash";
                                            $credit = "Credit";
                                            if ($paymentmethod == "1") {
                                                $method = $cash;
                                            } else {
                                                $method = $credit;
                                            }

                                            ?>
                                            <?php echo $method; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <a href="<?php echo base_url('addneworder') ?>" class="btn btn-sm btn-info float-left">Place New
                        Order</a>
                    <a href="<?php echo base_url('orderlists') ?>" class="btn btn-sm btn-secondary float-right">View All
                        Orders</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->

            <!-- PRODUCT LIST -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Recently Added Products</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->

                <style>
                    .products-list .product-info {
                        margin-left: 0px !important;
                    }
                </style>
                <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-2 pr-2">
                        <!-- <li class="item">
                            <div class="product-img">
                                <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Samsung TV
                                    <span class="badge badge-warning float-right">$1800</span></a>
                                <span class="product-description">
                                    Samsung 32" 1080p 60Hz LED Smart HDTV.
                                </span>
                            </div>
                        </li> -->
                    </ul>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <a href="<?php echo base_url('/productlists') ?>" class="uppercase">View All Products</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->

            <div class="form-group">
                <a href="" class="btn btn-block btn-danger  btn-sm" data-toggle="modal"
                    data-target="#modal-week-end">Week End
                </a>
            </div>

        </section>


        <div class="modal fade" id="modal-week-end">
            <div class="modal-dialog">
                <div class="modal-content bg-danger">
                    <div class="modal-header">
                        <h4 class="modal-title">Week End</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url('weekend'); ?>" method="post">
                        <div class="modal-body">
                            <center>
                                <h2>Are you sure you want to totaly nill the Stock</h2>
                            </center>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal" style="    color: white;
    border: 1px solid white;">No</button>
                            <button type="submit" class="btn btn-outline-light" style="    color: white;
    border: 1px solid white;">Yes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <div class="modal fade" id="modal-end-today">
            <div class="modal-dialog">
                <div class="modal-content bg-warning">
                    <div class="modal-header">
                        <h4 class="modal-title">End Today</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url('endtoday'); ?>" method="post">
                        <div class="modal-body">
                            <center>
                                <h2>Are you sure you want to End Today</h2>
                            </center>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal" style="    color: white;
    border: 1px solid white;">No</button>
                            <button type="submit" class="btn btn-outline-light" style="    color: white;
    border: 1px solid white;">Yes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->



    </div>
    <!-- /.content-wrapper -->


    <?php include('footer.php'); ?>