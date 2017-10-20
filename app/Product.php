<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	protected $table = 'products';

	public function save($data)
	{
		return Product::save($data);
	}


	public function delete()
	{
		return $this->delete();
	}

	public function uddate()
	{
		return  $this->update();
	}
=======

class Product extends Model
{
    //
>>>>>>> fe2adeb12c792d73e312a17d533573b77614c8fc
}
