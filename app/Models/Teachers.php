<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
  use HasFactory;
  protected $guarded = ['id'];

  protected $fillable = [
    'teachers_name',
    'teachers_course',
    'teachers_description',
    'teachers_image',
  ];
}
