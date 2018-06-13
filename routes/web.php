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

/*Route::get('/', function () {
    return view('client.index');
});*/
Route::get('/','WebsiteController@index');
Route::get('/mailus', 'MailController@index');
Route::post('sendmail', 'MailController@sendmail');
Route::get('seegallery', 'WebsiteController@gallery');
Route::get('seeservices', 'WebsiteController@services');
Route::get('addtestimonial', 'WebsiteController@testimonial');
Route::post('savetestimonial', 'TestimonialsController@store');
Route::post('shownews', 'AjaxController@shownews');


Route::get('/login', function () {
    return view('auth/login');
});
Auth::routes();
Route::get('register/verify/{token}','Auth\RegisterController@verify');
Route::get('/home', 'HomeController@index')->name('home');


/*Route::resource('contactinfo','ContactinfoController');*/
/*  Gallery Route */
Route::get('contactinfo', array('as' => 'contactinfo.index', 'uses' => 'ContactinfoController@index'));
Route::get('contactinfo/edit/{id}', array('as' => 'contactinfo.edit', 'uses' => 'ContactinfoController@edit'));
Route::patch('contactinfo/update/{id}', array('as' => 'contactinfo.update', 'uses' => 'ContactinfoController@update'));
Route::get('contactinfo/getcontactinfo', array('as'=>'contactinfo.getcontactinfo','uses'=>'DatatabledataController@getcontactinfo'));
/* -------- */

/*  Slieder Route */
Route::get('slieder', array('as' => 'slieder.index', 'uses' => 'SliederController@index'));
Route::get('slieder/add', array('as' => 'slieder.create', 'uses' => 'SliederController@create'));
Route::post('slieder/store', array('as' => 'slieder.store', 'uses' => 'SliederController@store'));
Route::get('slieder/edit/{id}', array('as' => 'slieder.edit', 'uses' => 'SliederController@edit'));
Route::patch('slieder/update/{id}', array('as' => 'slieder.update', 'uses' => 'SliederController@update'));
Route::get('slieder/show/{id}', array('as' => 'slieder.show', 'uses' => 'SliederController@show'));
Route::get('slieder/delete/{id}', array('as' => 'slieder.delete', 'uses' => 'SliederController@destroy'));
Route::get('slieder/getslieder', array('as'=>'slieder.getslieder','uses'=>'DatatabledataController@getslieder'));
/* -------- */


/*  Gallery Route */
Route::get('gallery', array('as' => 'gallery.index', 'uses' => 'GalleryController@index'));
Route::get('gallery/add', array('as' => 'gallery.create', 'uses' => 'GalleryController@create'));
Route::post('gallery/store', array('as' => 'gallery.store', 'uses' => 'GalleryController@store'));
Route::get('gallery/edit/{id}', array('as' => 'gallery.edit', 'uses' => 'GalleryController@edit'));
Route::patch('gallery/update/{id}', array('as' => 'gallery.update', 'uses' => 'GalleryController@update'));
Route::get('gallery/delete/{id}', array('as' => 'gallery.delete', 'uses' => 'GalleryController@destroy'));
Route::get('gallery/getgallery', array('as'=>'gallery.getgallery','uses'=>'DatatabledataController@getgallery'));
/* -------- */

/*  Designation Route */
Route::get('designation', array('as' => 'designation.index', 'uses' => 'DesignationController@index'));
Route::get('designation/add', array('as' => 'designation.create', 'uses' => 'DesignationController@create'));
Route::post('designation/store', array('as' => 'designation.store', 'uses' => 'DesignationController@store'));
Route::get('designation/edit/{id}', array('as' => 'designation.edit', 'uses' => 'DesignationController@edit'));
Route::patch('designation/update/{id}', array('as' => 'designation.update', 'uses' => 'DesignationController@update'));
Route::get('designation/delete/{id}', array('as' => 'designation.delete', 'uses' => 'DesignationController@destroy'));
Route::get('designation/getdesignation', array('as'=>'designation.getdesignation','uses'=>'DatatabledataController@getdesignation'));
/* -------- */

