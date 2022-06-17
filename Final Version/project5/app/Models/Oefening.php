<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oefening extends Model
{
    use HasFactory;

    protected $fillable = ['oefening','beschrijving','foto'];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "oefeningen";


}


