<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use Illuminate\Support\Facades\Storage;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        return view('admin.pp.add-edit', [
            'title' => 'Kebijakan Privasi',
            'isEdit' => true,
            'data' => PrivacyPolicy::get()->first(),
        ]);
    }

    public function update(Request $request, PrivacyPolicy $setting)
    {
        $this->validate($request, [
            'title_id' => 'required|string',
            'title_en' => 'required|string',
            'body_id' => 'required|string',
            'body_en' => 'required|string',
        ]);

        $data = $request->only(['title_id', 'title_en', 'body_id', 'body_en']);

        // dd($data);
        $setting = PrivacyPolicy::get()->first();
        $setting->update($data);

        session()->flash('success', "Data has been updated!!");

        //redirect user
        return redirect()->back();
    }
}
