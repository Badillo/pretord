<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = 'products';
    protected $fillable = ['name', 'description', 'price', 'image', 'isOffer', 'isDuo', 'type_id', 'category_id', 'collection_id'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $dates = ['deleted_at'];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function collection()
    {
    	return $this->belongsTo('App\Collection');
    }

    public function type()
    {
    	return $this->belongsTo('App\Type');
    }
}
