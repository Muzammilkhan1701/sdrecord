<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $student_id
 * @property string $Admission_no
 * @property string $name
 * @property string $mother_name
 * @property \Cake\I18n\Date $dob
 * @property string $section
 * @property string $admission_year
 *
 * @property \App\Model\Entity\Excellence[] $excellence
 */
class Student extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'Admission_no' => true,
        'name' => true,
        'mother_name' => true,
        'dob' => true,
        'section' => true,
        'admission_year' => true,
        'excellence' => true,
    ];
}
