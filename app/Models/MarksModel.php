<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarksModel extends Model
{
    protected $table ="marks";

    protected $fillable = [
        "subject", "mark", "professor"
    ];
}
