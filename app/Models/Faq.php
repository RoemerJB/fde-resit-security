<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public $table = 'faq';

    protected $fillable = ['question', 'answer'];
}
