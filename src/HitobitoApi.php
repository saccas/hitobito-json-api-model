<?php

namespace Saccas\HitobitoApi;

class HitobitoApi extends \Saccas\JsonApiModel\JsonApiManager
{
	public array $schemaRepositoryClassMap = ['additional_addresses' => Repository\AdditionalAddressesRepository::class, 'additional_emails' => Repository\AdditionalEmailsRepository::class, 'event_activities' => Repository\EventActivitiesRepository::class, 'event-contact-details' => Repository\EventContactDetailsRepository::class, 'courses' => Repository\CoursesRepository::class, 'dates' => Repository\DatesRepository::class, 'event_fitness_requirements' => Repository\EventFitnessRequirementsRepository::class, 'event_guests' => Repository\EventGuestsRepository::class, 'event_kind_categories' => Repository\EventKindCategoriesRepository::class, 'event_kinds' => Repository\EventKindsRepository::class, 'event_levels' => Repository\EventLevelsRepository::class, 'event_participations' => Repository\EventParticipationsRepository::class, 'event_roles' => Repository\EventRolesRepository::class, 'event_target_groups' => Repository\EventTargetGroupsRepository::class, 'event_technical_requirements' => Repository\EventTechnicalRequirementsRepository::class, 'tours' => Repository\ToursRepository::class, 'event_traits' => Repository\EventTraitsRepository::class, 'events' => Repository\EventsRepository::class, 'external_invoices' => Repository\ExternalInvoicesRepository::class, 'groups' => Repository\GroupsRepository::class, 'invoice_items' => Repository\InvoiceItemsRepository::class, 'invoices' => Repository\InvoicesRepository::class, 'mailing_lists' => Repository\MailingListsRepository::class, 'person-name' => Repository\PersonNameRepository::class, 'people' => Repository\PeopleRepository::class, 'phone_numbers' => Repository\PhoneNumbersRepository::class, 'qualification_kinds' => Repository\QualificationKindsRepository::class, 'qualifications' => Repository\QualificationsRepository::class, 'roles' => Repository\RolesRepository::class, 'self_registrations' => Repository\SelfRegistrationsRepository::class, 'social_accounts' => Repository\SocialAccountsRepository::class, ];


	public function getAdditionalAddressesRepository(): Repository\AdditionalAddressesRepository
	{
		return $this->getRepository('additional_addresses');
	}


	public function getAdditionalEmailsRepository(): Repository\AdditionalEmailsRepository
	{
		return $this->getRepository('additional_emails');
	}


	public function getEventActivitiesRepository(): Repository\EventActivitiesRepository
	{
		return $this->getRepository('event_activities');
	}


	public function getEventContactDetailsRepository(): Repository\EventContactDetailsRepository
	{
		return $this->getRepository('event-contact-details');
	}


	public function getCoursesRepository(): Repository\CoursesRepository
	{
		return $this->getRepository('courses');
	}


	public function getDatesRepository(): Repository\DatesRepository
	{
		return $this->getRepository('dates');
	}


	public function getEventFitnessRequirementsRepository(): Repository\EventFitnessRequirementsRepository
	{
		return $this->getRepository('event_fitness_requirements');
	}


	public function getEventGuestsRepository(): Repository\EventGuestsRepository
	{
		return $this->getRepository('event_guests');
	}


	public function getEventKindCategoriesRepository(): Repository\EventKindCategoriesRepository
	{
		return $this->getRepository('event_kind_categories');
	}


	public function getEventKindsRepository(): Repository\EventKindsRepository
	{
		return $this->getRepository('event_kinds');
	}


	public function getEventLevelsRepository(): Repository\EventLevelsRepository
	{
		return $this->getRepository('event_levels');
	}


	public function getEventParticipationsRepository(): Repository\EventParticipationsRepository
	{
		return $this->getRepository('event_participations');
	}


	public function getEventRolesRepository(): Repository\EventRolesRepository
	{
		return $this->getRepository('event_roles');
	}


	public function getEventTargetGroupsRepository(): Repository\EventTargetGroupsRepository
	{
		return $this->getRepository('event_target_groups');
	}


	public function getEventTechnicalRequirementsRepository(): Repository\EventTechnicalRequirementsRepository
	{
		return $this->getRepository('event_technical_requirements');
	}


	public function getToursRepository(): Repository\ToursRepository
	{
		return $this->getRepository('tours');
	}


	public function getEventTraitsRepository(): Repository\EventTraitsRepository
	{
		return $this->getRepository('event_traits');
	}


	public function getEventsRepository(): Repository\EventsRepository
	{
		return $this->getRepository('events');
	}


	public function getExternalInvoicesRepository(): Repository\ExternalInvoicesRepository
	{
		return $this->getRepository('external_invoices');
	}


	public function getGroupsRepository(): Repository\GroupsRepository
	{
		return $this->getRepository('groups');
	}


	public function getInvoiceItemsRepository(): Repository\InvoiceItemsRepository
	{
		return $this->getRepository('invoice_items');
	}


	public function getInvoicesRepository(): Repository\InvoicesRepository
	{
		return $this->getRepository('invoices');
	}


	public function getMailingListsRepository(): Repository\MailingListsRepository
	{
		return $this->getRepository('mailing_lists');
	}


	public function getPersonNameRepository(): Repository\PersonNameRepository
	{
		return $this->getRepository('person-name');
	}


	public function getPeopleRepository(): Repository\PeopleRepository
	{
		return $this->getRepository('people');
	}


	public function getPhoneNumbersRepository(): Repository\PhoneNumbersRepository
	{
		return $this->getRepository('phone_numbers');
	}


	public function getQualificationKindsRepository(): Repository\QualificationKindsRepository
	{
		return $this->getRepository('qualification_kinds');
	}


	public function getQualificationsRepository(): Repository\QualificationsRepository
	{
		return $this->getRepository('qualifications');
	}


	public function getRolesRepository(): Repository\RolesRepository
	{
		return $this->getRepository('roles');
	}


	public function getSelfRegistrationsRepository(): Repository\SelfRegistrationsRepository
	{
		return $this->getRepository('self_registrations');
	}


	public function getSocialAccountsRepository(): Repository\SocialAccountsRepository
	{
		return $this->getRepository('social_accounts');
	}
}
