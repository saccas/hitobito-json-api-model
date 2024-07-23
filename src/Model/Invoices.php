<?php

namespace Saccas\HitobitoApi\Model;

class Invoices extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getTitle(): ?string
	{
		return $this->getAttribute('title');
	}


	public function getDescription(): ?string
	{
		return $this->getAttribute('description');
	}


	public function getState(): ?string
	{
		return $this->getAttribute('state');
	}


	public function getGroupId(): ?int
	{
		return $this->getAttribute('group_id');
	}


	public function getRecipientId(): ?int
	{
		return $this->getAttribute('recipient_id');
	}


	public function getDueAt(): ?\DateTime
	{
		return $this->getDateAttribute('due_at');
	}


	public function getIssuedAt(): ?\DateTime
	{
		return $this->getDateAttribute('issued_at');
	}


	public function getRecipientEmail(): ?string
	{
		return $this->getAttribute('recipient_email');
	}


	public function getPaymentInformation(): ?string
	{
		return $this->getAttribute('payment_information');
	}


	public function getPaymentPurpose(): ?string
	{
		return $this->getAttribute('payment_purpose');
	}


	public function isHideTotal(): ?bool
	{
		return $this->getAttribute('hide_total');
	}


	public function getGroup(): ?Groups
	{
		return $this->getRelationSingle('group', \Saccas\HitobitoApi\Model\Groups::class);
	}


	public function getRecipient(): ?People
	{
		return $this->getRelationSingle('recipient', \Saccas\HitobitoApi\Model\People::class);
	}


	/**
	 * @return ?\Illuminate\Support\Collection<\Saccas\HitobitoApi\Model\InvoiceItems>
	 */
	public function getInvoiceItems(): ?\Illuminate\Support\Collection
	{
		return $this->getRelationMultiple('invoice_items', \Saccas\HitobitoApi\Model\InvoiceItems::class);
	}
}
