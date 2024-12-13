<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;

    protected $table = 'mata_pelajaran';

    protected $fillable = ['subject_name'];

    public function guru()
    {
        return $this->belongsToMany(Guru::class, 'guru_mata_pelajaran');
    }

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class, 'student_subjects');
    }
}
