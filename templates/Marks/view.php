<!-- <?php
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
    <div class="column-responsive column-80">
        <div class="marks view content">
            <h3><?= h($mark->academic_year) ?></h3>
            <table>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $mark->has('student') ? $this->Html->link($mark->student->name, ['controller' => 'Students', 'action' => 'view', $mark->student->student_id]) : '' ?></td>
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
                    <th><?= __('Term 1 Grade') ?></th>
                </tr>
                <tr>
                    <th><?= __('English Grade') ?></th>
                    <td><?= h($mark->term1_subject_1_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hindi Grade') ?></th>
                    <td><?= h($mark->term1_subject_2_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marathi Grade') ?></th>
                    <td><?= h($mark->term1_subject_3_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mathematics Grade') ?></th>
                    <td><?= h($mark->term1_subject_4_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Science Grade') ?></th>
                    <td><?= h($mark->term1_subject_5_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Social Grade') ?></th>
                    <td><?= h($mark->term1_subject_6_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Computer Grade') ?></th>
                    <td><?= h($mark->term1_subject_7_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term 2 Grade') ?></th>
                </tr>
                <tr>
                    <th><?= __('English Grade') ?></th>
                    <td><?= h($mark->term2_subject_1_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hindi Grade') ?></th>
                    <td><?= h($mark->term2_subject_2_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marathi Grade') ?></th>
                    <td><?= h($mark->term2_subject_3_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mathematics Grade') ?></th>
                    <td><?= h($mark->term2_subject_4_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Science Grade') ?></th>
                    <td><?= h($mark->term2_subject_5_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Social Grade') ?></th>
                    <td><?= h($mark->term2_subject_6_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Computer Grade') ?></th>
                    <td><?= h($mark->term2_subject_7_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mark Id') ?></th>
                    <td><?= $this->Number->format($mark->mark_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term 1 Marks') ?></th>
                </tr>
                <tr>
                    <th><?= __('English') ?></th>
                    <td><?= $mark->term1_subject_1 === null ? '' : $this->Number->format($mark->term1_subject_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_1_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_1_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_1_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_1_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_1_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_1_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term1_subject_1_portfolio === null ? '' : $this->Number->format($mark->term1_subject_1_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('English Total') ?></th>
                    <td><?= $mark->term1_subject_1_total === null ? '' : $this->Number->format($mark->term1_subject_1_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hindi') ?></th>
                    <td><?= $mark->term1_subject_2 === null ? '' : $this->Number->format($mark->term1_subject_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_2_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_2_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_2_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_2_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_2_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_2_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term1_subject_2_portfolio === null ? '' : $this->Number->format($mark->term1_subject_2_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hindi Total') ?></th>
                    <td><?= $mark->term1_subject_2_total === null ? '' : $this->Number->format($mark->term1_subject_2_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marathi') ?></th>
                    <td><?= $mark->term1_subject_3 === null ? '' : $this->Number->format($mark->term1_subject_3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_3_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_3_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_3_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_3_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_3_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_3_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term1_subject_3_portfolio === null ? '' : $this->Number->format($mark->term1_subject_3_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marathi Total') ?></th>
                    <td><?= $mark->term1_subject_3_total === null ? '' : $this->Number->format($mark->term1_subject_3_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mathematics') ?></th>
                    <td><?= $mark->term1_subject_4 === null ? '' : $this->Number->format($mark->term1_subject_4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_4_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_4_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_4_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_4_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_4_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_4_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term1_subject_4_portfolio === null ? '' : $this->Number->format($mark->term1_subject_4_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mathematics Total') ?></th>
                    <td><?= $mark->term1_subject_4_total === null ? '' : $this->Number->format($mark->term1_subject_4_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Science') ?></th>
                    <td><?= $mark->term1_subject_5 === null ? '' : $this->Number->format($mark->term1_subject_5) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_5_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_5_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_5_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_5_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_5_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_5_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term1_subject_5_portfolio === null ? '' : $this->Number->format($mark->term1_subject_5_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Science Total') ?></th>
                    <td><?= $mark->term1_subject_5_total === null ? '' : $this->Number->format($mark->term1_subject_5_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('TSocial Science') ?></th>
                    <td><?= $mark->term1_subject_6 === null ? '' : $this->Number->format($mark->term1_subject_6) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_6_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_6_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_6_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_6_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_6_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_6_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term1_subject_6_portfolio === null ? '' : $this->Number->format($mark->term1_subject_6_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Social Total') ?></th>
                    <td><?= $mark->term1_subject_6_total === null ? '' : $this->Number->format($mark->term1_subject_6_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Computer') ?></th>
                    <td><?= $mark->term1_subject_7 === null ? '' : $this->Number->format($mark->term1_subject_7) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_7_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_7_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_7_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_7_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_7_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_7_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term1_subject_7_portfolio === null ? '' : $this->Number->format($mark->term1_subject_7_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Computer Total') ?></th>
                    <td><?= $mark->term1_subject_7_total === null ? '' : $this->Number->format($mark->term1_subject_7_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Total') ?></th>
                    <td><?= $mark->term1_total === null ? '' : $this->Number->format($mark->term1_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term 2 Marks') ?></th>
                </tr>
                <tr>
                    <th><?= __('English') ?></th>
                    <td><?= $mark->term2_subject_1 === null ? '' : $this->Number->format($mark->term2_subject_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_1_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_1_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_1_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_1_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_1_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_1_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term2_subject_1_portfolio === null ? '' : $this->Number->format($mark->term2_subject_1_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('English Total') ?></th>
                    <td><?= $mark->term2_subject_1_total === null ? '' : $this->Number->format($mark->term2_subject_1_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hindi') ?></th>
                    <td><?= $mark->term2_subject_2 === null ? '' : $this->Number->format($mark->term2_subject_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_2_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_2_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_2_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_2_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_2_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_2_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term2_subject_2_portfolio === null ? '' : $this->Number->format($mark->term2_subject_2_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hindi Total') ?></th>
                    <td><?= $mark->term2_subject_2_total === null ? '' : $this->Number->format($mark->term2_subject_2_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marathi') ?></th>
                    <td><?= $mark->term2_subject_3 === null ? '' : $this->Number->format($mark->term2_subject_3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_3_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_3_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_3_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_3_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_3_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_3_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term2_subject_3_portfolio === null ? '' : $this->Number->format($mark->term2_subject_3_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marathi Total') ?></th>
                    <td><?= $mark->term2_subject_3_total === null ? '' : $this->Number->format($mark->term2_subject_3_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mathematics') ?></th>
                    <td><?= $mark->term2_subject_4 === null ? '' : $this->Number->format($mark->term2_subject_4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_4_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_4_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_4_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_4_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_4_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_4_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term2_subject_4_portfolio === null ? '' : $this->Number->format($mark->term2_subject_4_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mathematics Total') ?></th>
                    <td><?= $mark->term2_subject_4_total === null ? '' : $this->Number->format($mark->term2_subject_4_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Science') ?></th>
                    <td><?= $mark->term2_subject_5 === null ? '' : $this->Number->format($mark->term2_subject_5) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_5_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_5_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_5_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_5_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_5_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_5_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term2_subject_5_portfolio === null ? '' : $this->Number->format($mark->term2_subject_5_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Science Total') ?></th>
                    <td><?= $mark->term2_subject_5_total === null ? '' : $this->Number->format($mark->term2_subject_5_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Social Science') ?></th>
                    <td><?= $mark->term2_subject_6 === null ? '' : $this->Number->format($mark->term2_subject_6) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 6 Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_6_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_6_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_6_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_6_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_6_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_6_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term2_subject_6_portfolio === null ? '' : $this->Number->format($mark->term2_subject_6_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Social Total') ?></th>
                    <td><?= $mark->term2_subject_6_total === null ? '' : $this->Number->format($mark->term2_subject_6_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Computer') ?></th>
                    <td><?= $mark->term2_subject_7 === null ? '' : $this->Number->format($mark->term2_subject_7) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_7_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_7_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_7_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_7_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_7_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_7_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term2_subject_7_portfolio === null ? '' : $this->Number->format($mark->term2_subject_7_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Computer Total') ?></th>
                    <td><?= $mark->term2_subject_7_total === null ? '' : $this->Number->format($mark->term2_subject_7_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Total') ?></th>
                    <td><?= $mark->term2_total === null ? '' : $this->Number->format($mark->term2_total) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div> -->


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
    <div class="column-responsive column-80">
        <div class="marks view content">
            <h3><?= h($mark->academic_year) ?></h3>
            <table>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $mark->has('student') ? $this->Html->link($mark->student->name, ['controller' => 'Students', 'action' => 'view', $mark->student->student_id]) : '' ?></td>
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
                    <th><?= __('Term 1 Grade') ?></th>
                </tr>
                <tr>
                    <th><?= __('English Grade') ?></th>
                    <td><?= h($mark->term1_subject_1_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hindi Grade') ?></th>
                    <td><?= h($mark->term1_subject_2_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marathi Grade') ?></th>
                    <td><?= h($mark->term1_subject_3_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mathematics Grade') ?></th>
                    <td><?= h($mark->term1_subject_4_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Science Grade') ?></th>
                    <td><?= h($mark->term1_subject_5_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Social Grade') ?></th>
                    <td><?= h($mark->term1_subject_6_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Computer Grade') ?></th>
                    <td><?= h($mark->term1_subject_7_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term 2 Grade') ?></th>
                </tr>
                <tr>
                    <th><?= __('English Grade') ?></th>
                    <td><?= h($mark->term2_subject_1_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hindi Grade') ?></th>
                    <td><?= h($mark->term2_subject_2_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marathi Grade') ?></th>
                    <td><?= h($mark->term2_subject_3_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mathematics Grade') ?></th>
                    <td><?= h($mark->term2_subject_4_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Science Grade') ?></th>
                    <td><?= h($mark->term2_subject_5_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Social Grade') ?></th>
                    <td><?= h($mark->term2_subject_6_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Computer Grade') ?></th>
                    <td><?= h($mark->term2_subject_7_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mark Id') ?></th>
                    <td><?= $this->Number->format($mark->mark_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term 1 Marks') ?></th>
                </tr>
                <tr>
                    <th><?= __('English') ?></th>
                    <td><?= $mark->term1_subject_1 === null ? '' : $this->Number->format($mark->term1_subject_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_1_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_1_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_1_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_1_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_1_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_1_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term1_subject_1_portfolio === null ? '' : $this->Number->format($mark->term1_subject_1_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('English Total') ?></th>
                    <td><?= $mark->term1_subject_1_total === null ? '' : $this->Number->format($mark->term1_subject_1_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hindi') ?></th>
                    <td><?= $mark->term1_subject_2 === null ? '' : $this->Number->format($mark->term1_subject_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_2_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_2_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_2_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_2_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_2_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_2_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term1_subject_2_portfolio === null ? '' : $this->Number->format($mark->term1_subject_2_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hindi Total') ?></th>
                    <td><?= $mark->term1_subject_2_total === null ? '' : $this->Number->format($mark->term1_subject_2_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marathi') ?></th>
                    <td><?= $mark->term1_subject_3 === null ? '' : $this->Number->format($mark->term1_subject_3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_3_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_3_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_3_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_3_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_3_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_3_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term1_subject_3_portfolio === null ? '' : $this->Number->format($mark->term1_subject_3_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marathi Total') ?></th>
                    <td><?= $mark->term1_subject_3_total === null ? '' : $this->Number->format($mark->term1_subject_3_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mathematics') ?></th>
                    <td><?= $mark->term1_subject_4 === null ? '' : $this->Number->format($mark->term1_subject_4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_4_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_4_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_4_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_4_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_4_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_4_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term1_subject_4_portfolio === null ? '' : $this->Number->format($mark->term1_subject_4_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mathematics Total') ?></th>
                    <td><?= $mark->term1_subject_4_total === null ? '' : $this->Number->format($mark->term1_subject_4_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Science') ?></th>
                    <td><?= $mark->term1_subject_5 === null ? '' : $this->Number->format($mark->term1_subject_5) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_5_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_5_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_5_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_5_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_5_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_5_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term1_subject_5_portfolio === null ? '' : $this->Number->format($mark->term1_subject_5_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Science Total') ?></th>
                    <td><?= $mark->term1_subject_5_total === null ? '' : $this->Number->format($mark->term1_subject_5_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('TSocial Science') ?></th>
                    <td><?= $mark->term1_subject_6 === null ? '' : $this->Number->format($mark->term1_subject_6) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_6_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_6_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_6_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_6_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_6_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_6_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term1_subject_6_portfolio === null ? '' : $this->Number->format($mark->term1_subject_6_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Social Total') ?></th>
                    <td><?= $mark->term1_subject_6_total === null ? '' : $this->Number->format($mark->term1_subject_6_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Computer') ?></th>
                    <td><?= $mark->term1_subject_7 === null ? '' : $this->Number->format($mark->term1_subject_7) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term1_subject_7_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_7_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term1_subject_7_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_7_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term1_subject_7_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_7_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term1_subject_7_portfolio === null ? '' : $this->Number->format($mark->term1_subject_7_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Computer Total') ?></th>
                    <td><?= $mark->term1_subject_7_total === null ? '' : $this->Number->format($mark->term1_subject_7_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Total') ?></th>
                    <td><?= $mark->term1_total === null ? '' : $this->Number->format($mark->term1_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term 2 Marks') ?></th>
                </tr>
                <tr>
                    <th><?= __('English') ?></th>
                    <td><?= $mark->term2_subject_1 === null ? '' : $this->Number->format($mark->term2_subject_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_1_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_1_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_1_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_1_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_1_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_1_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term2_subject_1_portfolio === null ? '' : $this->Number->format($mark->term2_subject_1_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('English Total') ?></th>
                    <td><?= $mark->term2_subject_1_total === null ? '' : $this->Number->format($mark->term2_subject_1_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hindi') ?></th>
                    <td><?= $mark->term2_subject_2 === null ? '' : $this->Number->format($mark->term2_subject_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_2_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_2_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_2_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_2_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_2_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_2_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term2_subject_2_portfolio === null ? '' : $this->Number->format($mark->term2_subject_2_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hindi Total') ?></th>
                    <td><?= $mark->term2_subject_2_total === null ? '' : $this->Number->format($mark->term2_subject_2_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marathi') ?></th>
                    <td><?= $mark->term2_subject_3 === null ? '' : $this->Number->format($mark->term2_subject_3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_3_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_3_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_3_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_3_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_3_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_3_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term2_subject_3_portfolio === null ? '' : $this->Number->format($mark->term2_subject_3_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marathi Total') ?></th>
                    <td><?= $mark->term2_subject_3_total === null ? '' : $this->Number->format($mark->term2_subject_3_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mathematics') ?></th>
                    <td><?= $mark->term2_subject_4 === null ? '' : $this->Number->format($mark->term2_subject_4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_4_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_4_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_4_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_4_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_4_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_4_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term2_subject_4_portfolio === null ? '' : $this->Number->format($mark->term2_subject_4_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mathematics Total') ?></th>
                    <td><?= $mark->term2_subject_4_total === null ? '' : $this->Number->format($mark->term2_subject_4_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Science') ?></th>
                    <td><?= $mark->term2_subject_5 === null ? '' : $this->Number->format($mark->term2_subject_5) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_5_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_5_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_5_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_5_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_5_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_5_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term2_subject_5_portfolio === null ? '' : $this->Number->format($mark->term2_subject_5_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Science Total') ?></th>
                    <td><?= $mark->term2_subject_5_total === null ? '' : $this->Number->format($mark->term2_subject_5_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Social Science') ?></th>
                    <td><?= $mark->term2_subject_6 === null ? '' : $this->Number->format($mark->term2_subject_6) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Subject 6 Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_6_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_6_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_6_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_6_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_6_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_6_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term2_subject_6_portfolio === null ? '' : $this->Number->format($mark->term2_subject_6_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Social Total') ?></th>
                    <td><?= $mark->term2_subject_6_total === null ? '' : $this->Number->format($mark->term2_subject_6_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Computer') ?></th>
                    <td><?= $mark->term2_subject_7 === null ? '' : $this->Number->format($mark->term2_subject_7) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodic Test') ?></th>
                    <td><?= $mark->term2_subject_7_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_7_periodic_test) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Enrichment') ?></th>
                    <td><?= $mark->term2_subject_7_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_7_subject_enrichment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multiple Assessment') ?></th>
                    <td><?= $mark->term2_subject_7_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_7_multiple_assessment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Portfolio') ?></th>
                    <td><?= $mark->term2_subject_7_portfolio === null ? '' : $this->Number->format($mark->term2_subject_7_portfolio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Computer Total') ?></th>
                    <td><?= $mark->term2_subject_7_total === null ? '' : $this->Number->format($mark->term2_subject_7_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Total') ?></th>
                    <td><?= $mark->term2_total === null ? '' : $this->Number->format($mark->term2_total) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
