<div class="container mt-5">
     <div class="row ">
         <div class="column-responsive column-100">
             <div class="marks form content">
                 <?= $this->Form->create($mark, ) ?>
                 <fieldset>
                     <legend><?= __('Add Mark') ?></legend>
                     <div class="row mb-4">
                         <div class="col-md-6">
                             <div class="bg-light p-3 mb-3 rounded">
                                 <?= $this->Form->control('student_id', ['empty' => 'Select a Student', 'id' => 'student_id']) ?>
                             </div>
                             <div class="bg-light p-3 mb-3 rounded">
                                 <?= $this->Form->control('rollno', ['label' => 'Roll Number']) ?>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="bg-light p-3 rounded">
                                 <?= $this->Form->control('academic_year', ['label' => 'Academic Year']) ?>
                             </div>
                             <div class="bg-light p-3 mb-3 rounded">
                                 <?= $this->Form->control('class', ['id' => 'class', 'empty' => true, 'label' => 'Select Class']) ?>
                             </div>
                         </div>
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
                     <!-- Table for Subjects and Marks -->
                     <div class="table-responsive">
                         <table class="table table-bordered">
                             <thead>
                                 <tr>
                                     <th>Subject</th>
                                     <th>Exam Marks (80)</th>
                                     <th>CT Marks (10)</th>
                                     <th>PT Calc</th>
                                     <th>Periodic Test (5)</th>
                                     <th>Subject Enrichment (5)</th>
                                     <th>Multiple Assessment (5)</th>
                                     <th>Portfolio / Oral (5)</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <!-- Row for English (Term 1) -->
                                 <tr class="term1-fields common-subjects">
                                     <td>English (Term 1)</td>
                                     <td><?= $this->Form->control('term1_subject_1', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_1_ct', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_1_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_1_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_1_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_1_periodic_test', [
                                                'label' => false,
                                                'id' => 'term1_subject_1_periodic_test',
                                                'max' => 5,
                                                'step' => '0.1',
                                                'readonly' => true,
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_1_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_1_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_1_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- Row for English (Term 2) -->
                                 <tr class="term2-fields common-subjects">
                                     <td>English (Term 2)</td>
                                     <td><?= $this->Form->control('term2_subject_1', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_1_ct', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_1_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_1_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_1_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_1_periodic_test', [
                                                'label' => false,
                                                'id' => 'term2_subject_1_periodic_test',
                                                'max' => 5,
                                                'step' => '0.1',
                                                'readonly' => true,
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_1_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_1_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_1_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>

                                 <!-- Row for Hindi (Term 1) -->
                                 <tr class="term1-fields common-subjects">
                                     <td>Hindi (Term 1)</td>
                                     <td><?= $this->Form->control('term1_subject_2', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_2_ct', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_2_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_2_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_2_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_2_periodic_test', [
                                                'label' => false,
                                                'id' => 'term1_subject_2_periodic_test',
                                                'max' => 5,
                                                'step' => '0.1',
                                                'readonly' => true,
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_2_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_2_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_2_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- Row for Hindi (Term 2) -->
                                 <tr class="term2-fields common-subjects">
                                     <td>Hindi (Term 2)</td>
                                     <td><?= $this->Form->control('term2_subject_2', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_2_ct', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_2_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_2_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_2_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_2_periodic_test', [
                                                'label' => false,
                                                'id' => 'term2_subject_2_periodic_test',
                                                'max' => 5,
                                                'step' => '0.1',
                                                'readonly' => true,
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_2_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_2_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_2_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- marathi/sanskrit -->
                                 <tr class="term1-fields common-subjects">
                                     <td>marathi (Term 1)</td>
                                     <td><?= $this->Form->control('term1_subject_3', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_3_ct', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_3_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_3_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_3_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_3_periodic_test', [
                                                'label' => false,
                                                'id' => 'term1_subject_3_periodic_test',
                                                'max' => 5,
                                                'readonly' => true,
                                                'step' => '0.1',
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_3_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_3_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_3_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- Row for Marathi (Term 2) -->
                                 <tr class="term2-fields common-subjects">
                                     <td>Marathi (Term 2)</td>
                                     <td><?= $this->Form->control('term2_subject_3', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_3_ct', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_3_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_3_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_3_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_3_periodic_test', [
                                                'label' => false,
                                                'id' => 'term2_subject_3_periodic_test',
                                                'max' => 5,
                                                'readonly' => true,
                                                'step' => '0.1',
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_3_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_3_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_3_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- maths -->
                                 <tr class="term1-fields common-subjects">
                                     <td>Mathematics (Term 1)</td>
                                     <td><?= $this->Form->control('term1_subject_4', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_4_ct', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_4_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_4_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_4_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_4_periodic_test', [
                                                'label' => false,
                                                'id' => 'term1_subject_4_periodic_test',
                                                'max' => 5,
                                                'readonly' => true,
                                                'step' => '0.1',
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_4_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_4_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_4_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- Row for Mathematics (Term 2) -->
                                 <tr class="term2-fields common-subjects">
                                     <td>Mathematics (Term 2)</td>
                                     <td><?= $this->Form->control('term2_subject_4', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_4_ct', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_4_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_4_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_4_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_4_periodic_test', [
                                                'label' => false,
                                                'id' => 'term2_subject_4_periodic_test',
                                                'max' => 5,
                                                'readonly' => true,
                                                'step' => '0.1',
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_4_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_4_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_4_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- science -->
                                 <tr class="term1-fields class-5-10-subjects">
                                     <td>Science (Term 1)</td>
                                     <td><?= $this->Form->control('term1_subject_5', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_5_ct', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_5_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_5_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_5_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_5_periodic_test', [
                                                'label' => false,
                                                'id' => 'term1_subject_5_periodic_test',
                                                'max' => 5,
                                                'readonly' => true,
                                                'step' => '0.1',
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_5_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_5_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_5_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- Row for Science (Term 2) -->
                                 <tr class="term2-fields class-5-10-subjects ">
                                     <td>Science (Term 2)</td>
                                     <td><?= $this->Form->control('term2_subject_5', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_5_ct', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_5_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_5_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_5_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_5_periodic_test', [
                                                'label' => false,
                                                'id' => 'term2_subject_5_periodic_test',
                                                'max' => 5,
                                                'readonly' => true,
                                                'step' => '0.1',
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_5_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_5_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_5_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- social science -->
                                 <tr class="term1-fields class-5-10-subjects">
                                     <td>Social Science (Term 1)</td>
                                     <td><?= $this->Form->control('term1_subject_6', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_6_ct', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_6_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_6_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_6_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_6_periodic_test', [
                                                'label' => false,
                                                'id' => 'term1_subject_6_periodic_test',
                                                'step' => '0.1',
                                                'max' => 5,
                                                'readonly' => true,
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_6_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_6_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_6_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- Row for Social Science (Term 2) -->
                                 <tr class="term2-fields class-5-10-subjects">
                                     <td>Social Science (Term 2)</td>
                                     <td><?= $this->Form->control('term2_subject_6', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_6_ct', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_6_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_6_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_6_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_6_periodic_test', [
                                                'label' => false,
                                                'id' => 'term2_subject_6_periodic_test',
                                                'step' => '0.1',
                                                'max' => 5,
                                                'readonly' => true,
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_6_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_6_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_6_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- computer -->
                                 <tr class="term1-fields common-subjects">
                                     <td>Computer (Term 1)</td>
                                     <td><?= $this->Form->control('term1_subject_7', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_7_ct', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_7_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_7_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_7_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_7_periodic_test', [
                                                'label' => false,
                                                'id' => 'term1_subject_7_periodic_test',
                                                'max' => 5,
                                                'step' => '0.1',
                                                'readonly' => true,
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_7_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_7_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_7_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- Row for Computer (Term 2) -->
                                 <tr class="term2-fields common-subjects ">
                                     <td>Computer (Term 2)</td>
                                     <td><?= $this->Form->control('term2_subject_7', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_7_ct', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_7_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_7_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_7_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_7_periodic_test', [
                                                'label' => false,
                                                'id' => 'term2_subject_7_periodic_test',
                                                'max' => 5,
                                                'readonly' => true,
                                                'step' => '0.1',
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_7_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_7_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_7_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- evs  -->
                                 <tr class="term1-fields class-1-4-subjects">
                                     <td>EVS (Term 1)</td>
                                     <td><?= $this->Form->control('term1_subject_8', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_8_ct', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_8_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_8_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_8_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_8_periodic_test', [
                                                'label' => false,
                                                'id' => 'term1_subject_8_periodic_test',
                                                'max' => 5,
                                                'step' => '0.1',
                                                'readonly' => true,
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_8_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_8_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_8_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- Row for EVS (Term 2) -->
                                 <tr class="term2-fields class-1-4-subjects">
                                     <td>EVS (Term 2)</td>
                                     <td><?= $this->Form->control('term2_subject_8', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_8_ct', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_8_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_8_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_8_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_8_periodic_test', [
                                                'label' => false,
                                                'id' => 'term2_subject_8_periodic_test',
                                                'max' => 5,
                                                'step' => '0.1',
                                                'readonly' => true,
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_8_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_8_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_8_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- gk -->
                                 <tr class="term1-fields class-1-4-subjects">
                                     <td>GK (Term 1)</td>
                                     <td><?= $this->Form->control('term1_subject_9', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_9_ct', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_9_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_9_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term1_subject_9_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term1_subject_9_periodic_test', [
                                                'label' => false,
                                                'id' => 'term1_subject_9_periodic_test',
                                                'max' => 5,
                                                'step' => '0.1',
                                                'readonly' => true,
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_9_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_9_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term1_subject_9_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>
                                 <!-- Row for GK (Term 2) -->
                                 <tr class="term2-fields class-1-4-subjects">
                                     <td>GK (Term 2)</td>
                                     <td><?= $this->Form->control('term2_subject_9', ['label' => false, 'step' => '0.1', 'max' => 80]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_9_ct', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_9_ct', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_9_ptcal', ['label' => false, 'step' => '0.1', 'id' => 'term2_subject_9_ptcal', 'type' => 'number']) ?></td>
                                     <td><?= $this->Form->control('term2_subject_9_periodic_test', [
                                                'label' => false,
                                                'id' => 'term2_subject_9_periodic_test',
                                                'max' => 5,
                                                'step' => '0.1',
                                                'readonly' => true,
                                            ]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_9_subject_enrichment', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_9_multiple_assessment', ['label' => false, 'step' => '0.1', 'max' => 10]) ?></td>
                                     <td><?= $this->Form->control('term2_subject_9_portfolio', ['label' => false, 'step' => '0.1', 'max' => 5]) ?></td>
                                 </tr>

                             </tbody>
                         </table>
                         <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                         <?= $this->Form->end() ?>
                     </div>

                     <!-- Include Bootstrap JS and jQuery -->
                     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
                     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
                     <!-- terms selection -->
                     <script>
                         $(document).ready(function() {
                             // Initially hide all subject fields for both terms and common subjects
                             $('.class-1-4-subjects, .class-5-10-subjects, .term1-fields, .term2-fields, .common-subjects').hide();

                             // Handle class selection
                             $('#class').change(function() {
                                 var classValue = $(this).val();

                                 // Reset visibility of term fields and common subjects after class change
                                 $('.term1-fields, .term2-fields, .common-subjects').hide();

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

                                 // Hide all term-specific fields initially until a term is selected
                                 $('.term1-fields, .term2-fields').hide();
                             });

                             // Handle term selection
                             $('#term-select').change(function() {
                                 var selectedTerm = $(this).val();
                                 var classValue = $('#class').val();

                                 // Hide all term fields and common subjects first
                                 $('.term1-fields, .term2-fields, .common-subjects').hide();

                                 // Show fields based on term and class selection, and display common subjects
                                 if (selectedTerm === 'Term 1') {
                                     $('.term1-fields').hide();
                                     $('.common-subjects.term1-fields').show(); // Show Term 1 common subjects

                                     if (classValue >= 1 && classValue <= 4) {
                                         $('.class-1-4-subjects.term1-fields').show();
                                     } else if (classValue >= 5 && classValue <= 10) {
                                         $('.class-5-10-subjects.term1-fields').show();
                                     }
                                 } else if (selectedTerm === 'Term 2') {
                                     $('.term2-fields').hide();
                                     $('.common-subjects.term2-fields').show(); // Show Term 2 common subjects

                                     if (classValue >= 1 && classValue <= 4) {
                                         $('.class-1-4-subjects.term2-fields').show();
                                     } else if (classValue >= 5 && classValue <= 10) {
                                         $('.class-5-10-subjects.term2-fields').show();
                                     }
                                 }
                             });
                         });
                     </script>

                     <!-- pt calculation -->
                     <script>
                         document.addEventListener('DOMContentLoaded', function() {
                             // Function to calculate periodic test marks based on ptcal value
                             function calculatePeriodicTest(ctId, ptcalId, periodicTestId) {
                                 var ptcalValue = parseFloat(document.getElementById(ptcalId)?.value);
                                 var ctValue = parseFloat(document.getElementById(ctId)?.value);
                                 var classValue = document.getElementById('class')?.value;

                                 if (isNaN(ptcalValue) || isNaN(ctValue) || !classValue) return;

                                 var factor = 1;

                                 if (classValue === '1' || classValue === '2') {
                                     factor = 1;
                                 } else if (parseFloat(classValue) >= 3 && parseFloat(classValue) <= 5) {
                                     factor = 0.2;
                                 } else if (parseFloat(classValue) >= 6 && parseFloat(classValue) <= 10) {
                                     factor = 0.125;
                                 }

                                 var periodicTestValue;
                                 if (parseFloat(classValue) >= 6 && parseFloat(classValue) <= 10) {
                                     periodicTestValue = ((ctValue + ptcalValue) * factor).toFixed(1);
                                 } else {
                                     periodicTestValue = (ptcalValue * factor).toFixed(1);
                                 }

                                 document.getElementById(periodicTestId).value = !isNaN(periodicTestValue) ? periodicTestValue : '';
                             }

                             // Function to attach event listeners to all subject fields
                             function attachListeners() {
                                 for (let i = 1; i <= 9; i++) {
                                     // Term 1 subjects
                                     let ptcalId1 = 'term1_subject_' + i + '_ptcal';
                                     let periodicTestId1 = 'term1_subject_' + i + '_periodic_test';
                                     let ctId1 = 'term1_subject_' + i + '_ct';

                                     document.getElementById(ptcalId1)?.addEventListener('input', function() {
                                         calculatePeriodicTest(ctId1, ptcalId1, periodicTestId1);
                                     });

                                     // Term 2 subjects
                                     let ptcalId2 = 'term2_subject_' + i + '_ptcal';
                                     let periodicTestId2 = 'term2_subject_' + i + '_periodic_test';
                                     let ctId2 = 'term2_subject_' + i + '_ct';

                                     document.getElementById(ptcalId2)?.addEventListener('input', function() {
                                         calculatePeriodicTest(ctId2, ptcalId2, periodicTestId2);
                                     });
                                 }
                             }

                             // Trigger calculations on class change
                             document.getElementById('class')?.addEventListener('change', function() {
                                 for (let i = 1; i <= 9; i++) {
                                     document.getElementById('term1_subject_' + i + '_ptcal')?.dispatchEvent(new Event('input'));
                                     document.getElementById('term2_subject_' + i + '_ptcal')?.dispatchEvent(new Event('input'));
                                 }
                             });

                             // Attach event listeners when the page loads
                             attachListeners();
                         });
                     </script>


                     <!-- student search -->
                     <script>
                         $(document).ready(function() {
                             // Initialize Select2 on the student dropdown
                             $('#student_id').select2({
                                 placeholder: "Search for a student",
                                 allowClear: true
                             });

                             // Populate the dropdown options with student names and IDs
                             Object.keys(studentsData).forEach(function(studentId) {
                                 const studentName = studentsData[studentId].name;
                                 $('#student_id').append(new Option(studentName, studentId));
                             });
                             // Event listener to display the selected student's class
                             $('#student_id').on('change', function() {
                                 const selectedId = $(this).val();

                                 // Log to confirm the selectedId and student data
                                 console.log('Selected ID:', selectedId);
                                 console.log('Student Data:', studentsData[selectedId]);


                             });
                         });
                     </script>