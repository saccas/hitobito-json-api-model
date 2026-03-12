<?php

namespace Saccas\HitobitoApi\Model;

class SelfRegistrations extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getFirstName(): ?string
	{
		return $this->getAttribute('first_name');
	}


	public function getLastName(): ?string
	{
		return $this->getAttribute('last_name');
	}


	public function getNickname(): ?string
	{
		return $this->getAttribute('nickname');
	}


	public function getEmail(): ?string
	{
		return $this->getAttribute('email');
	}


	public function isAdultConsent(): ?bool
	{
		return $this->getAttribute('adult_consent');
	}


	public function isPrivacyPolicyAccepted(): ?bool
	{
		return $this->getAttribute('privacy_policy_accepted');
	}
}
