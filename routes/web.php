<?php

use App\Http\Controllers\Frontend\AllFindController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\Frontend\WarishController;
use App\Http\Controllers\Frontend\FamilySonosController;
use App\Http\Controllers\Frontend\AllSonodController;
use App\Http\Controllers\Frontend\AllFrontend;
use App\Http\Controllers\Frontend\NoticeController;
use App\Http\Controllers\Frontend\OvijogPoramorssoController;
use App\Http\Controllers\Frontend\ProkolpoController;
use App\Http\Controllers\SodossoController;

Route::get('/','App\Http\Controllers\Frontend\Allshow@index')->name('/');
// Route::get('/','App\Http\Controllers\Frontend\Allshow@dash')->middleware(['auth']);
Route::get('/admin','App\Http\Controllers\Frontend\Allshow@dash')->middleware(['auth'])->name('dashboard');


// FRONTEND SECTION
Route::controller(AllFrontend::class)->group(function () {

    // All Profile Here
    Route::get('/profile/chairman', 'profilechairman')->name('profile.chairman');
    Route::get('/profile/panelchairman', 'profilepanelchairman')->name('profile.panelchairman');
    Route::get('/profile/sochib', 'profilesochib')->name('profile.sochib');
    Route::get('/profile/upmembers', 'profileupmembers')->name('profile.upmembers');
    Route::get('/profile/grampolice', 'profilegrampolice')->name('profile.grampolice');
    Route::get('/profile/others', 'profileothers')->name('profile.others');
    Route::get('/profile/{id}', 'Allprofile')->name('Allprofile');


    Route::get('/upokarvogitalika', 'upokarvogitalika')->name('upokarvogitalika');
});
Route::controller(AllFindController::class)->group(function () {
    Route::get('/holding-find', 'HoldingFindFromFrontend')->name('HoldingFindFromFrontend');
    Route::get('/warishsonod-find', 'WarishsonodFromFrontend')->name('warishsonodFromFrontend');
    Route::get('/familysonod-find', 'familysonodFromFrontend')->name('familysonodFromFrontend');
    Route::get('/allsonod-find', 'allsonodFromFrontend')->name('allsonodFromFrontend');
    Route::get('/upokarvugi-find', 'upokarvugiFromFrontend')->name('upokarvugiFromFrontend');
    Route::get('/citizen-charter', 'citizencharter')->name('citizencharter');
    Route::get('/photo-gallery', 'photogallery')->name('photogallery');
    Route::get('/video-gallery', 'videogallery')->name('videogallery');
});
Route::controller(OvijogPoramorssoController::class)->group(function () {
    Route::get('/ovijog-poramorsso', 'createFrontend')->name('createFrontend');
});
Route::controller(NoticeController::class)->group(function () {
    Route::get('/all-notice', 'Allnotice')->name('Allnotice');
});
Route::controller(ProkolpoController::class)->group(function () {
    Route::get('/all-prokolpo', 'Allprokolpo')->name('Allprokolpo');
});

Route::group(['prefix'=>'/warish'],function(){
        Route::get('/apply',[WarishController::class,'create'])->name('warish.create');
        Route::post('/store',[WarishController::class,'store'])->name('warish.store');
    });
Route::group(['prefix'=>'/family'],function(){
        Route::get('/apply',[FamilySonosController::class,'create'])->name('family.create');
    });
Route::group(['prefix'=>'/allsonod'],function(){
        Route::get('/apply',[AllSonodController::class,'create'])->name('allsonod.create');
    });

