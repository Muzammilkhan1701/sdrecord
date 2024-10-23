<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Mark> $marks
 */
?>
<div class="marks index content">
    <?= $this->Html->link(__('New Mark'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Marks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('mark_id') ?></th>
                    <th><?= $this->Paginator->sort('student_id') ?></th>
                    <th><?= $this->Paginator->sort('academic_year') ?></th>
                    <th><?= $this->Paginator->sort('rollno') ?></th>
                    <th><?= $this->Paginator->sort('class') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_1') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_1_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_1_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_1_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_1_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_1_total') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_1_grade') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_2') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_2_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_2_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_2_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_2_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_2_total') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_2_grade') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_3') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_3_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_3_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_3_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_3_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_3_total') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_3_grade') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_4') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_4_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_4_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_4_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_4_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_4_total') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_4_grade') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_5') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_5_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_5_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_5_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_5_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_5_total') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_5_grade') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_6') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_6_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_6_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_6_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_6_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_6_total') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_6_grade') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_7') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_7_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_7_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_7_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_7_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_7_total') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_7_grade') ?></th>
                    <th><?= $this->Paginator->sort('term1_total') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_1') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_1_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_1_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_1_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_1_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_1_total') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_1_grade') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_2') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_2_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_2_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_2_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_2_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_2_total') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_2_grade') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_3') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_3_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_3_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_3_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_3_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_3_total') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_3_grade') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_4') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_4_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_4_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_4_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_4_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_4_total') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_4_grade') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_5') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_5_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_5_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_5_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_5_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_5_total') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_5_grade') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_6') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_6_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_6_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_6_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_6_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_6_total') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_6_grade') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_7') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_7_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_7_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_7_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_7_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_7_total') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_7_grade') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_8') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_8_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_8_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_8_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_8_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_8_total') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_8_grade') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_8') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_8_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_8_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_8_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_8_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_8_total') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_8_grade') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_9') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_9_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_9_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_9_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_9_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_9_total') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_9_grade') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_9') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_9_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_9_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_9_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_9_portfolio') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_9_total') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_9_grade') ?></th>
                    <th><?= $this->Paginator->sort('term2_total') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_1_ct') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_2_ct') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_3_ct') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_4_ct') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_5_ct') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_6_ct') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_7_ct') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_8_ct') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_9_ct') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_1_ct') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_2_ct') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_3_ct') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_4_ct') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_5_ct') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_6_ct') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_7_ct') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_8_ct') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_9_ct') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marks as $mark): ?>
                <tr>
                    <td><?= $this->Number->format($mark->mark_id) ?></td>
                    <td><?= $mark->hasValue('student') ? $this->Html->link($mark->student->name, ['controller' => 'Students', 'action' => 'view', $mark->student->student_id]) : '' ?></td>
                    <td><?= h($mark->academic_year) ?></td>
                    <td><?= h($mark->rollno) ?></td>
                    <td><?= h($mark->class) ?></td>
                    <td><?= $mark->term1_subject_1 === null ? '' : $this->Number->format($mark->term1_subject_1) ?></td>
                    <td><?= $mark->term1_subject_1_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_1_periodic_test) ?></td>
                    <td><?= $mark->term1_subject_1_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_1_subject_enrichment) ?></td>
                    <td><?= $mark->term1_subject_1_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_1_multiple_assessment) ?></td>
                    <td><?= $mark->term1_subject_1_portfolio === null ? '' : $this->Number->format($mark->term1_subject_1_portfolio) ?></td>
                    <td><?= $mark->term1_subject_1_total === null ? '' : $this->Number->format($mark->term1_subject_1_total) ?></td>
                    <td><?= h($mark->term1_subject_1_grade) ?></td>
                    <td><?= $mark->term1_subject_2 === null ? '' : $this->Number->format($mark->term1_subject_2) ?></td>
                    <td><?= $mark->term1_subject_2_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_2_periodic_test) ?></td>
                    <td><?= $mark->term1_subject_2_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_2_subject_enrichment) ?></td>
                    <td><?= $mark->term1_subject_2_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_2_multiple_assessment) ?></td>
                    <td><?= $mark->term1_subject_2_portfolio === null ? '' : $this->Number->format($mark->term1_subject_2_portfolio) ?></td>
                    <td><?= $mark->term1_subject_2_total === null ? '' : $this->Number->format($mark->term1_subject_2_total) ?></td>
                    <td><?= h($mark->term1_subject_2_grade) ?></td>
                    <td><?= $mark->term1_subject_3 === null ? '' : $this->Number->format($mark->term1_subject_3) ?></td>
                    <td><?= $mark->term1_subject_3_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_3_periodic_test) ?></td>
                    <td><?= $mark->term1_subject_3_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_3_subject_enrichment) ?></td>
                    <td><?= $mark->term1_subject_3_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_3_multiple_assessment) ?></td>
                    <td><?= $mark->term1_subject_3_portfolio === null ? '' : $this->Number->format($mark->term1_subject_3_portfolio) ?></td>
                    <td><?= $mark->term1_subject_3_total === null ? '' : $this->Number->format($mark->term1_subject_3_total) ?></td>
                    <td><?= h($mark->term1_subject_3_grade) ?></td>
                    <td><?= $mark->term1_subject_4 === null ? '' : $this->Number->format($mark->term1_subject_4) ?></td>
                    <td><?= $mark->term1_subject_4_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_4_periodic_test) ?></td>
                    <td><?= $mark->term1_subject_4_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_4_subject_enrichment) ?></td>
                    <td><?= $mark->term1_subject_4_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_4_multiple_assessment) ?></td>
                    <td><?= $mark->term1_subject_4_portfolio === null ? '' : $this->Number->format($mark->term1_subject_4_portfolio) ?></td>
                    <td><?= $mark->term1_subject_4_total === null ? '' : $this->Number->format($mark->term1_subject_4_total) ?></td>
                    <td><?= h($mark->term1_subject_4_grade) ?></td>
                    <td><?= $mark->term1_subject_5 === null ? '' : $this->Number->format($mark->term1_subject_5) ?></td>
                    <td><?= $mark->term1_subject_5_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_5_periodic_test) ?></td>
                    <td><?= $mark->term1_subject_5_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_5_subject_enrichment) ?></td>
                    <td><?= $mark->term1_subject_5_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_5_multiple_assessment) ?></td>
                    <td><?= $mark->term1_subject_5_portfolio === null ? '' : $this->Number->format($mark->term1_subject_5_portfolio) ?></td>
                    <td><?= $mark->term1_subject_5_total === null ? '' : $this->Number->format($mark->term1_subject_5_total) ?></td>
                    <td><?= h($mark->term1_subject_5_grade) ?></td>
                    <td><?= $mark->term1_subject_6 === null ? '' : $this->Number->format($mark->term1_subject_6) ?></td>
                    <td><?= $mark->term1_subject_6_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_6_periodic_test) ?></td>
                    <td><?= $mark->term1_subject_6_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_6_subject_enrichment) ?></td>
                    <td><?= $mark->term1_subject_6_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_6_multiple_assessment) ?></td>
                    <td><?= $mark->term1_subject_6_portfolio === null ? '' : $this->Number->format($mark->term1_subject_6_portfolio) ?></td>
                    <td><?= $mark->term1_subject_6_total === null ? '' : $this->Number->format($mark->term1_subject_6_total) ?></td>
                    <td><?= h($mark->term1_subject_6_grade) ?></td>
                    <td><?= $mark->term1_subject_7 === null ? '' : $this->Number->format($mark->term1_subject_7) ?></td>
                    <td><?= $mark->term1_subject_7_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_7_periodic_test) ?></td>
                    <td><?= $mark->term1_subject_7_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_7_subject_enrichment) ?></td>
                    <td><?= $mark->term1_subject_7_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_7_multiple_assessment) ?></td>
                    <td><?= $mark->term1_subject_7_portfolio === null ? '' : $this->Number->format($mark->term1_subject_7_portfolio) ?></td>
                    <td><?= $mark->term1_subject_7_total === null ? '' : $this->Number->format($mark->term1_subject_7_total) ?></td>
                    <td><?= h($mark->term1_subject_7_grade) ?></td>
                    <td><?= $mark->term1_total === null ? '' : $this->Number->format($mark->term1_total) ?></td>
                    <td><?= $mark->term2_subject_1 === null ? '' : $this->Number->format($mark->term2_subject_1) ?></td>
                    <td><?= $mark->term2_subject_1_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_1_periodic_test) ?></td>
                    <td><?= $mark->term2_subject_1_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_1_subject_enrichment) ?></td>
                    <td><?= $mark->term2_subject_1_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_1_multiple_assessment) ?></td>
                    <td><?= $mark->term2_subject_1_portfolio === null ? '' : $this->Number->format($mark->term2_subject_1_portfolio) ?></td>
                    <td><?= $mark->term2_subject_1_total === null ? '' : $this->Number->format($mark->term2_subject_1_total) ?></td>
                    <td><?= h($mark->term2_subject_1_grade) ?></td>
                    <td><?= $mark->term2_subject_2 === null ? '' : $this->Number->format($mark->term2_subject_2) ?></td>
                    <td><?= $mark->term2_subject_2_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_2_periodic_test) ?></td>
                    <td><?= $mark->term2_subject_2_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_2_subject_enrichment) ?></td>
                    <td><?= $mark->term2_subject_2_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_2_multiple_assessment) ?></td>
                    <td><?= $mark->term2_subject_2_portfolio === null ? '' : $this->Number->format($mark->term2_subject_2_portfolio) ?></td>
                    <td><?= $mark->term2_subject_2_total === null ? '' : $this->Number->format($mark->term2_subject_2_total) ?></td>
                    <td><?= h($mark->term2_subject_2_grade) ?></td>
                    <td><?= $mark->term2_subject_3 === null ? '' : $this->Number->format($mark->term2_subject_3) ?></td>
                    <td><?= $mark->term2_subject_3_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_3_periodic_test) ?></td>
                    <td><?= $mark->term2_subject_3_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_3_subject_enrichment) ?></td>
                    <td><?= $mark->term2_subject_3_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_3_multiple_assessment) ?></td>
                    <td><?= $mark->term2_subject_3_portfolio === null ? '' : $this->Number->format($mark->term2_subject_3_portfolio) ?></td>
                    <td><?= $mark->term2_subject_3_total === null ? '' : $this->Number->format($mark->term2_subject_3_total) ?></td>
                    <td><?= h($mark->term2_subject_3_grade) ?></td>
                    <td><?= $mark->term2_subject_4 === null ? '' : $this->Number->format($mark->term2_subject_4) ?></td>
                    <td><?= $mark->term2_subject_4_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_4_periodic_test) ?></td>
                    <td><?= $mark->term2_subject_4_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_4_subject_enrichment) ?></td>
                    <td><?= $mark->term2_subject_4_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_4_multiple_assessment) ?></td>
                    <td><?= $mark->term2_subject_4_portfolio === null ? '' : $this->Number->format($mark->term2_subject_4_portfolio) ?></td>
                    <td><?= $mark->term2_subject_4_total === null ? '' : $this->Number->format($mark->term2_subject_4_total) ?></td>
                    <td><?= h($mark->term2_subject_4_grade) ?></td>
                    <td><?= $mark->term2_subject_5 === null ? '' : $this->Number->format($mark->term2_subject_5) ?></td>
                    <td><?= $mark->term2_subject_5_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_5_periodic_test) ?></td>
                    <td><?= $mark->term2_subject_5_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_5_subject_enrichment) ?></td>
                    <td><?= $mark->term2_subject_5_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_5_multiple_assessment) ?></td>
                    <td><?= $mark->term2_subject_5_portfolio === null ? '' : $this->Number->format($mark->term2_subject_5_portfolio) ?></td>
                    <td><?= $mark->term2_subject_5_total === null ? '' : $this->Number->format($mark->term2_subject_5_total) ?></td>
                    <td><?= h($mark->term2_subject_5_grade) ?></td>
                    <td><?= $mark->term2_subject_6 === null ? '' : $this->Number->format($mark->term2_subject_6) ?></td>
                    <td><?= $mark->term2_subject_6_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_6_periodic_test) ?></td>
                    <td><?= $mark->term2_subject_6_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_6_subject_enrichment) ?></td>
                    <td><?= $mark->term2_subject_6_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_6_multiple_assessment) ?></td>
                    <td><?= $mark->term2_subject_6_portfolio === null ? '' : $this->Number->format($mark->term2_subject_6_portfolio) ?></td>
                    <td><?= $mark->term2_subject_6_total === null ? '' : $this->Number->format($mark->term2_subject_6_total) ?></td>
                    <td><?= h($mark->term2_subject_6_grade) ?></td>
                    <td><?= $mark->term2_subject_7 === null ? '' : $this->Number->format($mark->term2_subject_7) ?></td>
                    <td><?= $mark->term2_subject_7_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_7_periodic_test) ?></td>
                    <td><?= $mark->term2_subject_7_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_7_subject_enrichment) ?></td>
                    <td><?= $mark->term2_subject_7_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_7_multiple_assessment) ?></td>
                    <td><?= $mark->term2_subject_7_portfolio === null ? '' : $this->Number->format($mark->term2_subject_7_portfolio) ?></td>
                    <td><?= $mark->term2_subject_7_total === null ? '' : $this->Number->format($mark->term2_subject_7_total) ?></td>
                    <td><?= h($mark->term2_subject_7_grade) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_8) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_8_periodic_test) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_8_subject_enrichment) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_8_multiple_assessment) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_8_portfolio) ?></td>
                    <td><?= $mark->term1_subject_8_total === null ? '' : $this->Number->format($mark->term1_subject_8_total) ?></td>
                    <td><?= $mark->term1_subject_8_grade === null ? '' : $this->Number->format($mark->term1_subject_8_grade) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_8) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_8_periodic_test) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_8_subject_enrichment) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_8_multiple_assessment) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_8_portfolio) ?></td>
                    <td><?= $mark->term2_subject_8_total === null ? '' : $this->Number->format($mark->term2_subject_8_total) ?></td>
                    <td><?= $mark->term2_subject_8_grade === null ? '' : $this->Number->format($mark->term2_subject_8_grade) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_9) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_9_periodic_test) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_9_subject_enrichment) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_9_multiple_assessment) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_9_portfolio) ?></td>
                    <td><?= $mark->term1_subject_9_total === null ? '' : $this->Number->format($mark->term1_subject_9_total) ?></td>
                    <td><?= $mark->term1_subject_9_grade === null ? '' : $this->Number->format($mark->term1_subject_9_grade) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_9) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_9_periodic_test) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_9_subject_enrichment) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_9_multiple_assessment) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_9_portfolio) ?></td>
                    <td><?= $mark->term2_subject_9_total === null ? '' : $this->Number->format($mark->term2_subject_9_total) ?></td>
                    <td><?= $mark->term2_subject_9_grade === null ? '' : $this->Number->format($mark->term2_subject_9_grade) ?></td>
                    <td><?= $mark->term2_total === null ? '' : $this->Number->format($mark->term2_total) ?></td>
                    <td><?= $mark->term1_subject_1_ct === null ? '' : $this->Number->format($mark->term1_subject_1_ct) ?></td>
                    <td><?= $mark->term1_subject_2_ct === null ? '' : $this->Number->format($mark->term1_subject_2_ct) ?></td>
                    <td><?= $mark->term1_subject_3_ct === null ? '' : $this->Number->format($mark->term1_subject_3_ct) ?></td>
                    <td><?= $mark->term1_subject_4_ct === null ? '' : $this->Number->format($mark->term1_subject_4_ct) ?></td>
                    <td><?= $mark->term1_subject_5_ct === null ? '' : $this->Number->format($mark->term1_subject_5_ct) ?></td>
                    <td><?= $mark->term1_subject_6_ct === null ? '' : $this->Number->format($mark->term1_subject_6_ct) ?></td>
                    <td><?= $mark->term1_subject_7_ct === null ? '' : $this->Number->format($mark->term1_subject_7_ct) ?></td>
                    <td><?= $mark->term1_subject_8_ct === null ? '' : $this->Number->format($mark->term1_subject_8_ct) ?></td>
                    <td><?= $mark->term1_subject_9_ct === null ? '' : $this->Number->format($mark->term1_subject_9_ct) ?></td>
                    <td><?= $mark->term2_subject_1_ct === null ? '' : $this->Number->format($mark->term2_subject_1_ct) ?></td>
                    <td><?= $mark->term2_subject_2_ct === null ? '' : $this->Number->format($mark->term2_subject_2_ct) ?></td>
                    <td><?= $mark->term2_subject_3_ct === null ? '' : $this->Number->format($mark->term2_subject_3_ct) ?></td>
                    <td><?= $mark->term2_subject_4_ct === null ? '' : $this->Number->format($mark->term2_subject_4_ct) ?></td>
                    <td><?= $mark->term2_subject_5_ct === null ? '' : $this->Number->format($mark->term2_subject_5_ct) ?></td>
                    <td><?= $mark->term2_subject_6_ct === null ? '' : $this->Number->format($mark->term2_subject_6_ct) ?></td>
                    <td><?= $mark->term2_subject_7_ct === null ? '' : $this->Number->format($mark->term2_subject_7_ct) ?></td>
                    <td><?= $mark->term2_subject_8_ct === null ? '' : $this->Number->format($mark->term2_subject_8_ct) ?></td>
                    <td><?= $mark->term2_subject_9_ct === null ? '' : $this->Number->format($mark->term2_subject_9_ct) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mark->mark_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mark->mark_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mark->mark_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mark->mark_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>