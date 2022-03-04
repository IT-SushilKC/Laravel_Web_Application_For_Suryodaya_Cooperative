<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = "news";
    public function setCreated_atAttribute($value){
        $this->attributes['created_at'] = date($value);
    }
}
