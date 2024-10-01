<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\Invoices>
 */
class InvoicesRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/invoices';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\Invoices';
}
