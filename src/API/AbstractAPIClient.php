<?php

namespace Inserve\MetabaseAPI\API;

use Inserve\MetabaseAPI\APIClient;

/**
 *
 */
abstract class AbstractAPIClient
{
    /**
     * @param APIClient $apiClient
     */
    public function __construct(protected APIClient $apiClient)
    {
    }
}
