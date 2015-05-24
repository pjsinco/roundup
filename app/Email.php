<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model {

    protected $fillable = [
        'date',
    ];

	public function quote()
    {
        $this->hasOne('Quote');
    }

}
