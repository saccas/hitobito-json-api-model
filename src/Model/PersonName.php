<?php

namespace Saccas\HitobitoApi\Model;

class PersonName extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getFirstName(): ?string
	{
		return $this->getAttribute('first_name');
	}


	public function getLastName(): ?string
	{
		return $this->getAttribute('last_name');
	}
}
