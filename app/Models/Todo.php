<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'created_at', 'update_at'];

    public function getTitle() {
        return 'カテゴリ' .$this->content . ':' . $this->title;
    }
    public function categories() {
        return $this->hasMany('App\Models\Category');
    }
}