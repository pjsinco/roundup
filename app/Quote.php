<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model {

    protected $fillable = [
        'quote',
        'speaker',
        'context',
    ];

    public function email()
    {
        $this->hasOne('Email');
    }

}
