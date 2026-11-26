<?php

namespace Saccas\HitobitoApi\Model;

class EventActivities extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getLabel(): ?string
	{
		return $this->getAttribute('label');
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


	public function getColor(): ?string
	{
		return $this->getAttribute('color');
	}


	public function getIcon(): ?string
	{
		return $this->getAttribute('icon');
	}


	public function getParent(): ?\Parent
	{
		return $this->getRelationSingle('parent', \Parent::class);
	}
}
