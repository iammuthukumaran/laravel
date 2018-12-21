<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    //
	protected $guarded =[];

   /* protected $fillable=[
    	'title','discription'

    ];*/
	public function tasks()
	{
		return $this->hasMany(Task::class);
	}
}
