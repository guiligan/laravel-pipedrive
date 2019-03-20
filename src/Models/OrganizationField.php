<?php namespace Guiligan\Pipedrive\Models;

use Guiligan\Pipedrive\Utils\Model;

class OrganizationField extends Model
{
	protected $entity   = 'organizationFields';

	protected $modelClass = self::class;

	public $id;
	public $name;
	public $field_type;
	public $options;
	public $key;
}