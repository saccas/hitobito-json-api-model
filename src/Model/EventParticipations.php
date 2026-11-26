<?php

namespace Saccas\HitobitoApi\Model;

class EventParticipations extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getEventId(): ?int
	{
		return $this->getAttribute('event_id');
	}


	public function getParticipantId(): ?int
	{
		return $this->getAttribute('participant_id');
	}


	public function getParticipantType(): ?string
	{
		return $this->getAttribute('participant_type');
	}


	public function getApplicationId(): ?int
	{
		return $this->getAttribute('application_id');
	}


	public function isActive(): ?bool
	{
		return $this->getAttribute('active');
	}


	public function isQualified(): ?bool
	{
		return $this->getAttribute('qualified');
	}


	public function getAdditionalInformation(): ?string
	{
		return $this->getAttribute('additional_information');
	}


	public function getCreatedAt(): ?\DateTime
	{
		return $this->getDateAttribute('created_at');
	}


	public function getUpdatedAt(): ?\DateTime
	{
		return $this->getDateAttribute('updated_at');
	}


	public function getEvent(): ?Event
	{
		return $this->getRelationSingle('event', \Saccas\HitobitoApi\Model\Event::class);
	}


	public function getParticipant(): ?Participant
	{
		return $this->getRelationSingle('participant', \Saccas\HitobitoApi\Model\Participant::class);
	}


	/**
	 * @return \Illuminate\Support\Collection<\Saccas\HitobitoApi\Model\Roles>
	 */
	public function getRoles(): \Illuminate\Support\Collection
	{
		return $this->getRelationMultiple('roles', \Saccas\HitobitoApi\Model\Roles::class);
	}
}
