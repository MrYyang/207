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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', function(){
	return 'login page';
});

Route::group([], function(){
	Route::get('/',function(){
		return view('welcome');
	});

	Route::put('/update',function(){

	});

	Route::delete('/delete',function(){

	});

	Route::get('/user/{id}',function($id){
		echo '用户id为'.$id;
	})->where('id','\d+');

	Route::get('/admin',function(){
		return '这里是后台页面';
	})->name('admin');;

	//创建url的时候
	Route::get('/home',function(){
		return '<a href="'.route('admin').'">后台</a>';
	});

	Route::get('/404', function(){
		if(empty($_GET['id'])) {
			abort(404);
		}
	});
});

//后台路由
Route::get('/user/add', 'UserController@add');

Route::post('/user/insert', 'UserController@insert');

//API接口路由
Route::get('/dkjfdlajflda/{id}', 'UserController@show')->name('user.show');
Route::get('/users', 'UserController@index')->middleware('login');


//资源控制器

Route::resource('tiezi', 'TieziController');
// Route::resource('teizi/create', 'TieziController');
Route::get('/tiezi/create', 'TieziController@create');

Route::post('/tiezi', 'TieziController@store');

Route::get('/tiezi/{id}', 'TieziController@show');

Route::resource('/tiezi/{id}/edit', 'TieziController');

// Route::resource('/tiezi/{id}', 'TieziController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//-------------------------------------
Route::get('/cookie','HomeController@set');

//闪存
Route::get('/flash', 'HomeController@flash');

//读取闪存
Route::get('/get-flash','HomeController@getFlash');

//闪存表单
Route::get('/user-2', 'HomeController@user');

//表单提交
Route::post('/user-2', 'HomeController@insert');

//响应
Route::get('/response','HomeController@response');

//视图
Route::get('/views','HomeController@views');

Route::get('page-1','HomeController@page1');

Route::get('page-2','HomeController@page2');

Route::get('control','HomeController@control');

Route::get('select','DBController@select');

Route::get('/trans','DBController@trans');

//--------------------
//数据库操作
Route::get('/db/del','DBController@delete');
//删除数据表
Route::get('/db/drop','DBController@drop');

//插入一条语句
Route::get('/db/ins','DBController@charu');

//操作多个数据库
Route::get('connect','DBController@con');

//------------
//构造器
//插入
Route::get('/gou/ins','DBController@ins');

Route::get('/gou/mins','DBController@mins');

Route::get('/gou/insid','DBController@insid');

//更新
Route::get('/gou/upda','DBController@upda');
//删除
Route::get('/gou/dell','DBController@dell');

//查询
//查询所有
Route::get('/gou/mgett','DBController@mget');
//查询单条
Route::get('/gou/first','DBController@first');
//查询单条结果中的某个字段
Route::get('/gou/val','DBController@val');

//获取一列数据
Route::get('/gou/pluck','DBController@pluck');

//连贯操作
Route::get('/lian/sel','DBController@sel');

//条件
Route::get('/lian/cha','DBController@cha');

Route::get('/lian/mcha','DBController@mcha');

Route::get('lian/bet','DBController@bet');

Route::get('lian/in','DBController@in');

Route::get('/lian/order','DBController@order');

Route::get('/lian/fen','DBController@fen');