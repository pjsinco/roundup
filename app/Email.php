<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model {

    protected $fillable = [
        'date',
    ];

	public function quote()
    {
        return $this->hasOne('App\Quote');
    }

    public function articles()
    {
        return $this->hasMany('App\Article');
    }

}
