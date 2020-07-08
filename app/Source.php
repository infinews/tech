<?php

namespace App;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HigherOrderCollectionProxy;

class Source
{
    /**
     * @return Collection|HigherOrderCollectionProxy
     */
    public static function getSimilarNews()
    {
        return collect(self::getJsonData('/api/similar-news.json'))
            ->map(function ($news) {
                return collect($news);
            })
            ->map->map(function ($new) {
                return new News($new);
            });
    }

    /**
     * @return Collection|HigherOrderCollectionProxy
     */
    public static function getLastNews()
    {
        return collect(self::getJsonData('/api/last-news.json'))
            ->map(function (array $item) {
                return new News($item);
            })
            ->sortByDesc('pubDate');
    }


    /**
     * @param string $path
     *
     * @return array|mixed
     */
    private static function getJsonData(string $path)
    {
        if (!Storage::exists($path)) {
            return [];
        }

        return json_decode(
            Storage::get($path),
            true
        );
    }
}