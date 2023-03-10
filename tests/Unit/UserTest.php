<?php

namespace Tests\Unit;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use WithFaker;

    public $user;
    public $profile;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->user = User::factory()->create([
            'name' => 'joanne'
        ]);

        $this->assertEquals('joanne', $this->user->name);
    }

    /** @test */
    public function test_user_can_be_created()
    {
        $this->assertEquals('joanne', $this->user->name);
    }

    /** @test */
    public function user_can_create_a_profile()
    {
        $this->profile = Profile::factory()->user($this->user->getKey())->create([
            'user_name' => $userName = 'new user profile'
        ]);

        $this->assertSame($userName, $this->user->profile()->first()->user_name);
    }
}
