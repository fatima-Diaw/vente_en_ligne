<?php namespace Tests\Repositories;

use App\Models\vente;
use App\Repositories\venteRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class venteRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var venteRepository
     */
    protected $venteRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->venteRepo = \App::make(venteRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_vente()
    {
        $vente = factory(vente::class)->make()->toArray();

        $createdvente = $this->venteRepo->create($vente);

        $createdvente = $createdvente->toArray();
        $this->assertArrayHasKey('id', $createdvente);
        $this->assertNotNull($createdvente['id'], 'Created vente must have id specified');
        $this->assertNotNull(vente::find($createdvente['id']), 'vente with given id must be in DB');
        $this->assertModelData($vente, $createdvente);
    }

    /**
     * @test read
     */
    public function test_read_vente()
    {
        $vente = factory(vente::class)->create();

        $dbvente = $this->venteRepo->find($vente->id);

        $dbvente = $dbvente->toArray();
        $this->assertModelData($vente->toArray(), $dbvente);
    }

    /**
     * @test update
     */
    public function test_update_vente()
    {
        $vente = factory(vente::class)->create();
        $fakevente = factory(vente::class)->make()->toArray();

        $updatedvente = $this->venteRepo->update($fakevente, $vente->id);

        $this->assertModelData($fakevente, $updatedvente->toArray());
        $dbvente = $this->venteRepo->find($vente->id);
        $this->assertModelData($fakevente, $dbvente->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_vente()
    {
        $vente = factory(vente::class)->create();

        $resp = $this->venteRepo->delete($vente->id);

        $this->assertTrue($resp);
        $this->assertNull(vente::find($vente->id), 'vente should not exist in DB');
    }
}
