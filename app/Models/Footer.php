<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
  use HasFactory;
  protected $guarded = ['id'];

  protected $fillable = [
    'number',
    'short_description',
    'adress',
    'email',
    'facebook',
    'twitter',
    'copyright',
  ];
}
