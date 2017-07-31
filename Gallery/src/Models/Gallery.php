<?php
namespace Components\Gallery\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  protected $fillable = ['title','image'];
}
