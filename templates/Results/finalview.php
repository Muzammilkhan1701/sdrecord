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

    <?php
                    if ($marks->class >= 1 && $marks->class <= 4) {

    // Define subjects
    $subjects = [
        'English' => [
            'term1' => [
                'periodic_test' => 'term1_subject_1_periodic_test',
                'ct' => 'term1_subject_1_ct',
                'subject_enrichment' => 'term1_subject_1_subject_enrichment',
                'multiple_assessment' => 'term1_subject_1_multiple_assessment',
                'portfolio' => 'term1_subject_1_portfolio',
                'mid_term' => 'term1_subject_1',
                'total' => 'term1_subject_1_total',
                'grade' => 'term1_subject_1_grade'
            ],
            'term2' => [
                'periodic_test' => 'term2_subject_1_periodic_test',
                                'ct' => 'term2_subject_1_ct',
                'subject_enrichment' => 'term2_subject_1_subject_enrichment',
                'multiple_assessment' => 'term2_subject_1_multiple_assessment',
                'portfolio' => 'term2_subject_1_portfolio',
                'mid_term' => 'term2_subject_1',
                'total' => 'term2_subject_1_total',
                'grade' => 'term2_subject_1_grade'
            ]
        ],
        'Hindi' => [
            'term1' => [
                'periodic_test' => 'term1_subject_2_periodic_test',
                                'ct' => 'term1_subject_2_ct',
                'subject_enrichment' => 'term1_subject_2_subject_enrichment',
                'multiple_assessment' => 'term1_subject_2_multiple_assessment',
                'portfolio' => 'term1_subject_2_portfolio',
                'mid_term' => 'term1_subject_2',
                'total' => 'term1_subject_2_total',
                'grade' => 'term1_subject_2_grade'
            ],
            'term2' => [
                'periodic_test' => 'term2_subject_2_periodic_test',
                                'ct' => 'term2_subject_2_ct',
                'subject_enrichment' => 'term2_subject_2_subject_enrichment',
                'multiple_assessment' => 'term2_subject_2_multiple_assessment',
                'portfolio' => 'term2_subject_2_portfolio',
                'mid_term' => 'term2_subject_2',
                'total' => 'term2_subject_2_total',
                'grade' => 'term2_subject_2_grade'
            ]
            ],
        'Marathi/Sanskrit' => [
            'term1' => [
                'periodic_test' => 'term1_subject_3_periodic_test',
                                'ct' => 'term1_subject_3_ct',
                'subject_enrichment' => 'term1_subject_3_subject_enrichment',
                'multiple_assessment' => 'term1_subject_3_multiple_assessment',
                'portfolio' => 'term1_subject_3_portfolio',
                'mid_term' => 'term1_subject_3',
                'total' => 'term1_subject_3_total',
                'grade' => 'term1_subject_3_grade'
            ],
            'term2' => [
                'periodic_test' => 'term2_subject_3_periodic_test',
                                'ct' => 'term2_subject_3_ct',
                'subject_enrichment' => 'term2_subject_3_subject_enrichment',
                'multiple_assessment' => 'term2_subject_3_multiple_assessment',
                'portfolio' => 'term2_subject_3_portfolio',
                'mid_term' => 'term2_subject_3',
                'total' => 'term2_subject_3_total',
                'grade' => 'term2_subject_3_grade'
            ]
            ],
            'Mathematics' => [
            'term1' => [
                'periodic_test' => 'term1_subject_4_periodic_test',
                                'ct' => 'term1_subject_4_ct',
                'subject_enrichment' => 'term1_subject_4_subject_enrichment',
                'multiple_assessment' => 'term1_subject_4_multiple_assessment',
                'portfolio' => 'term1_subject_4_portfolio',
                'mid_term' => 'term1_subject_4',
                'total' => 'term1_subject_4_total',
                'grade' => 'term1_subject_4_grade'
            ],
            'term2' => [
                'periodic_test' => 'term2_subject_4_periodic_test',
                                'ct' => 'term2_subject_4_ct',
                'subject_enrichment' => 'term2_subject_4_subject_enrichment',
                'multiple_assessment' => 'term2_subject_4_multiple_assessment',
                'portfolio' => 'term2_subject_4_portfolio',
                'mid_term' => 'term2_subject_4',
                'total' => 'term2_subject_4_total',
                'grade' => 'term2_subject_4_grade'
            ]
            ],
        'EVS' => [
            'term1' => [
                'periodic_test' => 'term1_subject_8_periodic_test',
                                'ct' => 'term1_subject_8_ct',
                'subject_enrichment' => 'term1_subject_8_subject_enrichment',
                'multiple_assessment' => 'term1_subject_8_multiple_assessment',
                'portfolio' => 'term1_subject_8_portfolio',
                'mid_term' => 'term1_subject_8',
                'total' => 'term1_subject_8_total',
                'grade' => 'term1_subject_8_grade'
            ],
            'term2' => [
                'periodic_test' => 'term2_subject_8_periodic_test',
                                'ct' => 'term2_subject_8_ct',
                'subject_enrichment' => 'term2_subject_8_subject_enrichment',
                'multiple_assessment' => 'term2_subject_8_multiple_assessment',
                'portfolio' => 'term2_subject_8_portfolio',
                'mid_term' => 'term2_subject_8',
                'total' => 'term2_subject_8_total',
                'grade' => 'term2_subject_8_grade'
            ]
            ],
            'GK' => [
            'term1' => [
                'periodic_test' => 'term1_subject_9_periodic_test',
                                'ct' => 'term1_subject_9_ct',
                'subject_enrichment' => 'term1_subject_9_subject_enrichment',
                'multiple_assessment' => 'term1_subject_9_multiple_assessment',
                'portfolio' => 'term1_subject_9_portfolio',
                'mid_term' => 'term1_subject_9',
                'total' => 'term1_subject_9_total',
                'grade' => 'term1_subject_9_grade'
            ],
            'term2' => [
                'periodic_test' => 'term2_subject_9_periodic_test',
                                'ct' => 'term2_subject_9_ct',
                'subject_enrichment' => 'term2_subject_9_subject_enrichment',
                'multiple_assessment' => 'term2_subject_9_multiple_assessment',
                'portfolio' => 'term2_subject_9_portfolio',
                'mid_term' => 'term2_subject_9',
                'total' => 'term2_subject_9_total',
                'grade' => 'term2_subject_9_grade'
            ]
            ],
            'Computer' => [
            'term1' => [
                'periodic_test' => 'term1_subject_7_periodic_test',
                                'ct' => 'term1_subject_7_ct',
                'subject_enrichment' => 'term1_subject_7_subject_enrichment',
                'multiple_assessment' => 'term1_subject_7_multiple_assessment',
                'portfolio' => 'term1_subject_7_portfolio',
                'mid_term' => 'term1_subject_7',
                'total' => 'term1_subject_7_total',
                'grade' => 'term1_subject_7_grade'
            ],
            'term2' => [
                'periodic_test' => 'term2_subject_7_periodic_test',
                                'ct' => 'term2_subject_7_ct',
                'subject_enrichment' => 'term2_subject_7_subject_enrichment',
                'multiple_assessment' => 'term2_subject_7_multiple_assessment',
                'portfolio' => 'term2_subject_7_portfolio',
                'mid_term' => 'term2_subject_7',
                'total' => 'term2_subject_7_total',
                'grade' => 'term2_subject_7_grade'
            ]
        ]
        
        // Add more subjects as needed
    ];
} else{
        // Define subjects
        $subjects = [
            'English' => [
                'term1' => [
                    'periodic_test' => 'term1_subject_1_periodic_test',
                    'ct' => 'term1_subject_1_ct',
                    'subject_enrichment' => 'term1_subject_1_subject_enrichment',
                    'multiple_assessment' => 'term1_subject_1_multiple_assessment',
                    'portfolio' => 'term1_subject_1_portfolio',
                    'mid_term' => 'term1_subject_1',
                    'total' => 'term1_subject_1_total',
                    'grade' => 'term1_subject_1_grade'
                ],
                'term2' => [
                    'periodic_test' => 'term2_subject_1_periodic_test',
                                    'ct' => 'term2_subject_1_ct',
                    'subject_enrichment' => 'term2_subject_1_subject_enrichment',
                    'multiple_assessment' => 'term2_subject_1_multiple_assessment',
                    'portfolio' => 'term2_subject_1_portfolio',
                    'mid_term' => 'term2_subject_1',
                    'total' => 'term2_subject_1_total',
                    'grade' => 'term2_subject_1_grade'
                ]
            ],
            'Hindi' => [
                'term1' => [
                    'periodic_test' => 'term1_subject_2_periodic_test',
                                    'ct' => 'term1_subject_2_ct',
                    'subject_enrichment' => 'term1_subject_2_subject_enrichment',
                    'multiple_assessment' => 'term1_subject_2_multiple_assessment',
                    'portfolio' => 'term1_subject_2_portfolio',
                    'mid_term' => 'term1_subject_2',
                    'total' => 'term1_subject_2_total',
                    'grade' => 'term1_subject_2_grade'
                ],
                'term2' => [
                    'periodic_test' => 'term2_subject_2_periodic_test',
                                    'ct' => 'term2_subject_2_ct',
                    'subject_enrichment' => 'term2_subject_2_subject_enrichment',
                    'multiple_assessment' => 'term2_subject_2_multiple_assessment',
                    'portfolio' => 'term2_subject_2_portfolio',
                    'mid_term' => 'term2_subject_2',
                    'total' => 'term2_subject_2_total',
                    'grade' => 'term2_subject_2_grade'
                ]
                ],
            'Marathi/Sanskrit' => [
                'term1' => [
                    'periodic_test' => 'term1_subject_3_periodic_test',
                                    'ct' => 'term1_subject_3_ct',
                    'subject_enrichment' => 'term1_subject_3_subject_enrichment',
                    'multiple_assessment' => 'term1_subject_3_multiple_assessment',
                    'portfolio' => 'term1_subject_3_portfolio',
                    'mid_term' => 'term1_subject_3',
                    'total' => 'term1_subject_3_total',
                    'grade' => 'term1_subject_3_grade'
                ],
                'term2' => [
                    'periodic_test' => 'term2_subject_3_periodic_test',
                                    'ct' => 'term2_subject_3_ct',
                    'subject_enrichment' => 'term2_subject_3_subject_enrichment',
                    'multiple_assessment' => 'term2_subject_3_multiple_assessment',
                    'portfolio' => 'term2_subject_3_portfolio',
                    'mid_term' => 'term2_subject_3',
                    'total' => 'term2_subject_3_total',
                    'grade' => 'term2_subject_3_grade'
                ]
                ],
                'Mathematics' => [
                'term1' => [
                    'periodic_test' => 'term1_subject_4_periodic_test',
                                    'ct' => 'term1_subject_4_ct',
                    'subject_enrichment' => 'term1_subject_4_subject_enrichment',
                    'multiple_assessment' => 'term1_subject_4_multiple_assessment',
                    'portfolio' => 'term1_subject_4_portfolio',
                    'mid_term' => 'term1_subject_4',
                    'total' => 'term1_subject_4_total',
                    'grade' => 'term1_subject_4_grade'
                ],
                'term2' => [
                    'periodic_test' => 'term2_subject_4_periodic_test',
                                    'ct' => 'term2_subject_4_ct',
                    'subject_enrichment' => 'term2_subject_4_subject_enrichment',
                    'multiple_assessment' => 'term2_subject_4_multiple_assessment',
                    'portfolio' => 'term2_subject_4_portfolio',
                    'mid_term' => 'term2_subject_4',
                    'total' => 'term2_subject_4_total',
                    'grade' => 'term2_subject_4_grade'
                ]
                ],
            'Science' => [
                'term1' => [
                    'periodic_test' => 'term1_subject_5_periodic_test',
                                    'ct' => 'term1_subject_5_ct',
                    'subject_enrichment' => 'term1_subject_5_subject_enrichment',
                    'multiple_assessment' => 'term1_subject_5_multiple_assessment',
                    'portfolio' => 'term1_subject_5_portfolio',
                    'mid_term' => 'term1_subject_5',
                    'total' => 'term1_subject_5_total',
                    'grade' => 'term1_subject_5_grade'
                ],
                'term2' => [
                    'periodic_test' => 'term2_subject_5_periodic_test',
                                    'ct' => 'term2_subject_5_ct',
                    'subject_enrichment' => 'term2_subject_5_subject_enrichment',
                    'multiple_assessment' => 'term2_subject_5_multiple_assessment',
                    'portfolio' => 'term2_subject_5_portfolio',
                    'mid_term' => 'term2_subject_5',
                    'total' => 'term2_subject_5_total',
                    'grade' => 'term2_subject_5_grade'
                ]
                ],
                'Social Science' => [
                'term1' => [
                    'periodic_test' => 'term1_subject_6_periodic_test',
                                    'ct' => 'term1_subject_6_ct',
                    'subject_enrichment' => 'term1_subject_6_subject_enrichment',
                    'multiple_assessment' => 'term1_subject_6_multiple_assessment',
                    'portfolio' => 'term1_subject_6_portfolio',
                    'mid_term' => 'term1_subject_6',
                    'total' => 'term1_subject_6_total',
                    'grade' => 'term1_subject_6_grade'
                ],
                'term2' => [
                    'periodic_test' => 'term2_subject_6_periodic_test',
                                    'ct' => 'term2_subject_6_ct',
                    'subject_enrichment' => 'term2_subject_6_subject_enrichment',
                    'multiple_assessment' => 'term2_subject_6_multiple_assessment',
                    'portfolio' => 'term2_subject_6_portfolio',
                    'mid_term' => 'term2_subject_6',
                    'total' => 'term2_subject_6_total',
                    'grade' => 'term2_subject_6_grade'
                ]
                ],
                'Computer' => [
                'term1' => [
                    'periodic_test' => 'term1_subject_7_periodic_test',
                                    'ct' => 'term1_subject_7_ct',
                    'subject_enrichment' => 'term1_subject_7_subject_enrichment',
                    'multiple_assessment' => 'term1_subject_7_multiple_assessment',
                    'portfolio' => 'term1_subject_7_portfolio',
                    'mid_term' => 'term1_subject_7',
                    'total' => 'term1_subject_7_total',
                    'grade' => 'term1_subject_7_grade'
                ],
                'term2' => [
                    'periodic_test' => 'term2_subject_7_periodic_test',
                                    'ct' => 'term2_subject_7_ct',
                    'subject_enrichment' => 'term2_subject_7_subject_enrichment',
                    'multiple_assessment' => 'term2_subject_7_multiple_assessment',
                    'portfolio' => 'term2_subject_7_portfolio',
                    'mid_term' => 'term2_subject_7',
                    'total' => 'term2_subject_7_total',
                    'grade' => 'term2_subject_7_grade'
                ]
            ]
            
            // Add more subjects as needed
        ];
}
    ?>

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
                        <th><?= $marks->class <= 5 ? 'CT Marks' : 'Portfolio' ?></th>
                        <!-- <th>
                        <?php 
                        // Show CT Marks for classes 1-4, Portfolio for classes 5-10
                        if ($marks->class >= 1 && $marks->class <= 5) {
                            echo "Class Test ";
                        } else {
                            echo 'Portfolio';
                        }
                        ?> -->
                        </th>
                        <th>Mid Term</th>
                        <th>Total Marks</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($subjects as $subject => $terms): ?>
                        <tr>
                            <td><?= $subject ?></td>
                            <td><?= h($marks->{$terms['term1']['periodic_test']}) ?></td>
                            <td><?= h($marks->{$terms['term1']['subject_enrichment']}) ?></td>
                            <td><?= h($marks->{$terms['term1']['multiple_assessment']}) ?></td>
                            <!-- <td><?= h($marks->{$terms['term1']['portfolio']}) ?></td> -->
                            <td>
                                                        <?php 
                        // Show CT Marks for classes 1-4, Portfolio for classes 5-10
                        if ($marks->class >= 1 && $marks->class <= 5) {
                            echo h($marks->{$terms['term1']['ct']});
                        } else {
                            echo h($marks->{$terms['term1']['portfolio']});
                        }
                        ?>

                            </td>
                            <td><?= h($marks->{$terms['term1']['mid_term']}) ?></td>
                            <td><?= h($marks->{$terms['term1']['total']}) ?></td>
                            <td><?= h(strtoupper($marks->{$terms['term1']['grade']})) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <h5>Percentage: <?= h($results->term1_percentage) ?>%</h5>
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
                        <th><?= $marks->class <= 5 ? 'CT Marks' : 'Portfolio' ?></th>
                        <th>Mid Term</th>
                        <th>Total Marks</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($subjects as $subject => $terms): ?>
                        <tr>
                            <td><?= $subject ?></td>
                            <td><?= h($marks->{$terms['term2']['periodic_test']}) ?></td>
                            <td><?= h($marks->{$terms['term2']['subject_enrichment']}) ?></td>
                            <td><?= h($marks->{$terms['term2']['multiple_assessment']}) ?></td>
                            <td><?= h($marks->{$terms['term2']['portfolio']}) ?></td>
                            <td><?= h($marks->{$terms['term2']['mid_term']}) ?></td>
                            <td><?= h($marks->{$terms['term2']['total']}) ?></td>
                            <td><?= h(strtoupper($marks->{$terms['term2']['grade']})) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <h5>Percentage: <?= h($results->term2_percentage) ?>%</h5>
                <h5>Total Marks: <?= h($results->term2_total_marks) ?></h5>
                <h5>Final Grade: <?= h(strtoupper($results->term2_grade)) ?></h5>
            </div>
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

