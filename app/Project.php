<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    public function categoryNames()
    {
        return $this->belongsTo('App\ProjectCategoryAssignment','category_id');
    }
    public function UserName(){
        return $this->belongsTo('App\User','user_id');
    }
}
