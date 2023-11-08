<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function users(){
        return $this->belongsTo(user::class);
    }
    public function repositories(){
        return $this->belongsTo(user::class);
    }
}
