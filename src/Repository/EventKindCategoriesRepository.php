<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\EventKindCategories>
 */
class EventKindCategoriesRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/event_kind_categories';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\EventKindCategories';
}
