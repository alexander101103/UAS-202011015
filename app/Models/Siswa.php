<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = ['name', 'nisn', 'birthdate'];

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function studentSubjects()
    {
        return $this->belongsToMany(MataPelajaran::class, 'student_subjects');
    }
}
