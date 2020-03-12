<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\vente;

class venteApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_vente()
    {
        $vente = factory(vente::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/ventes', $vente
        );

        $this->assertApiResponse($vente);
    }

    /**
     * @test
     */
    public function test_read_vente()
    {
        $vente = factory(vente::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/ventes/'.$vente->id
        );

        $this->assertApiResponse($vente->toArray());
    }

    /**
     * @test
     */
    public function test_update_vente()
    {
        $vente = factory(vente::class)->create();
        $editedvente = factory(vente::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/ventes/'.$vente->id,
            $editedvente
        );

        $this->assertApiResponse($editedvente);
    }

    /**
     * @test
     */
    public function test_delete_vente()
    {
        $vente = factory(vente::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/ventes/'.$vente->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/ventes/'.$vente->id
        );

        $this->response->assertStatus(404);
    }
}
