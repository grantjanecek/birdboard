<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Signs in a user
     * @param User|null $user
     * @return User
     */
    protected function signIn(User $user = null)
    {
        $user = $user ?: factory(User::class)->create();
        $this->actingAs($user);

        return $user;
    }
}
