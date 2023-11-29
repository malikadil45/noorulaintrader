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
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/orderlists') ?>">Order Lists</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <?php echo $breadcrumb; ?>
                            </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="card-footer clearfix">
                    <a href="<?php echo base_url('addneworder') ?>" class="btn btn-sm btn-info float-left">Place New
                        Order</a>
                    <a href="<?php echo base_url('orderlists') ?>" class="btn btn-sm btn-secondary float-right">View All
                        Orders</a>
                </div>
        <style>
            .row {
                margin-right: 0px !important;
                margin-left: 0px !important;
            }
        </style>
        <div class="wrapper">
            <!-- Main content -->
            <section class="invoice" style="width: 100%;
    
    margin: 0 auto;">
                <!-- title row -->
                <div class="row" style="margin: 0 auto;
    padding: 50px 50px 20px 50px;">
                    <div class="col-12">
                        <h2 class="page-header" style="margin: 0 auto;
    text-align: center; border: 0px !important;">
                            <!-- <i class="fas fa-globe"></i> -->
                            Noor Ul Ain Trader.
                            <!-- <small class="float-right">Date: 2/10/2014</small> -->
                        </h2>
                        <h5 class="page-header" style="margin: 0 auto;
    text-align: center;font-size: 17px;">
                            <!-- <i class="fas fa-globe"></i> -->
                            Part Nager Akram Road Misri Shah
                            <!-- <small class="float-right">Date: 2/10/2014</small> -->
                        </h5>
                        <h5 class="page-header" style="margin: 0 auto;
    text-align: center;font-size: 17px;">
                            <!-- <i class="fas fa-globe"></i> -->
                            M Salman # 0322-4285015 <BR> 0316-4847899
                            <!-- <small class="float-right">Date: 2/10/2014</small> -->
                        </h5>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    <!-- <div class="col-sm-4 invoice-col">
                    From
                    <address>
                        <strong>Admin, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        Phone: (804) 123-5432<br>
                        Email: info@almasaeedstudio.com
                    </address>
                </div> -->
                    <!-- /.col -->
                    <!-- <div class="col-sm-4 invoice-col">
                    To
                    <address>
                        <strong>John Doe</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        Phone: (555) 539-1037<br>
                        Email: john.doe@example.com
                    </address>
                </div> -->
                    <!-- /.col -->
                    <div class="col-sm-12 invoice-col" style="margin: 0 auto;
    padding: 15px 15px 15px 15px;">
                        <b>Order #
                            <?= $ordernumber; ?>

                            <span style="display:none;" id="ordernumber"><?= $ordernumber; ?></span>
                        </b><br>
                        <b>Shop Name:</b>
                        <?php echo $shopkeepername ?><br>

                        <b>Address:</b>
                        <?php echo $address ?> |
                        <?php echo $phonenumber ?><br>
                        <b>Date:</b>
                        <?php
                        // $dateString = $date; // Replace this with your date string
                        
                        // // Create a DateTime object from the date string
                        // $date1 = new DateTime($dateString);
                        
                        // // Format the date as "day month year hour:minute:second"
                        // $formattedDate = $date1->format('d-m-Y H:i:s');
                        
                        // // Output the formatted date
                        // echo $formattedDate;
                        
                        $dateString = $date; // Replace this with your datetime string
                        
                        // Separate date and time using explode
                        $dateTimeParts = explode(' ', $dateString);

                        // Output date and time separately
                        $date1 = $dateTimeParts[0];
                        $date1 = new DateTime($date1);
                        $formattedDate = $date1->format('d-m-Y');
                        $time = $dateTimeParts[1];

                        echo $formattedDate;
                        ?>
                        <span style="float:right;"><b>Time: </b>
                            <?php echo $time; ?>
                        </span>


                        <br>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <style>
                    .table td,
                    .table th {
                        padding: 0.6rem !important;

                    }

                    .invoice {

                        border: 0px solid rgba(0, 0, 0, .125) !important;

                    }
                </style>
                <!-- Table row -->
                <div class="row" style="    margin-right: 0px !important;
     margin-left: 0px !important;">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orderproductdetails as $orderproductdetail):
                                    $productid = $orderproductdetail->productid;
                                    $product = $productData[$productid];
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $product['productname']; ?>
                                        </td>
                                        <td>
                                            <?php
                                            $caton = $orderproductdetail->totalcatonorder;
                                            $box = $orderproductdetail->totalboxorder;
                                            $piece = $orderproductdetail->totalpieceorder;
                                            if ($caton > 0 && $box == 0 && $piece == 0) {
                                                echo $caton . "Caton";
                                            } else if ($box > 0 && $caton == 0 && $piece == 0) {
                                                echo $box . "Box";
                                            } else if ($piece > 0 && $caton == 0 && $box == 0) {
                                                echo $piece . "Piece";
                                            } else if ($caton > 0 && $box > 0 && $piece == 0) {
                                                echo $caton . "Caton<br>";
                                                echo $box . "Box";
                                            } else if ($caton > 0 && $piece > 0 && $box == 0) {
                                                echo $caton . "Caton<br>";
                                                echo $piece . "Piece";
                                            } else if ($box > 0 && $piece > 0 && $caton == 0) {
                                                echo $box . "Box<br>";
                                                echo $piece . "Piece";
                                            } else if ($box > 0 && $piece > 0 && $caton > 0) {
                                                echo $caton . "Caton<br>";
                                                echo $box . "Box<br>";
                                                echo $piece . "Piece";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $caton = $orderproductdetail->totalcatonorder;
                                            $box = $orderproductdetail->totalboxorder;
                                            $piece = $orderproductdetail->totalpieceorder;
                                            $boxprice = $orderproductdetail->boxprice;
                                            $pieceprice = $orderproductdetail->pieceprice;
                                            if ($caton > 0 && $box <= 0) {
                                                echo $boxprice . "/Box<br> ";
                                            }
                                            if ($caton > 0 && $box > 0 && $piece <= 0) {
                                                echo $boxprice . "/Box<br> ";
                                            }
                                            if ($piece > 0 && $box > 0 && $caton <= 0) {
                                                echo $boxprice . "/Box<br> ";
                                                echo $pieceprice . "/Piece<br> ";
                                            } else if ($piece > 0 && $box > 0 && $caton > 0) {
                                                echo $boxprice . "/Box<br> ";
                                                echo $pieceprice . "/Piece<br> ";
                                            } else if ($box > 0 && $caton <= 0) {
                                                echo $boxprice . "/Box<br> ";
                                            } else if ($piece > 0) {
                                                echo $pieceprice . "/Piece<br> ";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $caton = $orderproductdetail->totalcatonorder;
                                            $box = $orderproductdetail->totalboxorder;
                                            $piece = $orderproductdetail->totalpieceorder;
                                            $boxpercaton = $product['boxpercaton'];
                                            $pieceperbox = $product['pieceperbox'];
                                            $boxprice = $orderproductdetail->boxprice;
                                            $pieceprice = $orderproductdetail->pieceprice;

                                            $totalcatonorder = $caton * $boxpercaton;
                                            $totalboxorder = $box * $pieceperbox;
                                            $totalpieceorder = $piece;

                                            $totalboxfinal = $totalcatonorder + $box;
                                            $totalpiecefinal1 = $totalboxfinal * $pieceperbox;
                                            $totalpiecefinal2 = $totalcatonorder * $pieceperbox;
                                            $totalpiecefinal = $totalboxorder + $totalpieceorder;
                                            $final = $totalpiecefinal1 + $totalpieceorder;
                                            $final2 = $totalpiecefinal2 + $totalpieceorder;

                                            if ($caton <= 0 && $box <= 0) {
                                                $total = $totalpieceorder * $pieceprice;
                                                echo $total;
                                            } else if ($piece <= 0 && $box > 0 && $caton <= 0) {
                                                $total = $box * $boxprice;
                                                echo $total;
                                            } else if ($piece <= 0 && $box <= 0 && $caton > 0) {
                                                $total = $totalcatonorder * $boxprice;
                                                echo $total;
                                            } else if ($piece > 0 && $box > 0 && $caton <= 0) {
                                                $total = $totalpiecefinal * $pieceprice;
                                                echo $total;
                                            } else if ($piece > 0 && $box <= 0 && $caton > 0) {
                                                $total = $final2 * $pieceprice;
                                                echo $total;
                                            } else if ($piece <= 0 && $box > 0 && $caton > 0) {
                                                $total = $totalboxfinal * $boxprice;
                                                echo $total;
                                            } else if ($piece > 0 && $box > 0 && $caton > 0) {
                                                $total = $final * $pieceprice;
                                                echo $total;
                                            } else {
                                                $total = $totalpiecefinal * $boxprice;
                                                echo $total;
                                            }
                                            ?>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
 <div class="col-12">
                        <!-- <p class="lead">Amount Due 2/22/2014</p> -->

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th> Total Item's: <span>  <?= $catonquantity; ?></span> Caton's / <span
                                            >  <?= $boxquantity; ?></span> Box's / <span>  <?= $piecequantity; ?></span> Piece's
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                <div class="row">
                    <!-- accepted payments column -->
                    <!-- <div class="col-6">
                        <p class="lead">Total Item: 4</p> -->
                    <!-- <img src="<?php //echo base_url() ?>public/dist/img/credit/visa.png" alt="Visa">
                    <img src="<?php //echo base_url() ?>public/dist/img/credit/mastercard.png" alt="Mastercard">
                    <img src="<?php //echo base_url() ?>public/dist/img/credit/american-express.png"
                        alt="American Express">
                    <img src="<?php //echo base_url() ?>public/dist/img/credit/paypal2.png" alt="Paypal"> -->

                    <!-- <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango
                        imeem plugg dopplr
                        jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                    </p> -->
                    <!-- </div> -->
                    <!-- /.col -->
                    <div class="col-12">
                        <!-- <p class="lead">Amount Due 2/22/2014</p> -->

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th> Gross total:</th>
                                    <td>Rs.
                                        <?php echo $amount ?>
                                    </td>
                                </tr>
                                <?php

                                if ($paymentmethod == 2) {

                                    ?>
                                    <tr>
                                        <th>Advance:</th>
                                        <td>Rs.
                                            <?php echo $creditamount ?>
                                        </td>
                                    </tr>

                                    <?php

                                } else {
                                    ?>
                                    <tr>
                                        <th>Payment:</th>
                                        <td>
                                            Cash
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            <?php if ($discount != 0) { ?>
                            <tr>
                                <th>Dis:</th>
                                <td>Rs.
                                        <?php echo $discount; ?>
                                </td>
                            </tr>
                             <?php } ?>
                                <?php

                                if ($paymentmethod == 2 && $paymentmethod >= 0 && $discount >= 0) {
                                    $balace = $amount - $creditamount - $discount
                                        ?>
                                    <tr>
                                        <th>Balace:</th>
                                        <td>Rs.
                                            <?php echo $balace ?>
                                        </td>
                                    </tr>
                                    <?php
                                } else if ($discount > 0 && $paymentmethod == 2) {
                                    $amount = $amount - $creditamount;
                                    $nettotal = $amount - $discount;
                                    ?>
                                        <tr>
                                            <th>Net Total:</th>
                                            <td>Rs.
                                            <?php echo $nettotal ?>
                                            </td>
                                        </tr>
                                    <?php
                                } else {
                                    $nettotal = $amount - $discount;

                                    ?>
                                        <tr>
                                            <th>Net Total:</th>
                                            <td>Rs.
                                            <?php echo $nettotal ?>
                                            </td>
                                        </tr>
                                    <?php
                                }
                                ?>

                            </table>
                        </div>
                    </div>

                    <div class="col-12">
                        <!-- <p class="lead">Amount Due 2/22/2014</p> -->

                        <p style="direction: rtl;
    text-align: right;
    font-family: system-ui;
    padding-right: 10px;"> آرڈر لیتے وقت اپنا آرڈر تسلی سے چیک کرلیں بعد میں کمپنی ذمہ دار نہیں ہوگی
                        </p>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <center><a type="button" class="btn btn-block btn-dark btn-lg" id="print">Print</a></center>
                 <center><a type="button" onclick="takeScreenshot()" class="btn btn-block btn-lg">Take Screenshot and Share via WhatsApp</a></center>
            </section>
            <!-- /.content -->

        </div>

    </div>
    <!-- /.content-wrapper -->




    <script>
        $(document).ready(function () {
            $('#print').on('click', function () {
                console.log('Button clicked');

                var ordernumber = $('#ordernumber').text();
                console.log(ordernumber);
                // Make an AJAX request to trigger the controller function
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url() ?>emptyTable', // Replace with your controller route
                    data: {
                        ordernumber: ordernumber,
                    },
                    success: function (response) {
                        // Handle the response if needed
                        console.log('Function executed successfully');
                        window.location.href = '<?php echo base_url() ?>invoice_print/' + ordernumber;
                    },
                    error: function () {
                        // Handle errors if the request fails
                        console.error('Error executing function');
                    }
                });
            });
        });
    </script>
 

    <?php include('footer.php'); ?>