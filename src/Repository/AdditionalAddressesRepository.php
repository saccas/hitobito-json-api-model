<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\AdditionalAddresses>
 */
class AdditionalAddressesRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/additional_addresses';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\AdditionalAddresses';
}
