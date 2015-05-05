<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'category';

	public function items()
	{
		return $this->hasMany('App\Http\Models\Products');
	}


}
