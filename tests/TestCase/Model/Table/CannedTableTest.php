<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CannedTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CannedTable Test Case
 */
class CannedTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CannedTable
     */
    public $Canned;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Canned'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Canned') ? [] : ['className' => CannedTable::class];
        $this->Canned = TableRegistry::getTableLocator()->get('Canned', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Canned);

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
