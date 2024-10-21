<div class="container mt-5" id="reportCardContainer">
    <!-- Student Information Section -->
    <div class="card bg-light border-0 shadow-sm p-4 mb-5">
        <h5 class="text-center text-primary mb-4">Student Information</h5>
        <div class="row">
            <div class="col-md-4">
                <h6>Student Name</h6>
                <p><?= isset($student) ? h($student->name) : 'N/A' ?></p>
            </div>
            <div class="col-md-4">
                <h6>Roll No</h6>
                <p><?= isset($marks) ? h($marks->rollno) : 'N/A' ?></p>
            </div>
            <div class="col-md-4">
                <h6>Admission No</h6>
                <p><?= isset($student) ? h($student->Admission_no) : 'N/A' ?></p>
            </div>
            <div class="col-md-4">
                <h6>Class</h6>
                <p><?= isset($marks) ? h($marks->class) : 'N/A' ?></p>
            </div>
            <div class="col-md-4">
                <h6>Mother's Name</h6>
                <p><?= isset($student) ? h($student->mother_name) : 'N/A' ?></p>
            </div>
            <div class="col-md-4">
                <h6>Section</h6>
                <p><?= isset($student) ? h(strtoupper($student->section)) : 'N/A' ?></p>
            </div>
        </div>
    </div>

    <!-- Term 1 Marks Section -->
    <div class="card bg-light border-0 shadow-sm p-4 mb-5">
        <h5 class="text-center text-primary">Scholastic Areas: Term I (100 Marks)</h5>
        <div class="table-responsive mt-3">
            <table class="table table-hover table-bordered text-center">
                <thead class="bg-primary text-white">
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
                    <tr>
                        <td>English</td>
                        <td><?= h($marks->term1_subject_1_periodic_test) ?></td>
                        <td><?= h($marks->term1_subject_1_subject_enrichment) ?></td>
                        <td><?= h($marks->term1_subject_1_multiple_assessment) ?></td>
                        <td><?= h($marks->term1_subject_1_portfolio) ?></td>
                        <td><?= h($marks->term1_subject_1) ?></td>
                        <td><?= h($marks->term1_subject_1_total) ?></td>
                        <td><?= h(strtoupper($marks->term1_subject_1_grade)) ?></td>
                    </tr>
                    <tr>
                            <td>Hindi</td>
                            <td><?= h($marks->term1_subject_2_periodic_test) ?></td>
                            <td><?= h($marks->term1_subject_2_subject_enrichment) ?></td>
                            <td><?= h($marks->term1_subject_2_multiple_assessment) ?></td>
                            <td><?= h($marks->term1_subject_2_portfolio) ?></td>
                            <td><?= h($marks->term1_subject_2) ?></td>
                            <td><?= h($marks->term1_subject_2_total) ?></td>
                            <td><?= h(strtoupper($marks->term1_subject_2_grade)) ?></td>
                        </tr>
                        <tr>
                            <td>Marathi</td>
                            <td><?= h($marks->term1_subject_3_periodic_test) ?></td>
                            <td><?= h($marks->term1_subject_3_subject_enrichment) ?></td>
                            <td><?= h($marks->term1_subject_3_multiple_assessment) ?></td>
                            <td><?= h($marks->term1_subject_3_portfolio) ?></td>
                            <td><?= h($marks->term1_subject_3) ?></td>
                            <td><?= h($marks->term1_subject_3_total) ?></td>
                            <td><?= h(strtoupper($marks->term1_subject_3_grade)) ?></td>
                        </tr>
                        <tr>
                            <td>Mathematics</td>
                            <td><?= h($marks->term1_subject_4_periodic_test) ?></td>
                            <td><?= h($marks->term1_subject_4_subject_enrichment) ?></td>
                            <td><?= h($marks->term1_subject_4_multiple_assessment) ?></td>
                            <td><?= h($marks->term1_subject_4_portfolio) ?></td>
                            <td><?= h($marks->term1_subject_4) ?></td>
                            <td><?= h($marks->term1_subject_4_total) ?></td>
                            <td><?= h(strtoupper($marks->term1_subject_4_grade)) ?></td>
                        </tr>
                        <tr>
                            <td>Science</td>
                            <td><?= h($marks->term1_subject_5_periodic_test) ?></td>
                            <td><?= h($marks->term1_subject_5_subject_enrichment) ?></td>
                            <td><?= h($marks->term1_subject_5_multiple_assessment) ?></td>
                            <td><?= h($marks->term1_subject_5_portfolio) ?></td>
                            <td><?= h($marks->term1_subject_5) ?></td>
                            <td><?= h($marks->term1_subject_5_total) ?></td>
                            <td><?= h(strtoupper($marks->term1_subject_5_grade)) ?></td>
                        </tr>
                        <tr>
                            <td>Social Science</td>
                            <td><?= h($marks->term1_subject_6_periodic_test) ?></td>
                            <td><?= h($marks->term1_subject_6_subject_enrichment) ?></td>
                            <td><?= h($marks->term1_subject_6_multiple_assessment) ?></td>
                            <td><?= h($marks->term1_subject_6_portfolio) ?></td>
                            <td><?= h($marks->term1_subject_6) ?></td>
                            <td><?= h($marks->term1_subject_6_total) ?></td>
                            <td><?= h(strtoupper($marks->term1_subject_6_grade)) ?></td>
                        </tr>
                        <tr>
                            <td>Computer</td>
                            <td><?= h($marks->term1_subject_7_periodic_test) ?></td>
                            <td><?= h($marks->term1_subject_7_subject_enrichment) ?></td>
                            <td><?= h($marks->term1_subject_7_multiple_assessment) ?></td>
                            <td><?= h($marks->term1_subject_7_portfolio) ?></td>
                            <td><?= h($marks->term1_subject_7) ?></td>
                            <td><?= h($marks->term1_subject_7_total) ?></td>
                            <td><?= h(strtoupper($marks->term1_subject_7_grade)) ?></td>
                        </tr>
                    <!-- Repeat for other subjects -->
                </tbody>
            </table>
                <div class="d-flex justify-content-between">
                    <h5>Percentage: <?=($results->term1_percentage) ?>%</h5>
                    <h5>Total Marks: <?= h($results->term1_total_marks) ?></h5>
                    <h5>Final Grade: <?= h(strtoupper($results->term1_grade)) ?></h5>
                </div>
        </div>
    </div>

    <!-- Term 2 Marks Section -->
    <div class="card bg-light border-0 shadow-sm p-4 mb-5">
        <h5 class="text-center text-primary">Scholastic Areas: Term II (100 Marks)</h5>
        <div class="table-responsive mt-3">
            <table class="table table-hover table-bordered text-center">
                <thead class="bg-primary text-white">
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
                    <tr>
                        <td>English</td>
                        <td><?= h($marks->term2_subject_1_periodic_test) ?></td>
                        <td><?= h($marks->term2_subject_1_subject_enrichment) ?></td>
                        <td><?= h($marks->term2_subject_1_multiple_assessment) ?></td>
                        <td><?= h($marks->term2_subject_1_portfolio) ?></td>
                        <td><?= h($marks->term2_subject_1) ?></td>
                        <td><?= h($marks->term2_subject_1_total) ?></td>
                        <td><?= h(strtoupper($marks->term2_subject_1_grade)) ?></td>
                    </tr>
                    <tr>
                            <td>Hindi</td>
                            <td><?= h($marks->term2_subject_2_periodic_test) ?></td>
                            <td><?= h($marks->term2_subject_2_subject_enrichment) ?></td>
                            <td><?= h($marks->term2_subject_2_multiple_assessment) ?></td>
                            <td><?= h($marks->term2_subject_2_portfolio) ?></td>
                            <td><?= h($marks->term2_subject_2) ?></td>
                            <td><?= h($marks->term2_subject_2_total) ?></td>
                            <td><?= h(strtoupper($marks->term2_subject_2_grade)) ?></td>
                        </tr>
                        <tr>
                            <td>Marathi</td>
                            <td><?= h($marks->term2_subject_3_periodic_test) ?></td>
                            <td><?= h($marks->term2_subject_3_subject_enrichment) ?></td>
                            <td><?= h($marks->term2_subject_3_multiple_assessment) ?></td>
                            <td><?= h($marks->term2_subject_3_portfolio) ?></td>
                            <td><?= h($marks->term2_subject_3) ?></td>
                            <td><?= h($marks->term2_subject_3_total) ?></td>
                            <td><?= h(strtoupper($marks->term2_subject_3_grade)) ?></td>
                        </tr>
                        <tr>
                            <td>Mathematics</td>
                            <td><?= h($marks->term2_subject_4_periodic_test) ?></td>
                            <td><?= h($marks->term2_subject_4_subject_enrichment) ?></td>
                            <td><?= h($marks->term2_subject_4_multiple_assessment) ?></td>
                            <td><?= h($marks->term2_subject_4_portfolio) ?></td>
                            <td><?= h($marks->term2_subject_4) ?></td>
                            <td><?= h($marks->term2_subject_4_total) ?></td>
                            <td><?= h(strtoupper($marks->term2_subject_4_grade)) ?></td>
                        </tr>
                        <tr>
                            <td>Science</td>
                            <td><?= h($marks->term2_subject_5_periodic_test) ?></td>
                            <td><?= h($marks->term2_subject_5_subject_enrichment) ?></td>
                            <td><?= h($marks->term2_subject_5_multiple_assessment) ?></td>
                            <td><?= h($marks->term2_subject_5_portfolio) ?></td>
                            <td><?= h($marks->term2_subject_5) ?></td>
                            <td><?= h($marks->term2_subject_5_total) ?></td>
                            <td><?= h(strtoupper($marks->term2_subject_5_grade)) ?></td>
                        </tr>
                        <tr>
                            <td>Social Science</td>
                            <td><?= h($marks->term2_subject_6_periodic_test) ?></td>
                            <td><?= h($marks->term2_subject_6_subject_enrichment) ?></td>
                            <td><?= h($marks->term2_subject_6_multiple_assessment) ?></td>
                            <td><?= h($marks->term2_subject_6_portfolio) ?></td>
                            <td><?= h($marks->term2_subject_6) ?></td>
                            <td><?= h($marks->term2_subject_6_total) ?></td>
                            <td><?= h(strtoupper($marks->term2_subject_6_grade)) ?></td>
                        </tr>
                        <tr>
                            <td>Computer</td>
                            <td><?= h($marks->term2_subject_7_periodic_test) ?></td>
                            <td><?= h($marks->term2_subject_7_subject_enrichment) ?></td>
                            <td><?= h($marks->term2_subject_7_multiple_assessment) ?></td>
                            <td><?= h($marks->term2_subject_7_portfolio) ?></td>
                            <td><?= h($marks->term2_subject_7) ?></td>
                            <td><?= h($marks->term2_subject_7_total) ?></td>
                            <td><?= h(strtoupper($marks->term2_subject_7_grade)) ?></td>
                        </tr>
                    <!-- Repeat for other subjects -->
                </tbody>
            </table>
                <div class="d-flex justify-content-between">
                    <h5>Percentage: <?=($results->term2_percentage) ?>%</h5>
                    <h5>Total Marks: <?= h($results->term2_total_marks) ?></h5>
                    <h5>Final Grade: <?= h(strtoupper($results->term2_grade)) ?></h5>
                </div>
        </div>
    </div>

    <!-- Co-Scholastic Areas Section -->
    <div class="card bg-light border-0 shadow-sm p-4 mb-5">
        <h5 class="text-center text-primary">Co-Scholastic Areas</h5>
        <div class="table-responsive mt-3">
            <table class="table table-hover table-bordered text-center">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Activity</th>
                        <th>Term 1</th>
                        <th>Term 2</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php foreach ($excellence as $excellence): // Loop through each record 
                    // debug($excellence)?>

                    <tr>
                        <td>Work Education</td>
                        <td><?= h(strtoupper($excellence->term1_work_education))  ?></td>
                        <td><?= h(strtoupper($excellence->term2_work_education))  ?></td>
                    </tr>
                    <tr>
                        <td>Art Education</td>
                        <td><?= h(strtoupper($excellence->term1_art_education))  ?></td>
                        <td><?= h(strtoupper($excellence->term2_art_education))  ?></td>
                    </tr>
                    <tr>
                        <td>Physical Education</td>
                        <td><?= h(strtoupper($excellence->term1_physical_education))  ?></td>
                        <td><?= h(strtoupper($excellence->term2_physical_education))  ?></td>
                    </tr>
                    <tr>
                        <td>Discipline</td>
                        <td><?= h(strtoupper($excellence->term1_discipline))  ?></td>
                        <td><?= h(strtoupper($excellence->term2_discipline))  ?></td>
                    </tr>
                    <?php endforeach; ?>
                   
                

                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="text-center mb-5">
    <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'landing']) ?>" class="btn btn-primary px-5">Home</a>
    <button class="btn btn-success px-5" onclick="printReportCard()">Print Report Card</button>
</div>

<script>
    function printReportCard() {
        var printContent = document.getElementById('reportCardContainer').innerHTML;
        var originalContent = document.body.innerHTML;

        document.body.innerHTML = printContent;
        window.print();

        // Restore original content after printing
        document.body.innerHTML = originalContent;
    }
</script>