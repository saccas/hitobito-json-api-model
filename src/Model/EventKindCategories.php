<?php

namespace Saccas\HitobitoApi\Model;

class EventKindCategories extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getLabel(): ?string
	{
		return $this->getAttribute('label');
	}


	public function getOrder(): ?int
	{
		return $this->getAttribute('order');
	}
}
