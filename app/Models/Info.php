<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Info extends Model {

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'name_uz', 'info_uz', 'name_ru', 'info_ru', 'image', 'click'
    ];



}
