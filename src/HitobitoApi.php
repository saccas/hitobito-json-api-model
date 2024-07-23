<?php

namespace Saccas\HitobitoApi;

class HitobitoApi extends \Saccas\JsonApiModel\JsonApiManager
{
	public array $schemaRepositoryClassMap = ['additional_emails' => Repository\AdditionalEmailsRepository::class, 'courses' => Repository\CoursesRepository::class, 'dates' => Repository\DatesRepository::class, 'event_kind_categories' => Repository\EventKindCategoriesRepository::class, 'event_kinds' => Repository\EventKindsRepository::class, 'event_levels' => Repository\EventLevelsRepository::class, 'events' => Repository\EventsRepository::class, 'groups' => Repository\GroupsRepository::class, 'invoice_items' => Repository\InvoiceItemsRepository::class, 'invoices' => Repository\InvoicesRepository::class, 'person-name' => Repository\PersonNameRepository::class, 'people' => Repository\PeopleRepository::class, 'phone_numbers' => Repository\PhoneNumbersRepository::class, 'roles' => Repository\RolesRepository::class, 'social_accounts' => Repository\SocialAccountsRepository::class, ];


	public function getAdditionalEmailsRepository(): Repository\AdditionalEmailsRepository
	{
		return $this->getRepository('additional_emails');
	}


	public function getCoursesRepository(): Repository\CoursesRepository
	{
		return $this->getRepository('courses');
	}


	public function getDatesRepository(): Repository\DatesRepository
	{
		return $this->getRepository('dates');
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


	public function getEventsRepository(): Repository\EventsRepository
	{
		return $this->getRepository('events');
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


	public function getRolesRepository(): Repository\RolesRepository
	{
		return $this->getRepository('roles');
	}


	public function getSocialAccountsRepository(): Repository\SocialAccountsRepository
	{
		return $this->getRepository('social_accounts');
	}
}
