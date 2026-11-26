<?php

namespace Saccas\HitobitoApi\Model;

class AdditionalEmails extends \Saccas\JsonApiModel\JsonApiModel
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


	public function getEmail(): ?string
	{
		return $this->getAttribute('email');
	}


	public function isMailings(): ?bool
	{
		return $this->getAttribute('mailings');
	}


	public function isInvoices(): ?bool
	{
		return $this->getAttribute('invoices');
	}


	public function getCategoryName(): ?string
	{
		return $this->getAttribute('category_name');
	}
}
