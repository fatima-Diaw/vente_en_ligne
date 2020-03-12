<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\produitt;

class produittApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_produitt()
    {
        $produitt = factory(produitt::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/produitts', $produitt
        );

        $this->assertApiResponse($produitt);
    }

    /**
     * @test
     */
    public function test_read_produitt()
    {
        $produitt = factory(produitt::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/produitts/'.$produitt->id
        );

        $this->assertApiResponse($produitt->toArray());
    }

    /**
     * @test
     */
    public function test_update_produitt()
    {
        $produitt = factory(produitt::class)->create();
        $editedproduitt = factory(produitt::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/produitts/'.$produitt->id,
            $editedproduitt
        );

        $this->assertApiResponse($editedproduitt);
    }

    /**
     * @test
     */
    public function test_delete_produitt()
    {
        $produitt = factory(produitt::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/produitts/'.$produitt->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/produitts/'.$produitt->id
        );

        $this->response->assertStatus(404);
    }
}
