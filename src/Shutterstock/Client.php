<?php

/**
 * @file
 */

namespace Shutterstock\Main;

use Shutterstock\Main\Core\ShutterstockConstants;
use Shutterstock\Main\Http\ShutterstockRequest;

class Client {

  protected $baseUrl;
  protected $apiVersion;
  protected $accessToken;

  public function __construct($token, $values = array()) {
    $this->baseUrl = ShutterstockConstants::REST_API_ENDPOINT;
    $this->apiVersion = ShutterstockConstants::REST_API_VERSION;
    $this->accessToken = $token;
  }

  public function createRequest($requestType, $endpoint) {
    return new ShutterstockRequest(
      $requestType,
      $endpoint,
      $this->accessToken,
      $this->baseUrl,
      $this->apiVersion
    );
  }

}
