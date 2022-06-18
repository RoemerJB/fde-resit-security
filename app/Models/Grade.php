<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['course_name', 'test_name', 'best_grade'];

    public function path()
    {
        return route('grades.index', $this);
    }

    public function addResult($grade) {
        $this->refresh();
        if ($grade > $this->best_grade) {
            $this->best_grade = $grade;
            if ($grade > $this->lowest_passing_grade) {
                $this->passed_at = now();
            } else {
                $this->passed_at = null;
            }
            $this->save();
        }
    }
}
