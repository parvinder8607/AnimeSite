<?php


namespace App\DTOs;

use Ramsey\Uuid\Type\Integer;

class AnimeData
{
    protected $data;

    public function __construct(array $data)
    {
        // print_r($data['data']);
        $this->data = $data['data'];
    }

    //create a method for id
    public function id(): ?int
    {
        return $this->data['mal_id'] ?? null;
    }

    public function getTitleEnglish(): ?string
    {
        return $this->data['title_english'] ?? null;
    }

    public function getImageUrl(): ?string
    {

        return $this->data['images']['jpg']['large_image_url'] ?? null;
    }

    
    public function getBanImage(): ?string
    {
        // $image = banList::where('mal_id', $this->data['mal_id'])->get()->pluck('banner_image')->first();
        return $this->data['trailer']['image']['image_url'] ?? null;
    }
    public function getEpisodeNo()
    {
        return $this->data['episodes'] ?? null;

    }
    public function getType()
    {
        return $this->data['type'] ?? null;

    }

    //create a method for genre from the genres array
    public function getGenre(): ?string
    {
        return $this->data['genres'][0]['name'] ?? null;
    }

    public function isAiring(): ?bool
    {
        return $this->data['airing'] ?? null;
    }
    public function getPopularity(): ?String
    {
        return $this->data['popularity'] ?? null;
    }


    public function getDetail(): ?String
    {
        return $this->data['synopsis'] ?? null;
    }

// Create a method to get the status of the anime
    public function getStatus(): ?String
    {
        return $this->data['status'] ?? null;
    }
    // Optional: Add a method to get the score of the anime
    public function getScore(): ?String
    {
        return $this->data['score'] ?? null;
    }
    // Optional: Add a method to get the episode duration
    public function getEpisodeDuration(): ?String
    {
        return $this->data['episode_duration'] ?? null;
    }
    // Optional: Add a method to get the start date
    public function getStartDate(): ?String
    {
        return $this->data['start_date'] ?? null;
    }
    //add a method to get score
    public function getScoreRank(): ?String 
    {
        return $this->data['score_rank'] ?? null;
    }
    // add a method for array of genres
    public function getGenres(): ?array
    {
        return $this->data['genres'] ?? null;
    }



    // Optional: Add a method to get the entire data array
    public function getData(): array
    {
        return $this->data;
    }
}
