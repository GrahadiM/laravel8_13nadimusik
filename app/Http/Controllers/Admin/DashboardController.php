<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BrowserAll;
use App\Models\Chanel;
use App\Models\Discover;
use App\Models\NewVideo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function discover()
    {
        return view('admin.home.discover', [
            'title' => 'Home (Discover)',
            'data' => Discover::findOrFail(1),
        ]);
    }

    public function new_release()
    {
        return view('admin.home.new_release', [
            'title' => 'Home (New Realease)',
            'data' => NewVideo::findOrFail(1),
        ]);
    }

    public function our_chanel()
    {
        return view('admin.home.our_chanel', [
            'title' => 'Home (Our Chanel)',
            'data' => Chanel::findOrFail(1),
        ]);
    }

    public function browser_all()
    {
        return view('admin.home.browser_all', [
            'title' => 'Home (Browser All)',
            'data' => BrowserAll::findOrFail(1),
        ]);
    }

    public function d_update(Request $request)
    {
        $arr = Discover::get()->first();
        $data = $request->all();
        $arr->update($data);

        return back()->with('success', 'Data Berhasil Diubah!');
    }

    public function n_update(Request $request)
    {
        $arr = NewVideo::get()->first();
        $data = $request->all();
        $arr->update($data);

        return back()->with('success', 'Data Berhasil Diubah!');
    }

    public function o_update(Request $request)
    {
        $arr = Chanel::get()->first();
        $data = $request->all();
        $arr->update($data);

        return back()->with('success', 'Data Berhasil Diubah!');
    }

    public function b_update(Request $request)
    {
        $arr = BrowserAll::get()->first();
        $data = $request->all();
        $arr->update($data);

        return back()->with('success', 'Data Berhasil Diubah!');
    }
}
