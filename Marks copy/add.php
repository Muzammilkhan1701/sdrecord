<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Marks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="marks form content">
            <?= $this->Form->create($mark, ['url' => ['action' => 'add']]) ?>
            <fieldset>
                <legend><?= __('Add Mark') ?></legend>

                <div class="mb-5">
                    <!-- Other fields outside the accordion -->
                    <?= $this->Form->control('student_id', ['options' => $students, 'empty' => true]) ?>
                    <?= $this->Form->control('academic_year') ?>
                    <?= $this->Form->control('rollno') ?>
                    <?= $this->Form->control('class', ['id' => 'class']) ?>
                </div>
                
                <!-- Dropdown to select Term 1 or Term 2 -->
                <div class="mb-5">
                    <?= $this->Form->control('term', [
                        'type' => 'select', 
                        'options' => ['Term 1' => 'Term 1', 'Term 2' => 'Term 2'], 
                        'empty' => 'Select Term', 
                        'id' => 'term-select',
                          'required' => true,
                    ]) ?>
                </div>

                <!-- Accordion Start -->
                <div class="accordion" id="subjectsAccordion">
                    <!-- Subject 1 - English -->
                    <div class="card mb-5">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link fs-3 collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    English
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#subjectsAccordion">
                            <div class="card-body">
                                <!-- Fields for Term 1 -->
                                <div class="term1-fields">
                                    <?= $this->Form->control('term1_subject_1', ['label' => 'Exam Marks (Term 1)','max' => 80]) ?>
                                    <?= $this->Form->control('term1_subject_1_ct'); ?>

                                    <?= $this->Form->control('term1_subject_1_ptcal', ['label' => 'PT Calc (Term 1)', 'id' => 'term1_subject_1_ptcal', 'type' => 'number']) ?>

                                <?= $this->Form->control('term1_subject_1_periodic_test', [
                                    'label' => 'Periodic Test (Term 1)',
                                    'id' => 'term1_subject_1_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term1_subject_1_subject_enrichment', ['label' => 'Subject Enrichment (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_1_multiple_assessment', ['label' => 'Multiple Assessment (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_1_portfolio', ['label' => 'Portfolio (Term 1)','max' => 5]) ?>
                                    <!-- <?= $this->Form->control('term1_subject_1_total', ['label' => 'Total (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_1_grade', ['label' => 'Grade (Term 1)','max' => 5]) ?> -->
                                </div>
                                
                                <!-- Fields for Term 2 -->
                                <div class="term2-fields ">
                                    <?= $this->Form->control('term2_subject_1', ['label' => 'Exam Marks (Term 2)','max' => 80]) ?>
                                    <?= $this->Form->control('term2_subject_1_ct'); ?>
                                    <?= $this->Form->control('term2_subject_1_ptcal', ['label' => 'PT Calc (Term 2)', 'id' => 'term2_subject_1_ptcal', 'type' => 'number']) ?>

                                <?= $this->Form->control('term1_subject_5_periodic_test', [
                                    'label' => 'Periodic Test (Term 2)',
                                    'id' => 'term2_subject_1_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term2_subject_1_subject_enrichment', ['label' => 'Subject Enrichment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_1_multiple_assessment', ['label' => 'Multiple Assessment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_1_portfolio', ['label' => 'Portfolio (Term 2)','max' => 5]) ?>
                                    <!-- <?= $this->Form->control('term2_subject_1_total', ['label' => 'Total (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_1_grade', ['label' => 'Grade (Term 2)','max' => 5]) ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Subject 2 - Hindi -->
                    <div class="card mb-5">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed fs-3 text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Hindi
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#subjectsAccordion">
                            <div class="card-body">
                                <!-- Fields for Term 1 -->
                                <div class="term1-fields">
                                    <?= $this->Form->control('term1_subject_2', ['label' => 'Exam Marks (Term 1)','max' => 80]) ?>
                                                                       <?=  $this->Form->control('term1_subject_2_ct'); ?>
                                    <?= $this->Form->control('term1_subject_2_ptcal', ['label' => 'PT Calc (Term 1)', 'id' => 'term1_subject_2_ptcal', 'type' => 'number']) ?>

                                <?= $this->Form->control('term1_subject_2_periodic_test', [
                                    'label' => 'Periodic Test (Term 1)',
                                    'id' => 'term1_subject_2_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term1_subject_2_subject_enrichment', ['label' => 'Subject Enrichment (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_2_multiple_assessment', ['label' => 'Multiple Assessment (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_2_portfolio', ['label' => 'Portfolio (Term 1)','max' => 5]) ?>
                                    <!-- <?= $this->Form->control('term1_subject_2_total', ['label' => 'Total (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_2_grade', ['label' => 'Grade (Term 1)','max' => 5]) ?> -->
                                </div>
                                
                                <!-- Fields for Term 2 -->
                                <div class="term2-fields">
                                    <?= $this->Form->control('term2_subject_2', ['label' => 'Exam Marks (Term 2)','max' => 80]) ?>
                                                                       <?=  $this->Form->control('term2_subject_2_ct'); ?>
                                    <?= $this->Form->control('term2_subject_2_ptcal', ['label' => 'PT Calc (Term 2)', 'id' => 'term2_subject_2_ptcal', 'type' => 'number']) ?>

                                <?= $this->Form->control('term2_subject_2_periodic_test', [
                                    'label' => 'Periodic Test (Term 2)',
                                    'id' => 'term2_subject_2_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term2_subject_2_subject_enrichment', ['label' => 'Subject Enrichment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_2_multiple_assessment', ['label' => 'Multiple Assessment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_2_portfolio', ['label' => 'Portfolio (Term 2)','max' => 5]) ?>
                                    <!-- <?= $this->Form->control('term2_subject_2_total', ['label' => 'Total (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_2_grade', ['label' => 'Grade (Term 2)','max' => 5]) ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Subject 3 - Marathi/Sanskrit -->
                    <div class="card mb-5">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed fs-3 text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Marathi/Sanskrit
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#subjectsAccordion">
                            <div class="card-body">
                                <!-- Fields for Term 1 -->
                                <div class="term1-fields">
                                    <?= $this->Form->control('term1_subject_3', ['label' => 'Exam Marks (Term 1)','max' => 5,'max' => 80]) ?>
                                                                        <?=   $this->Form->control('term1_subject_3_ct');?>
                                    <?= $this->Form->control('term1_subject_3_ptcal', ['label' => 'PT Calc (Term 1)', 'id' => 'term1_subject_3_ptcal', 'type' => 'number',]) ?>

                                <?= $this->Form->control('term1_subject_3_periodic_test', [
                                    'label' => 'Periodic Test (Term 1)',
                                    'id' => 'term1_subject_3_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term1_subject_3_subject_enrichment', ['label' => 'Subject Enrichment (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_3_multiple_assessment', ['label' => 'Multiple Assessment (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_3_portfolio', ['label' => 'Portfolio (Term 1)','max' => 5]) ?>
                                    <!-- <?= $this->Form->control('term1_subject_3_total', ['label' => 'Total (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_3_grade', ['label' => 'Grade (Term 1)','max' => 5]) ?> -->
                                </div>
                                
                                <!-- Fields for Term 2 -->
                                <div class="term2-fields">
                                    <?= $this->Form->control('term2_subject_3', ['label' => 'Exam Marks (Term 2)','max' => 80]) ?>
                                                                        <?=   $this->Form->control('term2_subject_3_ct'); ?>
                                    <?= $this->Form->control('term2_subject_3_ptcal', ['label' => 'PT Calc (Term 2)', 'id' => 'term2_subject_3_ptcal', 'type' => 'number', ]) ?>

                                <?= $this->Form->control('term2_subject_3_periodic_test', [
                                    'label' => 'Periodic Test (Term 2)',
                                    'id' => 'term2_subject_3_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term2_subject_3_subject_enrichment', ['label' => 'Subject Enrichment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_3_multiple_assessment', ['label' => 'Multiple Assessment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_3_portfolio', ['label' => 'Portfolio (Term 2)','max' => 5]) ?>
                                    <!-- <?= $this->Form->control('term2_subject_3_total', ['label' => 'Total (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_3_grade', ['label' => 'Grade (Term 2)','max' => 5]) ?> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Subject 4 - Maths -->
                    <div class="card mb-5">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed fs-3 text-dark" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Mathematics
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#subjectsAccordion">
                            <div class="card-body">
                                <!-- Fields for Term 1 -->
                                <div class="term1-fields">
                                    <?= $this->Form->control('term1_subject_4', ['label' => 'Exam Marks (Term 1)','max' => 80]) ?>
                                                                        <?=  $this->Form->control('term1_subject_4_ct'); ?>
                                    <?= $this->Form->control('term1_subject_4_ptcal', ['label' => 'PT Calc (Term 1)', 'id' => 'term1_subject_4_ptcal', 'type' => 'number', ]) ?>

                                <?= $this->Form->control('term1_subject_4_periodic_test', [
                                    'label' => 'Periodic Test (Term 1)',
                                    'id' => 'term1_subject_4_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term1_subject_4_subject_enrichment', ['label' => 'Subject Enrichment (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_4_multiple_assessment', ['label' => 'Multiple Assessment (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_4_portfolio', ['label' => 'Portfolio (Term 1)','max' => 5]) ?>
                                    <!-- <?= $this->Form->control('term1_subject_4_total', ['label' => 'Total (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_4_grade', ['label' => 'Grade (Term 1)','max' => 5]) ?> -->
                                </div>
                                
                                <!-- Fields for Term 2 -->
                                <div class="term2-fields">
                                    <?= $this->Form->control('term2_subject_4', ['label' => 'Exam Marks (Term 2)','max' => 80]) ?>
                                                                       <?= $this->Form->control('term2_subject_4_ct');?>
                                    <?= $this->Form->control('term2_subject_4_ptcal', ['label' => 'PT Calc (Term 2)', 'id' => 'term2_subject_4_ptcal', 'type' => 'number', ]) ?>

                                <?= $this->Form->control('term2_subject_4_periodic_test', [
                                    'label' => 'Periodic Test (Term 2)',
                                    'id' => 'term2_subject_4_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term2_subject_4_subject_enrichment', ['label' => 'Subject Enrichment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_4_multiple_assessment', ['label' => 'Multiple Assessment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_4_portfolio', ['label' => 'Portfolio (Term 2)','max' => 5]) ?>
                                    <!-- <?= $this->Form->control('term2_subject_4_total', ['label' => 'Total (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_4_grade', ['label' => 'Grade (Term 2)','max' => 5]) ?> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Subject 5 - Science -->
                    <div class="card mb-5 class-5-10-subjects">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed fs-3 text-dark" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Science
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#subjectsAccordion">
                            <div class="card-body">
                                <!-- Fields for Term 1 -->
                                <div class="term1-fields">
                                 <?= $this->Form->control('term1_subject_5', ['label' => 'Exam Marks (Term 1)','max' => 80]) ?>
                                                                     <?= $this->Form->control('term1_subject_5_ct');?>   

                                <?= $this->Form->control('term1_subject_5_ptcal', ['label' => 'PT Calc (Term 1)', 'id' => 'term1_subject_5_ptcal', 'type' => 'number',]) ?>

                                <?= $this->Form->control('term1_subject_5_periodic_test', [
                                    'label' => 'Periodic Test (Term 1)',
                                    'id' => 'term1_subject_5_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>

                                <?= $this->Form->control('term1_subject_5_subject_enrichment', ['label' => 'Subject Enrichment (Term 1)','max' => 5]) ?>
                                <?= $this->Form->control('term1_subject_5_multiple_assessment', ['label' => 'Multiple Assessment (Term 1)','max' => 5]) ?>
                                <?= $this->Form->control('term1_subject_5_portfolio', ['label' => 'Portfolio (Term 1)','max' => 5]) ?>
                            </div>
                                
                                <!-- Fields for Term 2 -->
                                <div class="term2-fields">
                                    <?= $this->Form->control('term2_subject_5', ['label' => 'Exam Marks (Term 2)','max' => 80]) ?>
                                                                       <?=   $this->Form->control('term2_subject_5_ct');?>
                                    <?= $this->Form->control('term2_subject_5_ptcal', ['label' => 'PT Calc (Term 2)', 'id' => 'term2_subject_5_ptcal', 'type' => 'number',]) ?>

                                <?= $this->Form->control('term2_subject_5_periodic_test', [
                                    'label' => 'Periodic Test (Term 2)',
                                    'id' => 'term2_subject_5_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term2_subject_5_subject_enrichment', ['label' => 'Subject Enrichment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_5_multiple_assessment', ['label' => 'Multiple Assessment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_5_portfolio', ['label' => 'Portfolio (Term 2)','max' => 5]) ?>
                                    <!-- <?= $this->Form->control('term2_subject_5_total', ['label' => 'Total (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_5_grade', ['label' => 'Grade (Term 2)','max' => 5]) ?> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Subject 6 - Social Science -->
                    <div class="card mb-5 class-5-10-subjects">
                        <div class="card-header" id="headingSix">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed fs-3 text-dark" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Social Science
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#subjectsAccordion">
                            <div class="card-body">
                                <!-- Fields for Term 1 -->
                                <div class="term1-fields">
                                    <?= $this->Form->control('term1_subject_6', ['label' => 'Exam Marks (Term 1)','max' => 80]) ?>
                                                                        <?= $this->Form->control('term1_subject_6_ct');?>
                                    <?= $this->Form->control('term1_subject_6_ptcal', ['label' => 'PT Calc (Term 1)', 'id' => 'term1_subject_6_ptcal', 'type' => 'number',]) ?>

                                <?= $this->Form->control('term1_subject_6_periodic_test', [
                                    'label' => 'Periodic Test (Term 1)',
                                    'id' => 'term1_subject_6_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term1_subject_6_subject_enrichment', ['label' => 'Subject Enrichment (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_6_multiple_assessment', ['label' => 'Multiple Assessment (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_6_portfolio', ['label' => 'Portfolio (Term 1)','max' => 5]) ?>
                                    <!-- <?= $this->Form->control('term1_subject_6_total', ['label' => 'Total (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_6_grade', ['label' => 'Grade (Term 1)','max' => 5]) ?> -->
                                </div>
                                
                                <!-- Fields for Term 2 -->
                                <div class="term2-fields">
                                    <?= $this->Form->control('term2_subject_6', ['label' => 'Exam Marks (Term 2)','max' => 80]) ?>
                                                                        <?=$this->Form->control('term2_subject_6_ct');?>
                                    <?= $this->Form->control('term2_subject_6_ptcal', ['label' => 'PT Calc (Term 2)', 'id' => 'term2_subject_6_ptcal', 'type' => 'number',]) ?>

                                <?= $this->Form->control('term2_subject_6_periodic_test', [
                                    'label' => 'Periodic Test (Term 2)',
                                    'id' => 'term2_subject_6_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term2_subject_6_subject_enrichment', ['label' => 'Subject Enrichment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_6_multiple_assessment', ['label' => 'Multiple Assessment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_6_portfolio', ['label' => 'Portfolio (Term 2)','max' => 5]) ?>
                                    <!-- <?= $this->Form->control('term2_subject_6_total', ['label' => 'Total (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_6_grade', ['label' => 'Grade (Term 2)','max' => 5]) ?> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Subject 7 - Computers -->
                    <div class="card mb-5">
                        <div class="card-header" id="headingSeven">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed fs-3 text-dark" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Computers
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#subjectsAccordion">
                            <div class="card-body">
                                <!-- Fields for Term 1 -->
                                <div class="term1-fields">
                                    <?= $this->Form->control('term1_subject_7', ['label' => 'Exam Marks (Term 1)','max' => 80,]) ?>
                                                                        <?= $this->Form->control('term1_subject_7_ct');?>
                                    <?= $this->Form->control('term1_subject_7_ptcal', ['label' => 'PT Calc (Term 1)', 'id' => 'term1_subject_7_ptcal', 'type' => 'number', 'max' => 25]) ?>

                                <?= $this->Form->control('term1_subject_7_periodic_test', [
                                    'label' => 'Periodic Test (Term 1)',
                                    'id' => 'term1_subject_7_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term1_subject_7_subject_enrichment', ['label' => 'Subject Enrichment (Term 1)','max' => 5,   ]) ?>
                                    <?= $this->Form->control('term1_subject_7_multiple_assessment', ['label' => 'Multiple Assessment (Term 1)','max' => 5,   ]) ?>
                                    <?= $this->Form->control('term1_subject_7_portfolio', ['label' => 'Portfolio (Term 1)','max' => 5,   ]) ?>
                                    <!-- <?= $this->Form->control('term1_subject_7_total', ['label' => 'Total (Term 1)','max' => 5,   ]) ?>
                                    <?= $this->Form->control('term1_subject_7_grade', ['label' => 'Grade (Term 1)','max' => 5,   ]) ?> -->
                                </div>
                                
                                <!-- Fields for Term 2 -->
                                <div class="term2-fields">
                                    <?= $this->Form->control('term2_subject_7', ['label' => 'Exam Marks (Term 2)','max' => 80,   ]) ?>
                                                                        <?= $this->Form->control('term2_subject_7_ct');?>
                                    <?= $this->Form->control('term2_subject_7_ptcal', ['label' => 'PT Calc (Term 2)', 'id' => 'term2_subject_7_ptcal', 'type' => 'number', ]) ?>

                                <?= $this->Form->control('term2_subject_7_periodic_test', [
                                    'label' => 'Periodic Test (Term 2)',
                                    'id' => 'term2_subject_7_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term2_subject_7_subject_enrichment', ['label' => 'Subject Enrichment (Term 2)','max' => 5,   ]) ?>
                                    <?= $this->Form->control('term2_subject_7_multiple_assessment', ['label' => 'Multiple Assessment (Term 2)','max' => 5,   ]) ?>
                                    <?= $this->Form->control('term2_subject_7_portfolio', ['label' => 'Portfolio (Term 2)','max' => 5,   ]) ?>
                                    <!-- <?= $this->Form->control('term2_subject_7_total', ['label' => 'Total (Term 2)','max' => 5,   ]) ?>
                                    <?= $this->Form->control('term2_subject_7_grade', ['label' => 'Grade (Term 2)','max' => 5,   ]) ?> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Subject 8 - Social Science -->
                    <div class="card mb-5 class-1-4-subjects">
                        <div class="card-header" id="headingEight">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed fs-3 text-dark" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    EVS
                                </button>
                            </h2>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#subjectsAccordion">
                            <div class="card-body">
                                <!-- Fields for Term 1 -->
                                <div class="term1-fields">
                                    <?= $this->Form->control('term1_subject_8', ['label' => 'Exam Marks (Term 1)','max' => 80]) ?>
                                                                        <?= $this->Form->control('term1_subject_8_ct');?>
                                    <?= $this->Form->control('term1_subject_8_ptcal', ['label' => 'PT Calc (Term 1)', 'id' => 'term1_subject_8_ptcal', 'type' => 'number',]) ?>

                                <?= $this->Form->control('term1_subject_8_periodic_test', [
                                    'label' => 'Periodic Test (Term 1)',
                                    'id' => 'term1_subject_8_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term1_subject_8_subject_enrichment', ['label' => 'Subject Enrichment (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_8_multiple_assessment', ['label' => 'Multiple Assessment (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_8_portfolio', ['label' => 'Portfolio (Term 1)','max' => 5]) ?>
                                    <!-- <?= $this->Form->control('term1_subject_8_total', ['label' => 'Total (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_8_grade', ['label' => 'Grade (Term 1)','max' => 5]) ?> -->
                                </div>
                                
                                <!-- Fields for Term 2 -->
                                <div class="term2-fields">
                                    <?= $this->Form->control('term2_subject_8', ['label' => 'Exam Marks (Term 2)','max' => 80]) ?>
                                                                        <?= $this->Form->control('term2_subject_8_ct');?>
                                    <?= $this->Form->control('term2_subject_8_ptcal', ['label' => 'PT Calc (Term 2)', 'id' => 'term2_subject_8_ptcal', 'type' => 'number',]) ?>

                                <?= $this->Form->control('term2_subject_8_periodic_test', [
                                    'label' => 'Periodic Test (Term 2)',
                                    'id' => 'term2_subject_8_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term2_subject_8_subject_enrichment', ['label' => 'Subject Enrichment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_8_multiple_assessment', ['label' => 'Multiple Assessment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_8_portfolio', ['label' => 'Portfolio (Term 2)','max' => 5]) ?>
                                    <!-- <?= $this->Form->control('term2_subject_8_total', ['label' => 'Total (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_8_grade', ['label' => 'Grade (Term 2)','max' => 5]) ?> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Subject 9 - Social Science -->
                    <div class="card mb-5 class-1-4-subjects">
                        <div class="card-header" id="headingNine">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed fs-3 text-dark" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    GK
                                </button>
                            </h2>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#subjectsAccordion">
                            <div class="card-body">
                                <!-- Fields for Term 1 -->
                                <div class="term1-fields">
                                    <?= $this->Form->control('term1_subject_9', ['label' => 'Exam Marks (Term 1)','max' => 80]) ?>
                                                                        <?= $this->Form->control('term1_subject_9_ct');?>
                                    <?= $this->Form->control('term1_subject_9_ptcal', ['label' => 'PT Calc (Term 1)', 'id' => 'term1_subject_9_ptcal', 'type' => 'number', ]) ?>

                                <?= $this->Form->control('term1_subject_9_periodic_test', [
                                    'label' => 'Periodic Test (Term 1)',
                                    'id' => 'term1_subject_9_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual change9
                                ]) ?>
                                    <?= $this->Form->control('term1_subject_9_subject_enrichment', ['label' => 'Subject Enrichment (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_9_multiple_assessment', ['label' => 'Multiple Assessment (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_9_portfolio', ['label' => 'Portfolio (Term 1)','max' => 5]) ?>
                                    <!-- <?= $this->Form->control('term1_subject_9_total', ['label' => 'Total (Term 1)','max' => 5]) ?>
                                    <?= $this->Form->control('term1_subject_9_grade', ['label' => 'Grade (Term 1)','max' => 5]) ?> -->
                                </div>
                                
                                <!-- Fields for Term 2 -->
                                <div class="term2-fields">
                                    <?= $this->Form->control('term2_subject_9', ['label' => 'Exam Marks (Term 2)','max' => 80]) ?>
                                                                        <?= $this->Form->control('term2_subject_9_ct'); ?>
                                    <?= $this->Form->control('term2_subject_9_ptcal', ['label' => 'PT Calc (Term 2)', 'id' => 'term2_subject_9_ptcal', 'type' => 'number', 'max' => 25]) ?>

                                <?= $this->Form->control('term2_subject_9_periodic_test', [
                                    'label' => 'Periodic Test (Term 2)',
                                    'id' => 'term2_subject_9_periodic_test',
                                    'max' => 5,
                                    'readonly' => true,  // Make this field read-only to prevent manual changes
                                ]) ?>
                                    <?= $this->Form->control('term2_subject_9_subject_enrichment', ['label' => 'Subject Enrichment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_9_multiple_assessment', ['label' => 'Multiple Assessment (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_9_portfolio', ['label' => 'Portfolio (Term 2)','max' => 5]) ?>
                                    <!-- <?= $this->Form->control('term2_subject_9_total', ['label' => 'Total (Term 2)','max' => 5]) ?>
                                    <?= $this->Form->control('term2_subject_9_grade', ['label' => 'Grade (Term 2)','max' => 5]) ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Repeat similar collapsible sections for other subjects like Hindi, Science, etc. -->
                </div>
                <!-- Accordion End -->
            </fieldset>

            <?= $this->Form->button(__('Add Co-Scholastic Grade')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        // Initially hide all subject fields
        $('.class-1-4-subjects, .class-5-10-subjects').hide();

        // Handle class selection
        $('#class').change(function() {
            var classValue = $(this).val();

            // Show appropriate subjects based on the selected class
            if (classValue >= 1 && classValue <= 4) {
                $('.class-1-4-subjects').show();
                $('.class-5-10-subjects').hide();
            } else if (classValue >= 5 && classValue <= 10) {
                $('.class-5-10-subjects').show();
                $('.class-1-4-subjects').hide();
            } else {
                $('.class-1-4-subjects, .class-5-10-subjects').hide();
            }
        });

        // Attach event listeners for periodic test calculations
        function calculatePeriodicTest(ptcalId, periodicTestId) {
            var ptcalValue = parseFloat(document.getElementById(ptcalId).value);
            var classValue = document.getElementById('class').value;
            var factor = 0;

            if (classValue >= 1 && classValue <= 2) {
                factor = 0;  // No calculation for 1st and 2nd classes
            } else if (classValue >= 3 && classValue <= 4) {
                factor = 0.2;  // 20% for 3rd and 4th classes
            } else if (classValue >= 5 && classValue <= 10) {
                factor = 0.125;  // 12.5% for 5th to 10th classes
            }

            if (!isNaN(ptcalValue) && factor > 0) {
                var periodicTestValue = Math.round(ptcalValue * factor);
                document.getElementById(periodicTestId).value = periodicTestValue;
            } else {
                document.getElementById(periodicTestId).value = factor === 0 ? 'No calculation' : '';
            }
        }

        // Attach listeners for each subject's periodic test
        function attachListeners() {
            for (var i = 1; i <= 9; i++) {
                (function(i) {
                    var ptcalId1 = 'term1_subject_' + i + '_ptcal';
                    var periodicTestId1 = 'term1_subject_' + i + '_periodic_test';

                    document.getElementById(ptcalId1).addEventListener('input', function() {
                        calculatePeriodicTest(ptcalId1, periodicTestId1);
                    });
                })(i);
            }
        }

        // Initialize periodic test listeners
        attachListeners();
    });
</script>

