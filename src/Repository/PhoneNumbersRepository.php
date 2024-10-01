<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\PhoneNumbers>
 */
class PhoneNumbersRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/phone_numbers';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\PhoneNumbers';
}
