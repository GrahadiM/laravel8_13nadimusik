<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmbedChanel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.embed.chanel.index', [
            'title' => 'Home (Chanel)',
            'data' => EmbedChanel::orderBy('created_at', 'asc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.embed.chanel.edit', [
            'title' => 'Home (Chanel)',
            'isEdit' => true,
            'data' => EmbedChanel::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'link' => 'required|string',
            'thumbnail' => 'nullable|mimes:jpg,png,jpeg|max:10048',
        ]);

        $arr = EmbedChanel::findOrFail($id);
        $data = $request->only(['name', 'link']);
        if ($request->hasFile("thumbnail")){
            $thumbnail = $request->thumbnail;
            $old = $arr->thumbnail;
            $path = implode('/', [ 'public', 'images', 'chanel' ] );
            if($old != "public/images/chanel/thumbnail_default.png"){
                Storage::disk('local')->delete( $old );
            }
            $file = Storage::disk('local')->putFile($path, $thumbnail);
            $data['thumbnail'] = $file;
        }
        $arr->update($data);

        return redirect()->route('admin.home.our_chanel.index')->with('success', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
