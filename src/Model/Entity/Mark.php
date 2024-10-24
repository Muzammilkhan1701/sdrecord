<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mark Entity
 *
 * @property int $mark_id
 * @property int|null $student_id
 * @property string $academic_year
 * @property string $rollno
 * @property string $class
 * @property int|null $term1_subject_1
 * @property int|null $term1_subject_1_periodic_test
 * @property int|null $term1_subject_1_subject_enrichment
 * @property int|null $term1_subject_1_multiple_assessment
 * @property int|null $term1_subject_1_portfolio
 * @property int|null $term1_subject_1_total
 * @property string|null $term1_subject_1_grade
 * @property int|null $term1_subject_2
 * @property int|null $term1_subject_2_periodic_test
 * @property int|null $term1_subject_2_subject_enrichment
 * @property int|null $term1_subject_2_multiple_assessment
 * @property int|null $term1_subject_2_portfolio
 * @property int|null $term1_subject_2_total
 * @property string|null $term1_subject_2_grade
 * @property int|null $term1_subject_3
 * @property int|null $term1_subject_3_periodic_test
 * @property int|null $term1_subject_3_subject_enrichment
 * @property int|null $term1_subject_3_multiple_assessment
 * @property int|null $term1_subject_3_portfolio
 * @property int|null $term1_subject_3_total
 * @property string|null $term1_subject_3_grade
 * @property int|null $term1_subject_4
 * @property int|null $term1_subject_4_periodic_test
 * @property int|null $term1_subject_4_subject_enrichment
 * @property int|null $term1_subject_4_multiple_assessment
 * @property int|null $term1_subject_4_portfolio
 * @property int|null $term1_subject_4_total
 * @property string|null $term1_subject_4_grade
 * @property int|null $term1_subject_5
 * @property int|null $term1_subject_5_periodic_test
 * @property int|null $term1_subject_5_subject_enrichment
 * @property int|null $term1_subject_5_multiple_assessment
 * @property int|null $term1_subject_5_portfolio
 * @property int|null $term1_subject_5_total
 * @property string|null $term1_subject_5_grade
 * @property int|null $term1_subject_6
 * @property int|null $term1_subject_6_periodic_test
 * @property int|null $term1_subject_6_subject_enrichment
 * @property int|null $term1_subject_6_multiple_assessment
 * @property int|null $term1_subject_6_portfolio
 * @property int|null $term1_subject_6_total
 * @property string|null $term1_subject_6_grade
 * @property int|null $term1_subject_7
 * @property int|null $term1_subject_7_periodic_test
 * @property int|null $term1_subject_7_subject_enrichment
 * @property int|null $term1_subject_7_multiple_assessment
 * @property int|null $term1_subject_7_portfolio
 * @property int|null $term1_subject_7_total
 * @property string|null $term1_subject_7_grade
 * @property int|null $term1_total
 * @property int|null $term2_subject_1
 * @property int|null $term2_subject_1_periodic_test
 * @property int|null $term2_subject_1_subject_enrichment
 * @property int|null $term2_subject_1_multiple_assessment
 * @property int|null $term2_subject_1_portfolio
 * @property int|null $term2_subject_1_total
 * @property string|null $term2_subject_1_grade
 * @property int|null $term2_subject_2
 * @property int|null $term2_subject_2_periodic_test
 * @property int|null $term2_subject_2_subject_enrichment
 * @property int|null $term2_subject_2_multiple_assessment
 * @property int|null $term2_subject_2_portfolio
 * @property int|null $term2_subject_2_total
 * @property string|null $term2_subject_2_grade
 * @property int|null $term2_subject_3
 * @property int|null $term2_subject_3_periodic_test
 * @property int|null $term2_subject_3_subject_enrichment
 * @property int|null $term2_subject_3_multiple_assessment
 * @property int|null $term2_subject_3_portfolio
 * @property int|null $term2_subject_3_total
 * @property string|null $term2_subject_3_grade
 * @property int|null $term2_subject_4
 * @property int|null $term2_subject_4_periodic_test
 * @property int|null $term2_subject_4_subject_enrichment
 * @property int|null $term2_subject_4_multiple_assessment
 * @property int|null $term2_subject_4_portfolio
 * @property int|null $term2_subject_4_total
 * @property string|null $term2_subject_4_grade
 * @property int|null $term2_subject_5
 * @property int|null $term2_subject_5_periodic_test
 * @property int|null $term2_subject_5_subject_enrichment
 * @property int|null $term2_subject_5_multiple_assessment
 * @property int|null $term2_subject_5_portfolio
 * @property int|null $term2_subject_5_total
 * @property string|null $term2_subject_5_grade
 * @property int|null $term2_subject_6
 * @property int|null $term2_subject_6_periodic_test
 * @property int|null $term2_subject_6_subject_enrichment
 * @property int|null $term2_subject_6_multiple_assessment
 * @property int|null $term2_subject_6_portfolio
 * @property int|null $term2_subject_6_total
 * @property string|null $term2_subject_6_grade
 * @property int|null $term2_subject_7
 * @property int|null $term2_subject_7_periodic_test
 * @property int|null $term2_subject_7_subject_enrichment
 * @property int|null $term2_subject_7_multiple_assessment
 * @property int|null $term2_subject_7_portfolio
 * @property int|null $term2_subject_7_total
 * @property string|null $term2_subject_7_grade
 * @property int|null $term1_subject_8
 * @property int|null $term1_subject_8_periodic_test
 * @property int|null $term1_subject_8_subject_enrichment
 * @property int|null $term1_subject_8_multiple_assessment
 * @property int|null $term1_subject_8_portfolio
 * @property int|null $term1_subject_8_total
 * @property string|null $term1_subject_8_grade
 * @property int|null $term2_subject_8
 * @property int|null $term2_subject_8_periodic_test
 * @property int|null $term2_subject_8_subject_enrichment
 * @property int|null $term2_subject_8_multiple_assessment
 * @property int|null $term2_subject_8_portfolio
 * @property int|null $term2_subject_8_total
 * @property string|null $term2_subject_8_grade
 * @property int|null $term1_subject_9
 * @property int|null $term1_subject_9_periodic_test
 * @property int|null $term1_subject_9_subject_enrichment
 * @property int|null $term1_subject_9_multiple_assessment
 * @property int|null $term1_subject_9_portfolio
 * @property int|null $term1_subject_9_total
 * @property string|null $term1_subject_9_grade
 * @property int|null $term2_subject_9
 * @property int|null $term2_subject_9_periodic_test
 * @property int|null $term2_subject_9_subject_enrichment
 * @property int|null $term2_subject_9_multiple_assessment
 * @property int|null $term2_subject_9_portfolio
 * @property int|null $term2_subject_9_total
 * @property string|null $term2_subject_9_grade
 * @property int|null $term2_total
 * @property int|null $term1_subject_1_ct
 * @property int|null $term1_subject_2_ct
 * @property int|null $term1_subject_3_ct
 * @property int|null $term1_subject_4_ct
 * @property int|null $term1_subject_5_ct
 * @property int|null $term1_subject_6_ct
 * @property int|null $term1_subject_7_ct
 * @property int|null $term1_subject_8_ct
 * @property int|null $term1_subject_9_ct
 * @property int|null $term2_subject_1_ct
 * @property int|null $term2_subject_2_ct
 * @property int|null $term2_subject_3_ct
 * @property int|null $term2_subject_4_ct
 * @property int|null $term2_subject_5_ct
 * @property int|null $term2_subject_6_ct
 * @property int|null $term2_subject_7_ct
 * @property int|null $term2_subject_8_ct
 * @property int|null $term2_subject_9_ct
 *
 * @property \App\Model\Entity\Student $student
 */
