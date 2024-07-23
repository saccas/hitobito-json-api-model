<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @implements \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\SocialAccounts>
 */
class SocialAccountsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/social_accounts';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\SocialAccounts';
}
