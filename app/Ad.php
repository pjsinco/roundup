<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model {

    protected $fillable = [
        'ad_link', 'img_src', 'title',
    ];

}
