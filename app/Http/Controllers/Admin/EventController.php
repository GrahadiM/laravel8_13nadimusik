<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.event.index', [
            'title' => 'Acara',
            'data' => Event::orderBy('created_at', 'asc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.add-edit', [
            'title' => 'Acara',
            'isEdit' => false,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['title_id', 'title_en', 'author', 'body_id', 'body_en']);
        if ($request->hasFile("thumbnail")){
            $thumbnail = $request->thumbnail;
            $path = implode('/', [ 'public', 'images', 'event' ] );
            $file = Storage::disk('local')->putFile($path, $thumbnail);
            $data['thumbnail'] = $file;
        }
        Event::create($data);

        return redirect()->route('admin.event.index')->with('success', 'Data Berhasil Ditambah!');
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
        return view('admin.event.add-edit', [
            'title' => 'Acara',
            'data' => Event::findOrFail($id),
            'isEdit' => true,
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
        $arr = Event::findOrFail($id);
        $data = $request->only(['title_id', 'title_en', 'author', 'body_id', 'body_en']);
        if ($request->hasFile("thumbnail")){
            $thumbnail = $request->thumbnail;
            $old = $arr->thumbnail;
            $path = implode('/', [ 'public', 'images', 'event' ] );
            if($old != "public/images/event/thumbnail_default.png"){
                Storage::disk('local')->delete( $old );
            }
            $file = Storage::disk('local')->putFile($path, $thumbnail);
            $data['thumbnail'] = $file;
        }
        $arr->update($data);

        return redirect()->route('admin.event.index')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Event::findOrFail($id);
        if($data->thumbnail != "public/images/event/thumbnail_default.png")
            Storage::disk('local')->delete( $data->thumbnail );
        $data->delete();

        return redirect()->route('admin.event.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
