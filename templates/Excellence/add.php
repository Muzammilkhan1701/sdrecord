<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Co-Scholastic'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="excellence form content">
            <?= $this->Form->create($excellence) ?>
            <fieldset>
                <legend><?= __('Add Co-Scholastic') ?></legend>

                <!-- Student Selection Dropdown -->
                    <?= $this->Form->control('student_id', ['label' => 'Student', 'options' => $students, 'empty' => true])?>
  <?=$this->Form->control('academic_year', ['label' => 'Academic Year', 'options' => $academicYears]);// Dropdown for academic year?>     <?=$this->Form->control('class', ['label' => 'Class', 'options' => $classes]); // Dropdown for class?>

                    
                    <!-- Term Selection Dropdown -->
                    <div class="mb-5 fs-4">
                        <?= $this->Form->control('term', [
                            'type' => 'select',
                            'options' => ['Term 1' => 'Term 1', 'Term 2' => 'Term 2'],
                            'empty' => 'Select Term',
                            'id' => 'term-select',
                            'required' => true,
                        ]) ?>
                    </div>

                    <!-- accordian start -->
                    <div class="accordion" id="subjectsAccordion">
                        <!-- Subject 1 - English -->
                        <div class="card mb-5 fs-4">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link fs-3 collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Enter Grade
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#subjectsAccordion">
                                <div class="card-body">
                                    <!-- Fields for Term 1 -->
                                    <div class="term1-fields">
                                        <?= $this->Form->control('term1_work_education', ['label' => 'Work Education (Term 1)', ]) ?>
                                        <?= $this->Form->control('term1_art_education', ['label' => 'Art Education (Term 1)']) ?>
                                        <?= $this->Form->control('term1_physical_education', ['label' => 'Physical Education (Term 1)']) ?>
                                        <?= $this->Form->control('term1_discipline', ['label' => 'Discipline (Term 1)']) ?>
                                    </div>

                                    <!-- Fields for Term 2 -->
                                    <div class="term2-fields ">
                                        <?= $this->Form->control('term2_work_education', ['label' => 'Work Education (Term 2)']) ?>
                                        <?= $this->Form->control('term2_art_education', ['label' => 'Art Education (Term 2)']) ?>
                                        <?= $this->Form->control('term2_physical_education', ['label' => 'Physical Education (Term 2)']) ?>
                                        <?= $this->Form->control('term2_discipline', ['label' => 'Discipline (Term 2)']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion End -->


                    <?php
                    // echo $this->Form->control('student_id', ['label' => 'Student','options' => $students, 'empty' => true]);
                    // echo $this->Form->control('academic_year', ['label' => 'Academic Year', 'options' => $academicYears]); // Dropdown for academic year
                    // echo $this->Form->control('class', ['label' => 'Class', 'options' => $classes]); // Dropdown for class
                    // echo $this->Form->control('term1_work_education');
                    // echo $this->Form->control('term1_art_education');
                    // echo $this->Form->control('term1_physical_education');
                    // echo $this->Form->control('term1_discipline');
                    // echo $this->Form->control('term2_work_education');
                    // echo $this->Form->control('term2_art_education');
                    // echo $this->Form->control('term2_physical_education');
                    // echo $this->Form->control('term2_discipline');
                    ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
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
        // Handle term selection
        $('#term-select').change(function() {
            var selectedTerm = $(this).val();
            if (selectedTerm === 'Term 1') {
                $('.term1-fields').show();
                $('.term2-fields').hide();
            } else if (selectedTerm === 'Term 2') {
                $('.term1-fields').hide();
                $('.term2-fields').show();
            } else {
                $('.term1-fields, .term2-fields').hide();
            }
        });

        // Initially hide Term 2 fields
        $('.term2-fields').hide();
    });
</script>