<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
     protected $fillable = [
    	'letter', 'number', 'tittle'
    ];

    public function user()
    {
		return $this->belongsTo(User::class);
    }
}
