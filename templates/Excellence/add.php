<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Excellence $excellence
 * @var \Cake\Collection\CollectionInterface|string[] $students
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Excellence'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="excellence form content">
            <?= $this->Form->create($excellence) ?>
            <fieldset>
                <legend><?= __('Add Excellence') ?></legend>
                <?php
                    echo $this->Form->control('student_id', ['options' => $students, 'empty' => true]);
                    echo $this->Form->control('term1_work_education');
                    echo $this->Form->control('term1_art_education');
                    echo $this->Form->control('term1_physical_education');
                    echo $this->Form->control('term1_discipline');
                    echo $this->Form->control('term2_work_education');
                    echo $this->Form->control('term2_art_education');
                    echo $this->Form->control('term2_physical_education');
                    echo $this->Form->control('term2_discipline');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
