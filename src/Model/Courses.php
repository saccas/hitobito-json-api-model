<?php

namespace Saccas\HitobitoApi\Model;

class Courses extends \Saccas\JsonApiModel\JsonApiModel
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


	public function getTrainingDays(): ?int
	{
		return $this->getAttribute('training_days');
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


	public function getNumber(): ?string
	{
		return $this->getAttribute('number');
	}


	public function getTeamerCount(): ?int
	{
		return $this->getAttribute('teamer_count');
	}


	public function getLanguage(): ?string
	{
		return $this->getAttribute('language');
	}


	public function getAccommodation(): ?string
	{
		return $this->getAttribute('accommodation');
	}


	public function getMeals(): ?string
	{
		return $this->getAttribute('meals');
	}


	public function getSeason(): ?string
	{
		return $this->getAttribute('season');
	}


	public function getStartPointOfTime(): ?string
	{
		return $this->getAttribute('start_point_of_time');
	}


	public function getMinimumAge(): ?int
	{
		return $this->getAttribute('minimum_age');
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


	public function getPriceMember(): ?int
	{
		return $this->getAttribute('price_member');
	}


	public function getPriceRegular(): ?int
	{
		return $this->getAttribute('price_regular');
	}


	public function getPriceSubsidized(): ?int
	{
		return $this->getAttribute('price_subsidized');
	}


	public function getPriceJsActiveMember(): ?int
	{
		return $this->getAttribute('price_js_active_member');
	}


	public function getPriceJsActiveRegular(): ?int
	{
		return $this->getAttribute('price_js_active_regular');
	}


	public function getPriceJsPassiveMember(): ?int
	{
		return $this->getAttribute('price_js_passive_member');
	}


	public function getPriceJsPassiveRegular(): ?int
	{
		return $this->getAttribute('price_js_passive_regular');
	}


	public function getContact(): ?People
	{
		return $this->getRelationSingle('contact', \Saccas\HitobitoApi\Model\People::class);
	}


	/**
	 * @return ?\Illuminate\Support\Collection<\Saccas\HitobitoApi\Model\Dates>
	 */
	public function getDates(): ?\Illuminate\Support\Collection
	{
		return $this->getRelationMultiple('dates', \Saccas\HitobitoApi\Model\Dates::class);
	}


	public function getKind(): ?EventKinds
	{
		return $this->getRelationSingle('kind', \Saccas\HitobitoApi\Model\EventKinds::class);
	}


	/**
	 * @return ?\Illuminate\Support\Collection<\Saccas\HitobitoApi\Model\People>
	 */
	public function getLeaders(): ?\Illuminate\Support\Collection
	{
		return $this->getRelationMultiple('leaders', \Saccas\HitobitoApi\Model\People::class);
	}
}
