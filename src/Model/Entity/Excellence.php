<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Excellence Entity
 *
 * @property int $id
 * @property int|null $student_id
 * @property string|null $academic_year
 * @property string|null $class
 * @property string|null $term1_work_education
 * @property string|null $term1_art_education
 * @property string|null $term1_physical_education
 * @property string|null $term1_discipline
 * @property string|null $term2_work_education
 * @property string|null $term2_art_education
 * @property string|null $term2_physical_education
 * @property string|null $term2_discipline
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Student $student
 */
class Excellence extends Entity
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
        'student_id' => true,
        'academic_year' => true,
        'class' => true,
        'term1_work_education' => true,
        'term1_art_education' => true,
        'term1_physical_education' => true,
        'term1_discipline' => true,
        'term2_work_education' => true,
        'term2_art_education' => true,
        'term2_physical_education' => true,
        'term2_discipline' => true,
        'created' => true,
        'modified' => true,
        'student' => true,
    ];
}
