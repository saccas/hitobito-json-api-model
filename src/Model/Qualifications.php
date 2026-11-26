<?php

namespace Saccas\HitobitoApi\Model;

class Qualifications extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getPersonId(): ?int
	{
		return $this->getAttribute('person_id');
	}


	public function getQualificationKindId(): ?int
	{
		return $this->getAttribute('qualification_kind_id');
	}


	public function getStartAt(): ?\DateTime
	{
		return $this->getDateAttribute('start_at');
	}


	public function getFinishAt(): ?\DateTime
	{
		return $this->getDateAttribute('finish_at');
	}


	public function getQualifiedAt(): ?\DateTime
	{
		return $this->getDateAttribute('qualified_at');
	}


	public function getOrigin(): ?string
	{
		return $this->getAttribute('origin');
	}


	public function getPerson(): ?Person
	{
		return $this->getRelationSingle('person', \Saccas\HitobitoApi\Model\Person::class);
	}


	public function getQualificationKind(): ?QualificationKind
	{
		return $this->getRelationSingle('qualification_kind', \Saccas\HitobitoApi\Model\QualificationKind::class);
	}
}
