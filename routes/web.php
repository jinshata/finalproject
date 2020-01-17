<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/locationmap', function () {
    return view('locationmap');
});

 


Route::get('/addcountry','donationcontroller@view_country');
Route::post('/addcountry','donationcontroller@country');

Route::get('/addstate','donationcontroller@view_state');
Route::post('/addstate','donationcontroller@state');

Route::get('/adddistrict','donationcontroller@view_district');
Route::post('/adddistrict','donationcontroller@district');

Route::get('/signup','donationcontroller@fetchDistricts');

// Route::get('/sign','donationcontroller@useraccount');
Route::post('/home','donationcontroller@user');


// Route::get('/donate', function () {
//      return view('donate');
// });

 
Route::post('/login','donationcontroller@login_fun');
Route::get('/login','donationcontroller@login');



Route::get('/viewprofile','donationcontroller@show_data');
Route::get('userreject/{id}','donationcontroller@userreject');

Route::get('editdata/{register_id}','donationcontroller@edit_data');//edit data
Route::Post('update/','donationcontroller@edit');//update data

 Route::get('deletedata/{id}','donationcontroller@delete');

Route::get('/addfoodcategory','donationcontroller@add_food');//add food category
Route::post('/addfoodcategory','donationcontroller@foodcategory');//add food categor

Route::get('/addfood','donationcontroller@fetchfood');//view add food

//Route::get('/insertdata','donationcontroller@getfood');//getfood category
Route::post('/addfood','donationcontroller@addfood');//post food category

Route::get('/viewfood','donationcontroller@show_food');//view addfood data

 Route::get('editfood/{foodid}','donationcontroller@fetch_food');//edit food
 Route::Post('update/{foodid}','donationcontroller@update_food');//update food
 Route::get('deletefood/{id}','donationcontroller@deletefood');//delete food


Route::get('/addclothcategory','donationcontroller@add_cloth');//add cloth category
Route::post('/addclothcategory','donationcontroller@clothcategory');//add cloth catgy
Route::get('/addcloth','donationcontroller@fetchcloth');//view cloth categy
Route::post('/addcloth','donationcontroller@addcloth');//insert cloth category
Route::get('/viewcloth','donationcontroller@show_cloth');//view addcloth data
Route::get('editcloth/{clothid}','donationcontroller@fetch_cloth');//edit cloth
Route::Post('updatecloth/{id}','donationcontroller@update_cloth');//update cloth
Route::get('deletecloth/{id}','donationcontroller@deletecloth');//delete cloth


Route::get('/addtoycategory','donationcontroller@add_toy');//add cloth category
Route::post('/addtoycategory','donationcontroller@toycategory');//add cloth catgy
Route::get('/addtoy','donationcontroller@fetchtoy');//view Toy categy
Route::post('/addtoy','donationcontroller@addtoy');//insert toy category
Route::get('/viewtoy','donationcontroller@show_toy');//view addtoy data
Route::get('edittoy/{toyid}','donationcontroller@fetch_toy');//edit toy
Route::Post('updatetoy/{id}','donationcontroller@update_toy');//update toy
Route::get('deletetoy/{id}','donationcontroller@deletetoy');//delete toy

// Receiver insert
Route::get('/receiver','donationcontroller@view_receiver');
Route::post('/receiver','donationcontroller@receiver_data');
Route::get('/confirm/{id}/{receiver_id}','donationcontroller@userconfirm');
//Route::get('/donations','donationcontroller@fn_donordata');
Route::get('/donordetails','donationcontroller@view');//view need item


// Route::post('/confirm/{id}','donationcontroller@fn_email');
// Route::post('/viewnotification{id}','donationcontroller@fn_notification');
 Route::get('/donorhistory','donationcontroller@donor_history');
 Route::get('/logout','donationcontroller@logout');

Route::get('/donate','donationcontroller@index');









Route::get('/admin', function () {
    return view('admin');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/addcategory', function () {
    return view('addcategory');
});

Route::get('/addsubcategory', function () {
    return view('addsubcategory');
});


Route::get('/addstate', function () {
    return view('addstate');
});
Route::get('/addcountry', function () {
    return view('addcountry');
});

// Route::get('/location', function () {
//     return view('location');
// });




