<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermsOfService extends Model
{
    use HasFactory;

    protected $table = 'terms_of_services';
    protected $guarded = [];
}
