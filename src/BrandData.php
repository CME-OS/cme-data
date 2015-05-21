<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:56 PM
 */

namespace CmeData;

class BrandData extends Data
{
  /**
   * @var int $id
   */
  public $id;
  /**
   * @var string $brandName
   */
  public $brandName;
  /**
   * @var string $brandSenderEmail
   */
  public $brandSenderEmail;
  /**
   * @var string $brandSenderName
   */
  public $brandSenderName;
  /**
   * @var string $brandWebsiteUrl
   */
  public $brandWebsiteUrl;
  /**
   * @var string $brandDomainName
   */
  public $brandDomainName;
  /**
   * @var string $brandUnsubcribeUrl
   */
  public $brandUnsubscribeUrl;
  /**
   * @var string $brandLogo
   */
  public $brandLogo;
  /**
   * @var int $brandCreated - unix timestamp
   */
  public $brandCreated;
  /**
   * @var int $brandDeletedAt - unix timestamp
   */
  public $brandDeletedAt;

  public function getFields()
  {
    return [
      "id",
      "brand_name",
      "brand_sender_email",
      "brand_sender_name",
      "brand_website_url",
      "brand_domain_name",
      "brand_unsubscribe_url",
      "brand_logo",
      "brand_created",
      "brand_deleted_at"
    ];
  }
}
