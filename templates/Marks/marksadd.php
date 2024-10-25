 <div class="container mt-5">
    <div class="row ">
        <div class="column-responsive column-100">
            <div class="marks form content">
            <?= $this->Form->create($mark) ?>
                <fieldset>
                    <legend><?= __('Add Mark') ?></legend>

                    <!-- Other fields outside the accordion -->
                    <!-- <div class="mb-3">
                        <?= $this->Form->control('student_id', ['options' => $students, 'empty' => true, 'label' => 'Select Student']) ?>
                        <?= $this->Form->control('academic_year', ['label' => 'Academic Year']) ?>
                        <?= $this->Form->control('rollno', ['label' => 'Roll Number']) ?>
                        <?= $this->Form->control('class', ['label' => 'Class']) ?>
                    </div> -->
                    <div class="row mb-4">
            <div class="col-md-6">
                <div class="bg-light p-3 mb-3 rounded">
                    <?= $this->Form->control('student_id', ['options' => $students, 'empty' => true, 'label' => 'Select Student']) ?>

                </div>
                <div class="bg-light p-3 mb-3 rounded">
                    <?= $this->Form->control('rollno', ['label' => 'Roll Number']) ?>

                </div>
                <!-- <div class="bg-light p-3 rounded">
                    <strong>Admission No:</strong> <?= isset($student) ? h($student->Admission_no) : 'N/A' ?>
                </div> -->
            </div>
            <div class="col-md-6">
                <div class="bg-light p-3 mb-3 rounded">
                    <?= $this->Form->control('class', ['options' => ['1st' => '1st', '2nd' => '2nd'], 'empty' => true, 'label' => 'Select Class']) ?>

                </div>
                <!-- <div class="bg-light p-3 mb-3 rounded">
                    <strong>Mother's Name:</strong> <?= isset($student) ? h($student->mother_name) : 'N/A' ?>
                </div> -->
                <div class="bg-light p-3 rounded">
                    <<?= $this->Form->control('academic_year', ['label' => 'Academic Year']) ?>

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
                            'label' => 'Select Term',
                            'required' => true,
                        ]) ?>
                    </div>

                    <!-- Horizontal Table for Subjects and Marks -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Subject</th>
                                    <th>Class Test (CT)</th>
                                    <th>Periodic Test (PT)</th>
                                    <th>Subject Enrichment (SE)</th>
                                    <th>Multiple Assessment (MA)</th>
                                    <th>Portfolio / Oral</th>
                                    <th>Exam</th>
                                    <!-- <th>Total</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>English</td>
                                    <td><?= $this->Form->control('marks[english][ct]', ['type' => 'text', 'class' => 'form-control', 'label' => false]) ?></td>
                                   <td> <?= $this->Form->control('marks[english][pt]', ['label' => false, 'id' => 'term1_subject_1_ptcal', 'type' => 'number']) ?>
                                   </td>
                                    <td><?= $this->Form->control('marks[english][se]', ['type' => 'text', 'class' => 'form-control', 'label' => false]) ?></td>
                                    <td><?= $this->Form->control('marks[english][ma]', ['type' => 'text', 'class' => 'form-control', 'label' => false]) ?></td>
                                    <td><?= $this->Form->control('marks[english][portfolio]', ['type' => 'text', 'class' => 'form-control', 'label' => false]) ?></td>
                                    <td><?= $this->Form->control('marks[english][exam]', ['type' => 'text', 'class' => 'form-control', 'label' => false]) ?></td>
                                    <!-- <td><?= $this->Form->control('marks[english][total]', ['type' => 'text', 'class' => 'form-control', 'label' => false, 'readonly' => true]) ?></td> -->
                                </tr>

                                <!-- Similar rows for other subjects like Hindi, Mathematics, Science, etc. -->
                                <tr>
                                    <td>Hindi</td>
                                    <td><?= $this->Form->control('marks[hindi][ct]', ['type' => 'text', 'class' => 'form-control', 'label' => false]) ?></td>
                                    <td><?= $this->Form->control('marks[hindi][pt]', ['type' => 'text', 'class' => 'form-control', 'label' => false]) ?></td>
                                    <td><?= $this->Form->control('marks[hindi][se]', ['type' => 'text', 'class' => 'form-control', 'label' => false]) ?></td>
                                    <td><?= $this->Form->control('marks[hindi][ma]', ['type' => 'text', 'class' => 'form-control', 'label' => false]) ?></td>
                                    <td><?= $this->Form->control('marks[hindi][portfolio]', ['type' => 'text', 'class' => 'form-control', 'label' => false]) ?></td>
                                    <td><?= $this->Form->control('marks[hindi][exam]', ['type' => 'text', 'class' => 'form-control', 'label' => false]) ?></td>
                                    <!-- <td><?= $this->Form->control('marks[hindi][total]', ['type' => 'text', 'class' => 'form-control', 'label' => false, 'readonly' => true]) ?></td> -->
                                </tr>
                                
                                <!-- Continue for other subjects (Mathematics, Science, Social Science, Computers) -->
                            </tbody>
                        </table>
                    </div>
                </fieldset>

                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
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
            <tr class="term1-fields">
                <td>English (Term 1)</td>
                <td><?= $this->Form->control('term1_subject_1', ['label' => false, 'max' => 80]) ?></td>
                <td><?= $this->Form->control('term1_subject_1_ct', ['label' => false, 'id' => 'term1_subject_1_ct', 'type' => 'number']) ?></td>
                <td><?= $this->Form->control('term1_subject_1_ptcal', ['label' => false, 'id' => 'term1_subject_1_ptcal', 'type' => 'number']) ?></td>
                <td><?= $this->Form->control('term1_subject_1_periodic_test', [
                    'label' => false,
                    'id' => 'term1_subject_1_periodic_test',
                    'max' => 5,
                    'readonly' => true,
                ]) ?></td>
                <td><?= $this->Form->control('term1_subject_1_subject_enrichment', ['label' => false, 'max' => 5]) ?></td>
                <td><?= $this->Form->control('term1_subject_1_multiple_assessment', ['label' => false, 'max' => 5]) ?></td>
                <td><?= $this->Form->control('term1_subject_1_portfolio', ['label' => false, 'max' => 5]) ?></td>
            </tr>
            <!-- Row for English (Term 2) -->
            <tr class="term2-fields">
                <td>English (Term 2)</td>
                <td><?= $this->Form->control('term2_subject_1', ['label' => false, 'max' => 80]) ?></td>
                <td><?= $this->Form->control('term2_subject_1_ct', ['label' => false, 'id' => 'term2_subject_1_ct', 'type' => 'number']) ?></td>
                <td><?= $this->Form->control('term2_subject_1_ptcal', ['label' => false, 'id' => 'term2_subject_1_ptcal', 'type' => 'number']) ?></td>
                <td><?= $this->Form->control('term2_subject_1_periodic_test', [
                    'label' => false,
                    'id' => 'term2_subject_1_periodic_test',
                    'max' => 5,
                    'readonly' => true,
                ]) ?></td>
                <td><?= $this->Form->control('term2_subject_1_subject_enrichment', ['label' => false, 'max' => 5]) ?></td>
                <td><?= $this->Form->control('term2_subject_1_multiple_assessment', ['label' => false, 'max' => 5]) ?></td>
                <td><?= $this->Form->control('term2_subject_1_portfolio', ['label' => false, 'max' => 5]) ?></td>
            </tr>

            <!-- Row for Hindi (Term 1) -->
            <tr class="term1-fields">
                <td>Hindi (Term 1)</td>
                <td><?= $this->Form->control('term1_subject_2', ['label' => false, 'max' => 80]) ?></td>
                <td><?= $this->Form->control('term1_subject_2_ct', ['label' => false, 'id' => 'term1_subject_2_ct', 'type' => 'number']) ?></td>
                <td><?= $this->Form->control('term1_subject_2_ptcal', ['label' => false, 'id' => 'term1_subject_2_ptcal', 'type' => 'number']) ?></td>
                <td><?= $this->Form->control('term1_subject_2_periodic_test', [
                    'label' => false,
                    'id' => 'term1_subject_2_periodic_test',
                    'max' => 5,
                    'readonly' => true,
                ]) ?></td>
                <td><?= $this->Form->control('term1_subject_2_subject_enrichment', ['label' => false, 'max' => 5]) ?></td>
                <td><?= $this->Form->control('term1_subject_2_multiple_assessment', ['label' => false, 'max' => 5]) ?></td>
                <td><?= $this->Form->control('term1_subject_2_portfolio', ['label' => false, 'max' => 5]) ?></td>
            </tr>
            <!-- Row for Hindi (Term 2) -->
            <tr class="term2-fields">
                <td>Hindi (Term 2)</td>
                <td><?= $this->Form->control('term2_subject_2', ['label' => false, 'max' => 80]) ?></td>
                <td><?= $this->Form->control('term2_subject_2_ct', ['label' => false, 'id' => 'term2_subject_2_ct', 'type' => 'number']) ?></td>
                <td><?= $this->Form->control('term2_subject_2_ptcal', ['label' => false, 'id' => 'term2_subject_2_ptcal', 'type' => 'number']) ?></td>
                <td><?= $this->Form->control('term2_subject_2_periodic_test', [
                    'label' => false,
                    'id' => 'term2_subject_2_periodic_test',
                    'max' => 5,
                    'readonly' => true,
                ]) ?></td>
                <td><?= $this->Form->control('term2_subject_2_subject_enrichment', ['label' => false, 'max' => 5]) ?></td>
                <td><?= $this->Form->control('term2_subject_2_multiple_assessment', ['label' => false, 'max' => 5]) ?></td>
                <td><?= $this->Form->control('term2_subject_2_portfolio', ['label' => false, 'max' => 5]) ?></td>
            </tr>
        </tbody>
    </table>
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


