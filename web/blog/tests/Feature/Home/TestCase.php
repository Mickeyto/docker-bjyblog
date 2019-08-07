<?php

namespace Tests\Feature\Home;

abstract class TestCase extends \Tests\Feature\TestCase
{
    protected function UserGet($uri, array $headers = [])
    {
        return $this->loginByUserId(static::SOCIALITE_USER_ID, 'socialite')->get($this->urlPrefix . $uri, $headers);
    }

    protected function UserPost($uri, array $data = [], array $headers = [])
    {
        return $this->loginByUserId(static::SOCIALITE_USER_ID, 'socialite')->post($this->urlPrefix . $uri, $data, $headers);
    }
}
