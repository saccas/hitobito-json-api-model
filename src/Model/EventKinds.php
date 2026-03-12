<?php

namespace Saccas\HitobitoApi\Model;

class EventKinds extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getLabel(): ?string
	{
		return $this->getAttribute('label');
	}


	public function getShortName(): ?string
	{
		return $this->getAttribute('short_name');
	}


	public function getGeneralInformation(): ?string
	{
		return $this->getAttribute('general_information');
	}


	public function getApplicationConditions(): ?string
	{
		return $this->getAttribute('application_conditions');
	}


	public function getMinimumAge(): ?int
	{
		return $this->getAttribute('minimum_age');
	}


	public function getCreatedAt(): ?\DateTime
	{
		return $this->getDateAttribute('created_at');
	}


	public function getUpdatedAt(): ?\DateTime
	{
		return $this->getDateAttribute('updated_at');
	}


	public function getMaximumParticipants(): ?int
	{
		return $this->getAttribute('maximum_participants');
	}


	public function getMinimumParticipants(): ?int
	{
		return $this->getAttribute('minimum_participants');
	}


	public function getTrainingDays(): ?int
	{
		return $this->getAttribute('training_days');
	}


	public function getSeason(): ?string
	{
		return $this->getAttribute('season');
	}


	public function getAccommodation(): ?string
	{
		return $this->getAttribute('accommodation');
	}


	public function getBriefDescription(): ?string
	{
		return $this->getAttribute('brief_description');
	}


	public function getSpecialities(): ?string
	{
		return $this->getAttribute('specialities');
	}


	public function getSimilarTours(): ?string
	{
		return $this->getAttribute('similar_tours');
	}


	public function getProgram(): ?string
	{
		return $this->getAttribute('program');
	}


	public function getSeoText(): ?string
	{
		return $this->getAttribute('seo_text');
	}


	public function getKindCategory(): ?EventKindCategories
	{
		return $this->getRelationSingle('kind_category', \Saccas\HitobitoApi\Model\EventKindCategories::class);
	}


	public function getLevel(): ?EventLevels
	{
		return $this->getRelationSingle('level', \Saccas\HitobitoApi\Model\EventLevels::class);
	}
}
