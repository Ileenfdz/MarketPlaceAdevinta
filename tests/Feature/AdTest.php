<?php

namespace Tests\Feature;

use App\Models\Ad;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_all_Ads()
    {
        $ad = Ad::factory(5)->create();

        $response = $this->get(route('index'), $ad->toArray());

        $response->assertStatus(200)
            ->assertViewIs('index')
            ->assertSeeText('Market place')
            ->assertSee($ad[0]->ad_name)
            ->assertViewHasAll(['ads']);
    }
}
