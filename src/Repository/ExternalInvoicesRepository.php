<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\ExternalInvoices>
 */
class ExternalInvoicesRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/external_invoices';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\ExternalInvoices';
}
