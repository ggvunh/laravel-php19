<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;
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
}
