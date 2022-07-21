<?php

use Illuminate\Support\Facades\Route;

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

//Frontend Routes
Route::get('/', 'HomeController@home2');
Route::get('/home', 'HomeController@home2')->name('home');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/about-us', 'HomeController@about_us');
Route::get('/our-values', 'HomeController@our_values');
Route::get('/our-partner', 'HomeController@our_partners');
Route::get('/our-clients', 'HomeController@our_clients');

Route::get('/our-factory', 'HomeController@our_factory');
Route::get('/factory/{id}', 'HomeController@factory_details')->name('factory.details');
Route::get('/our-showroom', 'HomeController@our_showroom');
Route::get('/showroom/{id}', 'HomeController@showroom_details')->name('showroom.details');

Route::get('/client-info/{id}', 'HomeController@client_info')->name('client-info');
Route::get('/partner-info/{id}', 'HomeController@partner_info')->name('partner-info');
Route::get('/contact-us', 'HomeController@contact_us');
Route::post('/contact', 'HomeController@contact')->name('contact');
Route::get('/career', 'HomeController@careers');
Route::post('/career', 'HomeController@career_store');
Route::get('/ourteam', 'HomeController@team');
Route::get('/blogs', 'HomeController@blogs');
Route::get('/blogs/read/{id}', 'HomeController@blogs_read')->name('blogs.read');
Route::get('/products/view/{id}', 'HomeController@product_view')->name('product.view');
Route::get('/products/category/view/{id}', 'HomeController@product_category_view')->name('product.category.view');
Route::get('/products/gender/view/{id}', 'HomeController@product_gender_view')->name('product.gender.view');
Route::get('/services/view/{id}', 'HomeController@services_view')->name('service.view');

Route::get('/products-list', 'HomeController@products_list')->name('products-list');
// Route::get('/{page}', 'HomeController@editable_page');

Route::get('/products_view/{div_id}/{cat_id}/{gen_id}', 'HomeController@products_view')->name('products_view');
Route::get('/division/{div_id}/category/{cat_id}', 'HomeController@category')->name('category');
Route::get('/division/{div_id}', 'HomeController@division')->name('division');



