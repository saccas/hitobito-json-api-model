# Hitobito {json:api} Model

PHP model for the Hitobito API. This model was automatically generated on the basis of the OpenAPI specification and requires the abstract `saccas/json-api-model`.

## Installation

Extend your composer.json

```json
{
  "repositories": [
    {
      "type": "git",
      "url": "git@github.com:saccas/json-api-model.git"
    },
    {
      "type": "git",
      "url": "git@github.com:saccas/hitobito-json-api-model.git"
    }
  ]
}
```

Require this package:
```bash
composer require saccas/hitobito-json-api-model @dev
```

## Usage

```php
<?php
require __DIR__.'/vendor/autoload.php';

$baseUri = 'https://sac-cas.puzzle.ch';
$defaultHeaders = [
    'X-TOKEN' => '…',
];

$hitobitoApi = new \Saccas\HitobitoApi\HitobitoApi(new \GuzzleHttp\Client(), $baseUri, $defaultHeaders);
$coursesRepository = $hitobitoApi->getCoursesRepository();
$allCourses = $coursesRepository->getAll();
foreach($allCourses as $course) {
    echo $course->getId() . ' ' . $course->getName() . "\n";
    echo 'Location: ' . $course->getLocation() . "\n";
    echo 'Start: ' . $course->getDates()->get(0)->getStartAt()->format('Y-m-d') . "\n";
    $contact = $course->getContact();
    if (isset($contact)) {
        echo 'Contact: ' . $contact->getFirstName() . ' ' . $contact->getLastName() . "\n";
    }
    echo 'Accommodation: ' . $course->getAccommodation() . "\n";
    echo "\n";
}
```
