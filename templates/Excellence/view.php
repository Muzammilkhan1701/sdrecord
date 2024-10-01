<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Excellence $excellence
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Excellence'), ['action' => 'edit', $excellence->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Excellence'), ['action' => 'delete', $excellence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $excellence->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Excellence'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Excellence'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="excellence view content">
            <h3><?= h($excellence->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $excellence->has('student') ? $this->Html->link($excellence->student->name, ['controller' => 'Students', 'action' => 'view', $excellence->student->student_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Academic Year') ?></th>
                    <td><?= h($excellence->academic_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Class') ?></th>
                    <td><?= h($excellence->class) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Work Education') ?></th>
                    <td><?= h($excellence->term1_work_education) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Art Education') ?></th>
                    <td><?= h($excellence->term1_art_education) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Physical Education') ?></th>
                    <td><?= h($excellence->term1_physical_education) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Discipline') ?></th>
                    <td><?= h($excellence->term1_discipline) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Work Education') ?></th>
                    <td><?= h($excellence->term2_work_education) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Art Education') ?></th>
                    <td><?= h($excellence->term2_art_education) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Physical Education') ?></th>
                    <td><?= h($excellence->term2_physical_education) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Discipline') ?></th>
                    <td><?= h($excellence->term2_discipline) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($excellence->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($excellence->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($excellence->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
