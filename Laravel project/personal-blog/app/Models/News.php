<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'image',
        'category_id' //extra fillout
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
