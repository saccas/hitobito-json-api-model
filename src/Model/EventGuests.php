<?php

namespace Saccas\HitobitoApi\Model;

class EventGuests extends \Saccas\JsonApiModel\JsonApiModel
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


	public function getAddressCareOf(): ?string
	{
		return $this->getAttribute('address_care_of');
	}


	public function getStreet(): ?string
	{
		return $this->getAttribute('street');
	}


	public function getHousenumber(): ?string
	{
		return $this->getAttribute('housenumber');
	}


	public function getPostbox(): ?string
	{
		return $this->getAttribute('postbox');
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


	public function getLanguage(): ?string
	{
		return $this->getAttribute('language');
	}


	public function getPhoneNumber(): ?string
	{
		return $this->getAttribute('phone_number');
	}
}
