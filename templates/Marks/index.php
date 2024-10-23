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

                    <?php 
                    $terms = ['term1', 'term2'];
                    $subjects = range(1, 9); // Assuming 9 subjects per term
                    foreach ($terms as $term): 
                        foreach ($subjects as $subject): 
                    ?>
                        <th><?= $this->Paginator->sort("{$term}_subject_{$subject}") ?></th>
                        <th><?= $this->Paginator->sort("{$term}_subject_{$subject}_periodic_test") ?></th>
                        <th><?= $this->Paginator->sort("{$term}_subject_{$subject}_subject_enrichment") ?></th>
                        <th><?= $this->Paginator->sort("{$term}_subject_{$subject}_multiple_assessment") ?></th>
                        <th><?= $this->Paginator->sort("{$term}_subject_{$subject}_portfolio") ?></th>
                        <th><?= $this->Paginator->sort("{$term}_subject_{$subject}_total") ?></th>
                        <th><?= $this->Paginator->sort("{$term}_subject_{$subject}_grade") ?></th>
                        <th><?= $this->Paginator->sort("{$term}_subject_{$subject}_ct") ?></th>
                    <?php 
                        endforeach; 
                    endforeach; 
                    ?>
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

                    <?php 
                    foreach ($terms as $term): 
                        foreach ($subjects as $subject): 
                    ?>
                        <td><?= $mark->{"{$term}_subject_{$subject}"} === null ? '' : $this->Number->format($mark->{"{$term}_subject_{$subject}"}) ?></td>
                        <td><?= $mark->{"{$term}_subject_{$subject}_periodic_test"} === null ? '' : $this->Number->format($mark->{"{$term}_subject_{$subject}_periodic_test"}) ?></td>
                        <td><?= $mark->{"{$term}_subject_{$subject}_subject_enrichment"} === null ? '' : $this->Number->format($mark->{"{$term}_subject_{$subject}_subject_enrichment"}) ?></td>
                        <td><?= $mark->{"{$term}_subject_{$subject}_multiple_assessment"} === null ? '' : $this->Number->format($mark->{"{$term}_subject_{$subject}_multiple_assessment"}) ?></td>
                        <td><?= $mark->{"{$term}_subject_{$subject}_portfolio"} === null ? '' : $this->Number->format($mark->{"{$term}_subject_{$subject}_portfolio"}) ?></td>
                        <td><?= $mark-> {"{$term}_subject_{$subject}_total"} === null ? '' : $this->Number->format($mark->{"{$term}_subject_{$subject}_total"}) ?></td>
                        <td><?= h($mark->{"{$term}_subject_{$subject}_grade"}) ?></td>
                        <td><?= $mark->{"{$term}_subject_{$subject}_ct"} === null ? '' : $this->Number->format($mark->{"{$term}_subject_{$subject}_ct"}) ?></td>
                    <?php 
                        endforeach; 
                    endforeach; 
                    ?>
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
