<div id="reportCardContainer" class="card shadow-lg border-0 rounded-3">
    <div class="card-header bg-primary text-white text-center py-4 rounded-top">
        <h2>Student Report Card</h2>
    </div>
    <div class="card-body p-5">
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="bg-light p-3 mb-3 rounded">
                    <strong>Student Name:</strong> <?= isset($student) ? h($student->name) : 'N/A' ?>
                </div>
                <div class="bg-light p-3 mb-3 rounded">
                    <strong>Roll No:</strong> <?= isset($student) ? h($marks->rollno) : 'N/A' ?>
                </div>
                <div class="bg-light p-3 rounded">
                    <strong>Admission No:</strong> <?= isset($student) ? h($student->Admission_no) : 'N/A' ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-light p-3 mb-3 rounded">
                    <strong>Class:</strong> <?= isset($student) ? h($marks->class) : 'N/A' ?>
                </div>
                <div class="bg-light p-3 mb-3 rounded">
                    <strong>Mother's Name:</strong> <?= isset($student) ? h($student->mother_name) : 'N/A' ?>
                </div>
                <div class="bg-light p-3 rounded">
                    <strong>Section:</strong> <?= isset($student) ? h($student->section) : 'N/A' ?>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center">
                <?php if (isset($marks) && isset($term)): ?>
                    <thead class="bg-primary text-white">
                        <tr>
                            <th colspan="8">Term <?= $term == 'Term1' ? 'I' : 'II' ?> (100 Marks)</th>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <th>Periodic Test</th>
                            <th>Subject Enrichment</th>
                            <th>Multiple Assessment</th>
                            <th>Portfolio</th>
                            <th>Mid Term</th>
                            <th>Total Marks</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $subjects = [
                            ['English', 'term1_subject_1', 'term2_subject_1'],
                            ['Hindi', 'term1_subject_2', 'term2_subject_2'],
                            ['Marathi/Sanskrit', 'term1_subject_3', 'term2_subject_3'],
                            ['Mathematics', 'term1_subject_4', 'term2_subject_4'],
                            ['Science', 'term1_subject_5', 'term2_subject_5'],
                            ['Social Science', 'term1_subject_6', 'term2_subject_6'],
                            ['Computer', 'term1_subject_7', 'term2_subject_7']
                        ];
                        foreach ($subjects as $subject): ?>
                        <tr>
                            <th><?= $subject[0] ?></th>
                            <td><?= h($marks->{$term == 'Term1' ? $subject[1].'_periodic_test' : $subject[2].'_periodic_test'}) ?></td>
                            <td><?= h($marks->{$term == 'Term1' ? $subject[1].'_subject_enrichment' : $subject[2].'_subject_enrichment'}) ?></td>
                            <td><?= h($marks->{$term == 'Term1' ? $subject[1].'_multiple_assessment' : $subject[2].'_multiple_assessment'}) ?></td>
                            <td><?= h($marks->{$term == 'Term1' ? $subject[1].'_portfolio' : $subject[2].'_portfolio'}) ?></td>
                            <td><?= h($marks->{$term == 'Term1' ? $subject[1] : $subject[2]}) ?></td>
                            <td><?= h($marks->{$term == 'Term1' ? $subject[1].'_total' : $subject[2].'_total'}) ?></td>
                            <td><?= h($marks->{$term == 'Term1' ? $subject[1].'_grade' : $subject[2].'_grade'}) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                <?php else: ?>
                    <tr>
                        <td colspan="8">No marks found for the selected term.</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <div class="bg-light p-3 rounded text-center">
                    <h5>Total Marks: <?= h($term == 'Term1' ? $results->term1_total_marks : $results->term2_total_marks) ?></h5>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-light p-3 rounded text-center">
                    <h5>Final Grade: <?= h($term == 'Term1' ? $results->term1_grade : $results->term2_grade ) ?></h5>
                </div>
            </div>
        </div>

        <div class="bg-primary text-white text-center py-3 mt-4 rounded">
            <h5>Percentage: <?= h($term == 'Term1' ? $results->term1_percentage : $results->term2_percentage ) ?>%</h5>
        </div>
    </div>

    <div class="table-responsive d-flex justify-content-center">
        <table class="table table-bordered border-dark w-75 text-center m-5">
            <thead class="bg-primary text-white">
                <tr>
                    <th colspan="2">Co-Scholastic Areas: Term <?= $term == 'Term1' ? 'I' : 'II' ?> (on a 3-point grading scale)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>---</td>
                    <td>Grade</td>
                </tr>

                <tr>
                <?php if (isset($excellence) && isset($term)): ?>

                    <?php foreach ($excellence as $excellence): ?>

                    <td>Work Education (or Pre-Vocational Education)</td>
                    <td><?= h($term == 'Term1' ? $excellence->term1_work_education : $excellence->term2_work_education) ?></td>
                </tr>
                <tr>
                    <td>Art Education</td>
                    <td><?= h($term == 'Term1' ? $excellence->term1_art_education : $excellence->term2_art_education) ?></td>
                    </tr>
                <tr>
                    <td>Health & Physical Education</td>
                    <td><?= h($term == 'Term1' ? $excellence->term1_physical_education : $excellence->term2_physical_education) ?></td>
                    </tr>
                <tr>
                <td>Discipline: Term <?= $term == 'Term1' ? 'I' : 'II' ?> (on a 3-point grading scale)</td>
                <td><?= h($term == 'Term1' ? $excellence->term1_discipline : $excellence->term2_discipline) ?></td>
                </tr>
            </tbody>
            <?php endforeach; ?>

            <?php else : ?>
            <tr>
                <td colspan="2">No grades found for the selected term.</td>
            </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="text-center mb-5">
    <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'landing']) ?>" class="btn btn-primary px-5">Home</a>
    <button class="btn btn-success px-5" onclick="printReportCard()">Print Report Card</button>
