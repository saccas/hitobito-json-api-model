<?php

namespace Saccas\HitobitoApi\Model;

class MailingLists extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getName(): ?string
	{
		return $this->getAttribute('name');
	}


	public function getGroupId(): ?int
	{
		return $this->getAttribute('group_id');
	}


	public function getDescription(): ?string
	{
		return $this->getAttribute('description');
	}


	public function getPublisher(): ?string
	{
		return $this->getAttribute('publisher');
	}


	public function getMailName(): ?string
	{
		return $this->getAttribute('mail_name');
	}


	public function getAdditionalSender(): ?string
	{
		return $this->getAttribute('additional_sender');
	}


	public function getSubscribableFor(): ?string
	{
		return $this->getAttribute('subscribable_for');
	}


	public function getSubscribableMode(): ?string
	{
		return $this->getAttribute('subscribable_mode');
	}


	public function isSubscribersMayPost(): ?bool
	{
		return $this->getAttribute('subscribers_may_post');
	}


	public function isAnyoneMayPost(): ?bool
	{
		return $this->getAttribute('anyone_may_post');
	}


	public function getPreferredLabels(): ?array
	{
		return $this->getAttribute('preferred_labels');
	}


	public function isDeliveryReport(): ?bool
	{
		return $this->getAttribute('delivery_report');
	}


	public function getMainEmail(): ?string
	{
		return $this->getAttribute('main_email');
	}


	public function isSubscribable(): ?bool
	{
		return $this->getAttribute('subscribable');
	}


	public function getSubscribers(): ?array
	{
		return $this->getAttribute('subscribers');
	}


	public function getGroup(): ?Group
	{
		return $this->getRelationSingle('group', \Saccas\HitobitoApi\Model\Group::class);
	}
}
