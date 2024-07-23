<?php

namespace Saccas\HitobitoApi\Model;

class EventLevels extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getLabel(): ?string
	{
		return $this->getAttribute('label');
	}


	public function getCode(): ?int
	{
		return $this->getAttribute('code');
	}


	public function getDifficulty(): ?int
	{
		return $this->getAttribute('difficulty');
	}


	public function getDescription(): ?string
	{
		return $this->getAttribute('description');
	}
}
