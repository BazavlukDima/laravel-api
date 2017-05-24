<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable=['parent_id','author','email','message'];
    protected $table="comments";

    // public function ()
    // {
        
    // }
}
