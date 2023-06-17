<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $table = "careers";
    protected $guarded = [];

    public function career_form()
    {
        return $this->hasMany(CareerForm::class);
    }
}
