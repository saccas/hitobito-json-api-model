<?php

namespace Saccas\HitobitoApi\Model;

class Groups extends \Saccas\JsonApiModel\JsonApiModel
{
	public function getId(): string
	{
		return $this->getAttribute('id');
	}


	public function getName(): ?string
	{
		return $this->getAttribute('name');
	}


	public function getShortName(): ?string
	{
		return $this->getAttribute('short_name');
	}


	public function getDisplayName(): ?string
	{
		return $this->getAttribute('display_name');
	}


	public function getDescription(): ?string
	{
		return $this->getAttribute('description');
	}


	public function isLayer(): ?bool
	{
		return $this->getAttribute('layer');
	}


	public function getParentId(): ?int
	{
		return $this->getAttribute('parent_id');
	}


	public function getLayerGroupId(): ?int
	{
		return $this->getAttribute('layer_group_id');
	}


	public function getType(): ?string
	{
		return $this->getAttribute('type');
	}


	public function getEmail(): ?string
	{
		return $this->getAttribute('email');
	}


	public function getAddress(): ?string
	{
		return $this->getAttribute('address');
	}


	public function getZipCode(): ?int
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


	public function isRequirePersonAddRequests(): ?bool
	{
		return $this->getAttribute('require_person_add_requests');
	}


	public function getSelfRegistrationUrl(): ?string
	{
		return $this->getAttribute('self_registration_url');
	}


	public function getArchivedAt(): ?\DateTime
	{
		return $this->getDateAttribute('archived_at');
	}


	public function getCreatedAt(): ?\DateTime
	{
		return $this->getDateAttribute('created_at');
	}


	public function getUpdatedAt(): ?\DateTime
	{
		return $this->getDateAttribute('updated_at');
	}


	public function getDeletedAt(): ?\DateTime
	{
		return $this->getDateAttribute('deleted_at');
	}


	public function getNavisionId(): ?int
	{
		return $this->getAttribute('navision_id');
	}


	public function getLogo(): ?string
	{
		return $this->getAttribute('logo');
	}


	public function getFoundationYear(): ?string
	{
		return $this->getAttribute('foundation_year');
	}


	public function getSectionCanton(): ?string
	{
		return $this->getAttribute('section_canton');
	}


	public function getLanguage(): ?string
	{
		return $this->getAttribute('language');
	}


	public function getMitgliedTerminationBySectionOnly(): ?string
	{
		return $this->getAttribute('mitglied_termination_by_section_only');
	}


	public function getCourseAdminEmail(): ?string
	{
		return $this->getAttribute('course_admin_email');
	}


	public function getSacNewsletterMailingListId(): ?string
	{
		return $this->getAttribute('sac_newsletter_mailing_list_id');
	}


	public function getSacMagazineMailingListId(): ?string
	{
		return $this->getAttribute('sac_magazine_mailing_list_id');
	}


	public function getSacFundraisingMailingListId(): ?string
	{
		return $this->getAttribute('sac_fundraising_mailing_list_id');
	}


	public function isHasYouthOrganization(): ?bool
	{
		return $this->getAttribute('has_youth_organization');
	}


	public function getMembersCount(): ?int
	{
		return $this->getAttribute('members_count');
	}


	public function isMembershipAdmissionThroughGs(): ?bool
	{
		return $this->getAttribute('membership_admission_through_gs');
	}


	public function getMembershipSelfRegistrationUrl(): ?string
	{
		return $this->getAttribute('membership_self_registration_url');
	}


	public function getContact(): ?People
	{
		return $this->getRelationSingle('contact', \Saccas\HitobitoApi\Model\People::class);
	}


	public function getCreator(): ?People
	{
		return $this->getRelationSingle('creator', \Saccas\HitobitoApi\Model\People::class);
	}


	public function getUpdater(): ?People
	{
		return $this->getRelationSingle('updater', \Saccas\HitobitoApi\Model\People::class);
	}


	public function getDeleter(): ?People
	{
		return $this->getRelationSingle('deleter', \Saccas\HitobitoApi\Model\People::class);
	}


	public function getParent(): ?Groups
	{
		return $this->getRelationSingle('parent', \Saccas\HitobitoApi\Model\Groups::class);
	}


	public function getLayerGroup(): ?Groups
	{
		return $this->getRelationSingle('layer_group', \Saccas\HitobitoApi\Model\Groups::class);
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
