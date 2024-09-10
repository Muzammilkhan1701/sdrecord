<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Section -->
        <aside class="col-md-3">
            <div class="side-nav bg-light p-4 rounded shadow-sm">
                <h4 class="heading text-primary"><?= __('Actions') ?></h4>
                <ul class="list-group">
                    <li class="list-group-item border-0 p-0">
                        <?= $this->Html->link('<i class="fas fa-edit"></i> Edit Excellence', ['action' => 'edit', $excellence->id], ['escape' => false, 'class' => 'btn btn-link btn-block text-left text-dark']) ?>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <?= $this->Form->postLink('<i class="fas fa-trash"></i> Delete Excellence', ['action' => 'delete', $excellence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $excellence->id), 'escape' => false, 'class' => 'btn btn-link btn-block text-left text-dark']) ?>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <?= $this->Html->link('<i class="fas fa-list"></i> List Excellence', ['action' => 'index'], ['escape' => false, 'class' => 'btn btn-link btn-block text-left text-dark']) ?>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <?= $this->Html->link('<i class="fas fa-plus-circle"></i> New Excellence', ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-link btn-block text-left text-dark']) ?>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Content Section -->
        <div class="col-md-9">
            <div class="excellence-view bg-white p-4 rounded shadow-sm">
                <h3 class="mb-4 text-primary"><?= h($excellence->student->name) ?>'s Excellence</h3>
                
                <!-- Tabs for Term Selection -->
                <ul class="nav nav-tabs" id="termTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="term1-tab" data-toggle="tab" href="#term1" role="tab" aria-controls="term1" aria-selected="true">Term 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="term2-tab" data-toggle="tab" href="#term2" role="tab" aria-controls="term2" aria-selected="false">Term 2</a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="termTabsContent">
                    <!-- Term 1 Grades -->
                    <div class="tab-pane fade show active" id="term1" role="tabpanel" aria-labelledby="term1-tab">
                        <div class="card mt-4">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Term 1 Grades</h5>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Work Education</th>
                                        <td><?= h($excellence->term1_work_education) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Art Education</th>
                                        <td><?= h($excellence->term1_art_education) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Physical Education</th>
                                        <td><?= h($excellence->term1_physical_education) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Discipline</th>
                                        <td><?= h($excellence->term1_discipline) ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Term 2 Grades -->
                    <div class="tab-pane fade" id="term2" role="tabpanel" aria-labelledby="term2-tab">
                        <div class="card mt-4">
                            <div class="card-body">
                                <h5 class="card-title text-secondary">Term 2 Grades</h5>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Work Education</th>
                                        <td><?= h($excellence->term2_work_education) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Art Education</th>
                                        <td><?= h($excellence->term2_art_education) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Physical Education</th>
                                        <td><?= h($excellence->term2_physical_education) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Discipline</th>
                                        <td><?= h($excellence->term2_discipline) ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Meta Info -->
                <div class="mt-4">
                    <p><strong>ID:</strong> <?= $this->Number->format($excellence->id) ?></p>
                    <p><strong>Created:</strong> <?= h($excellence->created) ?></p>
                    <p><strong>Modified:</strong> <?= h($excellence->modified) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
