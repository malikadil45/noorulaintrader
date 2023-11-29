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
                <form method="post" action="<?php echo base_url('form/addproduct'); ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="productname" id="productname" class="form-control"
                                    placeholder="Name ..." required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Stock in Cotton</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="stockincotton"
                                    id="stockincotton" class="form-control" placeholder="Stock in Box ..." required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Stock in Box</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="stockinbox"
                                    id="stockinbox" class="form-control" placeholder="Stock in Box ...">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Box Price</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="boxprice" id="boxprice"
                                    class="form-control" placeholder="Box Price ..." step="any" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Piece Price</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="pieceprice"
                                    id="pieceprice" class="form-control" placeholder="Piece Price ..." step="any"
                                    required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Box Per Caton</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="boxpercaton"
                                    id="boxpercaton" class="form-control" placeholder="Piece Per Box ..." required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Piece Per Box</label>
                                <input type="number" pattern="[0-9]*" inputmode="numeric" name="pieceperbox"
                                    id="pieceperbox" class="form-control" placeholder="Piece Per Box ..." required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Vendor</label>
                                <select name="vendor" id="vendor" class="form-control select2" style="width: 100%;"
                                    required>
                                    <option value="">Select Vendor</option>
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
                        <center><button type="submit" class="btn btn-primary">Save Product</button></center>
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




                <?php
                // // Define the total number of boxes, pieces per box, and the total pieces sold
                // $totalBoxes = 10;
                // $piecesPerBox = 30;
                // $boxesSold = 0; // Replace with the number of boxes sold
                // $piecesSold = 38; // Replace with the number of pieces sold
                // // Initialize $remainingPiecesInBox
                // $remainingPiecesInBox = $piecesPerBox;
                // // Calculate remaining boxes and remaining pieces
                // if (!empty($boxesSold)) {
                //     $remainingBoxes = $totalBoxes - $boxesSold;
                // } else {
                //     $remainingBoxes = $totalBoxes;
                // }
                
                // if (!empty($piecesSold)) {
                //     $remainingPiecesInBox = $piecesPerBox - $piecesSold;
                // }
                
                // if ($remainingPiecesInBox < $piecesPerBox) {
                //     $remainingBoxes = $remainingBoxes - 1;
                // }
                // // Calculate total remaining pieces
                // if (empty($piecesSold)) {
                //     $totalRemainingPieces = $remainingBoxes * $piecesPerBox;
                // } else {
                //     $totalRemainingPieces = ($remainingBoxes * $piecesPerBox) + $remainingPiecesInBox;
                // }
                

                // // Output the result
                // echo "Remaining boxes: " . $remainingBoxes . " boxes<br>";
                // if (!empty($piecesSold)) {
                //     echo "Remaining pieces in one box: " . $remainingPiecesInBox . " pieces<br>";
                // }
                // echo "Total remaining pieces: " . $totalRemainingPieces . " pieces";
                






                //   ===========================================================================================
                
                // $totalBoxes = 10; // already in database update remaingboxes value here
                // $piecesPerBox = 30; //already in database
                // $totalPieces = 5; //already in database update remainingPieces value here
                

                // $boxesSoldatabase = 2; // get from the database after end day update into zero
                // $boxesSoldform = 0; // get value from the form 
                // $boxesSold = $boxesSoldatabase + $boxesSoldform; // add the form value into database value
                // echo $boxesSold."<br>"; // after added the final value that are update into the database 
                


                // $piecesSolddatabase = 35; // get from the database after end day update into zero
                // $piecesSoldform = 0; // Replace with the number of pieces sold database
                // $piecesSold = $piecesSolddatabase + $piecesSoldform; // Replace with the number of pieces sold database
                // echo $piecesSold."<br>"; // after added the final value that are update into the database 
                


                // // Calculate the number of boxes used for the sold pieces (including fractional boxes)
                // $boxesUsed = $piecesSold / $piecesPerBox;
                
                // // Calculate remaining boxes and remaining pieces (including fractional values)
                // $remainingBoxes = $totalBoxes - $boxesSold - $boxesUsed;
                
                // // Calculate remaining pieces (including fractional pieces)
                // $remainingPieces = (($remainingBoxes - floor($remainingBoxes)) * $piecesPerBox) + $totalPieces;
                
                // // Round the values to one decimal place
                // $boxesUsed = round($boxesUsed, 1);
                // $remainingPieces = round($remainingPieces, 1);
                
                // // Adjust the remaining pieces and boxes if necessary
                // if ($remainingPieces >= $piecesPerBox) {
                //     $remainingBoxes += floor($remainingPieces / $piecesPerBox);
                //     $remainingPieces = $remainingPieces % $piecesPerBox;
                // }
                
                // // Output the result
                // echo "Remaining Caton: " . floor($remainingBoxes) . " Caton / show in form<br>";
                // echo "Remaining Box in one Caton: " . $remainingPieces . " Box / show in form<br>";
                // echo "Total remaining Box: " . (floor($remainingBoxes) * $piecesPerBox + $remainingPieces) . " Box / not show in form just for compare";
                

                //   ===========================================================================================
                






                ?>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- general form elements disabled -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('footer.php'); ?>