<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPagination extends Model
{
    use HasFactory;

    protected $table = "data_pagination";

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'email',
        'birthdate',
        'age',
        'sex',
        'civilstatus',

    ];
}
