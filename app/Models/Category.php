<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //use SoftDeletes;
    // protected $fillable = ['id', 'name', 'parent_id', 'slug'];
    protected $table = 'categories';
    protected $guarded = [];
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

}
