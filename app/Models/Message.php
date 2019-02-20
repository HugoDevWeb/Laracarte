<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Lcobucci\JWT\Builder;

class Message extends Model
{
    protected $fillable = ['name', 'email', 'message'];

}
