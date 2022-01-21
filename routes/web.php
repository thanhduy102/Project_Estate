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
Route::get('','frontend\IndexController@Index');
Route::post('/danh_muc','frontend\IndexController@danh_muc');
Route::post('/featured_estate','frontend\IndexController@featured_estate');
// Phan frontend
Route::get('dang-nhap','Auth\AuthController@Login')->middleware('CheckLogout');
Route::post('/dang-nhap','Auth\AuthController@login_auth')->name('login');
Route::get('dang-ky','Auth\AuthController@Signup');
Route::post('/dang-ky','Auth\AuthController@Register')->name('register');
Route::get('/validate-email','Auth\AuthController@validate_email');
Route::get('/validate-phone','Auth\AuthController@validate_phone');



// END
Route::get('logout','Auth\AuthController@Logout');


//Phan backend
Route::group(['prefix'=>'admin','middleware'=>'CheckLogin'],function(){
Route::group(['middleware'=>'auth.role'],function(){
    //Index
    Route::get('','backend\IndexController@Index');
    //End Index
    // Role Admin
    Route::group(['middleware'=>'adminRole'],function(){
        // User
        Route::get('user','backend\UserController@GetUser');
        Route::post('assign_role','backend\UserController@assign_role');
        Route::post('/delete_user','backend\UserController@delete_user');
        Route::post('/view_users','backend\UserController@view_users');
        // Delete Danh muc
        Route::post('/delete-category','backend\DanhMucController@DeleteCategory');
        // End Delete Danh muc
        // Delete tin tuc
        Route::post('/delete-new','backend\TinTucController@DeleteNews');
        // End delete new
// Edit bat dong san
        Route::get('edit-bat-dong-san/id={idBDS}','backend\BatDongSanController@View_Edit_Estate');
        Route::post('/get-id-bds','backend\BatDongSanController@Get_Estate');
        Route::post('/select_category','backend\BatDongSanController@select_category');
        Route::post('/select_location','backend\BatDongSanController@Select_Location');
        Route::post('/edit_estate','backend\BatDongSanController@edit_estate')->name('edit_estate');
        Route::post('/remote_image','backend\BatDongSanController@remote_image');
        Route::post('/editImage','backend\BatDongSanController@editImage');

        Route::post('/delete_estate','backend\BatDongSanController@delete_estate');
    });
    // End role admin
    //Danh muc
     
        //List Danh Muc
        Route::get('danhmuc-ajax','backend\DanhMucController@ListCategory')->name('danhmuc.data');
        Route::get('list-category',function(){
            return view('backend.danh-muc.list_danh_muc');
        });
        //End List Danh Muc
    
        //Add Danh Muc
        Route::get('add-category','backend\DanhMucController@GetCategorys');
        Route::post('/add-category','backend\DanhMucController@AddCategory')->name('addCate');
        // End Add Danh muc
    
        //Edit Danh muc
        Route::get('edit-category/id={idDanhMuc}','backend\DanhMucController@EditCategory');
        Route::post('/get-id','backend\DanhMucController@GetIDDanhMuc');
        Route::post('/edit-category','backend\DanhMucController@EditDanhMuc')->name('editCategory');
        // End Edit
    // End danh muc

    // Tin tức
        // List tin tuc
        Route::get('tintuc-ajax','backend\TinTucController@ListTinTuc')->name('dataTinTuc');
        Route::get('list-news',function(){
            return view('backend.tin-tuc.list_tin_tuc');
        });
        // End list tin tuc
        // Lay danh sach danh muc
        Route::post('/get-category','backend\TinTucController@GetCate')->name('getCate');
        // End
        // Them tin tuc
        Route::get('add-news','backend\TinTucController@AddTinTuc');
        Route::post('/add-news','backend\TinTucController@AddNews')->name('addNews');
        // End them tin tuc
        //Chinh sua tin tuc
        Route::get('edit-news/id={idTinTuc}','backend\TinTucController@ViewEdit');
        Route::post('/get-id-new','backend\TinTucController@GetIDNews');
        Route::post('/edit-news','backend\TinTucController@EditNews')->name('editNews');
        // End chinh sua tin tuc
    // End tin tức
    // Bat dong san
     // List danh sách bất động sản
     Route::get('bds-ajax','backend\BatDongSanController@Bds_Ajax')->name('dataBDS');
     Route::get('estate','backend\BatDongSanController@ListBDS');
     Route::post('/approve_estate','backend\BatDongSanController@approve_estate');
     Route::post('/remove_estate','backend\BatDongSanController@remove_estate');
     
     Route::post('/estate_detail','backend\BatDongSanController@estate_detail');

    Route::get('post-estate','backend\BatDongSanController@PostEstate');
    Route::post('/add-estate','backend\BatDongSanController@Add_Estate')->name('add_estate');
    Route::post('/image-estate','backend\BatDongSanController@image_estate');

     
     // End list
});

});
