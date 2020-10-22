<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    public $timestamps = false;

    protected $fillable = [
        'category_uz', 'category_ru'
    ];

   /* public function catalogs()
    {
        return $this->hasMany(Catalog::class);
    } */

}
