<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mark $mark
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Mark'), ['action' => 'edit', $mark->mark_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mark'), ['action' => 'delete', $mark->mark_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mark->mark_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Marks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mark'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="marks view content">
            <h3><?= h($mark->academic_year) ?></h3>
            <table>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $mark->hasValue('student') ? $this->Html->link($mark->student->name, ['controller' => 'Students', 'action' => 'view', $mark->student->student_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Academic Year') ?></th>
                    <td><?= h($mark->academic_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rollno') ?></th>
                    <td><?= h($mark->rollno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Class') ?></th>
                    <td><?= h($mark->class) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 1 Grade') ?></th>
                    <td><?= h($mark->term1_subject_1_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 2 Grade') ?></th>
                    <td><?= h($mark->term1_subject_2_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 3 Grade') ?></th>
                    <td><?= h($mark->term1_subject_3_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 4 Grade') ?></th>
                    <td><?= h($mark->term1_subject_4_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 5 Grade') ?></th>
                    <td><?= h($mark->term1_subject_5_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 6 Grade') ?></th>
                    <td><?= h($mark->term1_subject_6_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 7 Grade') ?></th>
                    <td><?= h($mark->term1_subject_7_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 1 Grade') ?></th>
                    <td><?= h($mark->term2_subject_1_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 2 Grade') ?></th>
                    <td><?= h($mark->term2_subject_2_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 3 Grade') ?></th>
                    <td><?= h($mark->term2_subject_3_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 4 Grade') ?></th>
                    <td><?= h($mark->term2_subject_4_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 5 Grade') ?></th>
                    <td><?= h($mark->term2_subject_5_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 6 Grade') ?></th>
                    <td><?= h($mark->term2_subject_6_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 7 Grade') ?></th>
                    <td><?= h($mark->term2_subject_7_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mark Id') ?></th>
                    <td><?= $this->Number->format($mark->mark_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 1') ?></th>
                    <td><?= $mark->term1_subject_1 === null ? '' : $this->Number->format($mark->term1_subject_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 1 Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_1_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_1_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 1 Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_1_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_1_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 1 Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_1_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_1_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 1 Portfolio') ?></th>
                    <td><?= $mark->term1_subject_1_portfolio === null ? '' : $this->Number->format($mark->term1_subject_1_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 1 Total') ?></th>
                    <td><?= $mark->term1_subject_1_total === null ? '' : $this->Number->format($mark->term1_subject_1_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 2') ?></th>
                    <td><?= $mark->term1_subject_2 === null ? '' : $this->Number->format($mark->term1_subject_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 2 Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_2_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_2_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 2 Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_2_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_2_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 2 Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_2_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_2_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 2 Portfolio') ?></th>
                    <td><?= $mark->term1_subject_2_portfolio === null ? '' : $this->Number->format($mark->term1_subject_2_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 2 Total') ?></th>
                    <td><?= $mark->term1_subject_2_total === null ? '' : $this->Number->format($mark->term1_subject_2_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 3') ?></th>
                    <td><?= $mark->term1_subject_3 === null ? '' : $this->Number->format($mark->term1_subject_3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 3 Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_3_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_3_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 3 Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_3_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_3_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 3 Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_3_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_3_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 3 Portfolio') ?></th>
                    <td><?= $mark->term1_subject_3_portfolio === null ? '' : $this->Number->format($mark->term1_subject_3_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 3 Total') ?></th>
                    <td><?= $mark->term1_subject_3_total === null ? '' : $this->Number->format($mark->term1_subject_3_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 4') ?></th>
                    <td><?= $mark->term1_subject_4 === null ? '' : $this->Number->format($mark->term1_subject_4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 4 Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_4_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_4_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 4 Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_4_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_4_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 4 Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_4_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_4_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 4 Portfolio') ?></th>
                    <td><?= $mark->term1_subject_4_portfolio === null ? '' : $this->Number->format($mark->term1_subject_4_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 4 Total') ?></th>
                    <td><?= $mark->term1_subject_4_total === null ? '' : $this->Number->format($mark->term1_subject_4_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 5') ?></th>
                    <td><?= $mark->term1_subject_5 === null ? '' : $this->Number->format($mark->term1_subject_5) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 5 Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_5_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_5_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 5 Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_5_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_5_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 5 Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_5_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_5_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 5 Portfolio') ?></th>
                    <td><?= $mark->term1_subject_5_portfolio === null ? '' : $this->Number->format($mark->term1_subject_5_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 5 Total') ?></th>
                    <td><?= $mark->term1_subject_5_total === null ? '' : $this->Number->format($mark->term1_subject_5_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 6') ?></th>
                    <td><?= $mark->term1_subject_6 === null ? '' : $this->Number->format($mark->term1_subject_6) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 6 Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_6_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_6_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 6 Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_6_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_6_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 6 Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_6_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_6_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 6 Portfolio') ?></th>
                    <td><?= $mark->term1_subject_6_portfolio === null ? '' : $this->Number->format($mark->term1_subject_6_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 6 Total') ?></th>
                    <td><?= $mark->term1_subject_6_total === null ? '' : $this->Number->format($mark->term1_subject_6_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 7') ?></th>
                    <td><?= $mark->term1_subject_7 === null ? '' : $this->Number->format($mark->term1_subject_7) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 7 Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_7_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_7_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 7 Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_7_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_7_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 7 Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_7_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_7_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 7 Portfolio') ?></th>
                    <td><?= $mark->term1_subject_7_portfolio === null ? '' : $this->Number->format($mark->term1_subject_7_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 7 Total') ?></th>
                    <td><?= $mark->term1_subject_7_total === null ? '' : $this->Number->format($mark->term1_subject_7_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Total') ?></th>
                    <td><?= $mark->term1_total === null ? '' : $this->Number->format($mark->term1_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 1') ?></th>
                    <td><?= $mark->term2_subject_1 === null ? '' : $this->Number->format($mark->term2_subject_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 1 Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_1_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_1_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 1 Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_1_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_1_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 1 Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_1_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_1_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 1 Portfolio') ?></th>
                    <td><?= $mark->term2_subject_1_portfolio === null ? '' : $this->Number->format($mark->term2_subject_1_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 1 Total') ?></th>
                    <td><?= $mark->term2_subject_1_total === null ? '' : $this->Number->format($mark->term2_subject_1_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 2') ?></th>
                    <td><?= $mark->term2_subject_2 === null ? '' : $this->Number->format($mark->term2_subject_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 2 Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_2_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_2_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 2 Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_2_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_2_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 2 Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_2_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_2_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 2 Portfolio') ?></th>
                    <td><?= $mark->term2_subject_2_portfolio === null ? '' : $this->Number->format($mark->term2_subject_2_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 2 Total') ?></th>
                    <td><?= $mark->term2_subject_2_total === null ? '' : $this->Number->format($mark->term2_subject_2_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 3') ?></th>
                    <td><?= $mark->term2_subject_3 === null ? '' : $this->Number->format($mark->term2_subject_3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 3 Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_3_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_3_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 3 Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_3_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_3_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 3 Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_3_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_3_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 3 Portfolio') ?></th>
                    <td><?= $mark->term2_subject_3_portfolio === null ? '' : $this->Number->format($mark->term2_subject_3_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 3 Total') ?></th>
                    <td><?= $mark->term2_subject_3_total === null ? '' : $this->Number->format($mark->term2_subject_3_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 4') ?></th>
                    <td><?= $mark->term2_subject_4 === null ? '' : $this->Number->format($mark->term2_subject_4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 4 Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_4_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_4_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 4 Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_4_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_4_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 4 Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_4_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_4_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 4 Portfolio') ?></th>
                    <td><?= $mark->term2_subject_4_portfolio === null ? '' : $this->Number->format($mark->term2_subject_4_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 4 Total') ?></th>
                    <td><?= $mark->term2_subject_4_total === null ? '' : $this->Number->format($mark->term2_subject_4_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 5') ?></th>
                    <td><?= $mark->term2_subject_5 === null ? '' : $this->Number->format($mark->term2_subject_5) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 5 Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_5_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_5_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 5 Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_5_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_5_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 5 Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_5_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_5_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 5 Portfolio') ?></th>
                    <td><?= $mark->term2_subject_5_portfolio === null ? '' : $this->Number->format($mark->term2_subject_5_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 5 Total') ?></th>
                    <td><?= $mark->term2_subject_5_total === null ? '' : $this->Number->format($mark->term2_subject_5_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 6') ?></th>
                    <td><?= $mark->term2_subject_6 === null ? '' : $this->Number->format($mark->term2_subject_6) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 6 Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_6_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_6_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 6 Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_6_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_6_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 6 Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_6_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_6_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 6 Portfolio') ?></th>
                    <td><?= $mark->term2_subject_6_portfolio === null ? '' : $this->Number->format($mark->term2_subject_6_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 6 Total') ?></th>
                    <td><?= $mark->term2_subject_6_total === null ? '' : $this->Number->format($mark->term2_subject_6_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 7') ?></th>
                    <td><?= $mark->term2_subject_7 === null ? '' : $this->Number->format($mark->term2_subject_7) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 7 Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_7_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_7_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 7 Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_7_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_7_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 7 Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_7_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_7_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 7 Portfolio') ?></th>
                    <td><?= $mark->term2_subject_7_portfolio === null ? '' : $this->Number->format($mark->term2_subject_7_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 7 Total') ?></th>
                    <td><?= $mark->term2_subject_7_total === null ? '' : $this->Number->format($mark->term2_subject_7_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 8') ?></th>
                    <td><?= $this->Number->format($mark->term1_subject_8) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 8 Periodic Test') ?></th>
                    <td><?= $this->Number->format($mark->term1_subject_8_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 8 Subject Enrichment') ?></th>
                    <td><?= $this->Number->format($mark->term1_subject_8_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 8 Multiple Assessment') ?></th>
                    <td><?= $this->Number->format($mark->term1_subject_8_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 8 Portfolio') ?></th>
                    <td><?= $this->Number->format($mark->term1_subject_8_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 8 Total') ?></th>
                    <td><?= $mark->term1_subject_8_total === null ? '' : $this->Number->format($mark->term1_subject_8_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 8 Grade') ?></th>
                    <td><?= $mark->term1_subject_8_grade === null ? '' : $this->Number->format($mark->term1_subject_8_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 8') ?></th>
                    <td><?= $this->Number->format($mark->term2_subject_8) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 8 Periodic Test') ?></th>
                    <td><?= $this->Number->format($mark->term2_subject_8_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 8 Subject Enrichment') ?></th>
                    <td><?= $this->Number->format($mark->term2_subject_8_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 8 Multiple Assessment') ?></th>
                    <td><?= $this->Number->format($mark->term2_subject_8_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 8 Portfolio') ?></th>
                    <td><?= $this->Number->format($mark->term2_subject_8_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 8 Total') ?></th>
                    <td><?= $mark->term2_subject_8_total === null ? '' : $this->Number->format($mark->term2_subject_8_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 8 Grade') ?></th>
                    <td><?= $mark->term2_subject_8_grade === null ? '' : $this->Number->format($mark->term2_subject_8_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 9') ?></th>
                    <td><?= $this->Number->format($mark->term1_subject_9) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 9 Periodic Test') ?></th>
                    <td><?= $this->Number->format($mark->term1_subject_9_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 9 Subject Enrichment') ?></th>
                    <td><?= $this->Number->format($mark->term1_subject_9_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 9 Multiple Assessment') ?></th>
                    <td><?= $this->Number->format($mark->term1_subject_9_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 9 Portfolio') ?></th>
                    <td><?= $this->Number->format($mark->term1_subject_9_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 9 Total') ?></th>
                    <td><?= $mark->term1_subject_9_total === null ? '' : $this->Number->format($mark->term1_subject_9_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 9 Grade') ?></th>
                    <td><?= $mark->term1_subject_9_grade === null ? '' : $this->Number->format($mark->term1_subject_9_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 9') ?></th>
                    <td><?= $this->Number->format($mark->term2_subject_9) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 9 Periodic Test') ?></th>
                    <td><?= $this->Number->format($mark->term2_subject_9_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 9 Subject Enrichment') ?></th>
                    <td><?= $this->Number->format($mark->term2_subject_9_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 9 Multiple Assessment') ?></th>
                    <td><?= $this->Number->format($mark->term2_subject_9_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 9 Portfolio') ?></th>
                    <td><?= $this->Number->format($mark->term2_subject_9_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 9 Total') ?></th>
                    <td><?= $mark->term2_subject_9_total === null ? '' : $this->Number->format($mark->term2_subject_9_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 9 Grade') ?></th>
                    <td><?= $mark->term2_subject_9_grade === null ? '' : $this->Number->format($mark->term2_subject_9_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Total') ?></th>
                    <td><?= $mark->term2_total === null ? '' : $this->Number->format($mark->term2_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 1 Ct') ?></th>
                    <td><?= $mark->term1_subject_1_ct === null ? '' : $this->Number->format($mark->term1_subject_1_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 2 Ct') ?></th>
                    <td><?= $mark->term1_subject_2_ct === null ? '' : $this->Number->format($mark->term1_subject_2_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 3 Ct') ?></th>
                    <td><?= $mark->term1_subject_3_ct === null ? '' : $this->Number->format($mark->term1_subject_3_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 4 Ct') ?></th>
                    <td><?= $mark->term1_subject_4_ct === null ? '' : $this->Number->format($mark->term1_subject_4_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 5 Ct') ?></th>
                    <td><?= $mark->term1_subject_5_ct === null ? '' : $this->Number->format($mark->term1_subject_5_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 6 Ct') ?></th>
                    <td><?= $mark->term1_subject_6_ct === null ? '' : $this->Number->format($mark->term1_subject_6_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 7 Ct') ?></th>
                    <td><?= $mark->term1_subject_7_ct === null ? '' : $this->Number->format($mark->term1_subject_7_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 8 Ct') ?></th>
                    <td><?= $mark->term1_subject_8_ct === null ? '' : $this->Number->format($mark->term1_subject_8_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Subject 9 Ct') ?></th>
                    <td><?= $mark->term1_subject_9_ct === null ? '' : $this->Number->format($mark->term1_subject_9_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 1 Ct') ?></th>
                    <td><?= $mark->term2_subject_1_ct === null ? '' : $this->Number->format($mark->term2_subject_1_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 2 Ct') ?></th>
                    <td><?= $mark->term2_subject_2_ct === null ? '' : $this->Number->format($mark->term2_subject_2_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 3 Ct') ?></th>
                    <td><?= $mark->term2_subject_3_ct === null ? '' : $this->Number->format($mark->term2_subject_3_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 4 Ct') ?></th>
                    <td><?= $mark->term2_subject_4_ct === null ? '' : $this->Number->format($mark->term2_subject_4_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 5 Ct') ?></th>
                    <td><?= $mark->term2_subject_5_ct === null ? '' : $this->Number->format($mark->term2_subject_5_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 6 Ct') ?></th>
                    <td><?= $mark->term2_subject_6_ct === null ? '' : $this->Number->format($mark->term2_subject_6_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 7 Ct') ?></th>
                    <td><?= $mark->term2_subject_7_ct === null ? '' : $this->Number->format($mark->term2_subject_7_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 8 Ct') ?></th>
                    <td><?= $mark->term2_subject_8_ct === null ? '' : $this->Number->format($mark->term2_subject_8_ct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 9 Ct') ?></th>
                    <td><?= $mark->term2_subject_9_ct === null ? '' : $this->Number->format($mark->term2_subject_9_ct) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>