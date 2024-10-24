<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->student_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->student_id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->student_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="students view content">
            <h3><?= h($student->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Admission No') ?></th>
                    <td><?= h($student->Admission_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($student->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mother Name') ?></th>
                    <td><?= h($student->mother_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Section') ?></th>
                    <td><?= h($student->section) ?></td>
                </tr>
                <tr>
                    <th><?= __('Admission Year') ?></th>
                    <td><?= h($student->admission_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Student Id') ?></th>
                    <td><?= $this->Number->format($student->student_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dob') ?></th>
                    <td><?= h($student->dob) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Excellence') ?></h4>
                <?php if (!empty($student->excellence)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Academic Year') ?></th>
                            <th><?= __('Class') ?></th>
                            <th><?= __('Term1 Work Education') ?></th>
                            <th><?= __('Term1 Art Education') ?></th>
                            <th><?= __('Term1 Physical Education') ?></th>
                            <th><?= __('Term1 Discipline') ?></th>
                            <th><?= __('Term2 Work Education') ?></th>
                            <th><?= __('Term2 Art Education') ?></th>
                            <th><?= __('Term2 Physical Education') ?></th>
                            <th><?= __('Term2 Discipline') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($student->excellence as $excellence) : ?>
                        <tr>
                            <td><?= h($excellence->id) ?></td>
                            <td><?= h($excellence->student_id) ?></td>
                            <td><?= h($excellence->academic_year) ?></td>
                            <td><?= h($excellence->class) ?></td>
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
                                <?= $this->Html->link(__('View'), ['controller' => 'Excellence', 'action' => 'view', $excellence->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Excellence', 'action' => 'edit', $excellence->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Excellence', 'action' => 'delete', $excellence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $excellence->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>