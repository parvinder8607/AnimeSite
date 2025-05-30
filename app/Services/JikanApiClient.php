<?php

namespace App\Services;

use App\DTOs\AnimeData;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Cache;


class JikanApiClient
{
    protected $client;
    protected $baseUri = 'https://api.jikan.moe/v4/'; // Base URI for the Jikan API

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => $this->baseUri,
            'timeout'  => 3.0,
        ]);
    }


    public function getAnime($id)
    {
        $cacheKey = "anime_{$id}";
        $animedata = Cache::remember($cacheKey, 3600, function () use ($id) {
            return retry(3, function () use ($id) {
                try {
                    $response = $this->client->request('GET', "anime/{$id}");
                    return json_decode($response->getBody()->getContents(), true);
                } catch (RequestException $e) {
                    // throw $e; // Throw exception to trigger retry
                }
            }, 1);
        });

        return new AnimeData($animedata);
    }

    public function searchAnime($query, $page = 1)
    {
        $cacheKey = "search_anime_{$query}_page_{$page}";
         $animedata = Cache::remember($cacheKey, 3600, function () use ($query, $page) {
            try {
                $response = $this->client->request('GET', "anime", [
                    'query' => [
                        'q' => $query,
                        'page' => $page,
                    ],
                ]);
                return json_decode($response->getBody()->getContents(), true);
            } catch (RequestException $e) {
                return ['error' => $e->getMessage()];
            }
        });

        return new AnimeData($animedata);
    }


    public function getAnimeList($params = [])
    {
        $animeLists= [];
        foreach($params as $id)
        {
            $animeList = $this->getAnime($id);
            $animeLists[] = $animeList;
        }
    return $animeLists;
    }


}
