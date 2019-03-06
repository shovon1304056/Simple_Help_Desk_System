<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewticketsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewticketsTable Test Case
 */
class NewticketsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NewticketsTable
     */
    public $Newtickets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Newtickets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Newtickets') ? [] : ['className' => NewticketsTable::class];
        $this->Newtickets = TableRegistry::getTableLocator()->get('Newtickets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Newtickets);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
