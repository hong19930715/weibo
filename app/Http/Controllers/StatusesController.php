<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Auth;

class StatusesController extends Controller
{
    //使用auth中间件进行过滤
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        // 验证规则
        $this->validate($request, [
            'content' => 'required|max:140'
        ]);

        // 写入数据库
        Auth::user()->statuses()->create([
            'content' => $request['content']
        ]);

        session()->flash('success', '发布成功！');
        return redirect()->back();
    }
}
