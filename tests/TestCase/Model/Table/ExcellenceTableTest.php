<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExcellenceTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExcellenceTable Test Case
 */
class ExcellenceTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExcellenceTable
     */
    protected $Excellence;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Excellence',
        'app.Students',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Excellence') ? [] : ['className' => ExcellenceTable::class];
        $this->Excellence = $this->getTableLocator()->get('Excellence', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Excellence);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExcellenceTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ExcellenceTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
