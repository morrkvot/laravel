<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bbs extends Model
{
	protected $fillable = ['user_id', 'comment', 'image'];
}
