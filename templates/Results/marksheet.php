<!-- <div class="container-fluid align-items-center" style="background-color: #d9d4f7;">
    <div class="container-fluid h3 text-center fw-bold">
        Sunny's Spring Dale School
        <div class="text-center p-3">
            <?= $this->Html->image('springdalelogo.png', ['alt' => 'Logo', 'style' => 'width: 200px; height: 200px;']) ?>
        </div>
    </div>

    <div class="row container-fluid border border-primary border-5 rounded m-0 d-flex justify-content-between bg-primary-subtle">
        <div class="col-4">
            <div class="bg-primary mt-3 ms-2 p-2 rounded text-white">
                Student Name: <?= isset($student) ? h($student->name) : 'N/A' ?>
            </div>
            <div class="bg-primary m-2 p-2 text-white rounded">
                Roll No: <?= isset($student) ? h($marks->rollno) : 'N/A' ?>
            </div>
            <div class="bg-primary m-2 p-2 text-white rounded">
                Admission No: <?= isset($student) ? h($marks->academic_year) : 'N/A' ?>
            </div>
        </div>
        <div class="col-4">
            <div class="bg-primary mt-3 me-2 p-2 text-white rounded">
                Class: <?= isset($student) ? h($marks->class) : 'N/A' ?>
            </div>
            <div class="bg-primary m-2 p-2 text-white rounded">
                Mother's Name: <?= isset($student) ? h($student->mother_name) : 'N/A' ?>
            </div>
            <div class="bg-primary me-2 p-2 text-white rounded">
                Section: <?= isset($student) ? h($student->section) : 'N/A' ?>
            </div>
        </div>
    </div>

    <?php if (isset($marks) && isset($term)): ?>
    <table class="table mt-5">
        <thead>
            <tr>
                <th class="bg-primary text-white" colspan="8">Term <?= $term == 'Term1' ? 'I' : 'II' ?> (100 marks)</th>
            </tr>
            <tr>
                <th class="bg-primary text-white" colspan="8">Scholastic Areas</th>
            </tr>
            <tr>
                <th class="bg-primary text-white" scope="col">Subject</th>
                <th class="bg-primary text-white" scope="col">Periodic Test</th>
                <th class="bg-primary text-white" scope="col">Subject Enrichment</th>
                <th class="bg-primary text-white" scope="col">Multiple Assessment</th>
                <th class="bg-primary text-white" scope="col">Portfolio</th>
                <th class="bg-primary text-white" scope="col">Mid Term</th>
                <th class="bg-primary text-white" scope="col">Marks Obtained</th>
                <th class="bg-primary text-white" scope="col">Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">English</th>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_1) : h($marks->term2_subject_1) ?></td>
                <td><?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></td>
            </tr>
            <tr class="bg-primary-subtle">
                <th scope="row">Hindi</th>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_2) : h($marks->term2_subject_2) ?></td>
                <td><?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></td>
            </tr>
            <tr>
                <th scope="row">Marathi/Sanskrit</th>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_3) : h($marks->term2_subject_3) ?></td>
                <td><?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></td>
            </tr>
            <tr class="bg-primary-subtle">
                <th scope="row">Mathematics</th>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_4) : h($marks->term2_subject_4) ?></td>
                <td><?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></td>
            </tr>
            <tr>
                <th scope="row">Science</th>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_5) : h($marks->term2_subject_5) ?></td>
                <td><?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></td>
            </tr>
            <tr>
                <th scope="row">Social Science</th>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_6) : h($marks->term2_subject_6) ?></td>
                <td><?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></td>
            </tr>
            <tr>
                <th scope="row">Computer</th>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_7) : h($marks->term2_subject_7) ?></td>
                <td><?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></td>
            </tr>
        </tbody>
    </table>

    <table class="table mt-5">
        <thead>
            <tr>
                <th class="bg-primary text-white" colspan="2">Co-Scholastic Areas: Term <?= $term == 'Term1' ? 'I' : 'II' ?> (on a 3-point grading scale)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Work Education (or Pre-Vocational Education)</td>
                <td>---</td>
            </tr>
            <tr>
                <td>Art Education</td>
                <td>---</td>
            </tr>
            <tr>
                <td>Health & Physical Education</td>
                <td>---</td>
            </tr>
            <tr>
                <td>Discipline: Term <?= $term == 'Term1' ? 'I' : 'II' ?> (on a 3-point grading scale)</td>
                <td>---</td>
            </tr>
        </tbody>
    </table>

    <div class="bg-primary text-center text-white py-1 pt-3 rounded">
        <h5>Total: <?= $term == 'Term1' ? h($marks->term1_total_marks) : h($marks->term2_total_marks) ?></h5>
    </div>
    <div class="bg-light text-center py-1">
        <h5>Percentage(%): <?= $term == 'Term1' ? h($results->term1_percentage) : h($results->term2_percentage) ?></h5>
    </div>
    <div class="bg-primary text-center text-white py-1 pt-3 rounded">
        <h5>Grade: <?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></h5>
    </div>

    <?php else: ?>
        <p>No marks found for the selected term.</p>
    <?php endif; ?>

    <div class="text-center">
        <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'landing']) ?>">
            <button type="button" class="btn btn-primary m-5">Home</button>
        </a>
    </div>
