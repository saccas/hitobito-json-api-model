<?php

namespace Saccas\HitobitoApi\Model;

class Roles extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getCreatedAt(): ?\DateTime
	{
		return $this->getDateAttribute('created_at');
	}


	public function getUpdatedAt(): ?\DateTime
	{
		return $this->getDateAttribute('updated_at');
	}


	public function getStartOn(): ?\DateTime
	{
		return $this->getDateAttribute('start_on');
	}


	public function getEndOn(): ?\DateTime
	{
		return $this->getDateAttribute('end_on');
	}


	public function getPersonId(): ?int
	{
		return $this->getAttribute('person_id');
	}


	public function getGroupId(): ?int
	{
		return $this->getAttribute('group_id');
	}


	public function getType(): ?string
	{
		return $this->getAttribute('type');
	}


	public function getLabel(): ?string
	{
		return $this->getAttribute('label');
	}


	public function getMembershipYears(): ?int
	{
		return $this->getAttribute('membership_years');
	}


	public function getPerson(): ?People
	{
		return $this->getRelationSingle('person', \Saccas\HitobitoApi\Model\People::class);
	}


	public function getGroup(): ?Groups
	{
		return $this->getRelationSingle('group', \Saccas\HitobitoApi\Model\Groups::class);
	}


	public function getLayerGroup(): ?Groups
	{
		return $this->getRelationSingle('layer_group', \Saccas\HitobitoApi\Model\Groups::class);
	}
}
