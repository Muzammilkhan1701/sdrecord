<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Section -->
        <aside class="col-md-3">
            <div class="side-nav bg-light p-4 rounded shadow-sm">
                <h4 class="heading text-primary"><?= __('Actions') ?></h4>
                <ul class="list-group">
                    <li class="list-group-item border-0 p-0">
                        <?= $this->Html->link('<i class="fas fa-edit"></i> Edit Marks', ['action' => 'edit', $mark->mark_id], ['escape' => false, 'class' => 'btn btn-link btn-block text-left text-dark']) ?>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <?= $this->Form->postLink('<i class="fas fa-trash"></i> Delete Marks', ['action' => 'delete', $mark->mark_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mark->mark_id), 'escape' => false, 'class' => 'btn btn-link btn-block text-left text-dark']) ?>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <?= $this->Html->link('<i class="fas fa-list"></i> List Marks', ['action' => 'index'], ['escape' => false, 'class' => 'btn btn-link btn-block text-left text-dark']) ?>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <?= $this->Html->link('<i class="fas fa-plus-circle"></i> New Marks', ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-link btn-block text-left text-dark']) ?>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Content Section -->
        <div class="col-md-9">
            <div class="excellence-view bg-white p-4 rounded shadow-sm">
                <h3 class="mb-4 text-primary"><?= h($mark->student->name) ?>'s Marks</h3>
                
                
                <!-- Tabs for Term Selection -->
                <ul class="nav nav-tabs" id="termTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="term3-tab" data-toggle="tab" href="#term3" role="tab" aria-controls="term3" aria-selected="true">Academic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="term1-tab" data-toggle="tab" href="#term1" role="tab" aria-controls="term1" aria-selected="false">Term 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="term2-tab" data-toggle="tab" href="#term2" role="tab" aria-controls="term2" aria-selected="false">Term 2</a>
                    </li>
                </ul>


                


                <!-- Tab Content -->
                <div class="tab-content" id="termTabsContent">
                    <!-- Term 1 Grades -->
                    <div class="tab-pane fade show active" id="term3" role="tabpanel" aria-labelledby="term3-tab">
                        <div class="card mt-4">
                            <div class="card-body">
                                <h5 class="card-title text-secondary">Academics</h5>
                                <table class="table table-bordered">
                                    <tr>
                                        <th><?= __('Academic Year') ?></th>
                                        <td><?= h($mark->academic_year) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Rollno') ?></th>
                                        <td><?= h($mark->rollno) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Class') ?></th>
                                        <td><?= h($mark->class) ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="term1" role="tabpanel" aria-labelledby="term1-tab">
        <div class="row">
            <!-- English Card -->
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-body">
                    <h5 class="card-title text-primary">English</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term1_subject_1 === null ? '' : $this->Number->format($mark->term1_subject_1) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term1_subject_1_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_1_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term1_subject_1_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_1_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term1_subject_1_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_1_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term1_subject_1_portfolio === null ? '' : $this->Number->format($mark->term1_subject_1_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term1_subject_1_total === null ? '' : $this->Number->format($mark->term1_subject_1_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('English Grade') ?></th>
                            <td><?= h($mark->term1_subject_1_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Hindi Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">Hindi</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term1_subject_2 === null ? '' : $this->Number->format($mark->term1_subject_2) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term1_subject_2_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_2_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term1_subject_2_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_2_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term1_subject_2_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_2_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term1_subject_2_portfolio === null ? '' : $this->Number->format($mark->term1_subject_2_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term1_subject_2_total === null ? '' : $this->Number->format($mark->term1_subject_2_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Hindi Grade') ?></th>
                            <td><?= h($mark->term1_subject_2_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Marathi Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">Marathi</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term1_subject_3 === null ? '' : $this->Number->format($mark->term1_subject_3) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term1_subject_3_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_3_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term1_subject_3_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_3_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term1_subject_3_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_3_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term1_subject_3_portfolio === null ? '' : $this->Number->format($mark->term1_subject_3_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term1_subject_3_total === null ? '' : $this->Number->format($mark->term1_subject_3_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Marathi Grade') ?></th>
                            <td><?= h($mark->term1_subject_3_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Mathematics Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">Mathematics</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term1_subject_4 === null ? '' : $this->Number->format($mark->term1_subject_4) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term1_subject_4_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_4_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term1_subject_4_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_4_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term1_subject_4_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_4_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term1_subject_4_portfolio === null ? '' : $this->Number->format($mark->term1_subject_4_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term1_subject_4_total === null ? '' : $this->Number->format($mark->term1_subject_4_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Mathematics Grade') ?></th>
                            <td><?= h($mark->term1_subject_4_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Science Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">Science</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term1_subject_5 === null ? '' : $this->Number->format($mark->term1_subject_5) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term1_subject_5_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_5_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term1_subject_5_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_5_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term1_subject_5_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_5_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term1_subject_5_portfolio === null ? '' : $this->Number->format($mark->term1_subject_5_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term1_subject_5_total === null ? '' : $this->Number->format($mark->term1_subject_5_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Science Grade') ?></th>
                            <td><?= h($mark->term1_subject_5_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Social Science Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">Social Science</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term1_subject_6 === null ? '' : $this->Number->format($mark->term1_subject_6) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term1_subject_6_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_6_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term1_subject_6_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_6_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term1_subject_6_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_6_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term1_subject_6_portfolio === null ? '' : $this->Number->format($mark->term1_subject_6_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term1_subject_6_total === null ? '' : $this->Number->format($mark->term1_subject_6_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Social Science Grade') ?></th>
                            <td><?= h($mark->term1_subject_6_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Computer Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">Computer</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term1_subject_7 === null ? '' : $this->Number->format($mark->term1_subject_7) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term1_subject_7_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_7_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term1_subject_7_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_7_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term1_subject_7_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_7_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term1_subject_7_portfolio === null ? '' : $this->Number->format($mark->term1_subject_7_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term1_subject_7_total === null ? '' : $this->Number->format($mark->term1_subject_7_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Computer Grade') ?></th>
                            <td><?= h($mark->term1_subject_7_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- EVS Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">EVS</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term1_subject_8 === null ? '' : $this->Number->format($mark->term1_subject_8) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term1_subject_8_periodic_test === null ? '' : $this->Number->format($mark->term1_subject_8_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term1_subject_8_subject_enrichment === null ? '' : $this->Number->format($mark->term1_subject_8_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term1_subject_8_multiple_assessment === null ? '' : $this->Number->format($mark->term1_subject_8_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term1_subject_8_portfolio === null ? '' : $this->Number->format($mark->term1_subject_8_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term1_subject_8_total === null ? '' : $this->Number->format($mark->term1_subject_8_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Computer Grade') ?></th>
                            <td><?= h($mark->term1_subject_8_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- GK Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">GK</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term2_subject_9 === null ? '' : $this->Number->format($mark->term2_subject_9) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term2_subject_9_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_9_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term2_subject_9_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_9_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term2_subject_9_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_9_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term2_subject_9_portfolio === null ? '' : $this->Number->format($mark->term2_subject_9_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term2_subject_9_total === null ? '' : $this->Number->format($mark->term2_subject_9_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Computer Grade') ?></th>
                            <td><?= h($mark->term2_subject_9_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>



        <!-- Continue for other subjects (Marathi, Science, Social Science, etc.) in a similar format -->
    </div>
</div>


                    <!-- Term 2 Grades -->
                    <div class="tab-pane fade" id="term2" role="tabpanel" aria-labelledby="term2-tab">
                    <div class="row">
            <!-- English Card -->
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-body">
                    <h5 class="card-title text-primary">English</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term2_subject_1 === null ? '' : $this->Number->format($mark->term2_subject_1) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term2_subject_1_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_1_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term2_subject_1_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_1_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term2_subject_1_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_1_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term2_subject_1_portfolio === null ? '' : $this->Number->format($mark->term2_subject_1_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term2_subject_1_total === null ? '' : $this->Number->format($mark->term2_subject_1_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('English Grade') ?></th>
                            <td><?= h($mark->term2_subject_1_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Hindi Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">Hindi</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term2_subject_2 === null ? '' : $this->Number->format($mark->term2_subject_2) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term2_subject_2_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_2_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term2_subject_2_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_2_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term2_subject_2_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_2_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term2_subject_2_portfolio === null ? '' : $this->Number->format($mark->term2_subject_2_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term2_subject_2_total === null ? '' : $this->Number->format($mark->term2_subject_2_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Hindi Grade') ?></th>
                            <td><?= h($mark->term2_subject_2_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Marathi Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">Marathi</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term2_subject_3 === null ? '' : $this->Number->format($mark->term2_subject_3) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term2_subject_3_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_3_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term2_subject_3_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_3_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term2_subject_3_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_3_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term2_subject_3_portfolio === null ? '' : $this->Number->format($mark->term2_subject_3_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term2_subject_3_total === null ? '' : $this->Number->format($mark->term2_subject_3_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Marathi Grade') ?></th>
                            <td><?= h($mark->term2_subject_3_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Mathematics Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">Mathematics</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term2_subject_4 === null ? '' : $this->Number->format($mark->term2_subject_4) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term2_subject_4_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_4_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term2_subject_4_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_4_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term2_subject_4_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_4_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term2_subject_4_portfolio === null ? '' : $this->Number->format($mark->term2_subject_4_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term2_subject_4_total === null ? '' : $this->Number->format($mark->term2_subject_4_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Mathematics Grade') ?></th>
                            <td><?= h($mark->term2_subject_4_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Science Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">Science</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term2_subject_5 === null ? '' : $this->Number->format($mark->term2_subject_5) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term2_subject_5_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_5_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term2_subject_5_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_5_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term2_subject_5_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_5_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term2_subject_5_portfolio === null ? '' : $this->Number->format($mark->term2_subject_5_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term2_subject_5_total === null ? '' : $this->Number->format($mark->term2_subject_5_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Science Grade') ?></th>
                            <td><?= h($mark->term2_subject_5_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Social Science Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">Social Science</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term2_subject_6 === null ? '' : $this->Number->format($mark->term2_subject_6) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term2_subject_6_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_6_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term2_subject_6_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_6_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term2_subject_6_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_6_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term2_subject_6_portfolio === null ? '' : $this->Number->format($mark->term2_subject_6_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term2_subject_6_total === null ? '' : $this->Number->format($mark->term2_subject_6_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Social Science Grade') ?></th>
                            <td><?= h($mark->term2_subject_6_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Computer Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">Computer</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term2_subject_7 === null ? '' : $this->Number->format($mark->term2_subject_7) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term2_subject_7_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_7_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term2_subject_7_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_7_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term2_subject_7_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_7_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term2_subject_7_portfolio === null ? '' : $this->Number->format($mark->term2_subject_7_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term2_subject_7_total === null ? '' : $this->Number->format($mark->term2_subject_7_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Computer Grade') ?></th>
                            <td><?= h($mark->term2_subject_7_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- EVS Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">EVS</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term2_subject_8 === null ? '' : $this->Number->format($mark->term2_subject_8) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term2_subject_8_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_8_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term2_subject_8_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_8_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term2_subject_8_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_8_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term2_subject_8_portfolio === null ? '' : $this->Number->format($mark->term2_subject_8_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term2_subject_8_total === null ? '' : $this->Number->format($mark->term2_subject_8_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Computer Grade') ?></th>
                            <td><?= h($mark->term2_subject_8_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- GK Card -->
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary">GK</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Marks') ?></th>
                            <td><?= $mark->term2_subject_9 === null ? '' : $this->Number->format($mark->term2_subject_9) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Periodic Test') ?></th>
                            <td><?= $mark->term2_subject_9_periodic_test === null ? '' : $this->Number->format($mark->term2_subject_9_periodic_test) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Enrichment') ?></th>
                            <td><?= $mark->term2_subject_9_subject_enrichment === null ? '' : $this->Number->format($mark->term2_subject_9_subject_enrichment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Multiple Assessment') ?></th>
                            <td><?= $mark->term2_subject_9_multiple_assessment === null ? '' : $this->Number->format($mark->term2_subject_9_multiple_assessment) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Portfolio') ?></th>
                            <td><?= $mark->term2_subject_9_portfolio === null ? '' : $this->Number->format($mark->term2_subject_9_portfolio) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Marks') ?></th>
                            <td><?= $mark->term2_subject_9_total === null ? '' : $this->Number->format($mark->term2_subject_9_total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Computer Grade') ?></th>
                            <td><?= h($mark->term2_subject_9_grade) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


                <!-- Meta Info -->
                
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

