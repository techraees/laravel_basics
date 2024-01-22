<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    use HasFactory;
    protected $table = "home_hero";
    // protected $fillable = [
    //     'title',
    //     'description',
    //     'video_link',
    //     'profile_image',
    // ];

    protected $guarded = [];

}
