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

                <?php if (session()->has('ordersuccess')): ?>
                    <div class="alert alert-success">
                        <?php echo session('ordersuccess'); ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->has('ordererror')): ?>
                    <div class="alert alert-danger">
                        <?php echo session('ordererror'); ?>
                    </div>
                <?php endif; ?>

                <form method="post" action="<?php echo base_url('form/confirmorder'); ?>" id="submitorder"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <?php
                                $orderid = $orders['orderid'];
                                // $serialNumber = rand(100000, 999999);
                                $serialNumber = $orderid + 1;
                                date_default_timezone_set("Asia/Karachi");
                                $today = date('Y-m-d H-i-s');
                                ?>
                                <input type="hidden" name="ordernumber" id="ordernumber"
                                    value="<?php echo $serialNumber; ?>">
                                <input type="hidden" name="date" id="date" value="<?php echo $today; ?>">
                                <label>Shopkeeper</label>
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
                            <label>Add Product's</label>
                            <div class="form-group">
                                <a type="button" class="btn btn-block btn-dark btn-sm" data-toggle="modal"
                                    data-target="#modal-add-product">Add Product's</a>
                            </div>
                        </div>

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
                                        <tbody id="table-body">
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </section>
                        <!-- /.content -->

                    </div>


                    <script>
                        // Wait for the document to be ready
                        $(document).ready(function () {
                            // Add a click event listener to all elements with the class "delete-button"
                            $(".delete-button").click(function () {
                                // Find the closest parent row of the clicked button and fade it out
                                $(this).closest(".table-row").fadeOut(300, function () {
                                    // Remove the row from the DOM after the fade-out animation is complete
                                    $(this).remove();
                                });
                            });
                        });
                    </script>



                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Payment Method</label>
                                <select name="wayofpayment" id="wayofpayment" class="form-control select2"
                                    style="width: 100%;" required>
                                    <option value="1">Cash</option>
                                    <option value="2">Credit</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12" id="amount-container" style="display: none;">
                            <div class="form-group">
                                <label>Advance Amount Received</label>
                                <input type="number" name="recevivedamount" id="recevivedamount" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Discount</label>
                                <input type="number" name="discount" id="discount" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- <p class="lead">Amount Due 2/22/2014</p> -->

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th> Gross total:</th>
                                    <td>
                                        <div id="cumulative-gross-total"> </div>
                                        <input type="hidden" name="totalamount" id="totalamount" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <th id="wayofpaymnet">Payment</th>
                                    <td id="advance">Cash</td>
                                </tr>
                                <tr>
                                    <th>Dis:</th>
                                    <td id="discountamount"></td>
                                </tr>
                                <tr>
                                    <th id="cumulative-total-heading">Net Total:</th>
                                    <td>
                                        <div id="cumulative-total"> </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- <p class="lead">Amount Due 2/22/2014</p> -->

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th> Total Item's: <span id="catonquantity"></span> Caton's / <span
                                            id="boxquantity"></span> Box's / <span id="piecequantity"></span> Piece's
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>


                    <script>
                        $(document).ready(function () {
                            // Hide or show the "Amount" input based on the selected payment method
                            $("#wayofpayment").on("change", function () {
                                if ($(this).val() === "2") { // "Credit" is selected
                                    $("#amount-container").show();
                                } else {
                                    $("#amount-container").hide();
                                }
                            });
                        });
                    </script>

                    <center><button type="submit" class="btn btn-block btn-dark btn-sm" id="submitButton">Confirm
                            Order</button></center>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- general form elements disabled -->

    </div>
    <!-- /.content-wrapper -->

    <style>
        .modal {
            overflow: auto !important;
        }

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

    <div class="modal fade" id="modal-add-product">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- The overlay element -->
                <div id="overlay"></div>
                <div class="lds-ring">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="modal-header">
                    <h4 class="modal-title">Add Product's</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?php echo base_url('form/addorderproduct'); ?>"
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="shopkeeper_id" id="shopkeeper_id" value="">
                        <input type="hidden" name="ordernumberramdon" id="ordernumberramdon" value="">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Product's</label>
                                <select name="productlists" id="productlists" class="form-control select2"
                                    style="width: 100%;" required>
                                    <option value="">Select Products's</option>
                                    <?php foreach ($products as $product): ?>
                                        <option value="<?php echo $product->id; ?>"
                                            data-ajax-url="<?= base_url('ajaxquantity'); ?>"
                                            data-ajax-url-price="<?= base_url('ajaxqprice'); ?>">
                                            <?php echo $product->productname; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <span id="error-span"
                            style="color: red;font-style: italic;font-weight: 600;padding-left: 15px;"></span><br>
                        <div class="col-sm-6 float-left">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Caton's</label>
                                <input type="number" name="todaycaton" id="todaycaton" class="form-control" value=""
                                    style="border: none;text-align: center;font-size: 40px;color: green;font-weight: 900;"
                                    disabled>
                            </div>

                        </div>
                        <div class="col-sm-6 float-left">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Box's</label>
                                <input type="number" name="salepiece" id="salepiece" class="form-control" value=""
                                    style="border: none;text-align: center;font-size: 40px;color: green;font-weight: 900;"
                                    disabled>
                            </div>

                        </div>
                        <div class="col-sm-6 float-left">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Piece's</label>
                                <input type="number" name="remainingPieces" id="remainingPieces" class="form-control"
                                    value=""
                                    style="border: none;text-align: center;font-size: 40px;color: green;font-weight: 900;"
                                    disabled>
                            </div>

                        </div>

                        <input type="number" name="remainingpiececompare" id="remainingpiececompare"
                            class="form-control" value=""
                            style="border: none;text-align: center;font-size: 40px;color: green;font-weight: 900;display:none;"
                            disabled>

                        <input type="number" name="remainingboxcompare" id="remainingboxcompare" class="form-control"
                            value=""
                            style="border: none;text-align: center;font-size: 40px;color: green;font-weight: 900;display:none;"
                            disabled>

                        <input type="number" name="boxPerCaton" id="boxPerCaton" class="form-control" value=""
                            style="border: none;text-align: center;font-size: 40px;color: green;font-weight: 900;display:none;"
                            disabled>

                        <input type="number" name="piecesPerBox" id="piecesPerBox" class="form-control" value=""
                            style="border: none;text-align: center;font-size: 40px;color: green;font-weight: 900;display:none;"
                            disabled>

                        <br>
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Caton's</label><span id="resultsucesscaton"
                                    style="color: Green;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <span id="resultwrongcaton"
                                    style="color: red;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <span id="error-span-box-caton"
                                    style="color: red;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="totalcatonorder"
                                    id="totalcatonorder" class="form-control" placeholder="Caton to sale ...">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Box's</label><span id="resultsucess"
                                    style="color: Green;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <span id="resultwrong"
                                    style="color: red;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <span id="error-span-box"
                                    style="color: red;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="totalboxorder"
                                    id="totalboxorder" class="form-control" placeholder="Box to Sale ...">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Piece's</label><span id="resultsucesspiece"
                                    style="color: Green;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <span id="resultwrongpiece"
                                    style="color: red;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <span id="resultremainpiece"
                                    style="color: red;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <span id="error-span-piece"
                                    style="color: red;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="totalpieceorder"
                                    id="totalpieceorder" class="form-control" placeholder="Piece to Sale ...">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <!-- <i class="fa-sharp fa-solid fa-rupee-sign fa-beat" style="color: #10c613;float: right;font-size: 22px;"></i> -->
                                <label>Box Price</label> <i class="fas fa-edit fa-beat fa-2xl" data-toggle="modal"
                                    data-target="#modal-edit-product-price"
                                    style="color: #2f5d09;float: Left;cursor: pointer;margin-top: 10px;"></i> <i
                                    class="fa-solid fa-square-plus fa-beat fa-2xl" data-toggle="modal"
                                    data-target="#modal-add-product-price"
                                    style="color: #2f5d09;float: right;cursor: pointer;margin-top: 10px;"></i><span
                                    id="error-span-price"
                                    style="color: red;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="pieceprice"
                                    id="pieceprice" class="form-control" placeholder="Piece to Sale ..." value=""
                                    step="any" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <!-- <i class="fa-sharp fa-solid fa-rupee-sign fa-beat" style="color: #10c613;float: right;font-size: 22px;"></i> -->

                                <label>Piece Price</label><span id="error-span-piece-price"
                                    style="color: red;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="pricebox" id="pricebox"
                                    class="form-control" placeholder="Piece to Sale ..." value="" step="any" required>
                            </div>
                        </div>
                    </div>
                    <div id="error-div" class="alert alert-danger" style="display: none;"></div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal"
                            style="color:black">Close</button>
                        <button type="button" class="btn btn-outline-light" id="addorderproduct"
                            style="color:black">Add</button>
                    </div>

                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>





    <div class="modal fade" id="modal-add-product-price">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Product Price</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Add this code to display error message if it exists -->
                <?php if (session()->has('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo session('error'); ?>
                    </div>
                <?php endif; ?>
                <div id="error-div" class="alert alert-danger" style="display: none;"></div>

                <div id="success-div" class="alert alert-success" style="display: none;"></div>

                <?php if (session()->has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo session('success'); ?>
                    </div>
                <?php endif; ?>


                <form method="post" action="<?php echo base_url('form/addproductprice'); ?>"
                    enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" name="shopkeeperidprice" id="shopkeeperidprice" value="">
                        <input type="hidden" name="productidprice" id="productidprice" value="">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Box Price</label>
                                <!-- <span id="error-already-price"
                                    style="color: red;font-style: italic;font-weight: 600;padding-left: 15px;"></span> -->
                                <span id="error-span-box-price"
                                    style="color: red;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" step="any" name="boxprice"
                                    id="boxprice" class="form-control" placeholder="Box Price..." required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Piece Price</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" step="any" inputmode="text"
                                    name="pricepiece" id="pricepiece" class="form-control"
                                    placeholder="Piece Price ...">
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <!-- <center><button type="submit" class="btn btn-primary" id="saveshopkeeperprice">Save</button>
                        </center> -->
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal"
                                style="color:black">Close</button>
                            <button type="button" class="btn btn-outline-light" id="saveshopkeeperprice"
                                style="color:black">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->








    <div class="modal fade" id="modal-edit-product-price">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Product Price</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="edit-error-div" class="alert alert-danger" style="display: none;"></div>
                <div id="edit-success-div" class="alert alert-success" style="display: none;"></div>

                <form method="post" action="<?php echo base_url('form/edithopkeeperprice'); ?>"
                    enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" name="editshopkeeperidprice" id="editshopkeeperidprice" value="">
                        <input type="hidden" name="editproductidprice" id="editproductidprice" value="">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Box Price</label>
                                <!-- <span id="error-already-price"
                                    style="color: red;font-style: italic;font-weight: 600;padding-left: 15px;"></span> -->
                                <span id="error-span-edit-box-price"
                                    style="color: red;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" step="any" name="editboxprice"
                                    id="editboxprice" class="form-control" placeholder="Box Price..." required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Piece Price</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" step="any" inputmode="text"
                                    name="editpricepiece" id="editpricepiece" class="form-control"
                                    placeholder="Piece Price ...">
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <!-- <center><button type="submit" class="btn btn-primary" id="saveshopkeeperprice">Save</button>
                        </center> -->
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal"
                                style="color:black">Close</button>
                            <button type="button" class="btn btn-outline-light" id="edithopkeeperprice"
                                style="color:black">update</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->





    <script>
        var addOrderProductURL = "<?php echo base_url('form/addorderproduct'); ?>";
        var deleteorderproduct = "<?php echo base_url('form/deleteorderproduct'); ?>";
        var addproductprice = "<?php echo base_url('form/addproductprice'); ?>";
        var edithopkeeperprice = "<?php echo base_url('form/edithopkeeperprice'); ?>";

        $(document).ready(function () {

            // Listen for changes in the shopkeeper select element
            $("#shopkeeper").on("change", function () {
                var selectedShopkeeperId = $(this).val();
                var ordernumberValue = $("#ordernumber").val();
                console.log(ordernumberValue);
                // Set the selected shopkeeper ID in the hidden input field
                $("#shopkeeper_id").val(selectedShopkeeperId);
                $("#ordernumberramdon").val(ordernumberValue);
                $("#shopkeeperidprice").val(selectedShopkeeperId);
                $("#editshopkeeperidprice").val(selectedShopkeeperId);
            });

            $("#productlists").on("change", function () {
                var productidprice = $(this).val();
                $("#productidprice").val(productidprice);
                $("#editproductidprice").val(productidprice);

            });

            $('#submitButton').on('click', function () {
                console.log('Button clicked');
                // Make an AJAX request to trigger the controller function
                var formData = $("form").serialize();
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url() ?>copytable', // Replace with your controller route
                    data: formData,
                    success: function (response) {
                        // Handle the response if needed
                        console.log('Function executed successfully');
                    },
                    error: function () {
                        // Handle errors if the request fails
                        console.error('Error executing function');
                    }
                });
            });

            printInvoice();

        });


        function printInvoice() {
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
                },
                error: function () {
                    // Handle errors if the request fails
                    console.error('Error executing function');
                }
            });
        }
    </script>


    <script>
        var formSubmitted = false;

        // Attach a click event listener to the submit button
        document.getElementById("submitButton").addEventListener("click", function () {
            formSubmitted = true;
        });

        // Attach an event listener to the beforeunload event
        window.addEventListener("beforeunload", function (e) {
            // Check if the form has been submitted
            if (!formSubmitted) {
                // Display a confirmation message to inform the user
                e.returnValue = "Your data may be lost. Are you sure you want to leave this page?";
            }
        });
    </script>




    <?php include('footer.php'); ?>