<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewVideo extends Model
{
    use HasFactory;

    protected $table = "new_videos";
    protected $guarded = [];
}
