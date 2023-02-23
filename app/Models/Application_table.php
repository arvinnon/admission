<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application_table extends Model
{
    public $table = 'tbl_application';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
