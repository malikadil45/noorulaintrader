<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('forgot-password', 'Home::forgot_password');
$routes->get('invoice/(:num)', 'Home::invoice/$1');
$routes->get('invoice_print/(:num)', 'Home::invoice_print/$1');
$routes->get('addnewproduct', 'Home::addnewproduct');
$routes->get('addnewshopkeeper', 'Home::addnewshopkeeper');
$routes->get('addneworder', 'Home::addneworder');
$routes->post('copytable', 'Home::copytable');
$routes->post('emptyTable', 'Home::emptyTable');
$routes->get('productlists', 'Home::productlists');
$routes->get('productprice', 'Home::productprice');
$routes->get('productpricelists', 'Home::productpricelists');
$routes->get('orderlists', 'Home::orderlists');
$routes->get('shopkeeperlists', 'Home::shopkeeperlists');
$routes->post('/form/addproduct', 'Home::addproduct');
$routes->post('/form/confirmorder', 'Home::confirmorder');
$routes->post('/form/addorderproduct', 'Home::addorderproduct');
$routes->post('/form/deleteorderproduct', 'Home::deleteorderproduct');
$routes->post('/form/addshopkeeper', 'Home::addshopkeeper');
$routes->post('/form/addproductprice', 'Home::addproductprice');
$routes->post('/form/edithopkeeperprice', 'Home::edithopkeeperprice');
$routes->post('/form/addvendor', 'Home::addvendor');
$routes->post('endtoday', 'Home::endtoday');
$routes->post('weekend', 'Home::weekend');
$routes->post('processLogin', 'Home::processLogin');
$routes->post('updatetodaystock', 'Home::updatetodaystock');
$routes->post('edittodaystock', 'Home::edittodaystock');
$routes->get('logout', 'Home::logout');
$routes->get('dashboard', 'Home::dashboard');
$routes->post('ajaxquantity', 'Home::ajaxquantity');
$routes->post('ajaxphonenumber', 'Home::ajaxphonenumber');
$routes->post('ajaxqprice', 'Home::ajaxqprice');
$routes->get('/editshopkeeperbyid/(:num)', 'Home::editshopkeeperbyid/$1');
$routes->get('/editproductbyid/(:num)', 'Home::editproductbyid/$1');
$routes->post('/form/updateshopkeeper', 'Home::updateshopkeeper');
$routes->post('/form/updateproduct', 'Home::updateproduct');
$routes->post('/ajaxdeleteshopkeeper', 'Home::ajaxdeleteshopkeeper');
$routes->post('/resetprice', 'Home::resetprice');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
