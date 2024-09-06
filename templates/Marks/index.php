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
                    <!-- Term-1 -->
                    <!-- subject-1 -->
                    <!-- <th><?= $this->Paginator->sort('English') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('term1_subject_1_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_1_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_1_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_1_portfolio') ?></th> -->
                    <th><?= $this->Paginator->sort('English total') ?></th>
                    <!-- <th><?= $this->Paginator->sort('Grade') ?></th> -->
                    <!-- subject-2 -->
                    <!-- <th><?= $this->Paginator->sort('Hindi') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('term1_subject_2_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_2_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_2_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_2_portfolio') ?></th> -->
                    <th><?= $this->Paginator->sort('Hindi total') ?></th>
                    <!-- <th><?= $this->Paginator->sort('Grade') ?></th> -->
                    <!-- subject-3 -->
                    <!-- <th><?= $this->Paginator->sort('Marathi/Sanskrit') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('term1_subject_3_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_3_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_3_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_3_portfolio') ?></th> -->
                    <th><?= $this->Paginator->sort('Marathi total') ?></th>
                    <!-- <th><?= $this->Paginator->sort('Grade') ?></th> -->
                    <!-- subject-4 -->
                    <!-- <th><?= $this->Paginator->sort('Mathematics') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('term1_subject_4_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_4_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_4_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_4_portfolio') ?></th> -->
                    <th><?= $this->Paginator->sort('Mathematics total') ?></th>
                    <!-- <th><?= $this->Paginator->sort('Grade') ?></th> -->
                    <!-- subject-5 -->
                    <!-- <th><?= $this->Paginator->sort('Science') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('term1_subject_5_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_5_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_5_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_5_portfolio') ?></th> -->
                    <th><?= $this->Paginator->sort('Science total') ?></th>
                    <!-- <th><?= $this->Paginator->sort('Grade') ?></th> -->
                    <!-- subject-6 -->
                    <!-- <th><?= $this->Paginator->sort('Social Science') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('term1_subject_6_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_6_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_6_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_6_portfolio') ?></th> -->
                    <th><?= $this->Paginator->sort('Social total') ?></th>
                    <!-- <th><?= $this->Paginator->sort('Grade') ?></th> -->
                    <!-- subject-7 -->
                    <!-- <th><?= $this->Paginator->sort('Computer') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('term1_subject_7_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_7_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_7_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term1_subject_7_portfolio') ?></th> -->
                    <th><?= $this->Paginator->sort('Computer total') ?></th>
                    <!-- <th><?= $this->Paginator->sort('Grade') ?></th> -->
                    <th><?= $this->Paginator->sort('term1_total') ?></th>
                    <!-- Term-2 -->
                     <!-- subject-1 -->
                    <!-- <th><?= $this->Paginator->sort('English') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('term2_subject_1_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_1_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_1_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_1_portfolio') ?></th> -->
                    <th><?= $this->Paginator->sort('English total') ?></th>
                    <!-- <th><?= $this->Paginator->sort('Grade') ?></th> -->
                    <!-- subject-2 -->
                    <!-- <th><?= $this->Paginator->sort('Hindi') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('term2_subject_2_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_2_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_2_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_2_portfolio') ?></th> -->
                    <th><?= $this->Paginator->sort('Hindi total') ?></th>
                    <!-- <th><?= $this->Paginator->sort('Grade') ?></th> -->
                    <!-- subject-3 -->
                    <!-- <th><?= $this->Paginator->sort('Marathi') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('term2_subject_3_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_3_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_3_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_3_portfolio') ?></th> -->
                    <th><?= $this->Paginator->sort('Marathi total') ?></th>
                    <!-- <th><?= $this->Paginator->sort('Grade') ?></th> -->
                    <!-- subject-4 -->
                    <!-- <th><?= $this->Paginator->sort('Mathematics') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('term2_subject_4_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_4_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_4_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_4_portfolio') ?></th> -->
                    <th><?= $this->Paginator->sort('Mathematics total') ?></th>
                    <!-- <th><?= $this->Paginator->sort('Grade') ?></th> -->
                    <!-- subject-5 -->
                    <!-- <th><?= $this->Paginator->sort('Science') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('term2_subject_5_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_5_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_5_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_5_portfolio') ?></th> -->
                    <th><?= $this->Paginator->sort('Science total') ?></th>
                    <!-- <th><?= $this->Paginator->sort('Grade') ?></th> -->
                    <!-- subject-6 -->
                    <!-- <th><?= $this->Paginator->sort('Social Science') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('term2_subject_6_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_6_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_6_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_6_portfolio') ?></th> -->
                    <th><?= $this->Paginator->sort('Social total') ?></th>
                    <!-- <th><?= $this->Paginator->sort('Grade') ?></th> -->
                    <!-- subject-7 -->
                    <!-- <th><?= $this->Paginator->sort('Computer') ?></th> -->
                    <!-- <th><?= $this->Paginator->sort('term2_subject_7_periodic_test') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_7_subject_enrichment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_7_multiple_assessment') ?></th>
                    <th><?= $this->Paginator->sort('term2_subject_7_portfolio') ?></th> -->
                    <th><?= $this->Paginator->sort('Computer total') ?></th>
                    <!-- <th><?= $this->Paginator->sort('Grade') ?></th> -->
                    <th><?= $this->Paginator->sort('term2_total') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marks as $mark): ?>
                <tr>
                    <td><?= $this->Number->format($mark->mark_id) ?></td>
                    <td><?= $mark->has('student') ? $this->Html->link($mark->student->name, ['controller' => 'Students', 'action' => 'view', $mark->student->student_id]) : '' ?></td>
                    <td><?= h($mark->academic_year) ?></td>
                    <td><?= h($mark->rollno) ?></td>
                    <td><?= h($mark->class) ?></td>
                    <!-- <td><?= $mark->term1_subject_1 === null ? '' : $this->Number->format($mark->term1_subject_1) ?></td> -->
                    <!-- <td><?= $mark->term1_subject_1_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_1_periodic_test) ?></td>
                    <td><?= $mark->term1_subject_1_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_1_subject_enrichment) ?></td>
                    <td><?= $mark->term1_subject_1_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_1_multiple_assessment) ?></td>
                    <td><?= $mark->term1_subject_1_portfolio === null ? '' : $this->Number->format($mark->term1_subject_1_portfolio) ?></td> -->
                    <td><?= $mark->term1_subject_1_total === null ? '' : $this->Number->format($mark->term1_subject_1_total) ?></td>
                    <!-- <td><?= h($mark->term1_subject_1_grade) ?></td> -->
                    <!-- <td><?= $mark->term1_subject_2 === null ? '' : $this->Number->format($mark->term1_subject_2) ?></td> -->
                    <!-- <td><?= $mark->term1_subject_2_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_2_periodic_test) ?></td>
                    <td><?= $mark->term1_subject_2_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_2_subject_enrichment) ?></td>
                    <td><?= $mark->term1_subject_2_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_2_multiple_assessment) ?></td>
                    <td><?= $mark->term1_subject_2_portfolio === null ? '' : $this->Number->format($mark->term1_subject_2_portfolio) ?></td> -->
                    <td><?= $mark->term1_subject_2_total === null ? '' : $this->Number->format($mark->term1_subject_2_total) ?></td>
                    <!-- <td><?= h($mark->term1_subject_2_grade) ?></td> -->
                    <!-- <td><?= $mark->term1_subject_3 === null ? '' : $this->Number->format($mark->term1_subject_3) ?></td> -->
                    <!-- <td><?= $mark->term1_subject_3_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_3_periodic_test) ?></td>
                    <td><?= $mark->term1_subject_3_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_3_subject_enrichment) ?></td>
                    <td><?= $mark->term1_subject_3_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_3_multiple_assessment) ?></td>
                    <td><?= $mark->term1_subject_3_portfolio === null ? '' : $this->Number->format($mark->term1_subject_3_portfolio) ?></td> -->
                    <td><?= $mark->term1_subject_3_total === null ? '' : $this->Number->format($mark->term1_subject_3_total) ?></td>
                    <!-- <td><?= h($mark->term1_subject_3_grade) ?></td> -->
                    <!-- <td><?= $mark->term1_subject_4 === null ? '' : $this->Number->format($mark->term1_subject_4) ?></td> -->
                    <!-- <td><?= $mark->term1_subject_4_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_4_periodic_test) ?></td>
                    <td><?= $mark->term1_subject_4_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_4_subject_enrichment) ?></td>
                    <td><?= $mark->term1_subject_4_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_4_multiple_assessment) ?></td>
                    <td><?= $mark->term1_subject_4_portfolio === null ? '' : $this->Number->format($mark->term1_subject_4_portfolio) ?></td> -->
                    <td><?= $mark->term1_subject_4_total === null ? '' : $this->Number->format($mark->term1_subject_4_total) ?></td>
                    <!-- <td><?= h($mark->term1_subject_4_grade) ?></td> -->
                    <!-- <td><?= $mark->term1_subject_5 === null ? '' : $this->Number->format($mark->term1_subject_5) ?></td> -->
                    <!-- <td><?= $mark->term1_subject_5_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_5_periodic_test) ?></td>
                    <td><?= $mark->term1_subject_5_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_5_subject_enrichment) ?></td>
                    <td><?= $mark->term1_subject_5_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_5_multiple_assessment) ?></td>
                    <td><?= $mark->term1_subject_5_portfolio === null ? '' : $this->Number->format($mark->term1_subject_5_portfolio) ?></td> -->
                    <td><?= $mark->term1_subject_5_total === null ? '' : $this->Number->format($mark->term1_subject_5_total) ?></td>
                    <!-- <td><?= h($mark->term1_subject_5_grade) ?></td> -->
                    <!-- <td><?= $mark->term1_subject_6 === null ? '' : $this->Number->format($mark->term1_subject_6) ?></td> -->
                    <!-- <td><?= $mark->term1_subject_6_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_6_periodic_test) ?></td>
                    <td><?= $mark->term1_subject_6_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_6_subject_enrichment) ?></td>
                    <td><?= $mark->term1_subject_6_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_6_multiple_assessment) ?></td>
                    <td><?= $mark->term1_subject_6_portfolio === null ? '' : $this->Number->format($mark->term1_subject_6_portfolio) ?></td> -->
                    <td><?= $mark->term1_subject_6_total === null ? '' : $this->Number->format($mark->term1_subject_6_total) ?></td>
                    <!-- <td><?= h($mark->term1_subject_6_grade) ?></td> -->
                    <!-- <td><?= $mark->term1_subject_7 === null ? '' : $this->Number->format($mark->term1_subject_7) ?></td> -->
                    <!-- <td><?= $mark->term1_subject_7_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_7_periodic_test) ?></td>
                    <td><?= $mark->term1_subject_7_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_7_subject_enrichment) ?></td>
                    <td><?= $mark->term1_subject_7_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_7_multiple_assessment) ?></td>
                    <td><?= $mark->term1_subject_7_portfolio === null ? '' : $this->Number->format($mark->term1_subject_7_portfolio) ?></td> -->
                    <td><?= $mark->term1_subject_7_total === null ? '' : $this->Number->format($mark->term1_subject_7_total) ?></td>
                    <!-- <td><?= h($mark->term1_subject_7_grade) ?></td> -->
                    <td><?= $mark->term1_total === null ? '' : $this->Number->format($mark->term1_total) ?></td>
                    <!-- <td><?= $mark->term2_subject_1 === null ? '' : $this->Number->format($mark->term2_subject_1) ?></td> -->
                    <!-- <td><?= $mark->term2_subject_1_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_1_periodic_test) ?></td>
                    <td><?= $mark->term2_subject_1_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_1_subject_enrichment) ?></td>
                    <td><?= $mark->term2_subject_1_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_1_multiple_assessment) ?></td>
                    <td><?= $mark->term2_subject_1_portfolio === null ? '' : $this->Number->format($mark->term2_subject_1_portfolio) ?></td> -->
                    <td><?= $mark->term2_subject_1_total === null ? '' : $this->Number->format($mark->term2_subject_1_total) ?></td>
                    <!-- <td><?= h($mark->term2_subject_1_grade) ?></td> -->
                    <!-- <td><?= $mark->term2_subject_2 === null ? '' : $this->Number->format($mark->term2_subject_2) ?></td> -->
                    <!-- <td><?= $mark->term2_subject_2_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_2_periodic_test) ?></td>
                    <td><?= $mark->term2_subject_2_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_2_subject_enrichment) ?></td>
                    <td><?= $mark->term2_subject_2_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_2_multiple_assessment) ?></td>
                    <td><?= $mark->term2_subject_2_portfolio === null ? '' : $this->Number->format($mark->term2_subject_2_portfolio) ?></td> -->
                    <td><?= $mark->term2_subject_2_total === null ? '' : $this->Number->format($mark->term2_subject_2_total) ?></td>
                    <!-- <td><?= h($mark->term2_subject_2_grade) ?></td> -->
                    <!-- <td><?= $mark->term2_subject_3 === null ? '' : $this->Number->format($mark->term2_subject_3) ?></td> -->
                    <!-- <td><?= $mark->term2_subject_3_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_3_periodic_test) ?></td>
                    <td><?= $mark->term2_subject_3_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_3_subject_enrichment) ?></td>
                    <td><?= $mark->term2_subject_3_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_3_multiple_assessment) ?></td>
                    <td><?= $mark->term2_subject_3_portfolio === null ? '' : $this->Number->format($mark->term2_subject_3_portfolio) ?></td> -->
                    <td><?= $mark->term2_subject_3_total === null ? '' : $this->Number->format($mark->term2_subject_3_total) ?></td>
                    <!-- <td><?= h($mark->term2_subject_3_grade) ?></td> -->
                    <!-- <td><?= $mark->term2_subject_4 === null ? '' : $this->Number->format($mark->term2_subject_4) ?></td> -->
                    <!-- <td><?= $mark->term2_subject_4_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_4_periodic_test) ?></td>
                    <td><?= $mark->term2_subject_4_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_4_subject_enrichment) ?></td>
                    <td><?= $mark->term2_subject_4_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_4_multiple_assessment) ?></td>
                    <td><?= $mark->term2_subject_4_portfolio === null ? '' : $this->Number->format($mark->term2_subject_4_portfolio) ?></td> -->
                    <td><?= $mark->term2_subject_4_total === null ? '' : $this->Number->format($mark->term2_subject_4_total) ?></td>
                    <!-- <td><?= h($mark->term2_subject_4_grade) ?></td> -->
                    <!-- <td><?= $mark->term2_subject_5 === null ? '' : $this->Number->format($mark->term2_subject_5) ?></td> -->
                    <!-- <td><?= $mark->term2_subject_5_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_5_periodic_test) ?></td>
                    <td><?= $mark->term2_subject_5_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_5_subject_enrichment) ?></td>
                    <td><?= $mark->term2_subject_5_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_5_multiple_assessment) ?></td>
                    <td><?= $mark->term2_subject_5_portfolio === null ? '' : $this->Number->format($mark->term2_subject_5_portfolio) ?></td> -->
                    <td><?= $mark->term2_subject_5_total === null ? '' : $this->Number->format($mark->term2_subject_5_total) ?></td>
                    <!-- <td><?= h($mark->term2_subject_5_grade) ?></td> -->
                    <!-- <td><?= $mark->term2_subject_6 === null ? '' : $this->Number->format($mark->term2_subject_6) ?></td> -->
                    <!-- <td><?= $mark->term2_subject_6_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_6_periodic_test) ?></td>
                    <td><?= $mark->term2_subject_6_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_6_subject_enrichment) ?></td>
                    <td><?= $mark->term2_subject_6_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_6_multiple_assessment) ?></td>
                    <td><?= $mark->term2_subject_6_portfolio === null ? '' : $this->Number->format($mark->term2_subject_6_portfolio) ?></td> -->
                    <td><?= $mark->term2_subject_6_total === null ? '' : $this->Number->format($mark->term2_subject_6_total) ?></td>
                    <!-- <td><?= h($mark->term2_subject_6_grade) ?></td> -->
                    <!-- <td><?= $mark->term2_subject_7 === null ? '' : $this->Number->format($mark->term2_subject_7) ?></td> -->
                    <!-- <td><?= $mark->term2_subject_7_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_7_periodic_test) ?></td>
                    <td><?= $mark->term2_subject_7_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_7_subject_enrichment) ?></td>
                    <td><?= $mark->term2_subject_7_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_7_multiple_assessment) ?></td>
                    <td><?= $mark->term2_subject_7_portfolio === null ? '' : $this->Number->format($mark->term2_subject_7_portfolio) ?></td> -->
                    <td><?= $mark->term2_subject_7_total === null ? '' : $this->Number->format($mark->term2_subject_7_total) ?></td>
                    <!-- <td><?= h($mark->term2_subject_7_grade) ?></td> -->
                    <td><?= $mark->term2_total === null ? '' : $this->Number->format($mark->term2_total) ?></td>
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
