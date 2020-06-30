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
Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');


Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');


Route::get('/test',function (){
    return view('admin.layouts.glance');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





/*
 * Home page route
 * */
Route::get('/','Frontend\HomepageController@index');
Route::get('/search','Frontend\SearchController@index');


Route::post('/newsletter','Frontend\NewsletterController@store');
Route::get('/newsletter','Frontend\NewsletterController@index');


/*
 * Frontend route shop category
 * */
Route::get('shop/category/{id}','Frontend\ShopCategoryController@detail');


/*
 * Frontend route shop product
 * */
Route::get('shop/product/{id}','Frontend\ShopProductController@detail');


/*
 * Frontend route cart Giỏ Hàng
 * */
Route::get('shop/cart','Frontend\ShopCartController@index');
Route::get('shop/cart/add','Frontend\ShopCartController@add');
Route::get('shop/cart/update','Frontend\ShopCartController@update');
Route::get('shop/cart/remove','Frontend\ShopCartController@remove');
Route::post('shop/cart/clear','Frontend\ShopCartController@clear');


/*
 * Frontend route payment Thanh Toán
 * */
/*Route::get('shop/payment','Frontend\ShopPaymentController@index');
Route::post('shop/payment','Frontend\ShopPaymentController@order');
Route::get('shop/payment/after','Frontend\ShopPaymentController@afterOrder');*/



Route::get('shop/payment','HomeController@index');
Route::post('shop/payment','HomeController@order');
Route::get('shop/payment/after','HomeController@afterOrder');



/*
 * Frontend route CMS page
 * */
Route::get('page/{id}','Frontend\ContentPageController@detail');


/*
 * Frontend route content category
 * */

Route::get('content/category/{id}','Frontend\ContentCategoryController@detail');


/*
 * Frontend route shop product
 * */
Route::get('content/post/{id}','Frontend\ContentPostController@detail');



/*
 * Frontend route content tag
 * */


Route::post('shop/category','Admin\ShopCategoryController@store');



/*
 * Frontend route review
 * */

Route::post('review/{id}','Frontend\ReviewController@create');





route::prefix('admin')->group(function (){

    Route::get('/','AdminController@index')->name('admin.dashboard');



    Route::get('/dashboard','AdminController@index')->name('admin.dashboard');


    Route::get('register','AdminController@create')->name('admin.register');


    Route::post('register','AdminController@store')->name('admin.register.store');


    Route::get('login','Auth\Admin\LoginController@login')->name('admin.auth.login');


    Route::post('login','Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');


    Route::post('logout','Auth\Admin\LoginController@logout')->name('admin.auth.logout');


    /*
     * ------------Route admin shopping------------
     * --------------------------------------------------
     * --------------------------------------------------*/


    Route::get('shop/category','Admin\ShopCategoryController@index');
    Route::get('shop/category/create','Admin\ShopCategoryController@create');
    Route::get('shop/category/{id}/edit','Admin\ShopCategoryController@edit');
    Route::get('shop/category/{id}/delete','Admin\ShopCategoryController@delete');


    Route::post('shop/category','Admin\ShopCategoryController@store');
    Route::post('shop/category/{id}','Admin\ShopCategoryController@update');
    Route::post('shop/category/{id}/delete','Admin\ShopCategoryController@destroy');

    /*
         * ------------Route admin shopping product------------
         * --------------------------------------------------
         * --------------------------------------------------*/

    Route::get('shop/product','Admin\ShopProductController@index');
    Route::get('shop/product/create','Admin\ShopProductController@create');
    Route::get('shop/product/{id}/edit','Admin\ShopProductController@edit');
    Route::get('shop/product/{id}/delete','Admin\ShopProductController@delete');

    Route::post('shop/product','Admin\ShopProductController@store');
    Route::post('shop/product/{id}','Admin\ShopProductController@update');
    Route::post('shop/product/{id}/delete','Admin\ShopProductController@destroy');





    Route::get('shop/order','Admin\ShopOrderController@index');
    Route::get('shop/order/{id}/edit','Admin\ShopOrderController@edit');
    Route::get('shop/order/{id}/delete','Admin\ShopOrderController@delete');

    Route::post('shop/order/{id}','Admin\ShopOrderController@update');
    Route::post('shop/order/{id}/delete','Admin\ShopOrderController@destroy');




    Route::get('shop/review','Admin\ReviewController@index');
    Route::get('shop/review/{id}/view','Admin\ReviewController@view');



    /*
         * ------------Route admin shopping customer------------
         * --------------------------------------------------
         * --------------------------------------------------*/

    Route::get('shop/customer','Admin\CustomerManagerController@index');
    Route::get('shop/customer/create','Admin\CustomerManagerController@create');
    Route::get('shop/customer/{id}/edit','Admin\CustomerManagerController@edit');
    Route::get('shop/customer/{id}/delete','Admin\CustomerManagerController@delete');

    Route::post('shop/customer','Admin\CustomerManagerController@store');
    Route::post('shop/customer/{id}','Admin\CustomerManagerController@update');
    Route::post('shop/customer/{id}/delete','Admin\CustomerManagerController@destroy');


    /*
         * ------------Route admin shopping shipper------------
         * --------------------------------------------------
         * --------------------------------------------------*/

    Route::get('shop/shipper','Admin\ShipperManagerController@index');
    Route::get('shop/shipper/create','Admin\ShipperManagerController@create');
    Route::get('shop/shipper/{id}/edit','Admin\ShipperManagerController@edit');
    Route::get('shop/shipper/{id}/delete','Admin\ShipperManagerController@delete');

    Route::post('shop/shipper','Admin\ShipperManagerController@store');
    Route::post('shop/shipper/{id}','Admin\ShipperManagerController@update');
    Route::post('shop/shipper/{id}/delete','Admin\ShipperManagerController@destroy');


    /*
         * ------------Route admin shopping shipper------------
         * --------------------------------------------------
         * --------------------------------------------------*/

    Route::get('shop/seller','Admin\SellerManagerController@index');
    Route::get('shop/seller/create','Admin\SellerManagerController@create');
    Route::get('shop/seller/{id}/edit','Admin\SellerManagerController@edit');
    Route::get('shop/seller/{id}/delete','Admin\SellerManagerController@delete');

    Route::post('shop/seller','Admin\SellerManagerController@store');
    Route::post('shop/seller/{id}','Admin\SellerManagerController@update');
    Route::post('shop/seller/{id}/delete','Admin\SellerManagerController@destroy');


    /*
         * ------------Route admin shopping brands------------
         * --------------------------------------------------
         * --------------------------------------------------*/

    Route::get('shop/brands','Admin\ShopBrandController@index');
    Route::get('shop/brands/create','Admin\ShopBrandController@create');
    Route::get('shop/brands/{id}/edit','Admin\ShopBrandController@edit');
    Route::get('shop/brands/{id}/delete','Admin\ShopBrandController@delete');

    Route::post('shop/brands','Admin\ShopBrandController@store');
    Route::post('shop/brands/{id}','Admin\ShopBrandController@update');
    Route::post('shop/brands/{id}/delete','Admin\ShopBrandController@destroy');



    Route::get('shop/statistic',function (){
        return view('admin.content.shop.statistic.index');
    });

    Route::get('shop/product/order',function (){
        return view('admin.content.shop.order.index');
    });


    /*
     * ------------Route admin Noi dung------------
     * --------------------------------------------------
     * --------------------------------------------------*/


    Route::get('content/category','Admin\ContentCategoryController@index');
    Route::get('content/category/create','Admin\ContentCategoryController@create');
    Route::get('content/category/{id}/edit','Admin\ContentCategoryController@edit');
    Route::get('content/category/{id}/delete','Admin\ContentCategoryController@delete');


    Route::post('content/category','Admin\ContentCategoryController@store');
    Route::post('content/category/{id}','Admin\ContentCategoryController@update');
    Route::post('content/category/{id}/delete','Admin\ContentCategoryController@destroy');





    Route::get('content/post','Admin\ContentPostController@index');
    Route::get('content/post/create','Admin\ContentPostController@create');
    Route::get('content/post/{id}/edit','Admin\ContentPostController@edit');
    Route::get('content/post/{id}/delete','Admin\ContentPostController@delete');

    Route::post('content/post','Admin\ContentPostController@store');
    Route::post('content/post/{id}','Admin\ContentPostController@update');
    Route::post('content/post/{id}/delete','Admin\ContentPostController@destroy');





    Route::get('content/page','Admin\ContentPageController@index');
    Route::get('content/page/create','Admin\ContentPageController@create');
    Route::get('content/page/{id}/edit','Admin\ContentPageController@edit');
    Route::get('content/page/{id}/delete','Admin\ContentPageController@delete');

    Route::post('content/page','Admin\ContentPageController@store');
    Route::post('content/page/{id}','Admin\ContentPageController@update');
    Route::post('content/page/{id}/delete','Admin\ContentPageController@destroy');




    Route::get('content/tag','Admin\ContentTagController@index');
    Route::get('content/tag/create','Admin\ContentTagController@create');
    Route::get('content/tag/{id}/edit','Admin\ContentTagController@edit');
    Route::get('content/tag/{id}/delete','Admin\ContentTagController@delete');

    Route::post('content/tag','Admin\ContentTagController@store');
    Route::post('content/tag/{id}','Admin\ContentTagController@update');
    Route::post('content/tag/{id}/delete','Admin\ContentTagController@destroy');




    /*
     * ------------Route admin menu------------
     * --------------------------------------------------
     * --------------------------------------------------*/




    Route::get('menu','Admin\MenuController@index');
    Route::get('menu/create','Admin\MenuController@create');
    Route::get('menu/{id}/edit','Admin\MenuController@edit');
    Route::get('menu/{id}/delete','Admin\MenuController@delete');

    Route::post('menu','Admin\MenuController@store');
    Route::post('menu/{id}','Admin\MenuController@update');
    Route::post('menu/{id}/delete','Admin\MenuController@destroy');






    Route::get('menuitems','Admin\MenuItemController@index');
    Route::get('menuitems/create','Admin\MenuItemController@create');
    Route::get('menuitems/{id}/edit','Admin\MenuItemController@edit');
    Route::get('menuitems/{id}/delete','Admin\MenuItemController@delete');

    Route::post('menuitems','Admin\MenuItemController@store');
    Route::post('menuitems/{id}','Admin\MenuItemController@update');
    Route::post('menuitems/{id}/delete','Admin\MenuItemController@destroy');






    /*
     * ------------Route admin user------------
     * --------------------------------------------------
     * --------------------------------------------------*/



    Route::get('users','Admin\AdminManagerController@index');
    Route::get('users/create','Admin\AdminManagerController@create');
    Route::get('users/{id}/edit','Admin\AdminManagerController@edit');
    Route::get('users/{id}/delete','Admin\AdminManagerController@delete');

    Route::post('users','Admin\AdminManagerController@store');
    Route::post('users/{id}','Admin\AdminManagerController@update');
    Route::post('users/{id}/delete','Admin\AdminManagerController@destroy');

    /*
     * ------------Route admin media------------
     * --------------------------------------------------
     * --------------------------------------------------*/

    Route::get('media',function (){
        return view('admin.content.media.index');
    });


    /*
     * ------------Route admin Golbal Setting------------
     * --------------------------------------------------
     * --------------------------------------------------*/



    Route::get('config','Admin\ConfigController@index');
    Route::post('config','Admin\ConfigController@store');



    /*
     * ------------Route admin Newletter------------
     * --------------------------------------------------
     * --------------------------------------------------*/



    Route::get('newletters','Admin\NewlettersController@index');
    Route::get('newletters/create','Admin\NewlettersController@create');
    Route::get('newletters/{id}/edit','Admin\NewlettersController@edit');
    Route::get('newletters/{id}/delete','Admin\NewlettersController@delete');

    Route::post('newletters','Admin\NewlettersController@store');
    Route::post('newletters/{id}','Admin\NewlettersController@update');
    Route::post('newletters/{id}/delete','Admin\NewlettersController@destroy');



    /*
     * ------------Route admin banners------------
     * --------------------------------------------------
     * --------------------------------------------------*/



    Route::get('banners','Admin\BannerController@index');
    Route::get('banners/create','Admin\BannerController@create');
    Route::get('banners/{id}/edit','Admin\BannerController@edit');
    Route::get('banners/{id}/delete','Admin\BannerController@delete');

    Route::post('banners','Admin\BannerController@store');
    Route::post('banners/{id}','Admin\BannerController@update');
    Route::post('banners/{id}/delete','Admin\BannerController@destroy');

    /*
     * ------------Route admin contact------------
     * --------------------------------------------------
     * --------------------------------------------------*/


    Route::get('contact','Admin\ContactController@index');
    Route::post('contact','Admin\ContactController@store');


    // Route::get('contact',function (){
    //     return view('admin.content.contact.index');
    // });





    /*
     * ------------Route admin Email------------
     * --------------------------------------------------
     * --------------------------------------------------*/

    Route::get('email/inbox',function (){
        return view('admin.content.Email.inbox.index');
    });

    Route::get('email/draft',function (){
        return view('admin.content.Email.draft.index');
    });

    Route::get('email/send',function (){
        return view('admin.content.Email.send.index');
    });

});



route::prefix('seller')->group(function (){

    Route::get('/','SellerController@index')->name('seller.dashboard');


    Route::get('/dashboard','SellerController@index')->name('seller.dashboard');


    Route::get('register','SellerController@create')->name('seller.register');


    Route::post('register','SellerController@store')->name('seller.register.store');


    Route::get('login','Auth\Seller\LoginController@login')->name('seller.auth.login');


    Route::post('login','Auth\Seller\LoginController@loginSeller')->name('seller.auth.loginSeller');


    Route::post('logout','Auth\Seller\LoginController@logout')->name('seller.auth.logout');




//-------------------------------Shop_Product---------------------------------------
    Route::get('shop/product','Seller\ShopProductController@index');
    Route::get('shop/product/create','Seller\ShopProductController@create');
    Route::get('shop/product/{id}/edit','Seller\ShopProductController@edit');
    Route::get('shop/product/{id}/delete','Seller\ShopProductController@delete');

    Route::post('shop/product','Seller\ShopProductController@store');
    Route::post('shop/product/{id}','Seller\ShopProductController@update');
    Route::post('shop/product/{id}/delete','Seller\ShopProductController@destroy');



});



route::prefix('shipper')->group(function (){

    Route::get('/','ShipperController@index')->name('shipper.dashboard');



    Route::get('/dashboard','ShipperController@index')->name('shipper.dashboard');


    Route::get('register','ShipperController@create')->name('shipper.register');


    Route::post('register','ShipperController@store')->name('shipper.register.store');


    Route::get('login','Auth\Shipper\LoginController@login')->name('shipper.auth.login');


    Route::post('login','Auth\Shipper\LoginController@loginShipper')->name('shipper.auth.loginShipper');


    Route::post('logout','Auth\Shipper\LoginController@logout')->name('shipper.auth.logout');




    Route::get('shop/order','Shipper\ShopOrderController@index');
    Route::get('shop/order/list','Shipper\ShopOrderController@list');
    Route::get('shop/order/{id}/edit','Shipper\ShopOrderController@edit');

    Route::post('shop/order/{id}','Shipper\ShopOrderController@update');
    Route::post('shop/order/{id}/verify','Shipper\ShopOrderController@verify');
    Route::post('shop/order/{id}/unverify','Shipper\ShopOrderController@unverify');
    Route::post('shop/order/{id}/success','Shipper\ShopOrderController@success');

    Route::post('shop/order/{id}/delete','Shipper\ShopOrderController@delete');
    Route::post('shop/order/{id}/undelete','Shipper\ShopOrderController@undelete');

    Route::post('shop/order/{id}/verify1','Shipper\ShopOrderController@verify1');
    Route::post('shop/order/{id}/unverify1','Shipper\ShopOrderController@unverify1');
    Route::post('shop/order/{id}/success1','Shipper\ShopOrderController@success1');
    Route::post('shop/order/{id}/store','Shipper\ShopOrderController@store');
    Route::post('shop/order/{id}/delete1','Shipper\ShopOrderController@delete1');
    Route::post('shop/order/{id}/undelete1','Shipper\ShopOrderController@undelete1');




});
