<?php

namespace Saccas\HitobitoApi\Model;

class ExternalInvoices extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getPersonId(): ?int
	{
		return $this->getAttribute('person_id');
	}


	public function getType(): ?string
	{
		return $this->getAttribute('type');
	}


	public function getLinkType(): ?string
	{
		return $this->getAttribute('link_type');
	}


	public function getLinkId(): ?int
	{
		return $this->getAttribute('link_id');
	}


	public function getIssuedAt(): ?\DateTime
	{
		return $this->getDateAttribute('issued_at');
	}


	public function getYear(): ?int
	{
		return $this->getAttribute('year');
	}


	public function getAbacusSalesOrderKey(): ?int
	{
		return $this->getAttribute('abacus_sales_order_key');
	}


	public function getState(): ?string
	{
		return $this->getAttribute('state');
	}


	public function getSentAt(): ?\DateTime
	{
		return $this->getDateAttribute('sent_at');
	}


	public function getTotal(): ?int
	{
		return $this->getAttribute('total');
	}


	public function getCreatedAt(): ?\DateTime
	{
		return $this->getDateAttribute('created_at');
	}


	public function getUpdatedAt(): ?\DateTime
	{
		return $this->getDateAttribute('updated_at');
	}


	public function getPerson(): ?Person
	{
		return $this->getRelationSingle('person', \Saccas\HitobitoApi\Model\Person::class);
	}
}
