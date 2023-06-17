<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerForm extends Model
{
    use HasFactory;

    protected $table = "careers_form";
    protected $guarded = [];


    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
