<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
	protected $fillable = ['email'];
	protected $hidden = ['created_at', 'updated_at'];
}
