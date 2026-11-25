<?php

namespace Saccas\HitobitoApi\Model;

class EventContactDetails extends \Saccas\JsonApiModel\JsonApiModel
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


	public function getPicture(): ?string
	{
		return $this->getAttribute('picture');
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


	public function getAdditionalAddresses(): ?array
	{
		return $this->getAttribute('additional_addresses');
	}


	public function getEmail(): ?string
	{
		return $this->getAttribute('email');
	}


	public function getAdditionalEmails(): ?array
	{
		return $this->getAttribute('additional_emails');
	}


	public function getPhoneNumbers(): ?array
	{
		return $this->getAttribute('phone_numbers');
	}


	public function getSocialAccounts(): ?array
	{
		return $this->getAttribute('social_accounts');
	}
}