</div>

<script>
    function printReportCard() {
    // Get the entire content inside the report card container
    var reportCardContainer = document.getElementById('reportCardContainer');
    
    // Create a new window for printing
    var printWindow = window.open('', '_blank', 'width=800,height=600');
    
    // Write the HTML content for the print window, including the report card
    printWindow.document.write(`
        <html>
        <head>
            <style>
                /* Styling for the print version */
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 20px;
                    background-color: white;
                    color: black;
                }
                h2 {
                    text-align: center;
                }
                .card-header {
                    background-color: #0000FF;
                    color: white;
                    text-align: center;
                    padding: 10px 0;
                    font-size: 24px;
                }
                .card-body {
                    padding: 10px;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    border: 1px solid black;
                    padding: 8px;
                    text-align: center;
                }
                .bg-primary {
                    background-color: #0000FF;
                    color: white;
                }
                .bg-light {
                    background-color: #F8F9FA;
                }
                .table-bordered {
                    border: 1px solid black;
                }
                /* Hide buttons and other non-essential elements for printing */
                .btn, .m-5, .mb-5 {
                    display: none;
                }
            </style>
        </head>
        <body>
            ${reportCardContainer.innerHTML}
        </body>
        </html>
    `);
    
    // Trigger the print dialog
    printWindow.document.close(); // Necessary for some browsers to process the content
    printWindow.focus(); // Necessary for some browsers to bring the print window into focus
    printWindow.print(); // Call the print function
    printWindow.close(); // Close the print window after printing
}

</script>





