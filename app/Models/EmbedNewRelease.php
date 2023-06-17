<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmbedNewRelease extends Model
{
    use HasFactory;

    protected $table = "embed_new_releases";
    protected $guarded = [];
}
