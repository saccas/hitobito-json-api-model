<?php

namespace Saccas\HitobitoApi\Model;

class Tours extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getGroupIds(): ?int
	{
		return $this->getAttribute('group_ids');
	}


	public function getType(): ?string
	{
		return $this->getAttribute('type');
	}


	public function getKindId(): ?int
	{
		return $this->getAttribute('kind_id');
	}


	public function getName(): ?string
	{
		return $this->getAttribute('name');
	}


	public function getDescription(): ?string
	{
		return $this->getAttribute('description');
	}


	public function getApplicationConditions(): ?string
	{
		return $this->getAttribute('application_conditions');
	}


	public function getMotto(): ?string
	{
		return $this->getAttribute('motto');
	}


	public function getCost(): ?string
	{
		return $this->getAttribute('cost');
	}


	public function getLocation(): ?string
	{
		return $this->getAttribute('location');
	}


	public function getApplicationOpeningAt(): ?\DateTime
	{
		return $this->getDateAttribute('application_opening_at');
	}


	public function getApplicationClosingAt(): ?\DateTime
	{
		return $this->getDateAttribute('application_closing_at');
	}


	public function getApplicationContactId(): ?int
	{
		return $this->getAttribute('application_contact_id');
	}


	public function getExternalApplicationLink(): ?string
	{
		return $this->getAttribute('external_application_link');
	}


	public function getMaximumParticipants(): ?int
	{
		return $this->getAttribute('maximum_participants');
	}


	public function getCreatedAt(): ?\DateTime
	{
		return $this->getDateAttribute('created_at');
	}


	public function getUpdatedAt(): ?\DateTime
	{
		return $this->getDateAttribute('updated_at');
	}


	public function getState(): ?string
	{
		return $this->getAttribute('state');
	}


	public function getApplicantCount(): ?int
	{
		return $this->getAttribute('applicant_count');
	}


	public function getParticipantCount(): ?int
	{
		return $this->getAttribute('participant_count');
	}


	public function getMinimumParticipants(): ?int
	{
		return $this->getAttribute('minimum_participants');
	}


	public function getTeamerCount(): ?int
	{
		return $this->getAttribute('teamer_count');
	}


	public function getSummit(): ?string
	{
		return $this->getAttribute('summit');
	}


	public function getAscent(): ?int
	{
		return $this->getAttribute('ascent');
	}


	public function getDescent(): ?int
	{
		return $this->getAttribute('descent');
	}


	public function getSeason(): ?string
	{
		return $this->getAttribute('season');
	}


	public function getMinimumAge(): ?int
	{
		return $this->getAttribute('minimum_age');
	}


	public function getMaximumAge(): ?int
	{
		return $this->getAttribute('maximum_age');
	}


	public function getTourenportalLink(): ?string
	{
		return $this->getAttribute('tourenportal_link');
	}


	public function isSubito(): ?bool
	{
		return $this->getAttribute('subito');
	}


	public function getContact(): ?Contact
	{
		return $this->getRelationSingle('contact', \Saccas\HitobitoApi\Model\Contact::class);
	}


	public function getKind(): ?Kind
	{
		return $this->getRelationSingle('kind', \Saccas\HitobitoApi\Model\Kind::class);
	}


	/**
	 * @return \Illuminate\Support\Collection<\Saccas\HitobitoApi\Model\Dates>
	 */
	public function getDates(): \Illuminate\Support\Collection
	{
		return $this->getRelationMultiple('dates', \Saccas\HitobitoApi\Model\Dates::class);
	}


	/**
	 * @return \Illuminate\Support\Collection<\Saccas\HitobitoApi\Model\Leaders>
	 */
	public function getLeaders(): \Illuminate\Support\Collection
	{
		return $this->getRelationMultiple('leaders', \Saccas\HitobitoApi\Model\Leaders::class);
	}
}
