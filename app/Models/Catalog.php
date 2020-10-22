<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model {

    public $timestamps = false;
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'type_id', 'model_uz', 'color_uz', 'info_uz', 'model_ru', 'color_ru', 'info_ru', 'size', 'image', 'image2', 'image3'
    ];

    /**
     * One to One relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(Type::class);
    }


}
