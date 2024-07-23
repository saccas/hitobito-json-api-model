<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @implements \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\InvoiceItems>
 */
class InvoiceItemsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/invoice_items';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\InvoiceItems';
}
