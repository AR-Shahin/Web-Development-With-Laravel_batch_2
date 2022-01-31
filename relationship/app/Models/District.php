<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    function villages()
    {
        return $this->hasManyThrough(Village::class, Thana::class);
    }
}
