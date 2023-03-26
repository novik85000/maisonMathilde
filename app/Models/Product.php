<?php

namespace App\Models;

use Composer\DependencyResolver\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category() {
        return $this->hasOne(Category::class);
    }

    public function measure() {
        return $this->hasOne(Measure::class);
    }

    public function comment() {
        return $this->hasOne(Comment::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }

    public function gallery() {
        return $this->hasMany(Gallery::class);
    }

}
