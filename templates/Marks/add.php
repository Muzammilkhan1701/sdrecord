<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mark $mark
 * @var \Cake\Collection\CollectionInterface|string[] $students
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Marks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="marks form content">
            <?= $this->Form->create($mark) ?>
            <fieldset>
                <legend><?= __('Add Mark') ?></legend>
                <?php
                    echo $this->Form->control('student_id', ['options' => $students, 'empty' => true]);
                    echo $this->Form->control('academic_year');
                    echo $this->Form->control('rollno');
                    echo $this->Form->control('class');
                    echo $this->Form->control('term1_subject_1');
                    echo $this->Form->control('term1_subject_1_periodic_test');
                    echo $this->Form->control('term1_subject_1_subject_enrichment');
                    echo $this->Form->control('term1_subject_1_multiple_assessment');
                    echo $this->Form->control('term1_subject_1_portfolio');
                    echo $this->Form->control('term1_subject_1_total');
                    echo $this->Form->control('term1_subject_1_grade');
                    echo $this->Form->control('term1_subject_2');
                    echo $this->Form->control('term1_subject_2_periodic_test');
                    echo $this->Form->control('term1_subject_2_subject_enrichment');
                    echo $this->Form->control('term1_subject_2_multiple_assessment');
                    echo $this->Form->control('term1_subject_2_portfolio');
                    echo $this->Form->control('term1_subject_2_total');
                    echo $this->Form->control('term1_subject_2_grade');
                    echo $this->Form->control('term1_subject_3');
                    echo $this->Form->control('term1_subject_3_periodic_test');
                    echo $this->Form->control('term1_subject_3_subject_enrichment');
                    echo $this->Form->control('term1_subject_3_multiple_assessment');
                    echo $this->Form->control('term1_subject_3_portfolio');
                    echo $this->Form->control('term1_subject_3_total');
                    echo $this->Form->control('term1_subject_3_grade');
                    echo $this->Form->control('term1_subject_4');
                    echo $this->Form->control('term1_subject_4_periodic_test');
                    echo $this->Form->control('term1_subject_4_subject_enrichment');
                    echo $this->Form->control('term1_subject_4_multiple_assessment');
                    echo $this->Form->control('term1_subject_4_portfolio');
                    echo $this->Form->control('term1_subject_4_total');
                    echo $this->Form->control('term1_subject_4_grade');
                    echo $this->Form->control('term1_subject_5');
                    echo $this->Form->control('term1_subject_5_periodic_test');
                    echo $this->Form->control('term1_subject_5_subject_enrichment');
                    echo $this->Form->control('term1_subject_5_multiple_assessment');
                    echo $this->Form->control('term1_subject_5_portfolio');
                    echo $this->Form->control('term1_subject_5_total');
                    echo $this->Form->control('term1_subject_5_grade');
                    echo $this->Form->control('term1_subject_6');
                    echo $this->Form->control('term1_subject_6_periodic_test');
                    echo $this->Form->control('term1_subject_6_subject_enrichment');
                    echo $this->Form->control('term1_subject_6_multiple_assessment');
                    echo $this->Form->control('term1_subject_6_portfolio');
                    echo $this->Form->control('term1_subject_6_total');
                    echo $this->Form->control('term1_subject_6_grade');
                    echo $this->Form->control('term1_subject_7');
                    echo $this->Form->control('term1_subject_7_periodic_test');
                    echo $this->Form->control('term1_subject_7_subject_enrichment');
                    echo $this->Form->control('term1_subject_7_multiple_assessment');
                    echo $this->Form->control('term1_subject_7_portfolio');
                    echo $this->Form->control('term1_subject_7_total');
                    echo $this->Form->control('term1_subject_7_grade');
                    echo $this->Form->control('term1_total');
                    echo $this->Form->control('term2_subject_1');
                    echo $this->Form->control('term2_subject_1_periodic_test');
                    echo $this->Form->control('term2_subject_1_subject_enrichment');
                    echo $this->Form->control('term2_subject_1_multiple_assessment');
                    echo $this->Form->control('term2_subject_1_portfolio');
                    echo $this->Form->control('term2_subject_1_total');
                    echo $this->Form->control('term2_subject_1_grade');
                    echo $this->Form->control('term2_subject_2');
                    echo $this->Form->control('term2_subject_2_periodic_test');
                    echo $this->Form->control('term2_subject_2_subject_enrichment');
                    echo $this->Form->control('term2_subject_2_multiple_assessment');
                    echo $this->Form->control('term2_subject_2_portfolio');
                    echo $this->Form->control('term2_subject_2_total');
                    echo $this->Form->control('term2_subject_2_grade');
                    echo $this->Form->control('term2_subject_3');
                    echo $this->Form->control('term2_subject_3_periodic_test');
                    echo $this->Form->control('term2_subject_3_subject_enrichment');
                    echo $this->Form->control('term2_subject_3_multiple_assessment');
                    echo $this->Form->control('term2_subject_3_portfolio');
                    echo $this->Form->control('term2_subject_3_total');
                    echo $this->Form->control('term2_subject_3_grade');
                    echo $this->Form->control('term2_subject_4');
                    echo $this->Form->control('term2_subject_4_periodic_test');
                    echo $this->Form->control('term2_subject_4_subject_enrichment');
                    echo $this->Form->control('term2_subject_4_multiple_assessment');
                    echo $this->Form->control('term2_subject_4_portfolio');
                    echo $this->Form->control('term2_subject_4_total');
                    echo $this->Form->control('term2_subject_4_grade');
                    echo $this->Form->control('term2_subject_5');
                    echo $this->Form->control('term2_subject_5_periodic_test');
                    echo $this->Form->control('term2_subject_5_subject_enrichment');
                    echo $this->Form->control('term2_subject_5_multiple_assessment');
                    echo $this->Form->control('term2_subject_5_portfolio');
                    echo $this->Form->control('term2_subject_5_total');
                    echo $this->Form->control('term2_subject_5_grade');
                    echo $this->Form->control('term2_subject_6');
                    echo $this->Form->control('term2_subject_6_periodic_test');
                    echo $this->Form->control('term2_subject_6_subject_enrichment');
                    echo $this->Form->control('term2_subject_6_multiple_assessment');
                    echo $this->Form->control('term2_subject_6_portfolio');
                    echo $this->Form->control('term2_subject_6_total');
                    echo $this->Form->control('term2_subject_6_grade');
                    echo $this->Form->control('term2_subject_7');
                    echo $this->Form->control('term2_subject_7_periodic_test');
                    echo $this->Form->control('term2_subject_7_subject_enrichment');
                    echo $this->Form->control('term2_subject_7_multiple_assessment');
                    echo $this->Form->control('term2_subject_7_portfolio');
                    echo $this->Form->control('term2_subject_7_total');
                    echo $this->Form->control('term2_subject_7_grade');
                    echo $this->Form->control('term2_total');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
