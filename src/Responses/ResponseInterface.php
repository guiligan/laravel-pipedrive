<?php namespace Guiligan\Pipedrive\Responses;

use Illuminate\Support\Collection;

interface ResponseInterface
{
	/**
	 * @return Collection
	 */
	public function getData();
}