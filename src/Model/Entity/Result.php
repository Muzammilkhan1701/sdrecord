<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Result Entity
 *
 * @property int $result_id
 * @property int|null $student_id
 * @property string|null $academic_year
 * @property string|null $term1_total_marks
 * @property string|null $term1_percentage
 * @property string|null $term1_grade
 * @property string|null $term2_total_marks
 * @property string|null $term2_percentage
 * @property string|null $term2_grade
 *
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\Mark $mark
 */
class Result extends Entity
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
        'term1_total_marks' => true,
        'term1_percentage' => true,
        'term1_grade' => true,
        'term2_total_marks' => true,
        'term2_percentage' => true,
        'term2_grade' => true,
        'student' => true,
        'mark' => true,
    ];
}
