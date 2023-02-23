<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\EntryClassificationEnum;

class EntryClassification extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'status'
    ];


    protected $casts =[
        'entry_classification' => EntryClassificationEnum::class
    ];
}
