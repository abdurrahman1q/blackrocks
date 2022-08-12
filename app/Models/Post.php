<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function rating()
    {
        return $this->hasMany('app\models\rating')->where('status', 1)->latest();
    }
}
