<?php namespace Guiligan\Pipedrive\Models;

use Guiligan\Pipedrive\Utils\Model;

class File extends Model
{
	protected $entity   = 'files';

	protected $modelClass = self::class;

	public $file;
	public $deal_id;
	public $person_id;
	public $org_id;
	public $product_id;
	public $activity_id;
	public $note_id;
	public $owner_id;
	public $file_size;
	public $file_type;
	public $file_name;
	public $add_time;
	public $update_time;
	public $comment;

	/**
	 * @param array $fields
	 *
	 * @return static
	 */
	public function create( array $fields = [], $file = '', $fileName = '' )
	{
		$fileData = [
			'name'     => 'file',
			'filename' => $fileName,
			'contents' => $file
		];

		$data = $this->request->post( $this->entity, $fields, $fileData );

		return new $this->modelClass( $this->request, $data );
	}
}