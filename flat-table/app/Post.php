<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use League\CommonMark\DocParser;
use League\CommonMark\Environment;
use League\CommonMark\HtmlRenderer;
use Spatie\Tags\HasTags;

// class Post extends Model
// {
//     //https://medium.com/@theprivateer/creating-an-embedded-hashtag-system-in-laravel-part-1-5b5065e392ed
//     //https://medium.com/@theprivateer/creating-an-embedded-hashtag-system-in-laravel-part-2-daf73b95f3f6
//     use \Spatie\Tags\HasTags;
// }

class Post extends Model
{
    use hasTags;
    public static function boot();
    {
        parent::boot();

        self::saving(function($model) {
            // Set up a container for any hashtags that get parsed
            App::singleton('tagqueue', function() {
                return new \App\TagQueue;
            });
            
            $environment = Environment::createCommonMarkEnvironment();
            $environment->addInlineParser(new \App\Parsers\HashtagParser());
            $parser = new DocParser($environment);
            $htmlRenderer = new HtmlRenderer($environment);

            $text = $parser->parse($model->body);

            $model->html = $htmlRenderer->renderBlock($text);
        });

        self::saved( function($model) {
            $model->syncTags(app('tagqueue')->getTags());
        });
    }
}
