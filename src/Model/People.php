<?php

namespace Saccas\HitobitoApi\Model;

class People extends \Saccas\JsonApiModel\JsonApiModel
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


	public function getCompanyName(): ?string
	{
		return $this->getAttribute('company_name');
	}


	public function isCompany(): ?bool
	{
		return $this->getAttribute('company');
	}


	public function getEmail(): ?string
	{
		return $this->getAttribute('email');
	}


	public function getAddress(): ?string
	{
		return $this->getAttribute('address');
	}


	public function getZipCode(): ?string
	{
		return $this->getAttribute('zip_code');
	}


	public function getTown(): ?string
	{
		return $this->getAttribute('town');
	}


	public function getCountry(): ?string
	{
		return $this->getAttribute('country');
	}


	public function getPrimaryGroupId(): ?int
	{
		return $this->getAttribute('primary_group_id');
	}


	public function getGender(): ?string
	{
		return $this->getAttribute('gender');
	}


	public function getBirthday(): ?\DateTime
	{
		return $this->getDateAttribute('birthday');
	}


	public function getLanguage(): ?string
	{
		return $this->getAttribute('language');
	}


	public function getFamilyId(): ?string
	{
		return $this->getAttribute('family_id');
	}


	public function getMembershipNumber(): ?int
	{
		return $this->getAttribute('membership_number');
	}


	public function getMembershipYears(): ?int
	{
		return $this->getAttribute('membership_years');
	}


	public function getPrimaryGroup(): ?Groups
	{
		return $this->getRelationSingle('primary_group', \Saccas\HitobitoApi\Model\Groups::class);
	}


	public function getLayerGroup(): ?Groups
	{
		return $this->getRelationSingle('layer_group', \Saccas\HitobitoApi\Model\Groups::class);
	}


	/**
	 * @return ?\Illuminate\Support\Collection<\Saccas\HitobitoApi\Model\Roles>
	 */
	public function getRoles(): ?\Illuminate\Support\Collection
	{
		return $this->getRelationMultiple('roles', \Saccas\HitobitoApi\Model\Roles::class);
	}


	/**
	 * @return ?\Illuminate\Support\Collection<\Saccas\HitobitoApi\Model\PhoneNumbers>
	 */
	public function getPhoneNumbers(): ?\Illuminate\Support\Collection
	{
		return $this->getRelationMultiple('phone_numbers', \Saccas\HitobitoApi\Model\PhoneNumbers::class);
	}


	/**
	 * @return ?\Illuminate\Support\Collection<\Saccas\HitobitoApi\Model\SocialAccounts>
	 */
	public function getSocialAccounts(): ?\Illuminate\Support\Collection
	{
		return $this->getRelationMultiple('social_accounts', \Saccas\HitobitoApi\Model\SocialAccounts::class);
	}


	/**
	 * @return ?\Illuminate\Support\Collection<\Saccas\HitobitoApi\Model\AdditionalEmails>
	 */
	public function getAdditionalEmails(): ?\Illuminate\Support\Collection
	{
		return $this->getRelationMultiple('additional_emails', \Saccas\HitobitoApi\Model\AdditionalEmails::class);
	}
}