/*  Team Route */
Route::get('team', array('as' => 'team.index', 'uses' => 'TeamController@index'));
Route::get('team/add', array('as' => 'team.create', 'uses' => 'TeamController@create'));
Route::post('team/store', array('as' => 'team.store', 'uses' => 'TeamController@store'));
Route::get('team/edit/{id}', array('as' => 'team.edit', 'uses' => 'TeamController@edit'));
Route::get('team/show/{id}', array('as' => 'team.show', 'uses' => 'TeamController@show'));
Route::patch('team/update/{id}', array('as' => 'team.update', 'uses' => 'TeamController@update'));
Route::get('team/delete/{id}', array('as' => 'team.delete', 'uses' => 'TeamController@destroy'));
Route::get('team/getteam', array('as'=>'team.getteam','uses'=>'DatatabledataController@getteam'));
/* -------- */

/*  Team Route */
Route::get('about', array('as' => 'about.index', 'uses' => 'AboutController@index'));
Route::get('about/edit/{id}', array('as' => 'about.edit', 'uses' => 'AboutController@edit'));
Route::get('about/show/{id}', array('as' => 'about.show', 'uses' => 'AboutController@show'));
Route::patch('about/update/{id}', array('as' => 'about.update', 'uses' => 'AboutController@update'));
Route::get('about/getaboutus', array('as'=>'about.getaboutus','uses'=>'DatatabledataController@getaboutus'));
/* -------- */

/*  News Route */
Route::get('news', array('as' => 'news.index', 'uses' => 'NewsController@index'));
Route::get('news/add', array('as' => 'news.create', 'uses' => 'NewsController@create'));
Route::post('news/store', array('as' => 'news.store', 'uses' => 'NewsController@store'));
Route::get('news/edit/{id}', array('as' => 'news.edit', 'uses' => 'NewsController@edit'));
Route::get('news/show/{id}', array('as' => 'news.show', 'uses' => 'NewsController@show'));
Route::patch('news/update/{id}', array('as' => 'news.update', 'uses' => 'NewsController@update'));
Route::get('news/delete/{id}', array('as' => 'news.delete', 'uses' => 'NewsController@destroy'));
Route::get('news/getnews', array('as'=>'news.getnews','uses'=>'DatatabledataController@getnews'));
/* -------- */

/*  Introduction Route */
Route::get('introduction', array('as' => 'introduction.index', 'uses' => 'IntroductionController@index'));
Route::get('introduction/edit/{id}', array('as' => 'introduction.edit', 'uses' => 'IntroductionController@edit'));
Route::get('introduction/show/{id}', array('as' => 'introduction.show', 'uses' => 'IntroductionController@show'));
Route::patch('introduction/update/{id}', array('as' => 'introduction.update', 'uses' => 'IntroductionController@update'));
Route::get('introduction/delete/{id}', array('as' => 'introduction.delete', 'uses' => 'IntroductionController@destroy'));
Route::get('introduction/getintroduction', array('as'=>'introduction.getintroduction','uses'=>'DatatabledataController@getintroduction'));
/* -------- */

/*  Subscribers Route */
Route::get('subscribers', array('as' => 'subscribers.index', 'uses' => 'SubscribersController@index'));
Route::get('subscribers/add', array('as' => 'subscribers.create', 'uses' => 'SubscribersController@create'));
Route::post('subscribers/send', array('as' => 'subscribers.send', 'uses' => 'SubscribersController@send'));
Route::post('subscribers/store', array('as' => 'subscribers.store', 'uses' => 'AjaxController@subscribersstore'));
Route::get('subscribers/getsubscribers', array('as'=>'subscribers.getsubscribers','uses'=>'DatatabledataController@getsubscribers'));
/* -------- */

/*  Testimonials Route */
Route::get('testimonial', array('as' => 'testimonial.index', 'uses' => 'TestimonialsController@index'));
Route::get('testimonial/add', array('as' => 'testimonial.create', 'uses' => 'TestimonialsController@create'));
Route::post('testimonial/store', array('as' => 'testimonial.store', 'uses' => 'TestimonialsController@store'));
Route::get('testimonial/edit/{id}', array('as' => 'testimonial.edit', 'uses' => 'TestimonialsController@edit'));
Route::get('testimonial/show/{id}', array('as' => 'testimonial.show', 'uses' => 'TestimonialsController@show'));
Route::patch('testimonial/update/{id}', array('as' => 'testimonial.update', 'uses' => 'TestimonialsController@update'));
Route::get('testimonial/delete/{id}', array('as' => 'testimonial.delete', 'uses' => 'TestimonialsController@destroy'));
Route::get('testimonial/gettestimonial', array('as'=>'testimonial.gettestimonial','uses'=>'DatatabledataController@gettestimonial'));
/* -------- */

