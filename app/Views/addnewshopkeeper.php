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
                <form method="post" action="<?php echo base_url('form/addshopkeeper'); ?>"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Shopkeeper Name</label>
                                <input type="text" name="shopkeepername" id="shopkeepername" class="form-control"
                                    placeholder="shopkeeper Name..." required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" inputmode="text" name="address" id="address" class="form-control"
                                    placeholder="Address ..." required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Google Map</label> <a href="#" id="getGoogleMapLink"><span style="padding-left: 10px;
    
    font-weight: 700;">Get Google Map
                                        Link</span></a>
                                <input type="text" inputmode="text" name="googlemap" id="googlemap" class="form-control"
                                    placeholder="Google Map ...">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone Number</label><span id="correntnumber"
                                    style="color: Green;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <span id="wrongnumber"
                                    style="color: red;font-style: italic;font-weight: 600;padding-left: 15px;"></span>
                                <input type="number" pattern="[0-9]*" inputmode="tel" name="phonenumber"
                                    id="phonenumber" data-ajax-url="<?= base_url('ajaxphonenumber'); ?>"
                                    class="form-control" placeholder="Phone Number ...">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Area</label>
                                <select name="area" id="area" class="form-control select2" style="width: 100%;"
                                    required>
                                    <option value="">Select Area</option>
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
                        <center><button type="submit" class="btn btn-primary" id="saveshopkeeper">Save</button></center>
                    </div>
                </form>






                <script>
                    if ("geolocation" in navigator) {
                        // Geolocation is available
                        navigator.geolocation.getCurrentPosition(function (position) {
                            var latitude = position.coords.latitude;
                            var longitude = position.coords.longitude;

                            console.log("Latitude: " + latitude);
                            console.log("Longitude: " + longitude);

                            // You can use latitude and longitude to display the user's location on a map or for other purposes.
                        }, function (error) {
                            switch (error.code) {
                                case error.PERMISSION_DENIED:
                                    console.error("User denied the request for Geolocation.");
                                    break;
                                case error.POSITION_UNAVAILABLE:
                                    console.error("Location information is unavailable.");
                                    break;
                                case error.TIMEOUT:
                                    console.error("The request to get user location timed out.");
                                    break;
                                case error.UNKNOWN_ERROR:
                                    console.error("An unknown error occurred.");
                                    break;
                            }
                        });
                    } else {
                        // Geolocation is not available in this browser
                        console.error("Geolocation is not available in this browser.");
                    }


                    // if ("geolocation" in navigator) {
                    //   // Geolocation is available
                    //   navigator.geolocation.getCurrentPosition(function(position) {
                    //     // Get the latitude and longitude from the position object
                    //     var latitude = position.coords.latitude;
                    //     var longitude = position.coords.longitude;

                    //     // Use the latitude and longitude as needed
                    //     console.log("Latitude: " + latitude);
                    //     console.log("Longitude: " + longitude);

                    //     // You can also display the location on a map using services like Google Maps
                    //     var mapLink = "https://maps.google.com/?q=" + latitude + "," + longitude;
                    //     console.log("Map Link: " + mapLink);
                    //     var googlemapInput = document.getElementById("googlemap");
                    //     googlemapInput.value = mapLink;
                    //   }, function(error) {
                    //     // Handle any errors that occur when retrieving the location
                    //     console.error("Error getting location:", error);
                    //   });
                    // } else {
                    //   // Geolocation is not available in this browser
                    //   console.error("Geolocation is not available.");
                    // }

                    // Function to get and set the Google Map link
                    function getGoogleMapLink() {
                        if ("geolocation" in navigator) {
                            // Geolocation is available
                            navigator.geolocation.getCurrentPosition(function (position) {
                                // Get the latitude and longitude from the position object
                                var latitude = position.coords.latitude;
                                var longitude = position.coords.longitude;

                                // Use the latitude and longitude as needed
                                console.log("Latitude: " + latitude);
                                console.log("Longitude: " + longitude);

                                // Create the Google Map link
                                var mapLink = "https://maps.google.com/?q=" + latitude + "," + longitude;

                                // Set the link in the input field
                                var googlemapInput = document.getElementById("googlemap");
                                googlemapInput.value = mapLink;
                            }, function (error) {
                                // Handle any errors that occur when retrieving the location
                                console.error("Error getting location:", error);
                            });
                        } else {
                            // Geolocation is not available in this browser
                            console.error("Geolocation is not available.");
                        }
                    }

                    // Add a click event listener to the "Get Google Map Link" link
                    document.getElementById("getGoogleMapLink").addEventListener("click", function (event) {
                        event.preventDefault(); // Prevent the default link behavior
                        getGoogleMapLink(); // Call the function to get and set the Google Map link
                    });
                </script>


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- general form elements disabled -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('footer.php'); ?>