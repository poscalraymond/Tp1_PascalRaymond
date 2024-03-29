<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParentsTable Test Case
 */
class ParentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ParentsTable
     */
    public $Parents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Parents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Parents') ? [] : ['className' => ParentsTable::class];
        $this->Parents = TableRegistry::getTableLocator()->get('Parents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Parents);

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
