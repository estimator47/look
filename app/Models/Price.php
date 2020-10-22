<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model {

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'name', 'address', 'phone', 'email'
    ];




}
