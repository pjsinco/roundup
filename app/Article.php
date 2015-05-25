<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $fillable = [
        'wp_id', 'type', 'bottom_rule', 'kicker', 'title', 'excerpt', 
        'link', 'img_alt', 'img_src'
    ];
    
    public function email()
    {
        return $this->belongsTo('App\Email');
    }

}
