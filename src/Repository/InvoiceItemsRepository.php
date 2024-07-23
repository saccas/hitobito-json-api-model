<?php

namespace Saccas\HitobitoApi\Repository;

class InvoiceItemsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/invoice_items';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\InvoiceItems';
}
