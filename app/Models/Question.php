<?php

declare(strict_types = 1);

namespace App\Models;

use Database\Factories\QuestionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * @use HasFactory<QuestionFactory>
     */
    use HasFactory;
}
