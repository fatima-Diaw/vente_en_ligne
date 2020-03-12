<?php namespace Tests\Repositories;

use App\Models\produitt;
use App\Repositories\produittRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class produittRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var produittRepository
     */
    protected $produittRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->produittRepo = \App::make(produittRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_produitt()
    {
        $produitt = factory(produitt::class)->make()->toArray();

        $createdproduitt = $this->produittRepo->create($produitt);

        $createdproduitt = $createdproduitt->toArray();
        $this->assertArrayHasKey('id', $createdproduitt);
        $this->assertNotNull($createdproduitt['id'], 'Created produitt must have id specified');
        $this->assertNotNull(produitt::find($createdproduitt['id']), 'produitt with given id must be in DB');
        $this->assertModelData($produitt, $createdproduitt);
    }

    /**
     * @test read
     */
    public function test_read_produitt()
    {
        $produitt = factory(produitt::class)->create();

        $dbproduitt = $this->produittRepo->find($produitt->id);

        $dbproduitt = $dbproduitt->toArray();
        $this->assertModelData($produitt->toArray(), $dbproduitt);
    }

    /**
     * @test update
     */
    public function test_update_produitt()
    {
        $produitt = factory(produitt::class)->create();
        $fakeproduitt = factory(produitt::class)->make()->toArray();

        $updatedproduitt = $this->produittRepo->update($fakeproduitt, $produitt->id);

        $this->assertModelData($fakeproduitt, $updatedproduitt->toArray());
        $dbproduitt = $this->produittRepo->find($produitt->id);
        $this->assertModelData($fakeproduitt, $dbproduitt->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_produitt()
    {
        $produitt = factory(produitt::class)->create();

        $resp = $this->produittRepo->delete($produitt->id);

        $this->assertTrue($resp);
        $this->assertNull(produitt::find($produitt->id), 'produitt should not exist in DB');
    }
}
