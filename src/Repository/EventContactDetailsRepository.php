<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\EventContactDetails>
 */
class EventContactDetailsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/event-contact-details';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\EventContactDetails';
}