//Backend Routes
Route::group(['middleware'=>['checkToAccess']], function() {

    Route::get('/dashboard', 'DashboardController@index');

    Route::get('/dashboard/sliders', 'DashboardController@sliders_index')->name('sliders.index');
    Route::get('/dashboard/sliders/create', 'DashboardController@sliders_create')->name('sliders.create');
    Route::post('/dashboard/sliders/create', 'DashboardController@sliders_insert');
    Route::get('/dashboard/sliders/edit/{id}', 'DashboardController@sliders_edit')->name('sliders.edit');
    Route::post('/dashboard/sliders/edit/{id}', 'DashboardController@sliders_update');
    Route::get('/dashboard/sliders/delete/{id}', 'DashboardController@sliders_remove')->name('sliders.delete');
    Route::post('/dashboard/sliders/delete/{id}', 'DashboardController@sliders_remove');

    Route::get('/dashboard/item-sliders', 'DashboardController@item_slider_index')->name('item.sliders.index');
    Route::get('/dashboard/item/sliders/create', 'DashboardController@item_slider_create')->name('item-sliders.create');
    Route::post('/dashboard/item/sliders/store', 'DashboardController@item_slider_store')->name('item-slider-store');
    Route::get('/dashboard/item/sliders/delete/{id}', 'DashboardController@item_slider_remove')->name('item.sliders.delete');

    Route::get('/dashboard/review', 'DashboardController@review_index')->name('review.index');
    Route::get('/dashboard/review/create', 'DashboardController@review_create')->name('review.create');
    Route::post('/dashboard/review/store', 'DashboardController@review_store')->name('review.store');
    Route::get('/dashboard/review/delete/{id}', 'DashboardController@review_remove')->name('review.delete');

    Route::get('/dashboard/teammembers', 'DashboardController@teammember_index');
    Route::get('/dashboard/teammembers/create', 'DashboardController@teammember_create');
    Route::post('/dashboard/teammembers/create', 'DashboardController@teammember_post');
    Route::get('/dashboard/teammembers/view/{id}', 'DashboardController@teammember_view')->name('teammember.view');
    Route::get('/dashboard/teammembers/edit/{id}', 'DashboardController@teammember_edit')->name('teammember.edit');
    Route::post('/dashboard/teammembers/edit/{id}', 'DashboardController@teammember_update');
    Route::get('/dashboard/teammembers/delete/{id}', 'DashboardController@teammember_delete')->name('teammember.delete');
    Route::post('/dashboard/teammembers/delete/{id}', 'DashboardController@teammember_remove');

    Route::get('/dashboard/servicesinformation', 'DashboardController@services_index');
    Route::get('/dashboard/servicesinformation/create', 'DashboardController@services_create');
    Route::post('/dashboard/servicesinformation/create', 'DashboardController@services_insert');
    Route::get('/dashboard/servicesinformation/view/{id}', 'DashboardController@services_view')->name('services.view');
    Route::get('/dashboard/servicesinformation/edit/{id}', 'DashboardController@services_edit')->name('services.edit');
    Route::post('/dashboard/servicesinformation/edit/{id}', 'DashboardController@services_update');
    Route::get('/dashboard/servicesinformation/delete/{id}', 'DashboardController@services_delete')->name('services.delete');
    Route::post('/dashboard/servicesinformation/delete/{id}', 'DashboardController@services_remove');

    Route::get('/dashboard/blogs', 'DashboardController@blogs')->name('blogs');
    Route::get('/dashboard/blogs/create', 'DashboardController@blogs_create');
    Route::post('/dashboard/blogs/store', 'DashboardController@blogs_store')->name('blog.store');
    Route::get('/dashboard/blogs/view/{id}', 'DashboardController@blogs_view')->name('blogs.view');
    Route::get('/dashboard/blogs/edit/{id}', 'DashboardController@blogs_edit')->name('blogs.edit');
    Route::post('/dashboard/blogs/edit/{id}', 'DashboardController@blogs_update');
    Route::get('/dashboard/blogs/delete/{id}', 'DashboardController@blogs_delete')->name('blogs.delete');
    Route::post('/dashboard/blogs/delete/{id}', 'DashboardController@blogs_remove');

    Route::get('/dashboard/ourclients', 'DashboardController@ourclients_index');
    Route::get('/dashboard/ourclients/create', 'DashboardController@ourclients_create');
    Route::post('/dashboard/ourclients/create', 'DashboardController@ourclients_insert');
    Route::get('/dashboard/ourclients/view/{id}', 'DashboardController@ourclients_view')->name('ourclients.view');
    Route::get('/dashboard/ourclients/edit/{id}', 'DashboardController@ourclients_edit')->name('ourclients.edit');
    Route::post('/dashboard/ourclients/edit/{id}', 'DashboardController@ourclients_update');
    Route::get('/dashboard/ourclients/delete/{id}', 'DashboardController@ourclients_delete')->name('ourclients.delete');
    Route::post('/dashboard/ourclients/delete/{id}', 'DashboardController@ourclients_remove');


    // factory start 
    Route::get('/dashboard/factory', 'DashboardController@factory_index');
    Route::get('/dashboard/factory/create', 'DashboardController@factory_create');
    Route::post('/dashboard/factory/create', 'DashboardController@factory_insert');
    Route::get('/dashboard/factory/view/{id}', 'DashboardController@factory_view')->name('factory.view');
    Route::get('/dashboard/factory/edit/{id}', 'DashboardController@factory_edit')->name('factory.edit');
    Route::post('/dashboard/factory/edit/{id}', 'DashboardController@factory_update');
    Route::get('/dashboard/factory/delete/{id}', 'DashboardController@factory_delete')->name('factory.delete');
    Route::post('/dashboard/factory/delete/{id}', 'DashboardController@factory_remove');

    Route::get('/dashboard/factory/worker/delete/{id}/{image}', 'DashboardController@factory_image_delete')->name('factory.worker.delete');
    Route::get('/dashboard/factory/gallery/delete/{id}/{image}', 'DashboardController@factory_gallery_delete')->name('factory.gallery.delete');
    // factory end 


    // showroom start 
    Route::get('/dashboard/showroom', 'DashboardController@showroom_index');
    Route::get('/dashboard/showroom/create', 'DashboardController@showroom_create');
    Route::post('/dashboard/showroom/create', 'DashboardController@showroom_insert');
    Route::get('/dashboard/showroom/view/{id}', 'DashboardController@showroom_view')->name('showroom.view');
    Route::get('/dashboard/showroom/edit/{id}', 'DashboardController@showroom_edit')->name('showroom.edit');
    Route::post('/dashboard/showroom/edit/{id}', 'DashboardController@showroom_update');
    Route::get('/dashboard/showroom/delete/{id}', 'DashboardController@showroom_delete')->name('showroom.delete');
    Route::post('/dashboard/showroom/delete/{id}', 'DashboardController@showroomy_remove');

    Route::get('/dashboard/showroom/worker/delete/{id}/{image}', 'DashboardController@showroom_image_delete')->name('showroom.worker.delete');
    Route::get('/dashboard/showroom/gallery/delete/{id}/{image}', 'DashboardController@showroom_gallery_delete')->name('showroom.gallery.delete');
    // showroom end 


    Route::get('/dashboard/our-partners', 'DashboardController@our_partners_index');
    Route::get('/dashboard/our-partners/create', 'DashboardController@our_partners_create');
    Route::post('/dashboard/our-partners/create', 'DashboardController@our_partners_insert');
    Route::get('/dashboard/our-partners/view/{id}', 'DashboardController@our_partners_view')->name('our-partners.view');
    Route::get('/dashboard/our-partners/edit/{id}', 'DashboardController@our_partners_edit')->name('our-partners.edit');
    Route::post('/dashboard/our-partners/edit/{id}', 'DashboardController@our_partners_update');
    Route::get('/dashboard/our-partners/delete/{id}', 'DashboardController@our_partners_delete')->name('our-partners.delete');
    Route::post('/dashboard/our-partners/delete/{id}', 'DashboardController@our_partners_remove');

    Route::get('/dashboard/pagecms', 'DashboardController@pagecms_index');
    Route::get('/dashboard/pagecms/view/{id}', 'DashboardController@pagecms_view')->name('pagecms.view');
    Route::get('/dashboard/pagecms/edit/{id}', 'DashboardController@pagecms_edit')->name('pagecms.edit');
    Route::post('/dashboard/pagecms/edit/{id}', 'DashboardController@pagecms_update');

    Route::get('/dashboard/career', 'DashboardController@career_index');
    Route::get('/dashboard/jobs', 'DashboardController@jobs_list');
    Route::get('/dashboard/job/delete/{id}', 'DashboardController@job_remove')->name('job.delete');
    Route::get('/dashboard/career/create', 'DashboardController@career_create');
    Route::post('/dashboard/career/create', 'DashboardController@career_insert');
    Route::get('/dashboard/career/view/{id}', 'DashboardController@career_view')->name('career.view');
    Route::get('/dashboard/career/edit/{id}', 'DashboardController@career_edit')->name('career.edit');
    Route::post('/dashboard/career/edit/{id}', 'DashboardController@career_update');
    Route::get('/dashboard/career/delete/{id}', 'DashboardController@career_remove')->name('career.delete');
    Route::post('/dashboard/career/delete/{id}', 'DashboardController@career_remove');

    Route::get('/dashboard/products/division', 'DashboardController@division_index')->name('division.index');
    Route::get('/dashboard/products/division/create', 'DashboardController@division_create')->name('division.create');
    Route::post('/dashboard/products/division/create', 'DashboardController@division_insert');
    Route::get('/dashboard/products/division/edit/{id}', 'DashboardController@division_edit')->name('division.edit');
    Route::post('/dashboard/products/division/edit/{id}', 'DashboardController@division_update');
    Route::get('/dashboard/products/division/delete/{id}', 'DashboardController@division_remove')->name('division.delete');
    Route::post('/dashboard/products/division/delete/{id}', 'DashboardController@division_remove');

    Route::get('/dashboard/products/category', 'DashboardController@category_index')->name('category.index');
    Route::get('/dashboard/products/category/create', 'DashboardController@category_create')->name('category.create');
    Route::post('/dashboard/products/category/create', 'DashboardController@category_insert');
    Route::get('/dashboard/products/category/edit/{id}', 'DashboardController@category_edit')->name('category.edit');
    Route::post('/dashboard/products/category/edit/{id}', 'DashboardController@category_update');
    Route::get('/dashboard/products/category/delete/{id}', 'DashboardController@category_remove')->name('category.delete');
    Route::post('/dashboard/products/category/delete/{id}', 'DashboardController@category_remove');

    Route::get('/dashboard/products/sub-category', 'DashboardController@sub_category_index')->name('sub-category.index');

    Route::get('/dashboard/products/gender', 'DashboardController@gender_index')->name('gender.index');
    Route::get('/dashboard/products/gender/create', 'DashboardController@gender_create')->name('gender.create');
    Route::post('/dashboard/products/gender/create', 'DashboardController@gender_insert');
    Route::get('/dashboard/products/gender/edit/{id}', 'DashboardController@gender_edit')->name('gender.edit');
    Route::post('/dashboard/products/gender/edit/{id}', 'DashboardController@gender_update');
    Route::get('/dashboard/products/gender/delete/{id}', 'DashboardController@gender_remove')->name('gender.delete');
    Route::post('/dashboard/products/gender/delete/{id}', 'DashboardController@gender_remove');

    Route::get('/dashboard/products', 'DashboardController@products_index')->name('products.index');
    Route::get('/dashboard/products/create', 'DashboardController@products_create')->name('products.create');
    Route::post('/dashboard/products/create', 'DashboardController@products_insert');
    Route::get('/dashboard/products/view/{id}', 'DashboardController@products_view')->name('products.view');
    Route::get('/dashboard/products/edit/{id}', 'DashboardController@products_edit')->name('products.edit');
    Route::post('/dashboard/products/edit/{id}', 'DashboardController@products_update');
    Route::get('/dashboard/products/delete/{id}', 'DashboardController@products_remove')->name('products.delete');
    Route::post('/dashboard/products/delete/{id}', 'DashboardController@products_remove');

    Route::get('/dashboard/get/subcategory/{id}', 'DashboardController@get_subcategory');

    Route::get('/dashboard/settings', 'DashboardController@settings')->name('dashboard.settings');
    Route::post('/dashboard/settings', 'DashboardController@update_password');

    Route::get('/dashboard/website/setting', 'DashboardController@website_setting')->name('website.settings');
    Route::post('/dashboard/website/setting/store', 'DashboardController@website_setting_store')->name('website.settings.store');

    Route::get('/logout', 'LogoutController@index');

});
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

