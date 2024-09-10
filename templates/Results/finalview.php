<div class="container-fluid row mt-5 bg-light p-0">
    <div class="row container-fluid border border-primary border-5 rounded m-0 d-flex justify-content-between bg-primary-subtle">
        <div class="col-4">
            <div class="bg-primary mt-3 ms-2 p-2 rounded text-white">
                Student Name: <?= isset($student) ? h($student->name) : 'N/A' ?>
            </div>
            <div class="bg-primary m-2 p-2 text-white rounded">
                Roll No: <?= isset($marks) ? h($marks->rollno) : 'N/A' ?>
            </div>
            <div class="bg-primary m-2 p-2 text-white rounded">
                Admission No: <?= isset($marks) ? h($marks->admission_no) : 'N/A' ?>
            </div>
        </div>
        <div class="col-4">
            <div class="bg-primary mt-3 me-2 p-2 text-white rounded">
                Class: <?= isset($marks) ? h($marks->class) : 'N/A' ?>
            </div>
            <div class="bg-primary m-2 p-2 text-white rounded">
                Mother's Name: <?= isset($student) ? h($student->mother_name) : 'N/A' ?>
            </div>
            <div class="bg-primary me-2 p-2 text-white rounded">
                Section: <?= isset($student) ? h($student->section) : 'N/A' ?>
            </div>
        </div>
    </div>

    <!-- Term 1 Table -->
    <div class="col-lg-6 bg-primary mt-5 ms-5 rounded-5">
        <table class="table table-bordered border-dark w-50 text-center m-5">
            <thead>
                <tr>
                    <th colspan="8">Term I (100 marks)</th>
                </tr>
                <tr>
                    <th colspan="8">Scholastic Areas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Subject</th>
                    <td>Periodic Test</td>
                    <td>Subject Enrichment</td>
                    <td>Multiple Assessment</td>
                    <td>Portfolio</td>
                    <td>Mid Term</td>
                    <td>Marks Obtained</td>
                    <td>Grade</td>
                </tr>
                <!-- Example for English -->
                <tr>
                    <th scope="row">English</th>
                    <td><?= h($marks->term1_subject_1_periodic_test) ?></td>
                    <td><?= h($marks->term1_subject_1_subject_enrichment) ?></td>
                    <td><?= h($marks->term1_subject_1_multiple_assessment) ?></td>
                    <td><?= h($marks->term1_subject_1_portfolio) ?></td>
                    <td><?= h($marks->term1_subject_1) ?></td>
                    <td><?= h($marks->term1_subject_1_total) ?></td>
                    <td><?= h($marks->term1_subject_1_grade) ?></td>
                </tr>
                <tr>
                    <th scope="row">Hindi</th>
                    <td><?= h($marks->term1_subject_2_subject_enrichment) ?></td>
                    <td><?= h($marks->term1_subject_2_periodic_test) ?></td>
                    <td><?= h($marks->term1_subject_2_multiple_assessment) ?></td>
                    <td><?= h($marks->term1_subject_2_portfolio) ?></td>
                    <td><?= h($marks->term1_subject_2) ?></td>
                    <td><?= h($marks->term1_subject_2_total) ?></td>
                    <td><?= h($marks->term1_subject_2_grade) ?></td>
                </tr>
                <tr>
                    <th scope="row">Marathi/Sanskrit</th>
                    <td><?= h($marks->term1_subject_3_periodic_test) ?></td>
                    <td><?= h($marks->term1_subject_3_subject_enrichment) ?></td>
                    <td><?= h($marks->term1_subject_3_multiple_assessment) ?></td>
                    <td><?= h($marks->term1_subject_3_portfolio) ?></td>
                    <td><?= h($marks->term1_subject_3) ?></td>
                    <td><?= h($marks->term1_subject_3_total) ?></td>
                    <td><?= h($marks->term1_subject_3_grade) ?></td>
                </tr>
                <tr>
                    <th scope="row">Mathematics</th>
                    <td><?= h($marks->term1_subject_4_periodic_test) ?></td>
                    <td><?= h($marks->term1_subject_4_subject_enrichment) ?></td>
                    <td><?= h($marks->term1_subject_4_multiple_assessment) ?></td>
                    <td><?= h($marks->term1_subject_4_portfolio) ?></td>
                    <td><?= h($marks->term1_subject_4) ?></td>
                    <td><?= h($marks->term1_subject_4_total) ?></td>
                    <td><?= h($marks->term1_subject_4_grade) ?></td>
                </tr>
                <tr>
                    <th scope="row">Science</th>
                    <td><?= h($marks->term1_subject_5_periodic_test) ?></td>
                    <td><?= h($marks->term1_subject_5_subject_enrichment) ?></td>
                    <td><?= h($marks->term1_subject_5_multiple_assessment) ?></td>
                    <td><?= h($marks->term1_subject_5_portfolio) ?></td>
                    <td><?= h($marks->term1_subject_5) ?></td>
                    <td><?= h($marks->term1_subject_5_total) ?></td>
                    <td><?= h($marks->term1_subject_5_grade) ?></td>
                </tr>
                <tr>
                    <th scope="row">Social Science</th>
                    <td><?= h($marks->term1_subject_6_periodic_test) ?></td>
                    <td><?= h($marks->term1_subject_6_subject_enrichment) ?></td>
                    <td><?= h($marks->term1_subject_6_multiple_assessment) ?></td>
                    <td><?= h($marks->term1_subject_6_portfolio) ?></td>
                    <td><?= h($marks->term1_subject_6) ?></td>
                    <td><?= h($marks->term1_subject_6_total) ?></td>
                    <td><?= h($marks->term1_subject_6_grade) ?></td>
                </tr>
                 <tr>
                    <th scope="row">Computer</th>
                    <td><?= h($marks->term1_subject_7_periodic_test) ?></td>
                    <td><?= h($marks->term1_subject_7_subject_enrichment) ?></td>
                    <td><?= h($marks->term1_subject_7_multiple_assessment) ?></td>
                    <td><?= h($marks->term1_subject_7_portfolio) ?></td>
                    <td><?= h($marks->term1_subject_7) ?></td>
                    <td><?= h($marks->term1_subject_7_total) ?></td>
                    <td><?= h($marks->term1_subject_7_grade) ?></td>
                </tr>
                <!-- Add similar rows for other subjects -->
            </tbody>
        </table>
    </div>

    <!-- Co-Scholastic Areas Table (Term I) -->
    <div class="col-lg-5 rounded-5 ms-5 bg-primary mt-5">
        <table class="table table-bordered border-dark w-75 text-center m-5">
            <thead>
                <tr>
                    <th colspan="2">Co-Scholastic Areas : Term I (on a 3-point grading scale)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Work Education</td>
                    <td><?= h($excellence->term1_work_education) ?></td>
                </tr>
                <tr>
                    <td>Art Education</td>
                    <td><?= h($excellence->term1_art_education) ?></td>
                </tr>
                <tr>
                    <td>Health & Physical Education</td>
                    <td><?= h($excellence->term1_physical_education) ?></td>
                </tr>
                <tr>
                    <td>Discipline</td>
                    <td><?= h($excellence->term1_discipline) ?></td>
                </tr>
            </tbody>
        </table>
        <div class="row mt-5">
                <div class="col-md-6">
                    <div class="bg-light p-3 rounded text-center">
                        <h5>Total Marks: <?= h($results->term1_total_marks) ?></h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-light p-3 rounded text-center">
                        <h5>Final Grade: <?= h($results->term1_grade ) ?></h5>
                    </div>
                </div>
            </div>
    </div>


    <!-- Term 2 Table -->
    <div class="col-lg-6 bg-primary mt-5 ms-5 rounded-5">
        <table class="table table-bordered border-dark w-50 text-center m-5">
            <thead>
                <tr>
                    <th colspan="8">Term II (100 marks)</th>
                </tr>
                <tr>
                    <th colspan="8">Scholastic Areas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Subject</th>
                    <td>Periodic Test</td>
                    <td>Subject Enrichment</td>
                    <td>Multiple Assessment</td>
                    <td>Portfolio</td>
                    <td>Mid Term</td>
                    <td>Marks Obtained</td>
                    <td>Grade</td>
                </tr>
                <!-- Example for English -->
                <tr>
                    <th scope="row">English</th>
                    <td><?= h($marks->term2_subject_1_periodic_test) ?></td>
                    <td><?= h($marks->term2_subject_1_subject_enrichment) ?></td>
                    <td><?= h($marks->term2_subject_1_multiple_assessment) ?></td>
                    <td><?= h($marks->term2_subject_1_portfolio) ?></td>
                    <td><?= h($marks->term2_subject_1) ?></td>
                    <td><?= h($marks->term2_subject_1_total) ?></td>
                    <td><?= h($marks->term2_subject_1_grade) ?></td>
                </tr>
                <tr>
                    <th scope="row">Hindi</th>
                    <td><?= h($marks->term2_subject_2_subject_enrichment) ?></td>
                    <td><?= h($marks->term2_subject_2_periodic_test) ?></td>
                    <td><?= h($marks->term2_subject_2_multiple_assessment) ?></td>
                    <td><?= h($marks->term2_subject_2_portfolio) ?></td>
                    <td><?= h($marks->term2_subject_2) ?></td>
                    <td><?= h($marks->term2_subject_2_total) ?></td>
                    <td><?= h($marks->term2_subject_2_grade) ?></td>
                </tr>
                <tr>
                    <th scope="row">Marathi/Sanskrit</th>
                    <td><?= h($marks->term2_subject_3_periodic_test) ?></td>
                    <td><?= h($marks->term2_subject_3_subject_enrichment) ?></td>
                    <td><?= h($marks->term2_subject_3_multiple_assessment) ?></td>
                    <td><?= h($marks->term2_subject_3_portfolio) ?></td>
                    <td><?= h($marks->term2_subject_3) ?></td>
                    <td><?= h($marks->term2_subject_3_total) ?></td>
                    <td><?= h($marks->term2_subject_3_grade) ?></td>
                </tr>
                <tr>
                    <th scope="row">Mathematics</th>
                    <td><?= h($marks->term2_subject_4_periodic_test) ?></td>
                    <td><?= h($marks->term2_subject_4_subject_enrichment) ?></td>
                    <td><?= h($marks->term2_subject_4_multiple_assessment) ?></td>
                    <td><?= h($marks->term2_subject_4_portfolio) ?></td>
                    <td><?= h($marks->term2_subject_4) ?></td>
                    <td><?= h($marks->term2_subject_4_total) ?></td>
                    <td><?= h($marks->term2_subject_4_grade) ?></td>
                </tr>
                <tr>
                    <th scope="row">Science</th>
                    <td><?= h($marks->term2_subject_5_periodic_test) ?></td>
                    <td><?= h($marks->term2_subject_5_subject_enrichment) ?></td>
                    <td><?= h($marks->term2_subject_5_multiple_assessment) ?></td>
                    <td><?= h($marks->term2_subject_5_portfolio) ?></td>
                    <td><?= h($marks->term2_subject_5) ?></td>
                    <td><?= h($marks->term2_subject_5_total) ?></td>
                    <td><?= h($marks->term2_subject_5_grade) ?></td>
                </tr>
                <tr>
                    <th scope="row">Social Science</th>
                    <td><?= h($marks->term2_subject_6_periodic_test) ?></td>
                    <td><?= h($marks->term2_subject_6_subject_enrichment) ?></td>
                    <td><?= h($marks->term2_subject_6_multiple_assessment) ?></td>
                    <td><?= h($marks->term2_subject_6_portfolio) ?></td>
                    <td><?= h($marks->term2_subject_6) ?></td>
                    <td><?= h($marks->term2_subject_6_total) ?></td>
                    <td><?= h($marks->term2_subject_6_grade) ?></td>
                </tr>
                 <tr>
                    <th scope="row">Computer</th>
                    <td><?= h($marks->term2_subject_7_periodic_test) ?></td>
                    <td><?= h($marks->term2_subject_7_subject_enrichment) ?></td>
                    <td><?= h($marks->term2_subject_7_multiple_assessment) ?></td>
                    <td><?= h($marks->term2_subject_7_portfolio) ?></td>
                    <td><?= h($marks->term2_subject_7) ?></td>
                    <td><?= h($marks->term2_subject_7_total) ?></td>
                    <td><?= h($marks->term2_subject_7_grade) ?></td>
                </tr>
                
                <!-- Add similar rows for other subjects -->
            </tbody>
        </table>
    </div>

    
    <!-- Co-Scholastic Areas Table (Term II) -->
    <div class="col-lg-5 rounded-5 ms-5 bg-primary mt-5">
        <table class="table table-bordered border-dark w-75 text-center m-5">
            <thead>
                <tr>
                    <th colspan="2">Co-Scholastic Areas : Term II (on a 3-point grading scale)</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <td>Work Education</td>
                    <td><?= h($excellence->term2_work_education) ?></td>
                </tr>
                <tr>
                    <td>Art Education</td>
                    <td><?= h($excellence->term2_art_education) ?></td>
                </tr>
                <tr>
                    <td>Health & Physical Education</td>
                    <td><?= h($excellence->term2_physical_education) ?></td>
                </tr>
                <tr>
                    <td>Discipline</td>
                    <td><?= h($excellence->term2_discipline) ?></td>
                </tr>
            </tbody>
            
        </table>
        <div class="row mt-5">
                <div class="col-md-6">
                    <div class="bg-light p-3 rounded text-center">
                        <h5>Total Marks: <?= h($results->term2_total_marks) ?></h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-light p-3 rounded text-center">
                        <h5>Final Grade: <?= h($results->term2_grade ) ?></h5>
                    </div>
                </div>
            </div>
    </div>
</div>
