<?php

namespace Saccas\HitobitoApi\Model;

class Dates extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getEventId(): ?int
	{
		return $this->getAttribute('event_id');
	}


	public function getLabel(): ?string
	{
		return $this->getAttribute('label');
	}


	public function getLocation(): ?string
	{
		return $this->getAttribute('location');
	}


	public function getStartAt(): ?\DateTime
	{
		return $this->getDateAttribute('start_at');
	}


	public function getFinishAt(): ?\DateTime
	{
		return $this->getDateAttribute('finish_at');
	}


	public function getEvent(): ?Events
	{
		return $this->getRelationSingle('event', \Saccas\HitobitoApi\Model\Events::class);
	}
}
