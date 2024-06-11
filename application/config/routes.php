<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// route User
$route['default_controller'] = 'welcome';
$route['view_product'] = 'welcome/view_all_product';
$route['about'] = 'welcome/about_company';
$route['contact'] = 'welcome/contact';
$route['detailproduk/:num'] = 'welcome/detailProduk';
$route['add_to_cart'] = 'cart/add_to_cart';
$route['load_cart'] = 'cart/load_cart';
$route['delete_cart'] = 'cart/delete_cart';
$route['remove_cart'] = 'cart/remove_cart';
$route['update_cart'] = 'cart/update_cart';
$route['co'] = 'cart/checkout';
$route['riwayat/(:num)'] = 'welcome/riwayat/$1';
$route['detailriwayat/(:num)/(:any)'] = 'welcome/detailriwayat/$1/$2';
$route['bayar'] = 'pembayaran/pembayaran';
$route['barangditerima/(:any)/(:any)/(:any)'] = 'welcome/barangditerima/$1/$2/$3';
// $route['barangtidakditerima/(:any)/(:any)/(:any)'] = 'welcome/barangtidakditerima/$1/$2/$3';
$route['barangtidakditerima'] = 'welcome/barangtidakditerima';
$route['approverefund/(:any)/(:any)/(:any)'] = 'pembayaran/updateRefund/$1/$2/$3';
$route['reject/(:any)/(:any)/(:any)'] = 'pembayaran/reject/$1/$2/$3';
$route['reject/(:any)/(:any)/(:any)'] = 'pembayaran/reject/$1/$2/$3';


// Route Admin
$route['admin'] = 'admin/index';
$route['add_data'] = 'admin/add_data';
$route['view_data'] = 'admin/view_data';
$route['pengeluaran'] = 'admin/pengeluaran';
$route['invoice'] = 'admin/invoice';
$route['report'] = 'admin/report';
$route['report_per_year'] = 'admin/print_invoice_per_year';
$route['transaction'] = 'admin/transaction';
$route['print_invoice'] = 'admin/print_invoice';
$route['actAddProduk'] = 'admin/actAddProduct';
$route['edit_data/:num'] = 'admin/edit_data';
$route['actEdit'] = 'admin/actEdit';
$route['delete/:num'] = 'admin/delete';
$route['actPengeluaran'] = 'admin/actPengeluaran';
$route['transaction_checkout'] = 'admin/transaction_request';
$route['lihat_request/(:any)'] = 'admin/see_transaction_request/$1';
$route['konfirmasi/(:any)'] = 'admin/konfirmasi/$1';
$route['barangdikemas/(:any)'] = 'admin/barangdikemas/$1';
$route['barangdikirim/(:any)'] = 'admin/barangdikirim/$1';




// Route Auth ( Login dan Register )
$route['login'] = 'auth/index';
$route['register'] = 'auth/register';
$route['actRegister'] = 'auth/actRegister';
$route['actLogin'] = 'auth/actLogin';
$route['logout'] = 'auth/logout';


// rekomendasi
$route['saveQuesioner'] = "welcome/recommend";


// chat
$route['chat'] = "chat/userSenderInstant";
$route['uploadImage'] = "chat/userUploadImage";
$route['chatUser'] = "chat/userSender";
$route['getChat'] = "chat/getAllChat";
$route['getNotif/(:any)'] = "chat/getNotif/$1";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



// chatAdmin
$route['home-chat-admin'] = 'admin/chat_home';
$route['ochat/(:num)/(:any)'] = 'admin/openChat/$1/$2';
$route['updateNotif'] = 'chat/updateNotifAjax';
$route['sendChatAdmin'] = 'chat/adminSender';
$route['getAllChatAdminAPI/(:num)'] = 'chat/getAllChatAdminAPI/$1';
$route['deleteChat/(:num)'] = 'chat/deleteChat/$1';


// implementation ongkir from RajaOngkir
$route['update_provinsi'] = 'API_Ongkir/update_provinsi';
$route['datakota'] = 'API_Ongkir/update_kota';
$route['dataekspedisi'] = 'api_ongkir/dataEkpedisi';
$route['dataongkir'] = 'api_ongkir/update_ongkir';