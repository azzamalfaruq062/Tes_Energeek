<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillSets extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $filable = ['candidate_id', 'skill_id'];

    public function candidates() {
        return $this->belongsToMany(Candidates::class);
    }

    public function skills() {
        return $this->belongsToMany(Skills::class);
    }
}
