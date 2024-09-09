<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExcellenceFixture
 */
class ExcellenceFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'excellence';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'student_id' => 1,
                'term1_work_education' => 'Lo',
                'term1_art_education' => 'Lo',
                'term1_physical_education' => 'Lo',
                'term1_discipline' => 'Lo',
                'term2_work_education' => 'Lo',
                'term2_art_education' => 'Lo',
                'term2_physical_education' => 'Lo',
                'term2_discipline' => 'Lo',
                'created' => '2024-09-09 09:41:14',
                'modified' => '2024-09-09 09:41:14',
            ],
        ];
        parent::init();
    }
}
