<?php namespace Guiligan\Pipedrive\Models;

use Guiligan\Pipedrive\Utils\Model;

class Pipeline extends Model
{
	protected $entity = 'pipelines';
	protected $modelClass = self::class;

	public $id;
	public $name;
	public $order_nr;
	public $active;
}