<script>
    // Function to calculate periodic test marks based on ptcal value
    function calculatePeriodicTest(ptcalId, periodicTestId) {
        // Get the value of ptcal
        var ptcalValue = parseFloat(document.getElementById(ptcalId).value);

        // Get the selected class
        var classValue = document.getElementById('class').value;

        // Initialize a variable to hold the calculation factor
        var factor = 0;

        // Determine the factor based on the class
        if (classValue === '1st' || classValue === '2nd') {
            factor = 0;  // No calculation for 1st and 2nd classes
        } else if (classValue === '3rd' || classValue === '4th') {
            factor = 0.2;  // Calculate 20% for 3rd and 4th classes
        } else if (parseInt(classValue) >= 5 && parseInt(classValue) <= 10) {
            factor = 0.125;  // Calculate 12.5% for 5th to 10th classes
        }

        // Calculate periodic test marks only if factor is greater than 0
        if (!isNaN(ptcalValue) && factor > 0) {
            var periodicTestValue = Math.round(ptcalValue * factor);  // Round to the nearest integer

            // Update the periodic_test field
            document.getElementById(periodicTestId).value = periodicTestValue;
        } else {
            // If factor is 0 or ptcalValue is invalid, set periodic_test to an empty value
            document.getElementById(periodicTestId).value = factor === 0 ? 'No calculation' : '';
        }
    }

    // Function to attach event listeners to all subject fields
    function attachListeners() {
        for (var i = 1; i <= 7; i++) {
            // Attach listener for Term 1 subjects
            (function(i) {
                var ptcalId = 'term1_subject_' + i + '_ptcal';
                var periodicTestId = 'term1_subject_' + i + '_periodic_test';
                document.getElementById(ptcalId).addEventListener('input', function() {
                    calculatePeriodicTest(ptcalId, periodicTestId);
                });
            })(i);

            // Attach listener for Term 2 subjects
            (function(i) {
                var ptcalId = 'term2_subject_' + i + '_ptcal';
                var periodicTestId = 'term2_subject_' + i + '_periodic_test';
                document.getElementById(ptcalId).addEventListener('input', function() {
                    calculatePeriodicTest(ptcalId, periodicTestId);
                });
            })(i);
        }
    }

    // Ensure the class field has an id for JavaScript to work
    document.getElementById('class').addEventListener('change', function() {
        // Trigger the input event manually when class changes for all subjects
        for (var i = 1; i <= 7; i++) {
            document.getElementById('term1_subject_' + i + '_ptcal').dispatchEvent(new Event('input'));
            document.getElementById('term2_subject_' + i + '_ptcal').dispatchEvent(new Event('input'));
        }
    });

    // Attach event listeners when the page loads
    attachListeners();
</script>


