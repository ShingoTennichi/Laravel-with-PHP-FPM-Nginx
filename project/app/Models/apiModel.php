<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apiModel extends Model
{
    /** @use HasFactory<\Database\Factories\ApiModelFactory> */
    use HasFactory;

    // variable name has to be $fillable
    protected $fillable = [
      'api_version',
      'api_model_name'
    ];
}
