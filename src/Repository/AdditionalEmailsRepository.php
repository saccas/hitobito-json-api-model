<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\AdditionalEmails>
 */
class AdditionalEmailsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/additional_emails';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\AdditionalEmails';
}
