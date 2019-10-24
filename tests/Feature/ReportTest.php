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
    public function is_able_GET_access_api_customers()
    {
        // 実行部分を記述
        $response = $this->get('api/customers');
        $response->assertStatus(200);
    }
}
