<?php namespace Guiligan\Pipedrive\Models;

use Guiligan\Pipedrive\Utils\Model;

class Organization extends Model
{
	protected $entity   = 'organizations';

	protected $modelClass = self::class;

	public $id;
	public $name;
	public $owner_id;
	public $visible_to;
	public $add_time;
}