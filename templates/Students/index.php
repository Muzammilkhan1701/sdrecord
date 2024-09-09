<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Student> $students
 */
?>
<div class="container mt-5">
    <!-- New Student Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0"><?= __('Students') ?></h3>
        <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    </div>

    <!-- Table -->
    <div class="table-responsive shadow-sm">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th><?= $this->Paginator->sort('student_id', 'ID') ?></th>
                    <th><?= $this->Paginator->sort('name', 'Name') ?></th>
                    <th><?= $this->Paginator->sort('section', 'Section') ?></th>
                    <th><?= $this->Paginator->sort('mother_name', 'Mother\'s Name') ?></th>
                    <th><?= $this->Paginator->sort('admission_year', 'Admission Year') ?></th>
                    <th><?= $this->Paginator->sort('pass_year', 'Pass Year') ?></th>
                    <th class="text-center"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= $this->Number->format($student->student_id) ?></td>
                    <td><?= h($student->name) ?></td>
                    <td><?= h($student->section) ?></td>
                    <td><?= h($student->mother_name) ?></td>
                    <td><?= h($student->admission_year) ?></td>
                    <td><?= h($student->pass_year) ?></td>
                    <td class="text-center">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $student->student_id], ['class' => 'btn btn-sm btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $student->student_id], ['class' => 'btn btn-sm btn-warning']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $student->student_id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $student->student_id),
                            'class' => 'btn btn-sm btn-danger'
                        ]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Paginator -->
    <div class="d-flex justify-content-between align-items-center">
        <div class="paginator-text">
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
        </div>
        <div class="paginator-links">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('First')) ?>
                <?= $this->Paginator->prev('< ' . __('Previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Next') . ' >') ?>
                <?= $this->Paginator->last(__('Last') . ' >>') ?>
            </ul>
        </div>
    </div>
</div>
