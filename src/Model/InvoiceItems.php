<?php

namespace Saccas\HitobitoApi\Model;

class InvoiceItems extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getInvoiceId(): ?int
	{
		return $this->getAttribute('invoice_id');
	}


	public function getName(): ?string
	{
		return $this->getAttribute('name');
	}


	public function getDescription(): ?string
	{
		return $this->getAttribute('description');
	}


	public function getUnitCost(): ?int
	{
		return $this->getAttribute('unit_cost');
	}


	public function getVatRate(): ?int
	{
		return $this->getAttribute('vat_rate');
	}


	public function getCost(): ?int
	{
		return $this->getAttribute('cost');
	}


	public function getCount(): ?int
	{
		return $this->getAttribute('count');
	}


	public function getCostCenter(): ?string
	{
		return $this->getAttribute('cost_center');
	}


	public function getAccount(): ?string
	{
		return $this->getAttribute('account');
	}


	public function getInvoice(): ?Invoices
	{
		return $this->getRelationSingle('invoice', \Saccas\HitobitoApi\Model\Invoices::class);
	}
}
