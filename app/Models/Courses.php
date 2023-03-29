<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
  use HasFactory;
  protected $guarded = ['id'];

  protected $fillable = [
    'courses_name',
    'courses_image',
    'courses_description',
  ];
}
