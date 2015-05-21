<?php
/**
 * @author  oke.ugwu
 */
include_once 'vendor/autoload.php';

use CmeData\BrandData;

$b = new BrandData();
$b->brandName = "Nike";
$b->id = 1;
$b->brandSenderEmail = "test@nike.com";
$b->brandWebsiteUrl = "http://www.nike.com";

var_dump($b->toArray());

$b = [];
$b['id'] = 1;
$b['brand_name'] = "Nike";
$b['brand_sender_email'] = "text@nike.com";
$b['brand_website_url'] = "http://www.nike.com";

$data = BrandData::hydrate($b);
var_dump($data);
