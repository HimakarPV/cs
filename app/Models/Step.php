<?php

namespace cs\Models;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $table = 'steps';

    protected $fillable = ['step'];
    public $timestamps = false;
}
