<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'category_id','created_at', 'update_at'];

    public function getTitle() {
        return 'カテゴリ' .$this->content . ':' . $this->title;
    }
    public function todos() {
        return $this->hasMany('App\Models\Todo');
    }
}
