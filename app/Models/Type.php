<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {

    public $timestamps = false;

    protected $fillable = [
         'category_id', 'name_uz', 'name_ru', 'image'
    ];

    public function catalogs()
    {
        return $this->hasMany(Catalog::class);
    }

    /**
     * One to One relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