class Mark extends Entity
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
        'rollno' => true,
        'class' => true,
        'term1_subject_1' => true,
        'term1_subject_1_periodic_test' => true,
        'term1_subject_1_subject_enrichment' => true,
        'term1_subject_1_multiple_assessment' => true,
        'term1_subject_1_portfolio' => true,
        'term1_subject_1_total' => true,
        'term1_subject_1_grade' => true,
        'term1_subject_2' => true,
        'term1_subject_2_periodic_test' => true,
        'term1_subject_2_subject_enrichment' => true,
        'term1_subject_2_multiple_assessment' => true,
        'term1_subject_2_portfolio' => true,
        'term1_subject_2_total' => true,
        'term1_subject_2_grade' => true,
        'term1_subject_3' => true,
        'term1_subject_3_periodic_test' => true,
        'term1_subject_3_subject_enrichment' => true,
        'term1_subject_3_multiple_assessment' => true,
        'term1_subject_3_portfolio' => true,
        'term1_subject_3_total' => true,
        'term1_subject_3_grade' => true,
        'term1_subject_4' => true,
        'term1_subject_4_periodic_test' => true,
        'term1_subject_4_subject_enrichment' => true,
        'term1_subject_4_multiple_assessment' => true,
        'term1_subject_4_portfolio' => true,
        'term1_subject_4_total' => true,
        'term1_subject_4_grade' => true,
        'term1_subject_5' => true,
        'term1_subject_5_periodic_test' => true,
        'term1_subject_5_subject_enrichment' => true,
        'term1_subject_5_multiple_assessment' => true,
        'term1_subject_5_portfolio' => true,
        'term1_subject_5_total' => true,
        'term1_subject_5_grade' => true,
        'term1_subject_6' => true,
        'term1_subject_6_periodic_test' => true,
        'term1_subject_6_subject_enrichment' => true,
        'term1_subject_6_multiple_assessment' => true,
        'term1_subject_6_portfolio' => true,
        'term1_subject_6_total' => true,
        'term1_subject_6_grade' => true,
        'term1_subject_7' => true,
        'term1_subject_7_periodic_test' => true,
        'term1_subject_7_subject_enrichment' => true,
        'term1_subject_7_multiple_assessment' => true,
        'term1_subject_7_portfolio' => true,
        'term1_subject_7_total' => true,
        'term1_subject_7_grade' => true,
        'term1_total' => true,
        'term2_subject_1' => true,
        'term2_subject_1_periodic_test' => true,
        'term2_subject_1_subject_enrichment' => true,
        'term2_subject_1_multiple_assessment' => true,
        'term2_subject_1_portfolio' => true,
        'term2_subject_1_total' => true,
        'term2_subject_1_grade' => true,
        'term2_subject_2' => true,
        'term2_subject_2_periodic_test' => true,
        'term2_subject_2_subject_enrichment' => true,
        'term2_subject_2_multiple_assessment' => true,
        'term2_subject_2_portfolio' => true,
        'term2_subject_2_total' => true,
        'term2_subject_2_grade' => true,
        'term2_subject_3' => true,
        'term2_subject_3_periodic_test' => true,
        'term2_subject_3_subject_enrichment' => true,
        'term2_subject_3_multiple_assessment' => true,
        'term2_subject_3_portfolio' => true,
        'term2_subject_3_total' => true,
        'term2_subject_3_grade' => true,
        'term2_subject_4' => true,
        'term2_subject_4_periodic_test' => true,
        'term2_subject_4_subject_enrichment' => true,
        'term2_subject_4_multiple_assessment' => true,
        'term2_subject_4_portfolio' => true,
        'term2_subject_4_total' => true,
        'term2_subject_4_grade' => true,
        'term2_subject_5' => true,
        'term2_subject_5_periodic_test' => true,
        'term2_subject_5_subject_enrichment' => true,
        'term2_subject_5_multiple_assessment' => true,
        'term2_subject_5_portfolio' => true,
        'term2_subject_5_total' => true,
        'term2_subject_5_grade' => true,
        'term2_subject_6' => true,
        'term2_subject_6_periodic_test' => true,
        'term2_subject_6_subject_enrichment' => true,
        'term2_subject_6_multiple_assessment' => true,
        'term2_subject_6_portfolio' => true,
        'term2_subject_6_total' => true,
        'term2_subject_6_grade' => true,
        'term2_subject_7' => true,
        'term2_subject_7_periodic_test' => true,
        'term2_subject_7_subject_enrichment' => true,
        'term2_subject_7_multiple_assessment' => true,
        'term2_subject_7_portfolio' => true,
        'term2_subject_7_total' => true,
        'term2_subject_7_grade' => true,
        'term1_subject_8' => true,
        'term1_subject_8_periodic_test' => true,
        'term1_subject_8_subject_enrichment' => true,
        'term1_subject_8_multiple_assessment' => true,
        'term1_subject_8_portfolio' => true,
        'term1_subject_8_total' => true,
        'term1_subject_8_grade' => true,
        'term2_subject_8' => true,
        'term2_subject_8_periodic_test' => true,
        'term2_subject_8_subject_enrichment' => true,
        'term2_subject_8_multiple_assessment' => true,
        'term2_subject_8_portfolio' => true,
        'term2_subject_8_total' => true,
        'term2_subject_8_grade' => true,
        'term1_subject_9' => true,
        'term1_subject_9_periodic_test' => true,
        'term1_subject_9_subject_enrichment' => true,
        'term1_subject_9_multiple_assessment' => true,
        'term1_subject_9_portfolio' => true,
        'term1_subject_9_total' => true,
        'term1_subject_9_grade' => true,
        'term2_subject_9' => true,
        'term2_subject_9_periodic_test' => true,
        'term2_subject_9_subject_enrichment' => true,
        'term2_subject_9_multiple_assessment' => true,
        'term2_subject_9_portfolio' => true,
        'term2_subject_9_total' => true,
        'term2_subject_9_grade' => true,
        'term2_total' => true,
        'term1_subject_1_ct' => true,
        'term1_subject_2_ct' => true,
        'term1_subject_3_ct' => true,
        'term1_subject_4_ct' => true,
        'term1_subject_5_ct' => true,
        'term1_subject_6_ct' => true,
        'term1_subject_7_ct' => true,
        'term1_subject_8_ct' => true,
        'term1_subject_9_ct' => true,
        'term2_subject_1_ct' => true,
        'term2_subject_2_ct' => true,
        'term2_subject_3_ct' => true,
        'term2_subject_4_ct' => true,
        'term2_subject_5_ct' => true,
        'term2_subject_6_ct' => true,
        'term2_subject_7_ct' => true,
        'term2_subject_8_ct' => true,
        'term2_subject_9_ct' => true,
        'student' => true,
    ];
}
