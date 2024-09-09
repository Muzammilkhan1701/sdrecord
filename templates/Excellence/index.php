<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Excellence> $excellence
 */
?>
<div class="excellence index content">
    <?= $this->Html->link(__('New Excellence'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Excellence') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('student_id') ?></th>
                    <th><?= $this->Paginator->sort('term1_work_education') ?></th>
                    <th><?= $this->Paginator->sort('term1_art_education') ?></th>
                    <th><?= $this->Paginator->sort('term1_physical_education') ?></th>
                    <th><?= $this->Paginator->sort('term1_discipline') ?></th>
                    <th><?= $this->Paginator->sort('term2_work_education') ?></th>
                    <th><?= $this->Paginator->sort('term2_art_education') ?></th>
                    <th><?= $this->Paginator->sort('term2_physical_education') ?></th>
                    <th><?= $this->Paginator->sort('term2_discipline') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($excellence as $excellence): ?>
                <tr>
                    <td><?= $this->Number->format($excellence->id) ?></td>
                    <td><?= $excellence->has('student') ? $this->Html->link($excellence->student->name, ['controller' => 'Students', 'action' => 'view', $excellence->student->student_id]) : '' ?></td>
                    <td><?= h($excellence->term1_work_education) ?></td>
                    <td><?= h($excellence->term1_art_education) ?></td>
                    <td><?= h($excellence->term1_physical_education) ?></td>
                    <td><?= h($excellence->term1_discipline) ?></td>
                    <td><?= h($excellence->term2_work_education) ?></td>
                    <td><?= h($excellence->term2_art_education) ?></td>
                    <td><?= h($excellence->term2_physical_education) ?></td>
                    <td><?= h($excellence->term2_discipline) ?></td>
                    <td><?= h($excellence->created) ?></td>
                    <td><?= h($excellence->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $excellence->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $excellence->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $excellence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $excellence->id)]) ?>
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
