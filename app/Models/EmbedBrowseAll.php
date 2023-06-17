<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmbedBrowseAll extends Model
{
    use HasFactory;

    protected $table = "embed_browse_alls";
    protected $guarded = [];
    // protected $fillable = ['name','link'];
}
