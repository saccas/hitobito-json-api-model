<?php

namespace Saccas\HitobitoApi\Model;

class AdditionalAddresses extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getLabel(): ?string
	{
		return $this->getAttribute('label');
	}


	public function isPublic(): ?bool
	{
		return $this->getAttribute('public');
	}


	public function getCategoryId(): ?int
	{
		return $this->getAttribute('category_id');
	}


	public function getContactableId(): ?int
	{
		return $this->getAttribute('contactable_id');
	}


	public function getContactableType(): ?string
	{
		return $this->getAttribute('contactable_type');
	}


	public function getFirstName(): ?string
	{
		return $this->getAttribute('first_name');
	}


	public function getLastName(): ?string
	{
		return $this->getAttribute('last_name');
	}


	public function getOrganizationName(): ?string
	{
		return $this->getAttribute('organization_name');
	}


	public function isOrganization(): ?bool
	{
		return $this->getAttribute('organization');
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


	public function getCategoryName(): ?string
	{
		return $this->getAttribute('category_name');
	}
}
