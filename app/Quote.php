<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model {

    protected $fillable = [
        'quote', 'speaker', 'context', 'link',
    ];

    public function email()
    {
        return $this->belongsTo('App\Email');
    }

}
