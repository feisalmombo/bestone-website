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
    $projects = \DB::table('projects')
    ->select('id','project_name','description','image_path','created_at')
    ->latest()
    ->limit(9)
    ->get();
    $projects_re = \DB::table('projects')
    ->select('id','project_name','description','image_path','created_at')
    ->latest()
    ->limit(2)
    ->get();
    
    $images = \DB::table('projects')
    ->join('project_category_assignments', 'projects.category_id','=','project_category_assignments.id')
    ->select('project_category_assignments.category_name','projects.description','projects.image_path','projects.created_at','projects.id')
    ->latest()
    ->limit(6)
    ->get();
    $galleries = \DB::table('galleries')
    ->select('image_path','id')
    ->latest()
    ->get();

    $partners = \DB::table('partners')
    ->latest()
    ->limit(12)
    ->get();

    $services = \DB::table('services')
    ->latest()
    ->limit(9)
    ->get();
    
   // return $images;
    return view('welcome', compact('projects','projects_re','images','galleries', 'partners', 'services'));
});

Auth::routes();


//Comment Controller
Route::post('/comment/validate','CommentsController@store');



Route::group(['middleware' => 'ValidateBackButtonHistory'], function() {
    Route::group(['middleware' => 'auth'],function(){

        Route::resource('/comment','CommentsController');

        Route::get('/comment/send','CommentsController@getEmail');
        Route::post('/comment/send','CommentsController@postEmail');

        //Route for upload image for partners made by admin
        /*Route::get('partner', function() {
            $partners = DB::table('partners')
            ->latest()
            ->get();

            return view('partners.index', compact('partners'));
        });*/

        Route::resource('partner', 'PartnersController');

        Route::post('partner', ['as'=>'partner','uses'=>'PartnersController@store']);

        Route::resource('service', 'ServicesController');
        Route::post('service', ['as'=>'service','uses'=>'ServicesController@store']);

        Route::get('gallery','GalleryController@index');
        Route::post('gallery','GalleryController@store');
        Route::get('project/{id}','ProjectController@show');
        Route::get('show/{id}','ProjectController@sowProject');
        //Route::get('/home', 'HomeController@index')->name('home');

        Route::get('update_password','UpdatePasswordController@index');
        Route::post('update_password','UpdatePasswordController@update');

        
    //Route::get('profile','UserProfileController@index');
        Route::resource('profile','UserProfileController');
        Route::resource('project','ProjectController');
        Route::post('profile-imaage','UserProfileController@changeProfile');
        
        Route::get('upload','ProjectController@uploadForm');
        //Route::get('subscribers','SubscriberController@index');

        
        view()->composer('admin_layouts.dashboard', function($view) {
            $total_pro = \DB::table('projects')
            ->select('id')
            ->count();
            $total_img = \DB::table('galleries')
            ->select('id')
            ->count();
            $subscribers = \DB::table('subscribers')
            ->select('id')
            ->count();

            $view->with([
                'project_total' => $total_pro,
                'total_img' => $total_img,
                'subscribers' => $subscribers,
            ]);
        });


        
    });
});

Route::group(['middleware' => 'masterAdmin'],function(){
    Route::get('send-token','VerificationToken@index');
    Route::post('send-token','VerificationToken@sendEmail');
    Route::get('see-user','UserProfileController@seeUser');
    
});


//subscriber

//Route::post('subscriber-email','SubscriberController@store');

Route::post('admin-register','VerificationToken@register');



