<?php

namespace Codeforges\SpotRadar\SpotAuthServerBundle\Model;

use FOS\OAuthServerBundle\Document\RefreshToken as BaseRefreshToken;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class RefreshToken extends BaseRefreshToken
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Client")
     */
    protected $client;

    /**
     * @MongoDB\ReferenceOne(targetDocument="SpotApiBundle/Model/User")
     */
    protected $user;
}