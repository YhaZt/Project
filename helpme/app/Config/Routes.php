<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//practice
$routes->get('/test', 'Home::test');
$routes->get('Dashboard', 'Home::index');
$routes->get('/carpel', 'Home::carpel');
$routes->get('/UNI', 'Home::UNI');
$routes->get('/test', 'Home::test');
$routes->get('/datas', 'Home::dat');
//Login Signup
$routes->get('signup', 'SignupController::Register');
$routes->get('Clientsignup', 'SignupController::ClientRegister');
//verify user & password reset
$routes->get('forgotpass', 'UserController::forgotpass');
$routes->get('changepass', 'UserController::changepass');

$routes->get('verify/(:any)', 'SignupController::verify/$1');
$routes->get('passwordreset/(:any)', 'UserController::passwordreset/$1');


$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);
// $routes->get('/home', 'MainController::index',['filter' => 'authGuard']);
// //crud
// $routes->get('/view', 'ClientController::viewadd');
// $routes->post('/add', 'ClientController::add');

//crud
$routes->get('clientarchive', 'ClientController::archivelist',["filter" => "auth"]);
$routes->get('clientadd', 'ClientController::addclient',["filter" => "auth"]);
$routes->get('clientadd', 'ClientController::store',["filter" => "auth"]);
$routes->get('clientedit', 'ClientController::edit/$1',["filter" => "auth"]);
$routes->get('clientlist', 'ClientController::list',["filter" => "auth"]);
$routes->get('clientlist/(:any)', 'ClientController::single/$1',["filter" => "auth"]);
$routes->get('letter/(:any)', 'PdfController::letter/$1',["filter" => "auth"]);
$routes->get('archive/(:num)', 'ClientController::archive/$1',["filter" => "auth"]);
$routes->get('unarchive/(:num)', 'ClientController::unarchive/$1',["filter" => "auth"]);
$routes->get('clientregistered', 'ClientController::regis',["filter" => "auth"]);
$routes->get('clregistered', 'ClientController::amregis',["filter" => "auth"]);
$routes->get('cregt', 'ClientController::regam',["filter" => "auth"]);
$routes->get('decline/(:num)', 'ClientController::regedit/$1',["filter" => "auth"]);
$routes->get('pdf/(:any)', 'PdfController::pdfview/$1',["filter" => "auth"]);
// $routes->post('/client/postamount', 'ClientController::postamount',["filter" => "auth"]);

//Calendar
// $routes->get("fullcalendar", "Fullcalendar::index");
// $routes->get("event", "Fullcalendar::loadData");
// $routes->post("ajax", "Fullcalendar::eventAjax");
// $routes->get("evewnt", "FullCalendar::loadData");
// $routes->post("event", "Calendar::eventCalendar");
// $routes->get('calendar', 'Calendar::index');
// $routes->get('/views', 'ClientController::viewclient');

//DataTables
$routes->get('users-list', 'DatatableController::index',["filter" => "auth"]);
//Chart
$routes->get('columnchart', 'ColChartController::index');
// $routes->setDefaultController('ChartController');
// $routes->get('/show-google-charts', 'ChartController::initChart');

$routes->get('/line-chart', 'ChartController::index');
//crud test
// $routes->match(["get", "post"], "/client/addclient", "ClientLogController::addclient");
// $routes->match(["get", "post"], "editclient/(:num)", "ClientLogController::editclient/$1");
// $routes->get("listclient", "ClientLogController::listclient");
// $routes->get("deleteclient/(:num)", "ClientLogController::deleteclient/$1");

//FileUpload
$routes->get("image-upload", "FileUploadController::dropzone",["filter" => "auth"]);
$routes->post("dropzone/upload", "FileUploadController::FileUploadStore",["filter" => "auth"]);
$routes->get('image-table', 'FileUploadController::index',["filter" => "auth"]);

// //FileUpload testing
// $routes->get("ClientUpload", "FileUpload::dropzone",["filter" => "auth"]);
// $routes->post("dropzone/upload", "FileUpload::FileUploadStore",["filter" => "auth"]);
// $routes->get('FileTable', 'FileUpload::index',["filter" => "auth"]);
// $routes->get('ClientFile', 'FileUpload::data',["filter" => "auth"]);

//User Account Auth
$routes->match(['get', 'post'], 'login', 'UserController::login', ["filter" => "noauth"]);
// Admin routes
$routes->group("admin", ["filter" => "auth"], function ($routes) {
    $routes->get("admin", "AccountManagement/AdminController::index");
});
$routes->group("admin2", ["filter" => "auth"], function ($routes) {
    $routes->get("admin2", "AccountManagement/AdminController2::index");
});
// staff routes
$routes->group("staff", ["filter" => "auth"], function ($routes) {
    $routes->get("staff", "AccountManagement/StaffController::index");
});
$routes->group("staff2", ["filter" => "auth"], function ($routes) {
    $routes->get("staff2", "AccountManagement/StaffController2::index");
});
$routes->group("client", ["filter" => "auth"], function ($routes) {
    $routes->get("client", "AccountManagement/ClientController::index");
});
$routes->get('logout', 'UserController::logout');

//LOGIN
$routes->get('home', 'MainController::staff',["filter" => "auth"]);
$routes->get('client', 'MainController::client',["filter" => "auth"]);
$routes->get('home2', 'MainController::staff2',["filter" => "auth"]);
$routes->get('admin', 'MainController::admin',["filter" => "auth"]);
$routes->get('admin2', 'MainController::admin2',["filter" => "auth"]);

//Todo

$routes->get('todo-list', 'TodoController::index');
$routes->get('todo-form', 'TodoController::create');
$routes->post('add-todo', 'TodoController::store');
$routes->get('edit-todo/(:num)', 'TodoController::getTodo/$1');
$routes->post('update-todo', 'TodoController::update');
$routes->get('delete-todo/(:num)', 'TodoController::delete/$1');

//CLient Side
$routes->get('request', 'RequestController::index');
$routes->get('rctable', 'RequestController::rtable',["filter" => "auth"]);
$routes->get('trantable', 'RequestController::tran',["filter" => "auth"]);
// $routes->get('RequestTable', 'RequestController::rtable',["filter" => "auth"]);
$routes->get('addrequest','RequestController::store');
$routes->get('requestform', 'RequestController::reqform');
$routes->get("image-upload", "RequestController::drop",["filter" => "auth"]);
$routes->post("drop", "RequestController::FileStore",["filter" => "auth"]);
$routes->get('image-table', 'RequestController::RequestTable',["filter" => "auth"]);
$routes->get('Feed', 'RequestController::Feed',["filter" => "auth"]);
$routes->get('Transac', 'RequestController::Transac',["filter" => "auth"]);

//Charts itoooo

$routes->get('analy', 'ChartController::anal');


//Utility

$routes->get('sitioadd', 'UtilityController::addsitio',["filter" => "auth"]);
$routes->match(["get", "post"], "sitio", "UtilityController::sitio");
// $routes->get('sitio', 'UtilityController::sitio',["filter" => "auth"]);
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
