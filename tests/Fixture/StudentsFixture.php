<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsFixture
 */
class StudentsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'student_id' => 1,
                'Admission_no' => 'Lorem ips',
                'name' => 'Lorem ipsum dolor sit amet',
                'mother_name' => 'Lorem ipsum dolor sit amet',
                'dob' => '2024-10-26',
                'class' => 'Lor',
                'section' => 'Lorem ipsum dolor sit amet',
                'admission_year' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
