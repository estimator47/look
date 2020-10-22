<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Form extends Model {

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_uz', 'info_uz', 'title_ru', 'info_ru', 'source', 'image', 'click'
    ];




}
