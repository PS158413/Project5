<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestatie extends Model
{

    use HasFactory;

    protected $fillable = ['user_id','oefening_id','eindtijd','aantal'];

        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "prestatie";

}
