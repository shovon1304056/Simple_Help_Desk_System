<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatagoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatagoriesTable Test Case
 */
class CatagoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CatagoriesTable
     */
    public $Catagories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Catagories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Catagories') ? [] : ['className' => CatagoriesTable::class];
        $this->Catagories = TableRegistry::getTableLocator()->get('Catagories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Catagories);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
