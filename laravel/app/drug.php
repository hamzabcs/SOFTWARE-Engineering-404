<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drug extends Model
{
    protected $table="data";
	protected $fillable =['name','quantity','cname','price','sell','addby'];
}
