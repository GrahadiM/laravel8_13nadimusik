<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TermsOfService;
use Illuminate\Support\Facades\Storage;

class TermsOfServiceController extends Controller
{
    public function index()
    {
        return view('admin.tos.add-edit', [
            'title' => 'Persyaratan Layanan',
            'isEdit' => true,
            'data' => TermsOfService::get()->first(),
        ]);
    }

    public function update(Request $request, TermsOfService $setting)
    {
        $this->validate($request, [
            'title_id' => 'required|string',
            'title_en' => 'required|string',
            'body_id' => 'required|string',
            'body_en' => 'required|string',
        ]);

        $data = $request->only(['title_id', 'title_en', 'body_id', 'body_en']);

        // dd($data);
        $setting = TermsOfService::get()->first();
        $setting->update($data);

        session()->flash('success', "Data has been updated!!");

        //redirect user
        return redirect()->back();
    }
}
