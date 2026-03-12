<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\MailingLists>
 */
class MailingListsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/mailing_lists';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\MailingLists';
}
