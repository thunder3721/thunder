<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'product';
//    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
//	protected $guarded = ['id'];

	public function getTitle()
	{
		return $this->title;
	}

}