/*  Services Route */
Route::get('services', array('as' => 'services.index', 'uses' => 'ServicesController@index'));
Route::get('services/add', array('as' => 'services.create', 'uses' => 'ServicesController@create'));
Route::post('services/store', array('as' => 'services.store', 'uses' => 'ServicesController@store'));
Route::get('services/edit/{id}', array('as' => 'services.edit', 'uses' => 'ServicesController@edit'));
Route::get('services/show/{id}', array('as' => 'services.show', 'uses' => 'ServicesController@show'));
Route::patch('services/update/{id}', array('as' => 'services.update', 'uses' => 'ServicesController@update'));
Route::get('services/delete/{id}', array('as' => 'services.delete', 'uses' => 'ServicesController@destroy'));
Route::get('services/getservices', array('as'=>'services.getservices','uses'=>'DatatabledataController@getservices'));
/* -------- */

/*  Milestone Route */
Route::get('milestone', array('as' => 'milestone.index', 'uses' => 'MilestoneController@index'));
Route::get('milestone/edit/{id}', array('as' => 'milestone.edit', 'uses' => 'MilestoneController@edit'));
Route::patch('milestone/update/{id}', array('as' => 'milestone.update', 'uses' => 'MilestoneController@update'));
Route::get('milestone/delete/{id}', array('as' => 'milestone.delete', 'uses' => 'MilestoneController@destroy'));
Route::get('milestone/getmilestone', array('as'=>'milestone.getmilestone','uses'=>'DatatabledataController@getmilestone'));
/* -------- */

/*  Offer Route */
Route::get('offer', array('as' => 'offer.index', 'uses' => 'OfferController@index'));
Route::get('offer/add', array('as' => 'offer.create', 'uses' => 'OfferController@create'));
Route::post('offer/store', array('as' => 'offer.store', 'uses' => 'OfferController@store'));
Route::get('offer/edit/{id}', array('as' => 'offer.edit', 'uses' => 'OfferController@edit'));
Route::get('offer/show/{id}', array('as' => 'offer.show', 'uses' => 'OfferController@show'));
Route::patch('offer/update/{id}', array('as' => 'offer.update', 'uses' => 'OfferController@update'));
Route::get('offer/delete/{id}', array('as' => 'offer.delete', 'uses' => 'OfferController@destroy'));
Route::get('offer/getoffer', array('as'=>'offer.getoffer','uses'=>'DatatabledataController@getoffer'));
/* -------- */

/*  Featured Services Route */
Route::get('featuredservices', array('as' => 'featuredservices.index', 'uses' => 'FeaturedservicesController@index'));
Route::get('featuredservices/add', array('as' => 'featuredservices.create', 'uses' => 'FeaturedservicesController@create'));
Route::post('featuredservices/store', array('as' => 'featuredservices.store', 'uses' => 'FeaturedservicesController@store'));
Route::get('featuredservices/edit/{id}', array('as' => 'featuredservices.edit', 'uses' => 'FeaturedservicesController@edit'));
Route::get('featuredservices/show/{id}', array('as' => 'featuredservices.show', 'uses' => 'FeaturedservicesController@show'));
Route::patch('featuredservices/update/{id}', array('as' => 'featuredservices.update', 'uses' => 'FeaturedservicesController@update'));
Route::get('featuredservices/delete/{id}', array('as' => 'featuredservices.delete', 'uses' => 'FeaturedservicesController@destroy'));
Route::get('featuredservices/getfservices', array('as'=>'featuredservices.getfservices','uses'=>'DatatabledataController@getfservices'));
/* -------- */

Route::get('userlist', ['uses'=>'DatatablesController@index']);
Route::get('userlist/getuser', ['as'=>'userlist.getuser','uses'=>'DatatablesController@getUsers']);

