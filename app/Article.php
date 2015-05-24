<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $fillable = [
        'wp_id', 'types', 'kicker', 'title', 'excerpt', 'link',
    ];

}
