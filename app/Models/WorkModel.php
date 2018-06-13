<?php

namespace App\Models;

use Faker\Provider\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class WorkModel extends Model
{
    protected $table = "work";
    protected $base_dir = 'img/work/full';

    public static function named($name) {
        return (new static)->saveAs($name);
    }

    public function saveAs($name) {
        $this->name = $name;
        $this->path = sprintf('%s/%s', $this->base_dir, $this->name);

        return $this;
    }

    public function move(UploadedFile $file) {
        $file->move($this->base_dir, $this->name);

        return $this;
    }
}
