<?php namespace Guiligan\Pipedrive\Models;

use Guiligan\Pipedrive\Utils\Model;

class Filter extends Model
{
	protected $entity = 'filters';
	protected $modelClass = self::class;

	public $id;
	public $name;

	/**
	 * @var Pipeline|integer
	 */
	public $pipeline_id;
	public $active_flag;
	public $add_time;
	public $type;
	public $temporary_flag;
	public $user_id;
	public $update_time;
	public $visible_to;
	public $custom_view_id;
}