<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\CountryModel;

class Home extends BaseController
{
    protected $userModel;
    public function __construct()
    {

        $this->userModel = new UserModel();
    }
    protected $global = [];
    public function index()
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            $this->global['pageTitle'] = "Login || Noor Ul Ain Trader List's";
            $this->global['breadcrumb'] = "Login";
            return view('login', $this->global);
        } else {
            $products = $this->userModel->selectData("products");
            $data['products'] = $products;
            $stockdetails = $this->userModel->selectstock("products");
            $data['stockdetails'] = $stockdetails;
            $orders = $this->userModel->selectorderdashboard("orders");
            $data['orders'] = $orders;
            $shopkeepers = [];
            foreach ($orders as $order) {
                $shopkeeperid = $order->shopkeeperid;
                $shopkeeper = $this->userModel->getshopkeeperbyid($shopkeeperid);
                $shopkeepers[$shopkeeperid] = $shopkeeper;
            }
            $data2['shopkeepers'] = $shopkeepers;
            $today_data = $this->userModel->getTodayData(); // Call the model method
            // Handle the retrieved data as needed, for example, pass it to a view
            $data3['today_data'] = $today_data;
            $today_data_cash = $this->userModel->getTodayDatacash(); // Call the model method
            // Handle the retrieved data as needed, for example, pass it to a view
            $data3['today_data_cash'] = $today_data_cash;
            $today_data_credit = $this->userModel->getTodayDatacredit(); // Call the model method
            // Handle the retrieved data as needed, for example, pass it to a view
            $data3['today_data_credit'] = $today_data_credit;
            $all_data_credit = $this->userModel->getDatacredit(); // Call the model method
            // Handle the retrieved data as needed, for example, pass it to a view
            $data8['all_data_credit'] = $all_data_credit;
            $totalRows = $this->userModel->countRows('orders'); // Call the model method
            $data4 = ['totalRows' => $totalRows];
            $totalproductsRows = $this->userModel->countRows('products'); // Call the model method
            $data5 = ['totalproductsRows' => $totalproductsRows];
            $totalshopkeeperRows = $this->userModel->countRows('shopkeeper'); // Call the model method
            $data6 = ['totalshopkeeperRows' => $totalshopkeeperRows];
            $gettotalsale = $this->userModel->gettotalsale(); // Call the model method
            // Handle the retrieved data as needed, for example, pass it to a view
            $data7['gettotalsale'] = $gettotalsale;
            // echo "<pre>";
            // print_r($totalRows );
            // echo "</pre>";
            // exit();
            $this->global['pageTitle'] = "Dashboard || Noor Ul Ain Trader List's";
            $this->global['breadcrumb'] = "Dashboard";
            return view('dashboard', array_merge($this->global, $data, $data2, $data3, $data4, $data5, $data6, $data7, $data8));
            // return redirect()->to('dashboard',array_merge($this->global, $data));
        }

    }


    public function dashboard()
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        } else {
            $products = $this->userModel->selectData("products");
            $data['products'] = $products;
            $stockdetails = $this->userModel->selectstock("products");
            $data['stockdetails'] = $stockdetails;
            $orders = $this->userModel->selectorderdashboard("orders");
            $data['orders'] = $orders;
            $shopkeepers = [];
            foreach ($orders as $order) {
                $shopkeeperid = $order->shopkeeperid;
                $shopkeeper = $this->userModel->getshopkeeperbyid($shopkeeperid);
                $shopkeepers[$shopkeeperid] = $shopkeeper;
            }
            $data2['shopkeepers'] = $shopkeepers;
            $today_data = $this->userModel->getTodayData(); // Call the model method
            // Handle the retrieved data as needed, for example, pass it to a view
            $data3['today_data'] = $today_data;
            $today_data_cash = $this->userModel->getTodayDatacash(); // Call the model method
            // Handle the retrieved data as needed, for example, pass it to a view
            $data3['today_data_cash'] = $today_data_cash;
            $today_data_credit = $this->userModel->getTodayDatacredit(); // Call the model method
            // Handle the retrieved data as needed, for example, pass it to a view
            $data3['today_data_credit'] = $today_data_credit;
            $all_data_credit = $this->userModel->getDatacredit(); // Call the model method
            // Handle the retrieved data as needed, for example, pass it to a view
            $data8['all_data_credit'] = $all_data_credit;
            $totalRows = $this->userModel->countRows('orders'); // Call the model method
            $data4 = ['totalRows' => $totalRows];
            $totalproductsRows = $this->userModel->countRows('products'); // Call the model method
            $data5 = ['totalproductsRows' => $totalproductsRows];
            $totalshopkeeperRows = $this->userModel->countRows('shopkeeper'); // Call the model method
            $data6 = ['totalshopkeeperRows' => $totalshopkeeperRows];
            $gettotalsale = $this->userModel->gettotalsale(); // Call the model method
            // Handle the retrieved data as needed, for example, pass it to a view
            $data7['gettotalsale'] = $gettotalsale;
            // echo "<pre>";
            // print_r($totalRows );
            // echo "</pre>";
            // exit();
            $this->global['pageTitle'] = "Dashboard || Noor Ul Ain Trader List's";
            $this->global['breadcrumb'] = "Dashboard";
            return view('dashboard', array_merge($this->global, $data, $data2, $data3, $data4, $data5, $data6, $data7, $data8));
            // return redirect()->to('dashboard',array_merge($this->global, $data));
        }

    }


    public function forgot_password()
    {
        $this->global['pageTitle'] = 'Forgot Password  : Noor Ul Ain Trader';
        return view('forgot-password', $this->global);
    }


    public function productlists()
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        }
        $products = $this->userModel->selectData("products");
        $data['products'] = $products;
        $this->global['pageTitle'] = 'Products Lists : Noor Ul Ain Trader';
        $this->global['breadcrumb'] = "Products Lists";
        return view('productlists', array_merge($this->global, $data));
    }

    public function productprice()
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        }
        $products = $this->userModel->selectData("products");
        $data['products'] = $products;
        $shopkeeper = $this->userModel->selectData("shopkeeper");
        $data['shopkeepers'] = $shopkeeper;
        $this->global['pageTitle'] = 'Products Price : Noor Ul Ain Trader';
        $this->global['breadcrumb'] = "Products Price";
        return view('productprice', array_merge($this->global, $data));
    }

    public function productpricelists()
    {
        $userModel = new UserModel();
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        }
        $products = $this->userModel->selectData("productprice");

        // Process the country data for each member
        $productData = [];
        foreach ($products as $product) {
            $productid = $product->productid;
            $productname = $userModel->getProductNamessecond($productid);
            $productData[$productid] = $productname;
        }
        $data['products'] = $products;
        $data['productData'] = $productData;

        $this->global['pageTitle'] = 'Products Price Lists : Noor Ul Ain Trader';
        $this->global['breadcrumb'] = "Products Price Lists";
        return view('productpricelists', array_merge($this->global, $data));
    }
    public function orderlists()
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        }
        $orders = $this->userModel->selectorderlists("orders");
        $data['orders'] = $orders;
        $shopkeepers = [];
        foreach ($orders as $order) {
            $shopkeeperid = $order->shopkeeperid;
            $shopkeeper = $this->userModel->getshopkeeperbyid($shopkeeperid);
            $shopkeepers[$shopkeeperid] = $shopkeeper;
        }
        $data2['shopkeepers'] = $shopkeepers;
        $this->global['pageTitle'] = 'Order Lists : Noor Ul Ain Trader';
        $this->global['breadcrumb'] = "Order Lists";
        return view('orderlists', array_merge($this->global, $data, $data2));
    }


    public function shopkeeperlists()
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        }
        $shopkeeper = $this->userModel->selectData("shopkeeper");
        $data['shopkeepers'] = $shopkeeper;
        $this->global['pageTitle'] = 'Shopkeeper Lists  : Noor Ul Ain Trader';
        $this->global['breadcrumb'] = "Shopkeeper Lists";
        return view('shopkeeperlists', array_merge($this->global, $data));
    }
    public function addnewproduct()
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        }
        $this->global['pageTitle'] = 'Add New Product  : Noor Ul Ain Trader';
        $this->global['breadcrumb'] = "Add New";
        return view('addnewproduct', $this->global);
    }

    public function addnewshopkeeper()
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        }
        $this->global['pageTitle'] = 'Add New Shopkeeper  : Noor Ul Ain Trader';
        $this->global['breadcrumb'] = "Add New Shopkeeper";
        return view('addnewshopkeeper', $this->global);
    }
    public function addneworder()
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        }
        $products = $this->userModel->selectData("products");
        $data['products'] = $products;
        $shopkeeper = $this->userModel->selectData("shopkeeper");
        $data['shopkeepers'] = $shopkeeper;
        $orders = $this->userModel->selectDatarowlimit("orders");
        $data['orders'] = $orders;
        $this->global['pageTitle'] = 'Add New Order  : Noor Ul Ain Trader';
        $this->global['breadcrumb'] = "Add New Order";
        return view('addneworder', array_merge($this->global, $data));
    }

    public function ajaxquantity()
    {
        $productlists = $this->request->getPost('productlists');
        $todaystocks = $this->userModel->getproductquantitybyid($productlists);
        $data['todaystocks'] = $todaystocks;


        $todaycaton = $todaystocks['todaycaton'];
        $boxpercaton = $todaystocks['boxpercaton'];
        $todaystock = $todaystocks['todaystock'];
        $todaystockpiece = $todaystocks['todaystockpiece'];
        $pieceperbox = $todaystocks['pieceperbox'];
        $catonSoldatabase = $todaystocks['catonSoldatabase'];
        $boxesSoldatabase1 = $todaystocks['boxesSoldatabase'];
        $piecesSolddatabase1 = $todaystocks['piecesSolddatabase'];



        // $totalBoxes = $todaycaton; // already in database update remaingboxes value here
        // $piecesPerBox = $boxpercaton; //already in database
        // $totalPieces = $todaystock; //already in database update remainingPieces value here


        // $boxesSoldatabase = $boxesSoldatabase1; // get from the database after end day update into zero
        // $boxesSoldform = 0; // get value from the form 
        // $boxesSold = $boxesSoldatabase + $boxesSoldform; // add the form value into database value
        // //$boxesSold = $boxesSoldatabase; // add the form value into database value
        // echo $boxesSold . "<br>"; // after added the final value that are update into the database 



        // $piecesSolddatabase = $piecesSolddatabase1; // get from the database after end day update into zero
        // $piecesSoldform = 0; // Replace with the number of pieces sold database
        // $piecesSold = $piecesSolddatabase + $piecesSoldform; // Replace with the number of pieces sold database
        // // $piecesSold = $piecesSolddatabase; // Replace with the number of pieces sold database
        // echo $piecesSold . "<br>"; // after added the final value that are update into the database 



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

        // $remainingBoxes = floor($remainingBoxes);
        // $remainingPiecescompare = (floor($remainingBoxes) * $piecesPerBox + $remainingPieces);


        $totalCaton = $todaycaton; // Total cartons you have
        $boxPerCaton = $boxpercaton; // Number of boxes per carton
        $piecesPerBox = $pieceperbox; // Number of pieces per box
        $losebox = $todaystock; // Total boxes you have
        $totalPieces = $todaystockpiece; // Total pieces you have

        $cartonsSold = $catonSoldatabase; // Number of cartons sold
        $boxesSold = $boxesSoldatabase1; // Number of boxes sold
        $piecesSold = $piecesSolddatabase1; // Number of pieces sold

        // Calculate the total number of pieces you have
        $totalPieces = $totalCaton * $boxPerCaton * $piecesPerBox + $losebox * $piecesPerBox + $totalPieces;

        $totalBoxfinal = ($totalCaton * $boxPerCaton) + $losebox;
        $boxesSoldfinal = ($cartonsSold * $boxPerCaton) + $boxesSold;

        // Calculate the total number of pieces sold
        $totalSold = $cartonsSold * $boxPerCaton * $piecesPerBox + $boxesSold * $piecesPerBox + $piecesSold;

        // Calculate the remaining quantities
        $remainingPieces = $totalPieces - $totalSold;
        $remainingCaton = floor($remainingPieces / ($boxPerCaton * $piecesPerBox));
        $remainingPieces %= ($boxPerCaton * $piecesPerBox);
        $remainingBox = floor($remainingPieces / $piecesPerBox);
        $remainingPieces %= $piecesPerBox;
        $remainingboxcompare = ($remainingCaton * $boxPerCaton + $remainingBox);
        $remainingpiececompare = ($remainingCaton * $boxPerCaton * $piecesPerBox + $remainingBox * $piecesPerBox + $remainingPieces);

        echo "Total carton: " . $totalCaton . "<br>";
        echo "Total box: " . $totalBoxfinal . "<br>";

        $response = array(
            'remainingCaton' => $remainingCaton,
            'remainingBox' => $remainingBox,
            'remainingPieces' => $remainingPieces,
            'remainingboxcompare' => $remainingboxcompare,
            'remainingpiececompare' => $remainingpiececompare,
            'boxPerCaton' => $boxPerCaton,
            'piecesPerBox' => $piecesPerBox
        );

        // Send the response as JSON
        header('Content-Type: application/json');
        echo json_encode(array($response));







        // // Set the response content type to JSON
        // $this->response->setContentType('application/json');

        // echo json_encode(array('data' => $response));
        // // return view('addneworder', $data);
    }

    public function ajaxphonenumber()
    {
        $phoneNumberValue = $this->request->getPost('phoneNumberValue');
        $phoneNumberValue = $this->userModel->selectData("shopkeeper");
        $data['phoneNumberValue'] = $phoneNumberValue;
        // Set the response content type to JSON
        $this->response->setContentType('application/json');

        echo json_encode($data);
        // return view('addneworder', $data);
    }

    public function ajaxqprice()
    {
        $productlists = $this->request->getPost('productlists');
        $shopkeeper_id = $this->request->getPost('shopkeeper_id');
        $productprice = $this->userModel->getproductpricebyid($productlists, $shopkeeper_id);
        $data['productprice'] = $productprice;
        // Set the response content type to JSON
        $this->response->setContentType('application/json');

        echo json_encode($data);
        // return view('addneworder', $data);
    }


    public function processLogin()
    {

        // Retrieve form data
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        // Validate login credentials
        $user = $this->userModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            // Authentication successful
            // Store user session, redirect to dashboard, etc.
            $session = \Config\Services::session();
            $session->set('name', $user['name']);
            return redirect()->to('dashboard');
        } else {
            // Example: $data['error'] = 'Invalid email or password';
            return redirect()->to('');
        }
    }

    public function logout()
    {
        // Clear the session data
        $session = \Config\Services::session();
        $session->destroy();
        // Redirect to the login page or any other desired page
        return redirect()->to('');
    }



    public function addproduct()
    {
        // Load the necessary helper and library
        helper('form');
        helper('url');
        $request = \Config\Services::request();

        // Retrieve the form data
        $productname = $request->getPost('productname');
        $stockincotton = $request->getPost('stockincotton');
        $stockinbox = $request->getPost('stockinbox');
        $boxprice = $request->getPost('boxprice');
        $pieceprice = $request->getPost('pieceprice');
        $boxpercaton = $request->getPost('boxpercaton');
        $pieceperbox = $request->getPost('pieceperbox');
        $vendor = $request->getPost('vendor');
        // $productdes = $request->getPost('productdes');

        // Insert the form data into the database
        $db = db_connect();
        $data = [
            'productname' => $productname,
            'stockincotton' => $stockincotton,
            'stockinbox' => $stockinbox,
            'boxprice' => $boxprice,
            'pieceprice' => $pieceprice,
            'boxpercaton' => $boxpercaton,
            'pieceperbox' => $pieceperbox,
            'vendor' => $vendor
        ];
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit();
        $db->table('products')->insert($data);
        $db->close();
        //return view('addnewproduct');
        return redirect()->to(base_url('addnewproduct'))->with('success', 'Data inserted successfully.');
    }




    // $productdata = $this->userModel->getproductquantitybyid($productid);
    // $data['productdatas'] = $productdata;

    // $boxesSoldatabase = $productdata['boxesSoldatabase'];
    // $piecesSolddatabase = $productdata['piecesSolddatabase'];

    // $orderproducts = $this->userModel->selectDatarow("orderproduct", array("productid" => $productid, "orderid" => $orderid));
    // $data['orderproduct'] = $orderproducts;

    // $totalcatonorder = $orderproducts['totalcatonorder'];
    // $totalboxorder = $orderproducts['totalboxorder'];

    // $finalvalue1 = $boxesSoldatabase - $totalcatonorder;
    // $finalvalue2 = $piecesSolddatabase - $totalboxorder;

    // $data = [
    //     'boxesSoldatabase' => $finalvalue1,
    //     'piecesSolddatabase' => $finalvalue2,
    // ];
    // $this->userModel->updateproductById($productid, $data);
    public function deleteorderproduct()
    {
        $productid = $_POST['productid'];
        $orderid = $_POST['orderid'];
        $id = $_POST['id'];




        $condition1 = ['productid' => $productid];
        $condition2 = ['orderid' => $orderid];
        $condition3 = ['id' => $id];

        $this->userModel->deleteData($condition1, $condition2, $condition3);

        $itemquantitydetails = $this->userModel->selectData("temporderproduct", );
        // $data['itemquantitydetails'] = $itemquantitydetails;
        $catonquantity = 0;
        $boxquantity = 0;
        $piecequantity = 0;
        foreach ($itemquantitydetails as $itemquantitydetail) {
            $catonquantity += $itemquantitydetail->totalcatonorder;
            $boxquantity += $itemquantitydetail->totalboxorder;
            $piecequantity += $itemquantitydetail->totalpieceorder;
        }

        $response = array(
            'productid' => $productid,
            'orderid' => $orderid,
            'id' => $id,
            'catonquantity' => $catonquantity,
            'boxquantity' => $boxquantity,
            'piecequantity' => $piecequantity,

        );
        header('Content-Type: application/json');
        echo json_encode(array('data' => $response));
    }

    // 'boxesSoldatabase' => $boxesSoldatabase,
    // 'piecesSolddatabase' => $piecesSolddatabase,
    // 'totalcatonorder' => $totalcatonorder,
    // 'totalboxorder' => $totalboxorder,
    // 'finalvalue1' => $finalvalue1,
    // 'finalvalue2' => $finalvalue2,

    public function addorderproduct()
    {
        // Access form data using $_POST
        $totalpieceorder = $_POST['totalpieceorder']; // Replace 'itemName' with the actual name attribute of your input field
        $totalcatonorder = $_POST['totalcatonorder']; // Replace 'qty' with the actual name attribute of your input field
        $totalboxorder = $_POST['totalboxorder']; // Replace 'qty' with the actual name attribute of your input field
        $pieceprice = $_POST['pieceprice']; // Replace 'price' with the actual name attribute of your input field
        $pricebox = $_POST['pricebox']; // Replace 'price' with the actual name attribute of your input field
        $productlists = $_POST['productlists']; // Replace 'price' with the actual name attribute of your input field
        $ordernumberramdon = $_POST['ordernumberramdon']; // Replace 'price' with the actual name attribute of your input field
        $total = "";

        $todaystock = $this->userModel->getproductquantitybyid($productlists);
        $data['todaystock'] = $todaystock;
        $productname = $todaystock['productname'];
        // $boxesSoldatabase = $todaystock['boxesSoldatabase'];
        // $piecesSolddatabase = $todaystock['piecesSolddatabase'];
        // $catonSoldatabase = $todaystock['catonSoldatabase'];
        $boxpercaton = $todaystock['boxpercaton'];
        $pieceperbox = $todaystock['pieceperbox'];






        // $catonSoldatabase1 = $catonSoldatabase; // get from the database after end day update into zero
        // $catonSoldform = $totalcatonorder; // Replace with the number of pieces sold database
        // if (!empty($catonSoldform)) {
        //     $catonSold = $catonSoldatabase1 + $catonSoldform; // Replace with the number of pieces sold database
        // } else {
        //     $catonSold = $catonSoldatabase1;
        // }

        // $boxesSoldatabase1 = $boxesSoldatabase; // get from the database after end day update into zero
        // $boxesSoldform = $totalboxorder; // get value from the form 
        // if (!empty($boxesSoldform)) {
        //     $boxesSold = $boxesSoldatabase1 + $boxesSoldform; // add the form value into database value
        // } else {
        //     $boxesSold = $boxesSoldatabase1;
        // }

        // $piecesSolddatabase1 = $piecesSolddatabase; // get from the database after end day update into zero
        // $piecesSoldform = $totalpieceorder; // Replace with the number of pieces sold database
        // if (!empty($piecesSoldform)) {
        //     $piecesSold = $piecesSolddatabase1 + $piecesSoldform; // Replace with the number of pieces sold database
        // } else {
        //     $piecesSold = $piecesSolddatabase1;
        // }


        // $data = [
        //     'catonSoldatabase' => $catonSold,
        //     'boxesSoldatabase' => $boxesSold,
        //     'piecesSolddatabase' => $piecesSold
        // ];

        // $this->userModel->updateproductorderById($productlists, $data);


        // Check if the combination of productid and shopkeeper exists in the database
        $db = db_connect();
        $existingRecord = $db->table('temporderproduct')
            // ->where('totalcatonorder', $totalcatonorder)
            // ->where('totalboxorder', $totalboxorder)
            // ->where('totalpieceorder', $totalpieceorder)
            ->where('productid', $productlists)
            ->where('orderid', $ordernumberramdon)
            ->get()
            ->getRow();

        if ($existingRecord) {
            // If a record with the same combination exists, return an error message
            $db->close();
            $response = ['error' => 'Duplicate entry: This Product is already added in order!'];
            header('Content-Type: application/json');
            echo json_encode(array('data' => $response));
        } else {
            $data = [
                'totalpieceorder' => $totalpieceorder,
                'totalcatonorder' => $totalcatonorder,
                'totalboxorder' => $totalboxorder,
                'productid' => $productlists,
                'orderid' => $ordernumberramdon,
                'boxprice' => $pieceprice,
                'pieceprice' => $pricebox,
            ];
            $db->table('temporderproduct')->insert($data);
            $productdetail = $this->userModel->selectLastRow(
                "temporderproduct",
                array(
                    "orderid" => $ordernumberramdon,
                    "productid" => $productlists,
                    "totalpieceorder" => $totalpieceorder,
                    "totalcatonorder" => $totalcatonorder,
                    "totalboxorder" => $totalboxorder,
                )
            );
            $data['productdetail'] = $productdetail;
            $temporderproductid = $productdetail['id'];

            $itemquantitydetails = $this->userModel->selectData("temporderproduct", );
            // $data['itemquantitydetails'] = $itemquantitydetails;
            $catonquantity = 0;
            $boxquantity = 0;
            $piecequantity = 0;
            foreach ($itemquantitydetails as $itemquantitydetail) {
                $catonquantity += $itemquantitydetail->totalcatonorder;
                $boxquantity += $itemquantitydetail->totalboxorder;
                $piecequantity += $itemquantitydetail->totalpieceorder;
            }


            $db->close();
            // After processing the data, you can prepare a response to send back to the client
            $response = array(
                'productlists' => $productlists,
                'productname' => $productname,
                'totalcatonorder' => $totalcatonorder,
                'totalboxorder' => $totalboxorder,
                'boxpercaton' => $boxpercaton,
                'pieceperbox' => $pieceperbox,
                'ordernumberramdon' => $ordernumberramdon,
                'totalpieceorder' => $totalpieceorder,
                'pieceprice' => $pieceprice,
                'pricebox' => $pricebox,
                'total' => $total,
                'adilid' => $temporderproductid,
                'catonquantity' => $catonquantity,
                'boxquantity' => $boxquantity,
                'piecequantity' => $piecequantity,
            );

            // Send the response as JSON
            header('Content-Type: application/json');
            echo json_encode(array('data' => $response));
        }
    }

    // echo "<pre>";
    // print_r($orders);
    // echo "</pre>";
    // exit();
    public function confirmorder()
    {



        // Load the necessary helper and library
        helper('form');
        helper('url');
        $request = \Config\Services::request();

        // Retrieve the form data
        $shopkeeper = $request->getPost('shopkeeper');
        $ordernumber = $request->getPost('ordernumber');
        $date = $request->getPost('date');
        $wayofpayment = $request->getPost('wayofpayment');
        $recevivedamount = $request->getPost('recevivedamount');
        $discount = $request->getPost('discount');
        $totalamount = $request->getPost('totalamount');
        $table = "temporderproduct";
        $orders = $this->userModel->selectData($table, array("orderid" => $ordernumber));



        foreach ($orders as $order) {

            $productid = $order->productid;
            $totalcatonorder = $order->totalcatonorder;
            $totalboxorder = $order->totalboxorder;
            $totalpieceorder = $order->totalpieceorder;


            $todaystock = $this->userModel->getproductquantitybyid($productid);
            $data['todaystock'] = $todaystock;


            $productname = $todaystock['productname'];
            $boxesSoldatabase = $todaystock['boxesSoldatabase'];
            $piecesSolddatabase = $todaystock['piecesSolddatabase'];
            $catonSoldatabase = $todaystock['catonSoldatabase'];
            $boxpercaton = $todaystock['boxpercaton'];
            $pieceperbox = $todaystock['pieceperbox'];


            $catonSoldatabase1 = $catonSoldatabase; // get from the database after end day update into zero
            $catonSoldform = $totalcatonorder; // Replace with the number of pieces sold database
            if (!empty($catonSoldform)) {
                $catonSold = $catonSoldatabase1 + $catonSoldform; // Replace with the number of pieces sold database
            } else {
                $catonSold = $catonSoldatabase1;
            }

            $boxesSoldatabase1 = $boxesSoldatabase; // get from the database after end day update into zero
            $boxesSoldform = $totalboxorder; // get value from the form 
            if (!empty($boxesSoldform)) {
                $boxesSold = $boxesSoldatabase1 + $boxesSoldform; // add the form value into database value
            } else {
                $boxesSold = $boxesSoldatabase1;
            }

            $piecesSolddatabase1 = $piecesSolddatabase; // get from the database after end day update into zero
            $piecesSoldform = $totalpieceorder; // Replace with the number of pieces sold database
            if (!empty($piecesSoldform)) {
                $piecesSold = $piecesSolddatabase1 + $piecesSoldform; // Replace with the number of pieces sold database
            } else {
                $piecesSold = $piecesSolddatabase1;
            }


            $data = [
                'catonSoldatabase' => $catonSold,
                'boxesSoldatabase' => $boxesSold,
                'piecesSolddatabase' => $piecesSold
            ];

            $this->userModel->updateproductorderById($productid, $data);

        }

        $db = db_connect();
        $existingRecord = $db->table('orders')
            // ->where('totalcatonorder', $totalcatonorder)
            // ->where('totalboxorder', $totalboxorder)
            // ->where('totalpieceorder', $totalpieceorder)
            ->where('orderid', $ordernumber)
            ->orderBy('orderid', 'DESC') // Order by 'created_at' column in descending order
            ->get()
            ->getRow();
        if ($existingRecord) {
            // If a record with the same combination exists, return an error message
            $db->close();
            return redirect()->to(base_url('addneworder'))->with('ordererror', 'Order Number Already Exit Please Refresh the page to add new order.');
        } else {
            $data = [
                'shopkeeperid' => $shopkeeper,
                'orderid' => $ordernumber,
                'date' => $date,
                'paymentmethod' => $wayofpayment,
                'creditamount' => $recevivedamount,
                'discount' => $discount,
                'amount' => $totalamount,
            ];
            $db->table('orders')->insert($data);
            $db->close();

            //return redirect()->to(base_url('addneworder'))->with('ordersuccess', 'Order successfull.');
            return redirect()->to('invoice/' . $ordernumber);
        }
    }

    public function copytable()
    {
        $ordernumber = $_POST['ordernumber'];
        $this->userModel->copytable($ordernumber);
    }
    public function emptyTable()
    {
        //$ordernumber = $_POST['ordernumber']; // Replace 'itemName' with the actual name attribute of your input field
        // Use the existing database connection
        $db = db_connect();

        // Build and execute the SQL query to truncate the table
        $db->query("TRUNCATE TABLE temporderproduct");

        // return redirect()->to('invoice_print/' . $ordernumber);
    }
    public function invoice($ordernumber)
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        }


        // $data = []; // Initialize the $data array
        $orderdetail = $this->userModel->selectDatarow("orders", array("orderid" => $ordernumber));
        $data['orderdetail'] = $orderdetail;

        $orderproductdetails = $this->userModel->selectData("orderproduct", array("orderid" => $ordernumber));
        $data1['orderproductdetails'] = $orderproductdetails;

        $productData = [];
        foreach ($orderproductdetails as $orderproductdetail) {
            $productid = $orderproductdetail->productid;
            $productname = $this->userModel->getProductNamessecond($productid);
            $productData[$productid] = $productname;
        }
        $data2['productData'] = $productData;

        $shopkeeperid = $orderdetail['shopkeeperid'];

        $shopkeeperdetail = $this->userModel->selectDatarow("shopkeeper", array("id" => $shopkeeperid));
        $data['shopkeeperdetail'] = $shopkeeperdetail;


        $paymentmethod = $orderdetail['paymentmethod'];
        $creditamount = $orderdetail['creditamount'];
        $amount = $orderdetail['amount'];
        $discount = $orderdetail['discount'];
        $date = $orderdetail['date'];
        $shopkeepername = $shopkeeperdetail['shopkeepername'];
        $address = $shopkeeperdetail['address'];
        $phonenumber = $shopkeeperdetail['phonenumber'];


        $itemquantitydetails = $this->userModel->selectData("orderproduct", array("orderid" => $ordernumber));
        // $data['itemquantitydetails'] = $itemquantitydetails;
        $catonquantity = 0;
        $boxquantity = 0;
        $piecequantity = 0;
        foreach ($itemquantitydetails as $itemquantitydetail) {
            $catonquantity += $itemquantitydetail->totalcatonorder;
            $boxquantity += $itemquantitydetail->totalboxorder;
            $piecequantity += $itemquantitydetail->totalpieceorder;
        }

        $data = [
            'ordernumber' => $ordernumber,
            'paymentmethod' => $paymentmethod,
            'creditamount' => $creditamount,
            'amount' => $amount,
            'discount' => $discount,
            'date' => $date,
            'shopkeepername' => $shopkeepername,
            'address' => $address,
            'phonenumber' => $phonenumber,
            'catonquantity' => $catonquantity,
            'boxquantity' => $boxquantity,
            'piecequantity' => $piecequantity,
        ];


        $this->global['pageTitle'] = 'Invoice  : Noor Ul Ain Trader';
        $this->global['breadcrumb'] = "Invoice";
        return view('invoice', array_merge($this->global, $data, $data1, $data2));
    }


    public function invoice_print($ordernumber)
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        }


        // $data = []; // Initialize the $data array
        $orderdetail = $this->userModel->selectDatarow("orders", array("orderid" => $ordernumber));
        $data['orderdetail'] = $orderdetail;

        $orderproductdetails = $this->userModel->selectData("orderproduct", array("orderid" => $ordernumber));
        $data1['orderproductdetails'] = $orderproductdetails;

        $productData = [];
        foreach ($orderproductdetails as $orderproductdetail) {
            $productid = $orderproductdetail->productid;
            $productname = $this->userModel->getProductNamessecond($productid);
            $productData[$productid] = $productname;
        }
        $data2['productData'] = $productData;

        $shopkeeperid = $orderdetail['shopkeeperid'];

        $shopkeeperdetail = $this->userModel->selectDatarow("shopkeeper", array("id" => $shopkeeperid));
        $data['shopkeeperdetail'] = $shopkeeperdetail;


        $paymentmethod = $orderdetail['paymentmethod'];
        $creditamount = $orderdetail['creditamount'];
        $amount = $orderdetail['amount'];
        $discount = $orderdetail['discount'];
        $date = $orderdetail['date'];
        $shopkeepername = $shopkeeperdetail['shopkeepername'];
        $address = $shopkeeperdetail['address'];
        $phonenumber = $shopkeeperdetail['phonenumber'];

        $itemquantitydetails = $this->userModel->selectData("orderproduct", array("orderid" => $ordernumber));
        // $data['itemquantitydetails'] = $itemquantitydetails;
        $catonquantity = 0;
        $boxquantity = 0;
        $piecequantity = 0;
        foreach ($itemquantitydetails as $itemquantitydetail) {
            $catonquantity += $itemquantitydetail->totalcatonorder;
            $boxquantity += $itemquantitydetail->totalboxorder;
            $piecequantity += $itemquantitydetail->totalpieceorder;
        }


        $data = [
            'ordernumber' => $ordernumber,
            'paymentmethod' => $paymentmethod,
            'creditamount' => $creditamount,
            'amount' => $amount,
            'discount' => $discount,
            'date' => $date,
            'shopkeepername' => $shopkeepername,
            'address' => $address,
            'phonenumber' => $phonenumber,
            'catonquantity' => $catonquantity,
            'boxquantity' => $boxquantity,
            'piecequantity' => $piecequantity,
        ];


        $this->global['pageTitle'] = 'invoice Print  : Noor Ul Ain Trader';
        $this->global['breadcrumb'] = "invoice Print";
        return view('invoice_print', array_merge($this->global, $data, $data1, $data2));
    }



    public function addshopkeeper()
    {
        // Load the necessary helper and library
        helper('form');
        helper('url');
        $request = \Config\Services::request();

        // Retrieve the form data
        $shopkeepername = $request->getPost('shopkeepername');
        $address = $request->getPost('address');
        $phonenumber = $request->getPost('phonenumber');
        $googlemap = $request->getPost('googlemap');
        $area = $request->getPost('area');
        // $productdes = $request->getPost('productdes');

        // Insert the form data into the database
        $db = db_connect();
        $data = [
            'shopkeepername' => $shopkeepername,
            'address' => $address,
            'phonenumber' => $phonenumber,
            'googlemap' => $googlemap,
            'area' => $area
        ];
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit();
        $db->table('shopkeeper')->insert($data);
        $db->close();
        //return view('addnewproduct');
        return redirect()->to(base_url('addnewshopkeeper'))->with('success', 'Data inserted successfully.');
    }
    public function addproductprice()
    {
        // Load the necessary helper and library
        // helper('form');
        // helper('url');
        // $request = \Config\Services::request();
        $shopkeeperidprice = $_POST['shopkeeperidprice'];
        $productidprice = $_POST['productidprice'];
        $boxprice = $_POST['boxprice'];
        $pricepiece = $_POST['pricepiece'];

        // Retrieve the form data
        // $shopkeeper = $request->getPost('shopkeeper1');
        // $productid = $request->getPost('productid1');
        // $boxprice = $request->getPost('boxprice');
        // $pieceprice = $request->getPost('pieceprice');

        // Check if the combination of productid and shopkeeper exists in the database
        $db = db_connect();
        $existingRecord = $db->table('productprice')
            ->where('productid', $productidprice)
            ->where('shopkeeper', $shopkeeperidprice)
            ->get()
            ->getRow();

        if ($existingRecord) {
            // If a record with the same combination exists, return an error message
            $db->close();
            $response = ['error' => 'Duplicate entry: This Shopkeeper Price is already added'];
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            // If no duplicate records, insert the form data into the database
            $data = [
                'productid' => $productidprice,
                'shopkeeper' => $shopkeeperidprice,
                'boxprice' => $boxprice,
                'pieceprice' => $pricepiece,
            ];

            $db->table('productprice')->insert($data);
            $db->close();
            $response = ['success' => 'Data inserted successfully.'];
            header('Content-Type: application/json');
            echo json_encode($response);
        }



        // $response = array(
        //     'productid' => $productidprice,
        //     'shopkeeper' => $shopkeeperidprice,
        //     'boxprice' => $boxprice,
        //     'pieceprice' => $pieceprice,
        // );
        // header('Content-Type: application/json');
        // echo json_encode(array($response));

    }


    public function edithopkeeperprice()
    {
        // Load the necessary helper and library
        // helper('form');
        // helper('url');
        // $request = \Config\Services::request();
        $editshopkeeperidprice = $_POST['editshopkeeperidprice'];
        $editproductidprice = $_POST['editproductidprice'];
        $editboxprice = $_POST['editboxprice'];
        $editpricepiece = $_POST['editpricepiece'];

        // Retrieve the form data
        // $shopkeeper = $request->getPost('shopkeeper1');
        // $productid = $request->getPost('productid1');
        // $boxprice = $request->getPost('boxprice');
        // $pieceprice = $request->getPost('pieceprice');

        // Check if the combination of productid and shopkeeper exists in the database
        $db = db_connect();
        $existingRecord = $db->table('productprice')
            ->where('productid', $editproductidprice)
            ->where('shopkeeper', $editshopkeeperidprice)
            ->get()
            ->getRow();

        if (!$existingRecord) {
            // If a record with the same combination exists, return an error message
            $db->close();
            $response = ['error' => 'Price is not add please first add the price!'];
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            // If no duplicate records, insert the form data into the database
            $data = [
                'boxprice' => $editboxprice,
                'pieceprice' => $editpricepiece,
            ];
            $this->userModel->updateshopkeeperprice($editproductidprice, $editshopkeeperidprice, $data);
            $response = ['success' => 'Data update successfully.'];
            header('Content-Type: application/json');
            echo json_encode($response);
        }



        // $response = array(
        //     'productid' => $productidprice,
        //     'shopkeeper' => $shopkeeperidprice,
        //     'boxprice' => $boxprice,
        //     'pieceprice' => $pieceprice,
        // );
        // header('Content-Type: application/json');
        // echo json_encode(array($response));

    }




    public function editshopkeeperbyid($id)
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        }
        $shopkeeper = $this->userModel->getshopkeeperbyid($id);
        $data['shopkeepers'] = $shopkeeper;
        // echo "<pre>";
        //         print_r($data);
        //         echo "</pre>";
        //         exit();
        $this->global['pageTitle'] = 'Add New Shopkeeper  : Noor Ul Ain Trader';
        $this->global['breadcrumb'] = "Add New Shopkeeper";
        return view('editshopkeeper', array_merge($this->global, $data));
    }

    public function editproductbyid($id)
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        }
        $product = $this->userModel->getproductbyid($id);
        $data['products'] = $product;
        // echo "<pre>";
        //         print_r($data);
        //         echo "</pre>";
        //         exit();
        $this->global['pageTitle'] = 'Add New Product  : Noor Ul Ain Trader';
        $this->global['breadcrumb'] = "Add New Product";
        return view('editproduct', array_merge($this->global, $data));
    }

    public function updateshopkeeper()
    {
        // Load the necessary helper and library
        helper('form');
        helper('url');
        $request = \Config\Services::request();
        // Retrieve the form data
        $shopkeepername = $request->getPost('shopkeepername');
        $address = $request->getPost('address');
        $phonenumber = $request->getPost('phonenumber');
        // $googlemap = $request->getPost('googlemap');
        $area = $request->getPost('area');
        $shopkeeperid = $request->getPost('shopkeeperid');
        $data = [
            'shopkeepername' => $shopkeepername,
            'address' => $address,
            'phonenumber' => $phonenumber,
            // 'googlemap' => $googlemap,
            'area' => $area
        ];
        $this->userModel->updateshopkeeperById($shopkeeperid, $data);
        return redirect()->to(base_url('shopkeeperlists'))->with('success', 'Data inserted successfully.');
    }

    public function updateproduct()
    {
        // Load the necessary helper and library
        helper('form');
        helper('url');
        $request = \Config\Services::request();
        // Retrieve the form data
        $productid = $request->getPost('productid');
        $products = $this->userModel->selectDatarow("products", array("id" => $productid));
        $data['products'] = $products;
        $stockincottondatabase = $products['stockincotton'];
        $stockinboxdatabase = $products['stockinbox'];

        $productname = $request->getPost('productname');

        $stockincotton = $request->getPost('stockincotton');
        if (!empty($stockincotton)) {
            $stockincotton = $stockincottondatabase + $stockincotton;
        } else {
            $stockincotton = $stockincottondatabase;
        }


        $stockinbox = $request->getPost('stockinbox');
        if (!empty($stockinbox)) {
            $stockinbox = $stockinboxdatabase + $stockinbox;
        } else {
            $stockinbox = $stockinboxdatabase;
        }


        $boxprice = $request->getPost('boxprice');
        $pieceprice = $request->getPost('pieceprice');
        $boxpercaton = $request->getPost('boxpercaton');
        $pieceperbox = $request->getPost('pieceperbox');
        $vendor = $request->getPost('vendor');
        $data = [
            'productname' => $productname,
            'stockincotton' => $stockincotton,
            'stockinbox' => $stockinbox,
            'boxprice' => $boxprice,
            'pieceprice' => $pieceprice,
            'boxpercaton' => $boxpercaton,
            'pieceperbox' => $pieceperbox,
            'vendor' => $vendor,
        ];
        $this->userModel->updateproductById($productid, $data);
        return redirect()->to(base_url('productlists'))->with('success', 'Data inserted successfully.');
    }

    public function ajaxdeleteshopkeeper()
    {

        $shopkeeperid = $this->request->getPost('id');
        $this->userModel->deleteCityById($shopkeeperid);
        // Create a response array
        $response = [
            'success' => true,
            'message' => 'Data deleted successfully.',
            'redirect' => base_url('shopkeeperlists') // Provide the redirect URL
        ];

        // Return the response as JSON
        return $this->response->setJSON($response);
    }

    public function resetprice()
    {
        $boxprice = 0;
        $pieceprice = 0;
        $productid = $this->request->getPost('id');
        $data = [
            'boxprice' => $boxprice,
            'pieceprice' => $pieceprice
        ];
        $this->userModel->resetprice($productid, $data);
        // Create a response array
        $response = [
            'success' => true,
            'message' => 'Data deleted successfully.',
            'redirect' => base_url('productpricelists') // Provide the redirect URL
        ];

        // Return the response as JSON
        return $this->response->setJSON($response);
    }

    public function addvendor()
    {
        // Load the necessary helper and library
        helper('form');
        helper('url');
        $request = \Config\Services::request();

        // Retrieve the form data
        $vendorname = $request->getPost('vendorname');
        // $productdes = $request->getPost('productdes');

        // Insert the form data into the database
        $db = db_connect();
        $data = [
            'vendorname' => $vendorname,
        ];
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit();
        $db->table('vendor')->insert($data);
        $db->close();
        //return view('addnewproduct');
        return redirect()->to(base_url('addnewshopkeeper'))->with('success', 'Data inserted successfully.');
    }


    public function updatetodaystock()
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        }
        // Load the necessary helper and library
        helper('form');
        helper('url');
        $request = \Config\Services::request();
        // Retrieve the form data

        $productid = $request->getPost('productid');
        $products = $this->userModel->selectDatarow("products", array("id" => $productid));
        $data['products'] = $products;
        $todaycatondatabase = $products['todaycaton'];
        $todaystockdatabase = $products['todaystock'];
        $todaystockpiecedatabase = $products['todaystockpiece'];

        $todaycatonform = $request->getPost('todaycaton');
        $todaystockform = $request->getPost('todaystock');
        $todaystockpieceform = $request->getPost('todaystockpiece');

        if (!empty($todaycatonform)) {
            $todaycaton = $todaycatondatabase + $todaycatonform;
        } else {
            $todaycaton = $todaycatondatabase; // Keep the existing value
        }
        if (!empty($todaystockform)) {
            $todaystock = $todaystockdatabase + $todaystockform;
        } else {
            $todaystock = $todaystockdatabase; // Keep the existing value
        }
        if (!empty($todaystockpieceform)) {
            $todaystockpiece = $todaystockpiecedatabase + $todaystockpieceform;
        } else {
            $todaystockpiece = $todaystockpiecedatabase; // Keep the existing value
        }

        // Insert the form data into the database
        $data = [

            'id' => $productid,
            'todaycaton' => $todaycaton,
            'todaystock' => $todaystock,
            'todaystockpiece' => $todaystockpiece,

        ];
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit();
        $this->userModel->updatetodaystock($productid, $data);
        return redirect()->to('dashboard')->with('success', 'Data inserted successfully.');
    }


    public function edittodaystock()
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        }
        // Load the necessary helper and library
        helper('form');
        helper('url');
        $request = \Config\Services::request();
        // Retrieve the form data

        $productidedit = $request->getPost('productidedit');
        $todaycatonform = $request->getPost('todaycatonedit');
        $todaystockform = $request->getPost('todaystockedit');
        $todaystockpieceform = $request->getPost('todaystockpieceedit');


        // Insert the form data into the database
        $data = [
            'todaycaton' => $todaycatonform,
            'todaystock' => $todaystockform,
            'todaystockpiece' => $todaystockpieceform,

        ];
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit();
        $this->userModel->updatetodaystock($productidedit, $data);
        return redirect()->to('dashboard')->with('success', 'Data inserted successfully.');
    }
    public function weekend()
    {
        $session = \Config\Services::session();
        $name = $session->get('name');
        if (empty($name)) {
            return redirect()->to('');
        }
        //$resetendtoday = null;
        $todaystock = 'todaystock';
        $todaystockpiece = 'todaystockpiece';
        $todaycaton = 'todaycaton';
        $catonSoldatabase = 'catonSoldatabase';
        $boxesSoldatabase = 'boxesSoldatabase';
        $piecesSolddatabase = 'piecesSolddatabase';

        $this->userModel->weekend($todaystock, $todaystockpiece, $todaycaton, $catonSoldatabase, $boxesSoldatabase, $piecesSolddatabase);
        return redirect()->to('dashboard')->with('error', 'Car Stock Totaly Nill. "Now You Enter the Stock Again for you system."');
    }

    public function endtoday()
    {
        $todaystocks = $this->userModel->selectData("products");


        foreach ($todaystocks as $todaystockItem) {
            $productid = $todaystockItem->id;
            $todaycaton = $todaystockItem->todaycaton;
            $boxpercaton = $todaystockItem->boxpercaton;
            $todaystock = $todaystockItem->todaystock;
            $todaystockpiece = $todaystockItem->todaystockpiece;
            $pieceperbox = $todaystockItem->pieceperbox;
            $catonSoldatabase = $todaystockItem->catonSoldatabase;
            $boxesSoldatabase1 = $todaystockItem->boxesSoldatabase;
            $piecesSolddatabase1 = $todaystockItem->piecesSolddatabase;

            $totalCaton = $todaycaton; // Total cartons you have
            $boxPerCaton = $boxpercaton; // Number of boxes per carton
            $piecesPerBox = $pieceperbox; // Number of pieces per box
            $losebox = $todaystock; // Total boxes you have
            $totalPieces = $todaystockpiece; // Total pieces you have

            $cartonsSold = $catonSoldatabase; // Number of cartons sold
            $boxesSold = $boxesSoldatabase1; // Number of boxes sold
            $piecesSold = $piecesSolddatabase1; // Number of pieces sold

            // Calculate the total number of pieces you have
            $totalPieces = $totalCaton * $boxPerCaton * $piecesPerBox + $losebox * $piecesPerBox + $totalPieces;

            $totalBoxfinal = ($totalCaton * $boxPerCaton) + $losebox;
            $boxesSoldfinal = ($cartonsSold * $boxPerCaton) + $boxesSold;

            // Calculate the total number of pieces sold
            $totalSold = $cartonsSold * $boxPerCaton * $piecesPerBox + $boxesSold * $piecesPerBox + $piecesSold;

            // Calculate the remaining quantities
            $remainingPieces = $totalPieces - $totalSold;
            $remainingCaton = floor($remainingPieces / ($boxPerCaton * $piecesPerBox));
            $remainingPieces %= ($boxPerCaton * $piecesPerBox);
            $remainingBox = floor($remainingPieces / $piecesPerBox);
            $remainingPieces %= $piecesPerBox;
            $remainingboxcompare = ($remainingCaton * $boxPerCaton + $remainingBox);
            $remainingpiececompare = ($remainingCaton * $boxPerCaton * $piecesPerBox + $remainingBox * $piecesPerBox + $remainingPieces);
            $catonSoldatabase2 = 0;
            $boxesSoldatabase2 = 0;
            $piecesSolddatabase2 = 0;

            $data1 = [
                'todaycaton' => $remainingCaton,
                'todaystock' => $remainingBox,
                'todaystockpiece' => $remainingPieces,
                'catonSoldatabase' => $catonSoldatabase2,
                'boxesSoldatabase' => $boxesSoldatabase2,
                'piecesSolddatabase' => $piecesSolddatabase2
            ];

            $this->userModel->updatetodaystock($productid, $data1);
        }

        return redirect()->to('dashboard')->with('success', 'Today Stock is reset .');
    }


}