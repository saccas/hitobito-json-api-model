<?php

namespace Saccas\HitobitoApi\Model;

class EventFitnessRequirements extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getLabel(): ?string
	{
		return $this->getAttribute('label');
	}


	public function getShortLabel(): ?string
	{
		return $this->getAttribute('short_label');
	}


	public function getShortDescription(): ?string
	{
		return $this->getAttribute('short_description');
	}


	public function getDescription(): ?string
	{
		return $this->getAttribute('description');
	}


	public function getOrder(): ?int
	{
		return $this->getAttribute('order');
	}
}
