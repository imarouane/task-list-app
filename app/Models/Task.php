<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    // #New Methods
    // public function getTitleAttribute(string $value)
    // {
    //     return Str::title($value);
    // }

    // public function setTitleAttribute(string $value)
    // {
    //     $this->attributes['title'] = Str::ucfirst($value);
    // }

    

    // #Old methods
    // protected function title(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn (string $value) => Str::ucfirst($value)
    //     );
    // }

    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Str::ucfirst($value),
            set: fn(string $value) => Str::title($value)
        );
    }
}
