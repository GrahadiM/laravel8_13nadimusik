<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\News;
use App\Models\Demo;
use App\Models\Event;
use App\Models\About;
use App\Models\Artist;
use App\Models\Career;
use App\Models\CareerForm;
use App\Models\EmbedBrowseAll;
use App\Models\EmbedChanel;
use App\Models\EmbedDiscover;
use App\Models\EmbedNewRelease;
use App\Models\PrivacyPolicy;
use App\Models\TermsOfService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    public function index()
    {
        $discover = EmbedDiscover::orderBy('created_at', 'asc')->get();
        $new_release = EmbedNewRelease::orderBy('created_at', 'asc')->get();
        $chanel = EmbedChanel::orderBy('created_at', 'asc')->get();
        $browse_all = EmbedBrowseAll::orderBy('created_at', 'asc')->get();

        return view('frontend.home-embed', [
            'title' => 'Home (Discover, New Release, Our Channel, Browse All)',
            'description' => 'This home page contains Discover, New Release, Our Channel, and Browse All',
            'discover' => $discover,
            'new_release' => $new_release,
            'chanel' => $chanel,
            'browse_all' => $browse_all,
        ]);
    }

    // public function index()
    // {
    //     // Discover
    //     if (session('search_query')) {
    //         $videoListsDiscover = $this->_videoListsDiscover(session('search_query'));
    //     } else {
    //         $videoListsDiscover = $this->_videoListsDiscover('13nadimusik');
    //     }

    //     // New Release
    //     if (session('search_query')) {
    //         $videoListsNew = $this->_videoListsNew(session('search_query'));
    //     } else {
    //         $videoListsNew = $this->_videoListsNew('UCqXoFpy1zT9oYR5y6DTuGyA');
    //     }

    //     // Our Chanel
    //     if (session('search_query')) {
    //         $chanelId = $this->_chanelLists(session('search_query'));
    //     } else {
    //         $chanelId = $this->_chanelLists('UCqXoFpy1zT9oYR5y6DTuGyA');
    //     }

    //     // Browse All
    //     if (session('search_query')) {
    //         $videoLists = $this->_videoLists(session('search_query'));
    //     } else {
    //         $videoLists = $this->_videoLists('13nadimusik');
    //     }

    //     dd($videoListsDiscover);
    //     return view('frontend.home', [
    //         'videoListsDiscover' => $videoListsDiscover,
    //         'videoListsNew' => $videoListsNew,
    //         'videoLists' => $videoLists,
    //         'chanelLists' => $chanelId,
    //         'title' => 'Home (Discover, New Release, Our Channel, Browse All)',
    //         'description' => 'This home page contains Discover, New Release, Our Channel, and Browse All',
    //     ]);
    // }

    public function results(Request $request)
    {
        session(['search_query' => $request->search_query]);
        $videoLists = $this->_videoLists($request->search_query);
        // dd($videoLists);
        return view('frontend.results', [
            'videoLists' => $videoLists,
            'title' => 'Home (Discover, New Release, Our Channel, Browse All)',
            'description' => 'This home page contains Discover, New Release, Our Channel, and Browse All',
        ]);
    }

    public function watch($id)
    {
        $singleVideo = $this->_singleVideo($id);
        if (session('search_query')) {
            $videoLists = $this->_videoLists(session('search_query'));
        } else {
            $videoLists = $this->_videoLists('laravel chat');
        }
        return view('frontend.watch', [
            'singleVideo' => $singleVideo,
            'videoLists' => $videoLists,
            'title' => 'Home (Discover, New Release, Our Channel, Browse All)',
            'description' => 'This home page contains Discover, New Release, Our Channel, and Browse All',
        ]);
    }

    public function artist()
    {
        return view('frontend.artist', [
            'title' => 'Artist',
            'description' => 'This artist page is about names, photos, short descriptions, and albums related to artists you like',
            'data' => Artist::orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function artist_detail($id)
    {
        return view('frontend.artist_detail', [
            'title' => 'Artist',
            'description' => 'This artist page is about names, photos, short descriptions, and albums related to artists you like',
            'data' => Artist::find($id),
        ]);
    }

    public function news()
    {
        return view('frontend.news', [
            'title' => 'News',
            'description' => 'This news page',
            'data' => News::orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function news_detail($id)
    {
        return view('frontend.news_detail', [
            'title' => 'News',
            'description' => 'This news page',
            'data' => News::find($id),
        ]);
    }

    public function event()
    {
        return view('frontend.event', [
            'title' => 'Event',
            'description' => 'This event page',
            'data' => Event::orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function event_detail($id)
    {
        return view('frontend.event_detail', [
            'title' => 'Event',
            'description' => 'This event page',
            'data' => Event::find($id),
        ]);
    }

    public function demo()
    {
        return view('frontend.demo', [
            'title' => 'Demo',
            'description' => 'This demo page',
        ]);
    }

    public function demo_form(Request $request)
    {
        $data = $request->only(['name', 'phone', 'email', 'desc']);
        if ($request->hasFile("file")){
            $file = $request->file;
            $path = implode('/', [ 'public', 'file', 'demo' ] );
            $file = Storage::disk('local')->putFile($path, $file);
            $data['file'] = $file;
        }
        Demo::create($data);

        return redirect()->back()->with('success', '<center><h4 class="alert-heading">Well Done!</h4><p>Your message been received.</p><p>We will update you shortly.</p></center>');
    }

    public function about()
    {
        return view('frontend.about', [
            'title' => 'About',
            'description' => 'This about page',
            'data' => About::orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function career()
    {
        return view('frontend.career', [
            'title' => 'Career',
            'description' => 'This career page',
            'data' => Career::orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function career_detail($id)
    {
        return view('frontend.career_detail', [
            'title' => 'Career',
            'description' => 'This career page',
            'data' => Career::find($id),
        ]);
    }

    public function career_show($id)
    {
        return view('frontend.career_form', [
            'title' => 'Career',
            'description' => 'This career page',
            'data' => Career::find($id),
        ]);
    }

    public function career_form(Request $request)
    {
        $data = $request->only(['career_id', 'name', 'phone', 'email', 'desc']);
        if ($request->hasFile("file")){
            $file = $request->file;
            $path = implode('/', [ 'public', 'file', 'career' ] );
            $file = Storage::disk('local')->putFile($path, $file);
            $data['file'] = $file;
        }
        CareerForm::create($data);

        return redirect()->back()->with('success', '<center><h4 class="alert-heading">Well Done!</h4><p>we will update you shortly.</p><p>We will update you shortly.</p></center>');
    }

    public function terms_of_services()
    {
        return view('frontend.tos', [
            'title' => 'Terms of Services',
            'description' => 'This Terms of Services page',
            'data' => TermsOfService::get()->first(),
        ]);
    }

    public function privacy_policy()
    {
        return view('frontend.pp', [
            'title' => 'Privacy Policy',
            'description' => 'This Privacy Policy page',
            'data' => PrivacyPolicy::get()->first(),
        ]);
    }

    // We will get search result here
    protected function _videoListsDiscover($keywords)
    {
        $data = \App\Models\Discover::findOrFail(1);
        $part = $data->part;
        $channelId = $data->channelId;
        $maxResults = $data->maxResults;
        $country = $data->country;
        $orderBy = $data->orderBy;
        $type = $data->type;
        $apiKey = $data->apiKey;
        $youTubeEndPoint = $data->youTubeEndPoint;

        $url = "$youTubeEndPoint?part=$part&channelId=$channelId&maxResults=$maxResults&order=$orderBy&regionCode=$country&type=$type&key=$apiKey&q=$keywords";
        $response = Http::get($url);
        $results = json_decode($response);

        // We will create a json file to see our response
        File::put(storage_path() . '/app/public/discoverResults.json', $response->body());
        return $results;
    }

    protected function _videoListsNew($keywords)
    {
        $data = \App\Models\NewVideo::findOrFail(1);
        $part = $data->part;
        $channelId = $data->channelId;
        $maxResults = $data->maxResults;
        $country = $data->country;
        $orderBy = $data->orderBy;
        $type = $data->type;
        $apiKey = $data->apiKey;
        $youTubeEndPoint = $data->youTubeEndPoint;

        $url = "$youTubeEndPoint?part=$part&channelId=$channelId&maxResults=$maxResults&order=$orderBy&regionCode=$country&type=$type&key=$apiKey&q=$keywords";
        $response = Http::get($url);
        $results = json_decode($response);

        // We will create a json file to see our response
        File::put(storage_path() . '/app/public/newResults.json', $response->body());
        return $results;
    }

    protected function _chanelLists($keywords)
    {
        $data = \App\Models\Chanel::findOrFail(1);
        $part = $data->part;
        $channelId = $data->channelId;
        $maxResults = $data->maxResults;
        $apiKey = $data->apiKey;
        $youTubeEndPoint = $data->youTubeEndPoint;

        $url = "$youTubeEndPoint?part=$part&id=$channelId&maxResults=$maxResults&key=$apiKey&q=$keywords";
        $response = Http::get($url);
        $results = json_decode($response);

        // We will create a json file to see our response
        File::put(storage_path() . '/app/public/chanelResults.json', $response->body());
        return $results;
    }

    protected function _videoLists($keywords)
    {
        $data = \App\Models\BrowserAll::findOrFail(1);
        $part = $data->part;
        $maxResults = $data->maxResults;
        $country = $data->country;
        $type = $data->type;
        $apiKey = $data->apiKey;
        $youTubeEndPoint = $data->youTubeEndPoint;

        $url = "$youTubeEndPoint?part=$part&maxResults=$maxResults&regionCode=$country&type=$type&key=$apiKey&q=$keywords";
        $response = Http::get($url);
        $results = json_decode($response);

        // We will create a json file to see our response
        File::put(storage_path() . '/app/public/videosResults.json', $response->body());
        return $results;
    }

    protected function _singleVideo($id)
    {
        $apiKey = config('services.youtube.api_key');
        $part = 'snippet';
        $url = "https://www.googleapis.com/youtube/v3/videos?part=$part&id=$id&key=$apiKey";
        $response = Http::get($url);
        $results = json_decode($response);

        // Will create a json file to see our single video details
        File::put(storage_path() . '/app/public/single.json', $response->body());
        return $results;
    }

    public function switch_language($lang)
    {
        // Simpan locale ke session.
        request()->session()->put('lang', $lang);

        // Arahkan ke halaman sebelumnya.
        return redirect()->back();
    }
}