<div id="reportCardContainer" class="card shadow-lg border-0 rounded-3">
    <div class="card-header bg-primary text-white text-center py-4 rounded-top">
        <h2>Student Report Card</h2>
    </div>
    <div class="card-body p-5">
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="bg-light p-3 mb-3 rounded">
                    <strong>Student Name:</strong> <?= isset($student) ? h($student->name) : 'N/A' ?>
                </div>
                <div class="bg-light p-3 mb-3 rounded">
                    <strong>Roll No:</strong> <?= isset($student) ? h($marks->rollno) : 'N/A' ?>
                </div>
                <div class="bg-light p-3 rounded">
                    <strong>Admission No:</strong> <?= isset($student) ? h($student->Admission_no) : 'N/A' ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-light p-3 mb-3 rounded">
                    <strong>Class:</strong> <?= isset($student) ? h($marks->class) : 'N/A' ?>
                </div>
                <div class="bg-light p-3 mb-3 rounded">
                    <strong>Mother's Name:</strong> <?= isset($student) ? h($student->mother_name) : 'N/A' ?>
                </div>
                <div class="bg-light p-3 rounded">
                    <strong>Section:</strong> <?= isset($student) ? h($student->section) : 'N/A' ?>
                </div>
            </div>
        </div>

        <!-- Main scholastic table -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center">
                <?php if (isset($marks) && isset($term)): ?>
                    <thead class="bg-primary text-white">
                        <tr>
                            <th colspan="8">Term <?= $term == 'Term1' ? 'I' : 'II' ?> (100 Marks)</th>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <th>Periodic Test</th>
                            <th>Subject Enrichment</th>
                            <th>Multiple Assessment</th>
                            <th>Portfolio</th>
                            <th>Mid Term</th>
                            <th>Total Marks</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $subjects = [
                            ['English', 'term1_subject_1', 'term2_subject_1'],
                            ['Hindi', 'term1_subject_2', 'term2_subject_2'],
                            ['Marathi/Sanskrit', 'term1_subject_3', 'term2_subject_3'],
                            ['Mathematics', 'term1_subject_4', 'term2_subject_4'],
                            ['Science', 'term1_subject_5', 'term2_subject_5'],
                            ['Social Science', 'term1_subject_6', 'term2_subject_6'],
                            ['Computer', 'term1_subject_7', 'term2_subject_7']
                        ];
                        foreach ($subjects as $subject): ?>
                        <tr>
                            <th><?= $subject[0] ?></th>
                            <td><?= h($marks->{$term == 'Term1' ? $subject[1].'_periodic_test' : $subject[2].'_periodic_test'}) ?></td>
                            <td><?= h($marks->{$term == 'Term1' ? $subject[1].'_subject_enrichment' : $subject[2].'_subject_enrichment'}) ?></td>
                            <td><?= h($marks->{$term == 'Term1' ? $subject[1].'_multiple_assessment' : $subject[2].'_multiple_assessment'}) ?></td>
                            <td><?= h($marks->{$term == 'Term1' ? $subject[1].'_portfolio' : $subject[2].'_portfolio'}) ?></td>
                            <td><?= h($marks->{$term == 'Term1' ? $subject[1] : $subject[2]}) ?></td>
                            <td><?= h($marks->{$term == 'Term1' ? $subject[1].'_total' : $subject[2].'_total'}) ?></td>
                            <td><?= h($marks->{$term == 'Term1' ? $subject[1].'_grade' : $subject[2].'_grade'}) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                <?php else: ?>
                    <tr>
                        <td colspan="8">No marks found for the selected term.</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>

        <!-- Co-Scholastic Table (now inside the reportCardContainer) -->
        <div class="table-responsive d-flex justify-content-center mt-5">
            <table class="table table-bordered border-dark w-75 text-center">
                <thead class="bg-primary text-white">
                    <tr>
                        <th colspan="2">Co-Scholastic Areas: Term <?= $term == 'Term1' ? 'I' : 'II' ?> (on a 3-point grading scale)</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>---</td>
                    <td>Grade</td>
                </tr>

                <tr>
                <?php if (isset($excellence) && isset($term)): ?>

                    <?php foreach ($excellence as $excellence): ?>

                    <td>Work Education (or Pre-Vocational Education)</td>
                    <td><?= h($term == 'Term1' ? $excellence->term1_work_education : $excellence->term2_work_education) ?></td>
                </tr>
                <tr>
                    <td>Art Education</td>
                    <td><?= h($term == 'Term1' ? $excellence->term1_art_education : $excellence->term2_art_education) ?></td>
                    </tr>
                <tr>
                    <td>Health & Physical Education</td>
                    <td><?= h($term == 'Term1' ? $excellence->term1_physical_education : $excellence->term2_physical_education) ?></td>
                    </tr>
                <tr>
                <td>Discipline: Term <?= $term == 'Term1' ? 'I' : 'II' ?> (on a 3-point grading scale)</td>
                <td><?= h($term == 'Term1' ? $excellence->term1_discipline : $excellence->term2_discipline) ?></td>
                </tr>
            </tbody>
            <?php endforeach; ?>

            <?php else : ?>
            <tr>
                <td colspan="2">No grades found for the selected term.</td>
            </tr>
            <?php endif; ?>
            </tbody>
            </table>
        </div>

        <div class="bg-primary text-white text-center py-3 mt-4 rounded">
            <h5>Percentage: <?= h($term == 'Term1' ? $results->term1_percentage : $results->term2_percentage ) ?>%</h5>
        </div>
    </div>
</div>

<div class="text-center mb-5">
    <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'landing']) ?>" class="btn btn-primary px-5">Home</a>
    <button class="btn btn-success px-5" onclick="printReportCard()">Print Report Card</button>
</div>

<script>
    function printReportCard() {
        var reportCardContainer = document.getElementById('reportCardContainer');
        var printWindow = window.open('', '_blank', 'width=800,height=600');
        
        printWindow.document.write(`
            <html>
            <head>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 0;
                        padding: 20px;
                        background-color: white;
                        color: black;
                    }
                    h2 {
                        text-align: center;
                    }
                    .card-header {
                        background-color: #0000FF;
                        color: white;
                        text-align: center;
                        padding: 10px 0;
                        font-size: 24px;
                    }
                    .card-body {
                        padding: 10px;
                    }
                    table {
                        width: 100%;
                        border-collapse: collapse;
                    }
                    th, td {
                        border: 1px solid black;
                        padding: 8px;
                        text-align: center;
                    }
                    .bg-primary {
                        background-color: #0000FF;
                        color: white;
                    }
                    .bg-light {
                        background-color: #F8F9FA;
                    }
                    .table-bordered {
                        border: 1px solid black;
                    }
                    .btn, .m-5, .mb-5 {
                        display: none;
                    }
                </style>
            </head>
            <body>
                ${reportCardContainer.innerHTML}
            </body>
            </html>
        `);
        
        printWindow.document.close();
        printWindow.focus();
        printWindow.print();
    }
</script>