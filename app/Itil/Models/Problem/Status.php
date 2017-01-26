<?php

namespace App\Itil\Models;

use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    protected $table = 'sd_attachments';
    protected $fillable = ['id','saved','owner','value','type','size','created_at','updated_at',
        
    ];
}