<?php

namespace Saccas\HitobitoApi\Repository;

class InvoicesRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/invoices';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\Invoices';
}
