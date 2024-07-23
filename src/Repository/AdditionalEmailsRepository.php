<?php

namespace Saccas\HitobitoApi\Repository;

class AdditionalEmailsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/additional_emails';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\AdditionalEmails';
}
