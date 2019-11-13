<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReportTest extends TestCase
{
    use RefreshDatabase; // ここでマイグレーション

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed', ['--class' => 'TestDataSeeder']);
    }

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

    /**
     * @test
     */
    public function api_customers_customer_id_get_access_able()
    {
        $response = $this->get('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customers_customer_id_post_access_able()
    {
        $response = $this->post('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customers_customer_id_put_access_able()
    {
        $response = $this->put('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customers_customer_id_delete_access_able()
    {
        $response = $this->delete('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reports_get_access_able()
    {
        $response = $this->get('api/reports');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reports_post_access_able()
    {
        $response = $this->post('api/reports');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reports_report_id_get_access_able()
    {
        $response = $this->get('api/reports/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reports_report_id_post_access_able()
    {
        $response = $this->post('api/reports/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reports_report_id_put_access_able()
    {
        $response = $this->put('api/reports/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reports_report_id_delete_access_able()
    {
        $response = $this->delete('api/reports/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customer_returns_JSON_if_GET()
    {
        $response = $this->get('api/customers');
        $this->assertThat($response->content(), $this->isJson());
    }


}
