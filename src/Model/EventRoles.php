<?php

namespace Saccas\HitobitoApi\Model;

class EventRoles extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getParticipationId(): ?int
	{
		return $this->getAttribute('participation_id');
	}


	public function getType(): ?string
	{
		return $this->getAttribute('type');
	}


	public function getLabel(): ?string
	{
		return $this->getAttribute('label');
	}


	public function getParticipation(): ?Participation
	{
		return $this->getRelationSingle('participation', \Saccas\HitobitoApi\Model\Participation::class);
	}
}
