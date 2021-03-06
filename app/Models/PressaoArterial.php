<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PressaoArterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'dataAfericao',
        'localAfericao',
        'observacao',
        'pas',
        'pad'
    ];
}
