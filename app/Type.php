<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use SoftDeletes;

    protected $table = 'types';
    protected $fillable = ['name'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $dates = ['deleted_at'];

    public function products()
	{
		return $this->hasMany('App\Product');
	}
}
