<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\SelfRegistrations>
 */
class SelfRegistrationsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/self_registrations';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\SelfRegistrations';
}
