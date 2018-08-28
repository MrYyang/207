<?php

namespace Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\support\Facades\DB;
// use App\Http\Controllers\test;


class DBController extends Controller
{
    //查看
    public function select()
    {
    	$mvs = DB::select('select * from goods_1 limit 10');

    	// dd($mvs);
    }
Emmet -> Default (OSX).sublime-keymap)
    //事务

    public function trans()
    {
    	DB::transaction(function(){
    		$res1 = DB::update('update db set count = count - 100 where id = 1');
    		$res2 = DB::update('update db set count = count + 100 where id = 2');

    		if($res1 && $res2) {
    			DB::commit();
    		}else{
    			DB::rollback();
    		}
    	});

    	return view('page1');
    }

    public function delete()
    {
    	$res1 = DB::delete('delete from db where id = 3');
    	dump($res1);
    }

    public function drop()
    {
    	$res = DB::statement('drop table xinjian');
    	dump($res);
    }

    //添加

    // public function charu()
    // {
    // 	$res = DB::insert("insert db ('username') into values ('fanjiachao')");

    // 	dump($res);
    // }

    //构造器


    //插入
    public function ins()
    {
    	$res = DB::table('db')->insert(['username'=>'linlin','count'=>'10000']);

    	dd($res);
    }

    public function mins()
    {
    	$res = DB::table('db')->insert([['username'=> 'ccc','count'=> '3333'],['username'=>'bbb','count'=>'555']]);
    	dd($res);
    }

    public function insid()
    {
    	$id = DB::table('db')->insertGetId(['username'=>'dddd','count'=>'7777']);
    	dd($id);
    }

    //更新
    public function upda()
    {
    	$res = DB::table('db')->where('id',1)->update(['count'=>'1234567']);
    	dd($res);
    }

    //删除
    public function dell()
    {
    	$res = DB::table('db')->where('count','<',600)->delete();
    	dd($res);
    }

    //查询
    public function mget()
    {
    	$res = DB::table('db')->get();
    	dd($res);
    }

    public function first()
    {
    	$res = DB::table('db')->first();
    	dd($res);
    }

    public function val()
    {
    	$res = DB::table('db')->where('id',5)->value('username');

    	print_r($res);
    }


    public function pluck()
    {
    	$res = DB::table('db')->pluck('count');

    	dump($res);
    }

    //连贯操作
    //设置字段
    public function sel()
    {
    	$res = DB::table('db')->select('username','count as cc')->get();
    	// $res = DB::table('db')->select('username', 'count as cc')->get();

    	dd($res);
    }

    public function cha()
    {
    	$res = DB::table('db')->where('username', 'like','%a%')->get();
    	dd($res);
    }

    public function mcha()
    {
    	$res = DB::table('db')->where('username','aaa')->orwhere('count','>',3300)->get();
    	dd($res);
    }

    public function bet()
    {
    	$res = DB::table('db')->whereBetween('count',[2000,5000])->get();
    	dd($res);
    }

    public function in()
    {
    	$res = DB::table('db')->whereIn('id',[1,2,3,4])->get();
    	dd($res);
    }

    public function order()
    {
    	$res = DB::table('db')->orderBy('id','desc')->get();
    	dd($res);
    }

    public function fen()
    {
    	$res = DB::table('db')->skip(1)->take(2)->get();
    	dd($res);
    }

































    /**
	操作多个数据库
    */

    public function con()
    {
    	$res = DB::connection('lamp207')->select('show tables');
    	dd($res);
    }
}
