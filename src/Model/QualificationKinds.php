<?php

namespace Saccas\HitobitoApi\Model;

class QualificationKinds extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getLabel(): ?string
	{
		return $this->getAttribute('label');
	}


	public function getDescription(): ?string
	{
		return $this->getAttribute('description');
	}


	public function getValidity(): ?int
	{
		return $this->getAttribute('validity');
	}


	public function getReactivateable(): ?int
	{
		return $this->getAttribute('reactivateable');
	}


	public function getRequiredTrainingDays(): ?int
	{
		return $this->getAttribute('required_training_days');
	}
}
