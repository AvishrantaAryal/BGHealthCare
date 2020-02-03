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

Route::get('/','FrontendController@home');
Route::get('home','FrontendController@home');

Route::get('service', 'FrontendController@service');

Route::get('service-detail/{slug}','FrontendController@servicedetails'); 

Route::get('faq','FrontendController@faq');
 
Route::get('gallery', 'FrontendController@gallery');

Route::get('picture/{id}','FrontendController@picture');

Route::get('aboutus', 'FrontendController@about');

Route::get('contactus', 'FrontendController@contact');

Route::get('blog','FrontendController@blog');

Route::get('blog-detail/{slug}','FrontendController@blogdetails');

Route::get('error','FrontendController@err');
 

Route::post('/storecontact','ContactController@store');
Route::post('/store-appointment','ApponitmentController@store');
//Back End

Auth::routes(['register' => false]);
Route::get('/admin', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {

Route::get('logout','DashboardController@logout')->name('logout');
Route::get('/admin','DashboardController@dashboard');
// Route::get('cd-admin','DashboardController@home'); 
Route::post('/quickmail','DashboardController@quickmail');
Route::get('view-all-mails','DashboardController@view');

Route::get('/deletemail/{id}','DashboardController@del');

Route::get('/view-all-admin','AdminController@adminshow');
Route::get('/addadmin','AdminController@add');
Route::post('/storeadmin','AdminController@storeadmin');
Route::get('/deleteadmin/{id}','AdminController@delete');



//About
Route::get('/edit-about','AboutController@edit');
Route::get('/abouts-add','AboutController@add');
Route::post('/aboutstore','AboutController@store');
Route::get('/abouts-view','AboutController@view');
Route::post('/updateabout','AboutController@updateabout');


//FAQ
Route::get('/faq-add','FAQController@add');
Route::post('/storefaq','FAQController@store');
Route::get('/faq-view','FAQController@view');
Route::post('/faqupdate/{id}','FAQController@updatefaq');
Route::post('/faqstatus/{id}','FAQController@statusupdate');
Route::get('/deletefaq/{id}','FAQController@delete');
Route::get('/editfaq/{id}','FAQController@edit');

//Service
Route::get('/service-add','ServiceController@addservice');
Route::post('/storeservices','ServiceController@store');
Route::get('/editservice/{id}','ServiceController@edit');
Route::get('/service-view','ServiceController@view');
Route::post('/serviceupdate/{id}','ServiceController@updateservice');
Route::post('/servicestatus/{id}','ServiceController@statusupdate');
Route::get('/deleteservices/{id}','ServiceController@delete');


//BLOG
Route::get('/blog-add','BlogController@add');
Route::post('/storeblog','BlogController@store');
Route::get('/editblog/{id}','BlogController@edit');
Route::get('/blog-view','BlogController@view');
Route::post('/blogupdate/{id}','BlogController@updateblog');
Route::post('/blogstatus/{id}','BlogController@statusupdate');
Route::get('/deleteblog/{id}','BlogController@delete');

//Location
Route::get('/location-add','LocationController@add');
Route::post('/storelocation','LocationController@store');
Route::get('/location-view','LocationController@view');
Route::get('/deletelocation/{id}','LocationController@delete');
Route::post('/locationstatus/{id}','LocationController@statusupdate');



//Gallery
Route::get('/album-add','GalleryController@add');
Route::post('/storealbum','GalleryController@store');
Route::get('/album-view','GalleryController@view');
Route::post('/statusal/{id}','GalleryController@status');
Route::get('deletealbum/{id}','GalleryController@deletealbum');
Route::get('deleteimage/{id}','GalleryController@deleteimage');
Route::get('/image-add/{id}','GalleryController@addimage');
Route::post('/imagestore/{id}','GalleryController@storeimage');
Route::get('/image-view/{id}','GalleryController@image');

//Contact
Route::get('/createcontact','ContactController@addcontact');
Route::get('/viewcontact','ContactController@contact');
Route::get('/replies','ContactController@reply');
Route::get('/replycontact/{id}','ContactController@replyform');
Route::post('/storereply/{id}','ContactController@storereply');
Route::get('/deleteinbox/{id}','ContactController@deleteinbox');
Route::get('/deletereply/{id}','ContactController@deletereply');
// Route::post('/storecontact','ContactController@store');


//Appointment
Route::get('/create-appointment','ApponitmentController@addcontact');
Route::get('/view-appointment','ApponitmentController@contact');
Route::get('/appointment-replies','ApponitmentController@reply');
Route::get('/reply-appointment/{id}','ApponitmentController@replyform');
Route::post('/store-appointment-reply/{id}','ApponitmentController@storereply');
Route::get('/delete-appointment/{id}','ApponitmentController@deleteinbox');
Route::get('/delete-appointmentreply/{id}','ApponitmentController@deletereply');



//Team
Route::get('/team-add','TeamController@add');
Route::post('/storeteam','TeamController@store');
Route::get('/team-view','TeamController@view');
Route::get('/editteam/{id}','TeamController@edit');
Route::post('/updateteam/{id}','TeamController@update');
Route::post('/teamstatus/{id}','TeamController@statusupdate');
Route::get('/deleteteam/{id}','TeamController@deleteteam');


//SEO
Route::get('/seo-add','SEOController@add');
Route::get('/seo-view','SEOController@view');
Route::post('/seostore','SEOController@store');
Route::get('/editseo/{id}','SEOController@edit');
Route::post('/updateseo/{id}','SEOController@updateseo');
Route::get('/deleteseo/{id}','SEOController@delete');

});