<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $fillable = [
        'wp_id', 'type', 'bottom_rule', 'kicker', 'title', 'excerpt', 
        'link', 'img_alt', 'img_src'
    ];
    
    //public function setBottomRuleAttribute($value)
    //{
         //is this working?
        //$this->attributes['bottom_rule'] = ($value == null ? 0 : 1);
    //}

    // http://laravel.com/docs/5.0/eloquent#query-scopes
    public function scopeFeature($query) 
    {
        return $query->where('type', '=', 'feature');
    }

    public function scopeNotFeature($query)
    {
        return $query->where('type', '!=', 'feature');
    }
    
    public function email()
    {
        return $this->belongsTo('App\Email');
    }

}
