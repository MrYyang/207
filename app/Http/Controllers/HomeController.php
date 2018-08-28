<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    //cookie设置
    public function set()
    {
        // \Cookie::queue('name','yangyang',10);
        return response('<p>我是响应体</p>')->withCookie('class','lamp207',10);

        $name = \Cookie::get('class');
        dd($name);
    }



    /*
        写入闪存
    */
    public function flash()
    {
        // \Session::flash('info', '恭喜您添加成功');
        return redirect('/get-flash')->with('info','添加成功');


        // $a = \Session::get('info');
        // dd($a);
    }

    /**
        读取闪存
    */

    public function getFlash()
    {
        return view('admin');
    }

    public function user()
    {
        return view('user');
    }    

    public function insert()
    {
        //表单验证
        if(empty($_POST['username']) || strlen($_POST['username']) < 6 || strlen($_POST['username']) > 20) {
            \Session::flash('error','用户名格式不正确');
            return back() -> withInput();
        }
    }


    //响应
    public function response()
    {
        //普通字符串
        // return 'ilove you';
        // return '<span>这就是爱</span>';

        //返回json
        // return response()->json(['name'=>'xiaohai','age'=>32]);

        //返回模板
        return view('view');
    }

    public function views()
    {
       return view('user.add', [
            'title' => '第一次接触视图',
            'content'=>'山东发大水了 香菜涨到了39元一斤', 
            'pages' => '<a href="">1</a><a href="">2</a>'
        ]);
    }

    public function page1()
    {
        return view('page1');
    }

    public function page2()
    {
        return view('page2');
    }

    public function control()
    {
        return view('control', [
            'isVip' => false,
            'classmates' => [
                '贾旭',
                '林彬',
                '杨洋'
            ]
        ]);
    }

}

