<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.artist.index', [
            'title' => 'Artis',
            'data' => Artist::orderBy('created_at', 'asc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artist.add-edit', [
            'title' => 'Tambah Data Artis',
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
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required|string',
            'desc_id' => 'required|string',
            'desc_en' => 'required|string',
            'profile' => 'required|mimes:jpg,png,jpeg|max:10048',
            'thumbnail' => 'required|mimes:jpg,png,jpeg|max:10048',
            'body_id' => 'required|string',
            'body_en' => 'required|string',
        ]);

        $data = $request->only(['name', 'desc_id', 'desc_en', 'body_id', 'body_en']);
        if ($request->hasFile("profile")){
            $profile = $request->profile;
            $path = implode('/', [ 'public', 'images', 'artist', 'profile' ] );
            if($request->profile != "profile_default.png"){
                Storage::disk('local')->delete( $profile );
            }
            $file = Storage::disk('local')->putFile($path, $profile);
            $data['profile'] = $file;
        }
        if ($request->hasFile("thumbnail")){
            $thumbnail = $request->thumbnail;
            $path = implode('/', [ 'public', 'images', 'artist', 'thumbnail' ] );
            if($request->thumbnail != "thumbnail_default.png"){
                Storage::disk('local')->delete( $thumbnail );
            }
            $file = Storage::disk('local')->putFile($path, $thumbnail);
            $data['thumbnail'] = $file;
        }

        Artist::create($data);

        return redirect()->route('admin.artist.index')->with('success', 'Berhasil membuat data baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.artist.show', [
            'title' => 'Lihat Data Artis',
            'data' => Artist::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.artist.add-edit', [
            'title' => 'Ubah Data Artis',
            'data' => Artist::find($id),
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
        $this->validate($request, [
            'name' => 'required|string',
            'desc_id' => 'required|string',
            'desc_en' => 'required|string',
            'profile' => 'nullable|mimes:jpg,png,jpeg|max:10048',
            'thumbnail' => 'nullable|mimes:jpg,png,jpeg|max:10048',
            'body_id' => 'required|string',
            'body_en' => 'required|string',
        ]);

        $arr = Artist::findOrFail($id);
        $data = $request->only(['name', 'desc_id', 'desc_en', 'body_id', 'body_en']);
        if ($request->hasFile("profile")){
            $profile = $request->profile;
            $old = $arr->profile;
            $path = implode('/', [ 'public', 'images', 'artist', 'profile' ] );
            if($old != "public/images/artist/profile/profile_default.png"){
                Storage::disk('local')->delete( $old );
            }
            $file = Storage::disk('local')->putFile($path, $profile);
            $data['profile'] = $file;
        }
        if ($request->hasFile("thumbnail")){
            $thumbnail = $request->thumbnail;
            $old = $arr->thumbnail;
            $path = implode('/', [ 'public', 'images', 'artist', 'thumbnail' ] );
            if($old != "public/images/artist/thumbnail/thumbnail_default.png"){
                Storage::disk('local')->delete( $old );
            }
            $file = Storage::disk('local')->putFile($path, $thumbnail);
            $data['thumbnail'] = $file;
        }
        $arr->update($data);

        return redirect()->route('admin.artist.index')->with('success', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Artist::findOrFail($id);
        if($data->profile != "public/images/artist/profile/profile_default.png")
            Storage::disk('local')->delete( $data->profile );
        $data->delete();
        if($data->thumbnail != "public/images/artist/thumbnail/thumbnail_default.png")
            Storage::disk('local')->delete( $data->thumbnail );
        $data->delete();

        return redirect()->route('admin.artist.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