</div> -->




<!-- asim template -->

     <!-- <div class="container-fluid row mt-5 bg-light p-0 ">
     <div class="row container-fluid border border-primary border-5 rounded m-0 d-flex justify-content-between bg-primary-subtle">
        <div class="col-4">
            <div class="bg-primary mt-3 ms-2 p-2 rounded text-white">
                Student Name: <?= isset($student) ? h($student->name) : 'N/A' ?>
            </div>
            <div class="bg-primary m-2 p-2 text-white rounded">
                Roll No: <?= isset($student) ? h($marks->rollno) : 'N/A' ?>
            </div>
            <div class="bg-primary m-2 p-2 text-white rounded">
                Admission No: <?= isset($student) ? h($marks->academic_year) : 'N/A' ?>
            </div>
        </div>
        <div class="col-4">
            <div class="bg-primary mt-3 me-2 p-2 text-white rounded">
                Class: <?= isset($student) ? h($marks->class) : 'N/A' ?>
            </div>
            <div class="bg-primary m-2 p-2 text-white rounded">
                Mother's Name: <?= isset($student) ? h($student->mother_name) : 'N/A' ?>
            </div>
            <div class="bg-primary me-2 p-2 text-white rounded">
                Section: <?= isset($student) ? h($student->section) : 'N/A' ?>
            </div>
        </div>
    </div>
        <div class="col-lg-6 bg-primary mt-5 ms-5 rounded-5">
            
    <table class="table table-bordered border-dark w-50 text-center m-5 bg-light">
    

    <?php if (isset($marks) && isset($term)): ?>

        <thead>
        <tr>
                <th class="" colspan="8">Term <?= $term == 'Term1' ? 'I' : 'II' ?> (100 marks)</th>
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
            <tr>
            <th scope="row">English</th>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_1_periodic_test) : h($marks->term2_subject_1_periodic_test) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_1_subject_enrichment) : h($marks->term2_subject_1_subject_enrichment) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_1_multiple_assessment) : h($marks->term2_subject_1_multiple_assessment) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_1_portfolio) : h($marks->term2_subject_1_portfolio) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_1) : h($marks->term2_subject_1) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_1_total) : h($marks->term2_subject_1_total) ?></td>
                <td><?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></td>
            </tr>
            <tr>
            <th scope="row">Hindi</th>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_2_periodic_test) : h($marks->term2_subject_2_periodic_test) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_2_subject_enrichment) : h($marks->term2_subject_2_subject_enrichment) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_2_multiple_assessment) : h($marks->term2_subject_2_multiple_assessment) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_2_portfolio) : h($marks->term2_subject_2_portfolio) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_2) : h($marks->term2_subject_2) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_2_total) : h($marks->term2_subject_2_total) ?></td>
                <td><?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></td>
            </tr>
            <tr>
            <th scope="row">Marathi/Sanskrit</th>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_3_periodic_test) : h($marks->term2_subject_3_periodic_test) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_3_subject_enrichment) : h($marks->term1_subject_3_subject_enrichment) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_3_multiple_assessment) : h($marks->term1_subject_3_multiple_assessment) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_3_portfolio) : h($marks->term1_subject_3_portfolio) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_3) : h($marks->term1_subject_3) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_3_total) : h($marks->term2_subject_3_total) ?></td>
                <td><?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></td>
              </tr>
              <tr>
              <th scope="row">Mathematics</th>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_4_periodic_test) : h($marks->term2_subject_4_periodic_test) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_4_subject_enrichment) : h($marks->term1_subject_4_subject_enrichment) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_4_multiple_assessment) : h($marks->term1_subject_4_multiple_assessment) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_4_portfolio) : h($marks->term1_subject_4_portfolio) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_4) : h($marks->term1_subject_4) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_4_total) : h($marks->term2_subject_4_total) ?></td>
                <td><?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></td>
              </tr>
              <tr>
              <th scope="row">Science</th>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_5_periodic_test) : h($marks->term2_subject_5_periodic_test) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_5_subject_enrichment) : h($marks->term1_subject_5_subject_enrichment) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_5_multiple_assessment) : h($marks->term1_subject_5_multiple_assessment) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_5_portfolio) : h($marks->term1_subject_5_portfolio) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_5) : h($marks->term1_subject_5) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_5_total) : h($marks->term2_subject_5_total) ?></td>
                <td><?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></td>
              </tr>
              <tr>
                <th scope="row">Social Science</th>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_6_periodic_test) : h($marks->term2_subject_6_periodic_test) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_6_subject_enrichment) : h($marks->term1_subject_6_subject_enrichment) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_6_multiple_assessment) : h($marks->term1_subject_6_multiple_assessment) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_6_portfolio) : h($marks->term1_subject_6_portfolio) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_6) : h($marks->term1_subject_6) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_6_total) : h($marks->term2_subject_6_total) ?></td>
                <td><?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></td>
            </tr>
            <tr>
                <th scope="row">Computer</th>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_7_periodic_test) : h($marks->term2_subject_7_periodic_test) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_7_subject_enrichment) : h($marks->term1_subject_7_subject_enrichment) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_7_multiple_assessment) : h($marks->term1_subject_7_multiple_assessment) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_7_portfolio) : h($marks->term1_subject_7_portfolio) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_7) : h($marks->term1_subject_7) ?></td>
                <td><?= $term == 'Term1' ? h($marks->term1_subject_7_total) : h($marks->term2_subject_7_total) ?></td>
                <td><?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></td>
            </tr>
        </tbody>  
      </table>
      <div class="bg-primary text-center text-white py-1 pt-3 rounded">
        <h5>Total: <?= $term == 'Term1' ? h($marks->term1_total_marks) : h($marks->term2_total_marks) ?></h5>
    </div>
    <div class="bg-light text-center py-1">
        <h5>Percentage(%): <?= $term == 'Term1' ? h($results->term1_percentage) : h($results->term2_percentage) ?></h5>
    </div>
    <div class="bg-primary text-center text-white py-1 pt-3 rounded">
        <h5>Grade: <?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></h5>
    </div>

    <?php else: ?>
        <p>No marks found for the selected term.</p>
    <?php endif; ?>

    <div class="text-center">
        <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'landing']) ?>">
            <button type="button" class="btn btn-primary m-5">Home</button>
        </a>
    </div>


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
            <tr>
              <th scope="row">English</th>
              <td>---</td>
              <td>---</td>
              <td>---</td>
              <td>---</td>
              <td>---</td>
              <td>---</td>
              <td>---</td>
            </tr>
            <tr>
              <th scope="row">Hindi</th>
              <td>---</td>
              <td>---</td>
              <td>---</td>
              <td>---</td>
              <td>---</td>
              <td>---</td>
              <td>---</td>
            </tr>
            <tr>
                <th scope="row">Marathi</th>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
              </tr>
              <tr>
                <th scope="row">Maths</th>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
              </tr>
              <tr>
                <th scope="row">EVS</th>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
              </tr>
        </tbody>  
      </table>
         </div>

     <div class="col-lg-5 rounded-5 ms-5 bg-primary mt-5 ">
      <table class="table table-bordered border-dark w-75 text-center m-5 ">

        <thead>
            <tr>
              <th colspan="2">Co-Scholastic Areas : Term I (on a 3 - point grading scale)</th>            
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>---</td>
              <td>Grade</td>
            </tr>
            <tr>
              <td>Work Education (or Pre-Vocational Education)</td>
              <td>---</td>
            </tr>
            <tr>
                <td>Art Education</td>
                <td>---</td>
              </tr>
              <tr>
                <td>Health & Physical Education</td>
                <td>---</td>
              </tr>
              <tr class="mt-2">
                <td>Discipline : Term-I (on a 3-point grading scale)</td>
                <td>---</td>
              </tr>

            </tbody>
            </table>

            <table class="table table-bordered border-dark w-75 text-center m-5">

                <thead>
                    <tr>
                      <th colspan="2">Co-Scholastic Areas : Term II (on a 3 - point grading scale)</th>            
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>---</td>
                      <td>Grade</td>
                    </tr>
                    <tr>
                      <td>Work Education (or Pre-Vocational Education)</td>
                      <td>---</td>
                    </tr>
                    <tr>
                        <td>Art Education</td>
                        <td>---</td>
                      </tr>
                      <tr>
                        <td>Health & Physical Education</td>
                        <td>---</td>
                      </tr>
                      <tr> 
                        <td>Discipline : Term-II (on a 3-point grading scale)</td>
                        <td>---</td>
                      </tr>
        
                    </tbody>
                    </table>
         </div>
    </div> -->

    <!-- chatgpt template -->

    <!-- <div class="container-fluid mt-5 bg-light p-0">
    <div class="row container-fluid border border-primary border-5 rounded m-0 d-flex justify-content-between bg-primary-subtle">
        
        <div class="col-4">
            <div class="bg-primary mt-3 ms-2 p-2 rounded text-white">
                <strong>Student Name:</strong> <?= isset($student) ? h($student->name) : 'N/A' ?>
            </div>
            <div class="bg-primary m-2 p-2 text-white rounded">
                <strong>Roll No:</strong> <?= isset($marks) ? h($marks->rollno) : 'N/A' ?>
            </div>
            <div class="bg-primary m-2 p-2 text-white rounded">
                <strong>Admission No:</strong> <?= isset($marks) ? h($marks->academic_year) : 'N/A' ?>
            </div>
        </div>
        
        <div class="col-4">
            <div class="bg-primary mt-3 me-2 p-2 text-white rounded">
                <strong>Class:</strong> <?= isset($marks) ? h($marks->class) : 'N/A' ?>
            </div>
            <div class="bg-primary m-2 p-2 text-white rounded">
                <strong>Mother's Name:</strong> <?= isset($student) ? h($student->mother_name) : 'N/A' ?>
            </div>
            <div class="bg-primary me-2 p-2 text-white rounded">
                <strong>Section:</strong> <?= isset($student) ? h($student->section) : 'N/A' ?>
            </div>
        </div>
    </div>

    
    <div class="col-lg-12 bg-primary mt-5 rounded-5">
        <table class="table table-bordered border-dark text-center bg-light mx-auto mt-5 w-75">
            <?php if (isset($marks) && isset($term)): ?>
                <thead>
                    <tr>
                        <th colspan="8" class="bg-primary text-white">
                            <strong>Term <?= $term == 'Term1' ? 'I' : 'II' ?> (100 Marks)</strong>
                        </th>
                    </tr>
                    <tr class="bg-primary-subtle">
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
                        $subjects = ['English', 'Hindi', 'Marathi/Sanskrit', 'Mathematics', 'Science', 'Social Science', 'Computer'];
                        for ($i = 1; $i <= 7; $i++): 
                    ?>
                    <tr>
                        <th scope="row"><?= $subjects[$i - 1] ?></th>
                        <td><?= $term == 'Term1' ? h($marks->{'term1_subject_'.$i.'_periodic_test'}) : h($marks->{'term2_subject_'.$i.'_periodic_test'}) ?></td>
                        <td><?= $term == 'Term1' ? h($marks->{'term1_subject_'.$i.'_subject_enrichment'}) : h($marks->{'term2_subject_'.$i.'_subject_enrichment'}) ?></td>
                        <td><?= $term == 'Term1' ? h($marks->{'term1_subject_'.$i.'_multiple_assessment'}) : h($marks->{'term2_subject_'.$i.'_multiple_assessment'}) ?></td>
                        <td><?= $term == 'Term1' ? h($marks->{'term1_subject_'.$i.'_portfolio'}) : h($marks->{'term2_subject_'.$i.'_portfolio'}) ?></td>
                        <td><?= $term == 'Term1' ? h($marks->{'term1_subject_'.$i}) : h($marks->{'term2_subject_'.$i}) ?></td>
                        <td><?= $term == 'Term1' ? h($marks->{'term1_subject_'.$i.'_total'}) : h($marks->{'term2_subject_'.$i.'_total'}) ?></td>
                        <td><?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></td>
                    </tr>
                    <?php endfor; ?>
                </tbody>
            <?php else: ?>
                <p class="text-center">No marks found for the selected term.</p>
            <?php endif; ?>
        </table>

        
        <div class="text-center mt-3">
            <div class="bg-primary text-white p-3 rounded mb-3">
                <h5>Total Marks: <?= $term == 'Term1' ? h($marks->term1_total_marks) : h($marks->term2_total_marks) ?></h5>
            </div>
            <div class="bg-light p-3 rounded mb-3">
                <h5>Percentage: <?= $term == 'Term1' ? h($results->term1_percentage) : h($results->term2_percentage) ?>%</h5>
            </div>
            <div class="bg-primary text-white p-3 rounded mb-3">
                <h5>Grade: <?= $term == 'Term1' ? h($results->term1_grade) : h($results->term2_grade) ?></h5>
            </div>
        </div>

        
        <div class="text-center">
            <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'landing']) ?>" class="btn btn-primary m-5">Home</a>
        </div>
    </div>
</div> -->


<!-- chatgpt template-2 -->


<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-3">
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
                        <strong>Admission Year:</strong> <?= isset($student) ? h($marks->academic_year) : 'N/A' ?>
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
                                <!-- <td><?= h($term == 'Term1' ? $results->term1_grade : $results->term2_grade) ?></td> -->
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


        
        <div class="table-responsive d-flex justify-content-center  ">
            

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
            <?php else : ?>
            <tr>
                <td colspan="2">No grades found for the selected term.</td>
            </tr>
            <?php endif; ?>

    </table>
</div>



        <div class="text-center mb-5">
            <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'landing']) ?>" class="btn btn-primary px-5">Home</a>
        </div>
    </div>
</div>


