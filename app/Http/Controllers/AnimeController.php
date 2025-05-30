<?php

namespace App\Http\Controllers;

use App\Models\bannList;
use App\Models\popuList;
use App\Models\recentList;
use App\Models\trendlist;
use App\Services\JikanApiClient;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    protected $jikanApiClient;

    public function __construct(JikanApiClient $jikanApiClient)
    {
        $this->jikanApiClient = $jikanApiClient;
    }


    public function home(){

        $bannlist = bannList::where('active', true)->get()->pluck('mal_id');
        $bannList = $this->jikanApiClient->getAnimeList($bannlist);
        $recentlist = recentList::where('active', true)->get()->pluck('mal_id');
        $recentList = $this->jikanApiClient->getAnimeList($recentlist);

        $poplist = popuList::where('active', true)->get()->pluck('mal_id');
        $popuList = $this->jikanApiClient->getAnimeList($poplist);
        $trendlist = trendlist::where('active', true)->get()->pluck('mal_id');
        $trendList = $this->jikanApiClient->getAnimeList($trendlist);
        return view('pages.index', [ 'trendList' => $trendList,
                                     'popuList' => $popuList,
                                     'bannList' => $bannList,
                                    'recentList' => $recentList]);

    }

    public function show(Request $request)
    {
        $id = $request->id;

        $anime = $id;
        // $anime = $this->jikanApiClient->getAnime($id);
        return view('pages.anime-details', ['anime' => $anime]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $anime = $this->jikanApiClient->searchAnime($query);
        return view('anime.search', ['anime' => $anime]);
    }

    public function top(){
        if(Gate::allows('isAdmin')){
            $top = $this->jikanApiClient->getTopAnime();
            return view('pages.top', ['top' => $top]);
        }
    }
}
