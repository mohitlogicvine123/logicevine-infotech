<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class blog extends Model implements HasMedia

{
      use HasFactory;
    use InteractsWithMedia;

     protected $fillable = [
    'title',
    'description',
    'image',
    'imagealt',
    'category',
    'author',
    'metakey',
    'metatital',
    'metadescription',
];

}
