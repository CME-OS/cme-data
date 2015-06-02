<?php

namespace CmeData\Validation;

use Symfony\Component\Validator\Constraints as Constraint;

class DataConstraints
{
  public static function get(array $keys)
  {
    $constraints = [
      'email'               => [
        new Constraint\Email(),
        new Constraint\NotBlank()
      ],
      "id"                  => [
        new Constraint\Type(['type' => 'numeric']),
        new Constraint\GreaterThan(['value' => 0])
      ],
      'campaignId'          => [
        new Constraint\Type(['type' => 'numeric']),
        new Constraint\GreaterThan(['value' => 0])
      ],
      "listId"              => [
        new Constraint\Type(['type' => 'numeric']),
        new Constraint\GreaterThan(['value' => 0])
      ],
      "brandId"             => [
        new Constraint\Type(['type' => 'numeric']),
        new Constraint\GreaterThan(['value' => 0])
      ],
      'time'                => new Constraint\Type(['type' => 'numeric']),
      "brandName"           => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "brandSenderEmail"    => [
        new Constraint\Email(),
        new Constraint\NotBlank()
      ],
      "brandSenderName"     => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "brandWebsiteUrl"     => new Constraint\Type(['type' => 'string']),
      "brandDomainName"     => [new Constraint\Type(['type' => 'string'])],
      "brandUnsubscribeUrl" => new Constraint\Url(),
      "brandLogo"           => new Constraint\Url(),
      "brandCreated"        => new Constraint\Type(['type' => 'numeric']),
      "brandDeletedAt"      => [new Constraint\Type(['type' => 'numeric'])],
      "name"                => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "subject"             => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "from"                => [
        new Constraint\Email(),
        new Constraint\NotBlank()
      ],
      "htmlContent"         => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "textContent"         => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\Null()
      ],
      "sendTime"            => [
        new Constraint\Type(
          [
            'type'    => 'numeric',
            'message' => 'This value should be a valid date time'
          ]
        ),
        new Constraint\GreaterThan(
          ['value' => 0, 'message' => 'This value should be a valid date time']
        )
      ],
      "sendPriority"        => [new Constraint\Type(['type' => 'numeric'])],
      "status"              => [new Constraint\Type(['type' => 'string'])],
      "type"                => [new Constraint\Type(['type' => 'string'])],
      "frequency"           => [new Constraint\Type(['type' => 'numeric'])],
      "filters"             => [new Constraint\Type(['type' => 'array'])],
      "tested"              => [new Constraint\Type(['type' => 'numeric'])],
      "previewed"           => [new Constraint\Type(['type' => 'numeric'])],
      "smtpProviderId"      => [
        new Constraint\Type(['type' => 'numeric']),
        new Constraint\GreaterThan(['value' => -1])
      ],
      "created"             => [
        new Constraint\Type(['type' => 'numeric']),
        new Constraint\GreaterThan(['value' => 0])
      ],
      "deletedAt"           => [new Constraint\Type(['type' => 'numeric'])],
      "eventId"             => [
        new Constraint\Type(['type' => 'numeric']),
        new Constraint\GreaterThan(['value' => 0])
      ],
      "subscriberId"        => [
        new Constraint\Type(['type' => 'numeric']),
        new Constraint\GreaterThan(['value' => -1])
      ],
      "eventType"           => [new Constraint\Type(['type' => 'string'])],
      "reference"           => [new Constraint\Type(['type' => 'string'])],
      "lockedBy"            => [new Constraint\Type(['type' => 'string'])],
      "processed"           => [
        new Constraint\Range(
          ['min' => 0, 'max' => 1]
        )
      ],
      "host"                => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "username"            => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "port"                => [new Constraint\Type(['type' => 'numeric'])],
      "dbDriver"            => [new Constraint\Type(['type' => 'string'])],
      "dbHost",
      "dbUsername"          => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "dbPassword"          => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\Blank()
      ],
      "dbName"              => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "dbCharset"           => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\Null()
      ],
      "dbCollation"         => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\Null()
      ],
      "dbPrefix"            => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "cacheDriver"         => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\Null()
      ],
      "cachePath"           => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\Null()
      ],
      "cachePrefix"         => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\Null()
      ],
      "cmeHost"             => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "description"         => [new Constraint\Type(['type' => 'string'])],
      "endpoint"            => [new Constraint\Url()],
      "refreshInterval"     => [new Constraint\Type(['type' => 'numeric'])],
      "lastRefreshTime"     => [new Constraint\Type(['type' => 'numeric'])],
      "_size"               => [new Constraint\Type(['type' => 'numeric'])],
      "source"              => [new Constraint\Type(['type' => 'string'])],
      "fromEmail"           => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "fromName"            => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "to"                  => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "message"             => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "recipient"           => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "start"               => [
        new Constraint\Type(['type' => 'numeric']),
        new Constraint\GreaterThan(['value' => 0])
      ],
      "end"                 => [
        new Constraint\Type(['type' => 'numeric']),
        new Constraint\GreaterThan(['value' => 0])
      ],
      "testSubscriber"      => [new Constraint\Type(['type' => 'numeric'])],
      "dateCreated"         => [new Constraint\Type(['type' => 'numeric'])],
      "content"             => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "screenshot"          => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "password"            => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "active"              => [new Constraint\Type(['type' => 'numeric'])],
      "rememberToken"       => [
        new Constraint\Type(['type' => 'string']),
        new Constraint\NotBlank()
      ],
      "createdAt"           => new Constraint\DateTime(),
      "updatedAt"           => new Constraint\DateTime(),
    ];

    $return = [];
    foreach($keys as $key)
    {
      $key = camel_case($key);
      if(isset($constraints[$key]))
      {
        $return[snake_case($key)] = $constraints[$key];
      }
    }

    return $return;
  }
}
