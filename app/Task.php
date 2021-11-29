<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public function getActionDelete() {
        return route('tasks.destroy', $this->id);

    }
    public function getActionEdit() {
        return  route('tasks.edit', $this->id);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

}
