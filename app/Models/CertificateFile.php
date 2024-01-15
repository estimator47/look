<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateFile extends Model
{
    protected $fillable = ['certificate_type_id', 'file'];
}
