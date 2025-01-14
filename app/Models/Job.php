<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;


    protected $fillable = ['title', 'salary','location','url'];

    
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tag(string $name){
        $tag = Tag::firstOrCreate(['name' => strtolower($name)]);

        return $this->tags()->attach($tag);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
