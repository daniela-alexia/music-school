<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruments extends Model
{
  use HasFactory;
  protected $guarded = ['id'];

  protected $fillable = [
    'instruments_name',
    'instruments_image',
    'instruments_description',
    'instruments_price',
  ];
}