Route::group(['prefix'=>'/admin'],function(){

    Route::group(['prefix'=>'/peoples'],function(){
        Route::get('/create','App\Http\Controllers\Backend\PeoplesController@create')->name('peoples.create');
        Route::post('/insert','App\Http\Controllers\Backend\PeoplesController@store')->name('peoples.store');
        Route::get('/manage','App\Http\Controllers\Backend\PeoplesController@index')->name('peoples.manage');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\PeoplesController@edit')->name('peoples.edite');
        Route::post('/update/{id}','App\Http\Controllers\Backend\PeoplesController@update')->name('peoples.update');
        Route::get('/show/{id}','App\Http\Controllers\Backend\PeoplesController@show')->name('peoples.show');
        Route::get('/delete/{id}','App\Http\Controllers\Backend\PeoplesController@destroy')->name('peoples.delete');
    });

    Route::group(['prefix'=>'/staff'],function(){
        Route::get('/create','App\Http\Controllers\Backend\StaffController@create')->name('staff.create');
        Route::post('/insert','App\Http\Controllers\Backend\StaffController@store')->name('staff.store');
        Route::get('/manage','App\Http\Controllers\Backend\StaffController@index')->name('staff.manage');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\StaffController@edit')->name('staff.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\StaffController@update')->name('staff.update');
        Route::get('/delete/{id}','App\Http\Controllers\Backend\StaffController@destroy')->name('staff.delete');
    });
    Route::group(['prefix'=>'/sodosso'],function(){
        // Route::get('/create','App\Http\Controllers\Backend\SodossoController@create')->name('sodosso.create');
        Route::post('/insert','App\Http\Controllers\SodossoController@store')->name('sodosso.store');
        Route::get('/manage','App\Http\Controllers\SodossoController@index')->name('sodosso.manage');
        Route::get('/edit/{id}','App\Http\Controllers\SodossoController@edit')->name('sodosso.edit');
        Route::post('/update/{id}','App\Http\Controllers\SodossoController@update')->name('sodosso.update');
        Route::get('/delete/{id}','App\Http\Controllers\SodossoController@destroy')->name('sodosso.delete');
    });

    Route::group(['prefix'=>'/report'],function(){
        Route::get('/assesment','App\Http\Controllers\Backend\AssesmentController@assesment')->name('assesment');
        
        Route::get('/byword/{id}','App\Http\Controllers\Backend\AssesmentController@byword');
        
    });
    
    Route::group(['prefix'=>'/tax'],function(){
        Route::get('/create','App\Http\Controllers\Backend\TaxController@create')->name('tax.create');
        Route::post('/insert','App\Http\Controllers\Backend\TaxController@store')->name('tax.store');
        Route::get('/manage','App\Http\Controllers\Backend\TaxController@index')->name('tax.manage');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\TaxController@edit')->name('tax.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\TaxController@update')->name('tax.update');
        Route::get('/delete/{id}','App\Http\Controllers\Backend\TaxController@destroy')->name('tax.delete');
        Route::get('/taxprint/{id}/{$orthoBosor}','App\Http\Controllers\Backend\TaxController@taxprint')->name('taxprint');
        Route::get('/taxprint1/{id}','App\Http\Controllers\Backend\TaxController@taxprint1')->name('taxprint1');
        
        Route::get('/searchData/{id}','App\Http\Controllers\Backend\TaxController@searchData');
        Route::get('/findforTax/{id}','App\Http\Controllers\Backend\TaxController@findforTax');
    });
    
    Route::group(['prefix'=>'/wareshinfo'],function(){
        Route::get('/create','App\Http\Controllers\Backend\WareshInfoController@create')->name('wareshinfo.create');
        Route::post('/insert','App\Http\Controllers\Backend\WareshInfoController@store')->name('wareshinfo.store');
        Route::get('/manage','App\Http\Controllers\Backend\WareshInfoController@index')->name('wareshinfo.manage');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\WareshInfoController@edit')->name('wareshinfo.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\WareshInfoController@update')->name('wareshinfo.update');
        Route::get('/delete/{id}','App\Http\Controllers\Backend\WareshInfoController@destroy')->name('wareshinfo.delete');
        Route::get('/singlewarish/{id}','App\Http\Controllers\Backend\WareshInfoController@singlewarish')->name('single.warish');
    });
    
    Route::group(['prefix'=>'/wareshgon'],function(){
        Route::get('/create/{id}','App\Http\Controllers\Backend\WareshgonController@create')->name('wareshgon.create');
        Route::post('/insert/{id}','App\Http\Controllers\Backend\WareshgonController@store')->name('wareshgon.store');
        Route::get('/manage/{id}','App\Http\Controllers\Backend\WareshgonController@index')->name('wareshgon.manage');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\WareshgonController@edit')->name('wareshgon.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\WareshgonController@update')->name('wareshgon.update');
        Route::get('/delete/{id}','App\Http\Controllers\Backend\WareshgonController@destroy')->name('wareshgon.delete');
    });
    
    Route::group(['prefix'=>'/nagorik'],function(){
        Route::get('/create','App\Http\Controllers\Backend\NagorikController@create')->name('nagorik.create');
        Route::post('/insert','App\Http\Controllers\Backend\NagorikController@store')->name('nagorik.store');
        Route::get('/manage','App\Http\Controllers\Backend\NagorikController@index')->name('nagorik.manage');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\NagorikController@edit')->name('nagorik.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\NagorikController@update')->name('nagorik.update');
        Route::get('/delete/{id}','App\Http\Controllers\Backend\NagorikController@destroy')->name('nagorik.delete');
    });
    
    Route::group(['prefix'=>'/tradelicense'],function(){
        Route::get('/create','App\Http\Controllers\Backend\TradeLicenseController@create')->name('tradelicense.create');
        Route::post('/insert','App\Http\Controllers\Backend\TradeLicenseController@store')->name('tradelicense.store');
        Route::get('/manage','App\Http\Controllers\Backend\TradeLicenseController@index')->name('tradelicense.manage');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\TradeLicenseController@edit')->name('tradelicense.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\TradeLicenseController@update')->name('tradelicense.update');
        Route::get('/delete/{id}','App\Http\Controllers\Backend\TradeLicenseController@destroy')->name('tradelicense.delete');
    });
});
require __DIR__.'/auth.php';
