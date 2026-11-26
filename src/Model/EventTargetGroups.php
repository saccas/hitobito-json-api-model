<?php

namespace Saccas\HitobitoApi\Model;

class EventTargetGroups extends \Saccas\JsonApiModel\JsonApiModel
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


	public function getParent(): ?\Parent
	{
		return $this->getRelationSingle('parent', \Parent::class);
	}
}
