<?php

namespace Saccas\HitobitoApi\Repository;

class SocialAccountsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/social_accounts';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\SocialAccounts';
}
