<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReportTest extends TestCase
{
    /**
     * @test
     */
    public function api_customers_get_access_able()
    {
        $response = $this->get('api/customers');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customers_post_access_able()
    {
        $response = $this->post('api/customers');
        $response->assertStatus(200);
    }
}
