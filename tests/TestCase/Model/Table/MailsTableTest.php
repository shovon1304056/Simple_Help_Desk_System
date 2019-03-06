<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MailsTable Test Case
 */
class MailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MailsTable
     */
    public $Mails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mails'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mails') ? [] : ['className' => MailsTable::class];
        $this->Mails = TableRegistry::getTableLocator()->get('Mails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mails);

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
