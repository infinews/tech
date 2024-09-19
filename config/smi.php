<?php

return [

    /*
    |--------------------------------------------------------------------------
    | File generated
    |--------------------------------------------------------------------------
    |
    | A value indicating when the records were generated
    |
    */

    'generated' => env('APP_GENERATED', LARAVEL_START),


    /*
    |--------------------------------------------------------------------------
    | Time Period
    |--------------------------------------------------------------------------
    |
    | The time period for which it is necessary to take news
    | Indicate in hours: 1,2..n
    |
    */

    'period' => 16,

    /*
    |--------------------------------------------------------------------------
    | Story
    |--------------------------------------------------------------------------
    |
    | Options for defining similar articles and combining them
    |
    */

    'story' => [
        'percent'             => 75,
        'minCount'            => 3,

        // Time difference when groups cannot be combined at all
        'diff'                => 18000, //seconds

        // If the news was published at the same time, then increase the likelihood of their similarity
        'increasedPercentage' => [
            'diff'    => 3600, // seconds
            'percent' => 10,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | News
    |--------------------------------------------------------------------------
    |
    | Options ...
    |
    */

    'news' => [
        'renderCount' => 10,
    ],

    /*
    |--------------------------------------------------------------------------
    | RSS Feed
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */

    'rss' => [
    
        "https://www.tagesschau.de/xml/rss2/",
        "https://www.mdr.de/nachrichten/mdr-homepage-146-rss.xml",
        "https://www.n-tv.de/rss",
        "https://www.welt.de/sitemaps/newssitemap/newssitemap.xml",
        "https://www.spiegel.de/index.rss",
        "https://www.zdf.de/rss/zdf/nachrichten",
        "https://feeds.t-online.de/rss/nachrichten",
        "https://newsfeed.zeit.de/index",
        "https://rss.dw.com/xml/rss-de-all",
        "https://www.tagesspiegel.de/contentexport/feed/home",
        "https://www.bild.de/rssfeeds/vw-alles/vw-alles-26970192,dzbildplus=false,sort=1,teaserbildmobil=false,view=rss2,wtmc=ob.feed.bild.xml",
        "https://www.faz.net/rss/aktuell/",
        "https://rss.sueddeutsche.de/app/service/rss/alles/index.rss?output=rss",
        "https://www.handelsblatt.com/contentexport/feed/schlagzeilen",
        "https://www.handelsblatt.com/contentexport/feed/wirtschaft",
        "https://rss.focus.de/",
        "https://www.deutschlandfunk.de/nachrichten-100.rss",
        "https://www.ndr.de/homepage985-rss2.xml",
        "https://www.br.de/radio/bayern1/bayern-eins108~rss.xml",
        "https://www.br.de/radio/bayern2/bayern-zwei-120~rss.xml",
        "https://www.stern.de/feed/standard/alle-nachrichten/",
        "https://www.fr.de/news.xml",
        "https://newsfeed.kicker.de/news/aktuell",
        "https://www.rbb24.de/aktuell/index.xml/allitems=true/feed=rss/",
        "https://www.rnd.de/arc/outboundfeeds/rss/",
        "https://www.nd-aktuell.de/rss/aktuell.php",
        "https://de.euronews.com/rss?format=mrss&level=vertical&name=my-europe",
        "https://taz.de/rss.xml",
        "https://www.nzz.ch/recent.rss",
        "https://www.bazonline.ch/sitemaps/news.xml",
        "https://www.berliner-zeitung.de/feed.xml",
        "https://www.ruhrnachrichten.de/feed/",
        "https://www.hellwegeranzeiger.de/feed/",
        "https://www.derwesten.de/rss",
        "https://www.tz.de/rssfeed.rdf",
        "https://www.ksta.de/feed/index.rss",
        "https://www.mopo.de/feed/",
        "https://www.braunschweiger-zeitung.de/rss",
        "https://www.stuttgarter-nachrichten.de/.rss.feed",
        "https://www.tah.de/news/rss-feed.html",
        "https://www.stuttgarter-zeitung.de/.rss.feed",
        "https://www.verlagshaus-jaumann.de/.rss.feed",
        "https://www.boerse-online.de/rss",
        "https://www.european-news-agency.de/rss/",
        "https://www.mallorcazeitung.es/rss/",
        "https://www.kornwestheimer-zeitung.de/nachrichten.rss.feed",
        "https://kobinet-nachrichten.org/feed/",
        "https://www.nachrichtenleicht.de/nachrichtenleicht-nachrichten-100.rss",
        "https://www.deutschlandfunk.de/nachrichten-100.rss",
        "https://www.wn.de/rss/feed",
        "https://www1.wdr.de/wissen/uebersicht-nachrichten-100.feed",
        "https://deutsche-wirtschafts-nachrichten.de/feed/",
        "https://www.waz.de/rss",
        "https://www.merkur.de/deutschland/rssfeed.rdf",
        // https://newstral.com/de
/*

        // smi
      
        'https://www.vedomosti.ru/rss/news',
        'https://istories.media/rss/all.xml',
        'https://life.ru/rss',
        'https://vz.ru/rss.xml',
        'https://www.ridus.ru/rss/news',
        'https://www.fontanka.ru/rss.xml',
        'https://www.kommersant.ru/RSS/news.xml',
        //'https://tvrain.ru/export/rss/all.xml',
        //'https://meduza.io/rss/news',

        //'https://tjournal.ru/rss',
        'https://zona.media/rss',
        'https://rtvi.com/rss',
        'https://takiedela.ru/feed/',
        'https://paperpaper.ru/feed/',
        'https://www.yuga.ru/articles.rss',
        'https://tayga.info/rss',
        'https://7x7-journal.ru/rss/default.xml',
        'https://mash.ru/rss',
        'https://eadaily.com/ru/rss/index.xml',
        'https://www.vtimes.io/rss',
        'https://holod.media/feed/',
        'https://verstka.media/feed/',
        'https://kedr.media/feed',
        'https://novayagazeta.eu/feed/rss',
        'https://vc.ru/rss',
        'https://www.rosbalt.ru/feed/',
        'https://republic.ru/export/all.xml',
        'https://graniru.org/export/all-atom.xml',
        'https://www.svoboda.org/api/',
        'https://feeds.bbci.co.uk/russian/rss.xml',
        'https://ovdinfo.org/rss.xml',
        'https://navalny.com/blog/post.rss',
        'https://theins.ru/feed',
        'https://rss.dw.com/xml/rss-ru-all',
        'https://thebell.io/feed',
        'https://www.golosameriki.com/api/',
        'https://paperpaper.ru/feed/',
        'https://www.the-village.ru/api/spaces/2/rss.xml',
        'https://roskomsvoboda.org/feed/',
        'https://ura.news/rss',
        'https://cherta.media/feed/',

        'http://www.aif.ru/rss/news.php',
        'http://lenta.ru/rss/',
        'http://www.rian.ru/export/rss2/index.xml',
        'http://russian.rt.com/rss/',
        'https://www.gazeta.ru/export/rss/lenta.xml',
        'http://www.aif.ru/rss/news.php',
        'http://vz.ru/rss.xml',
        'http://www.vedomosti.ru/newsline/out/rss.xml',
        'http://tass.ru/rss/v2.xml?sections=MjU%3D',
        'http://www.vesti.ru/vesti.rss',
        'https://www.mk.ru/rss/news/index.xml',
        'https://dailystorm.ru/media/rss.xml',
        'https://360tv.ru/rss/',
        'https://www.interfax.ru/rss.asp',
        'https://www.forbes.ru/newrss.xml',
        //'https://ura.news/rss',
        'https://www.znak.com/rss',
        'https://takiedela.ru/feed',
        'https://regnum.ru/rss/russian/',
        'https://rg.ru/xml/index.xml',
        'https://www.ng.ru/rss/',

        'https://rtvi.com/rss/',

        'https://regnum.ru/rss/news.html',
        'https://live24.ru/rss.xml',
        'https://takiedela.ru/feed/',
        'https://paperpaper.ru/feed/',
        'https://www.yuga.ru/articles.rss',
        'https://tayga.info/rss',
        'https://7x7-journal.ru/rss/default.xml',
        'https://mash.ru/rss',
        'https://ria.ru/export/rss2/archive/index.xml',
        'https://eadaily.com/ru/rss/index.xml',
        'https://www.vtimes.io/rss',

        // foreign
        //'https://gordonua.com/xml/rss_category/top.html',
        //'https://nexta.news/feed/',
        //'https://www.belta.by/rss',
        //'https://telegraf.by/feed/',


        // blogs
        //'https://varlamov.ru/data/rss',


        //'https://rss.unian.net/site/news_rus.rss?',
*/
    ],

    /*
    |--------------------------------------------------------------------------
    | Ignore
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */

    'ignore' => [
        'covers' => [
            'images/zenvz.jpg', // https://vz.ru/images/zenvz.jpg
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | tags
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */

    'tags' => [
        [
            'slug'     => \Illuminate\Support\Str::slug('DSGVO'),
            'name'     => 'Datenschutz',
            'contains' => 'Datenschutz', 'DSGVO'
        ],
        /*
        [
            'slug'     => \Illuminate\Support\Str::slug('Украина'),
            'name'     => 'Украина',
            'contains' => 'Украи', 'Киев'
        ],
        [
            'slug'     => \Illuminate\Support\Str::slug('Путин'),
            'name'     => 'Путин',
            'contains' => 'Путин', 'СВО',
        ],
        [
            'slug'     => \Illuminate\Support\Str::slug('США'),
            'name'     => 'США',
            'contains' => 'США', 'Байден', 'Техас', 'Белый дом',
        ],
        */
        /*
        [
            'slug'     => \Illuminate\Support\Str::slug('Навальный'),
            'name'     => 'Навальный',
            'contains' => 'Навальный', 'ФБК', 'Навальн',
        ],
        [
            'slug'     => \Illuminate\Support\Str::slug('COVID-19'),
            'name'     => 'COVID-19',
            'contains' => 'коронавирус', 'ковид', 'covid', 'Спутник V', 'Спутника V',
        ],
        [
            'slug'     => \Illuminate\Support\Str::slug('Украина'),
            'name'     => 'Украина',
            'contains' => 'украи', 'Киев'
        ],
        [
            'slug'     => \Illuminate\Support\Str::slug('Беларусь'),
            'name'     => 'Беларусь',
            'contains' => 'Беларус', 'Беларус', 'Тихановск', 'Минск', 'Лукашенк'
        ],
        [
            'slug'     => \Illuminate\Support\Str::slug('Северный поток'),
            'name'     => 'Северный поток',
            'contains' => 'Северный поток',
        ],
        */
    ],

];
