<?php


use App\Route;

/*----Пользователь----*/
Route::get('/', 'SiteController@index'); 
Route::get('/news', 'SiteController@news');
Route::get('/newsId', 'SiteController@GetNewsId');
Route::get('/informs', 'SiteController@informs');
Route::get('/informsId', 'SiteController@GetInformsId');
Route::get('/galleries', 'SiteController@gallery');
Route::get('/breakMenu', 'SiteController@getRightMenuId');
/*----Пользователь----*/

/*----Админ панель----*/
Route::post('/adminRegistr', 'AdminController@author');
Route::get('/DPanelAdmin', 'AdminController@index');
Route::get('/DashBoard/create', 'AdminController@create');
Route::get('/invalidPass', 'AdminController@invalidPass');
Route::get('/mainDashBoard', 'AdminController@Dashboard');
      // Выполняем меню
Route::get('/DashBoard/menu', 'MenuAdminController@index');
Route::get('/DashBoard/menu/show', 'MenuAdminController@show');
Route::get('/DashBoard/menu/create', 'MenuAdminController@create');
Route::get('/DashBoard/menu/delete', 'MenuAdminController@delete');
Route::post('/DashBoard/menu/store', 'MenuAdminController@store');
Route::post('/DashBoard/menu/update', 'MenuAdminController@update');
Route::get('/DashBoard/menu/edit', 'MenuAdminController@edit');

      // Выполняем MENU_BLOCK
Route::get('/DashBoard/menu-block', 'MenuBlockAdminController@index');
Route::get('/DashBoard/menu-block/show', 'MenuBlockAdminController@show');
Route::get('/DashBoard/menu-block/create', 'MenuBlockAdminController@create');
Route::get('/DashBoard/menu-block/delete', 'MenuBlockAdminController@delete');
Route::post('/DashBoard/menu-block/store', 'MenuBlockAdminController@store');
Route::post('/DashBoard/menu-block/update', 'MenuBlockAdminController@update');
Route::get('/DashBoard/menu-block/edit', 'MenuBlockAdminController@edit');

     // Выполняем GALLERY
Route::get('/DashBoard/gallery', 'MenuBlockAdminController@index');
Route::get('/DashBoard/gallery/show', 'MenuBlockAdminController@show');
Route::get('/DashBoard/gallery/create', 'MenuBlockAdminController@create');
Route::get('/DashBoard/gallery/delete', 'MenuBlockAdminController@delete');
Route::post('/DashBoard/gallery/store', 'MenuBlockAdminController@store');
Route::post('/DashBoard/gallery/update', 'MenuBlockAdminController@update');
Route::get('/DashBoard/gallery/edit', 'MenuBlockAdminController@edit');

      // Выполняем NEWS
Route::get('/DashBoard/news', 'NewsAdminController@index');
Route::get('/DashBoard/news/show', 'NewsAdminController@show');
Route::get('/DashBoard/news/create', 'NewsAdminController@create');
Route::get('/DashBoard/news/delete', 'NewsAdminController@delete');
Route::post('/DashBoard/news/store', 'NewsAdminController@store');
Route::post('/DashBoard/news/update', 'NewsAdminController@update');
Route::get('/DashBoard/news/edit', 'NewsAdminController@edit');

Route::get('/DashBoard/infocontent', 'InfoContentAdminController@index');
Route::get('/DashBoard/infocontent/show', 'InfoContentAdminController@show');
Route::get('/DashBoard/infocontent/create', 'InfoContentAdminController@create');
Route::get('/DashBoard/infocontent/delete', 'InfoContentAdminController@delete');
Route::post('/DashBoard/infocontent/store', 'InfoContentAdminController@store');
Route::post('/DashBoard/infocontent/update', 'InfoContentAdminController@update');
Route::get('/DashBoard/infocontent/edit', 'InfoContentAdminController@edit');



      // Выполняем инфоблок
Route::get('/DashBoard/infoblock', 'InfoBlockAdminController@index');
Route::get('/DashBoard/infoblock/create', 'InfoBlockAdminController@create');
Route::get('/DashBoard/infoblock/edit', 'InfoBlockAdminController@edit');
Route::get('/DashBoard/infoblock/show', 'InfoBlockAdminController@show');
Route::post('/DashBoard/infoblock/store', 'InfoBlockAdminController@store');
Route::post('/DashBoard/infoblock/update', 'InfoBlockAdminController@update');
Route::get('/DashBoard/infoblock/delete', 'InfoBlockAdminController@delete');

      // Выполняем Links
Route::get('/DashBoard/links', 'LinksAdminController@index');
Route::get('/DashBoard/links/create', 'LinksAdminController@create');
Route::get('/DashBoard/links/delete', 'LinksAdminController@delete');
Route::post('/DashBoard/links/store', 'LinksAdminController@store');

      // Выполняем Slider
Route::get('/DashBoard/slider', 'SliderAdminController@index');
Route::get('/DashBoard/slider/create', 'SliderAdminController@create');
Route::get('/DashBoard/slider/delete', 'SliderAdminController@delete');
Route::post('/DashBoard/slider/store', 'SliderAdminController@store');


/*----Админ панель----*/

$REQUEST_URI = explode('?', $_SERVER['REQUEST_URI'])[0];
if(!in_array($REQUEST_URI, Route::$routes)){

 $base_url="http://".$_SERVER['SERVER_NAME'].'/';
   include "../resources/views/404.php";
}


