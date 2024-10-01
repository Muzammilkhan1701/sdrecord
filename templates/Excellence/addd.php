<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Excellence'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="excellence form content">
            <?= $this->Form->create($excellence) ?>
            <fieldset>
                <legend><?= __('Add Excellence') ?></legend>
                
               <!-- Student Selection Dropdown -->
                <?= $this->Form->control('student_id', ['options' => $students, 'empty' => true]) ?>
                
                <!-- Term Selection Dropdown -->
                <div class="mb-5 fs-4">
                    <?= $this->Form->control('term', [
                        'type' => 'select', 
                        'options' => ['Term 1' => 'Term 1', 'Term 2' => 'Term 2'], 
                        'empty' => 'Select Term', 
                        'id' => 'term-select'
                    ]) ?>
                </div>

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
                                    <?= $this->Form->control('term1_work_education', ['label' => 'Work Education (Term 1)']) ?>
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

<!-- add code  -->
 <!-- edit code -->
 <?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Excellence $excellence
 * @var string[]|\Cake\Collection\CollectionInterface $students
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $excellence->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $excellence->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Excellence'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="excellence form content">
            <?= $this->Form->create($excellence) ?>
            <fieldset>
                <legend><?= __('Edit Excellence') ?></legend>
                <?= $this->Form->control('student_id', ['options' => $students, 'empty' => true]) ?>
                
                <!-- Term Selection Dropdown -->
                <div class="mb-5 fs-4">
                    <?= $this->Form->control('term', [
                        'type' => 'select', 
                        'options' => ['Term 1' => 'Term 1', 'Term 2' => 'Term 2'], 
                        'empty' => 'Select Term', 
                        'id' => 'term-select'
                    ]) ?>
                </div>

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
                                    <?= $this->Form->control('term1_work_education', ['label' => 'Work Education (Term 1)']) ?>
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

<!-- edit  -->
 <!-- index -->
 <?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Excellence> $excellence
 */
?>
<div class="excellence index content">
    <?= $this->Html->link(__('New Excellence'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Excellence') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('student_id') ?></th>
                    <th><?= $this->Paginator->sort('term1_work_education') ?></th>
                    <th><?= $this->Paginator->sort('term1_art_education') ?></th>
                    <th><?= $this->Paginator->sort('term1_physical_education') ?></th>
                    <th><?= $this->Paginator->sort('term1_discipline') ?></th>
                    <th><?= $this->Paginator->sort('term2_work_education') ?></th>
                    <th><?= $this->Paginator->sort('term2_art_education') ?></th>
                    <th><?= $this->Paginator->sort('term2_physical_education') ?></th>
                    <th><?= $this->Paginator->sort('term2_discipline') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($excellence as $excellence): ?>
                <tr>
                    <td><?= $this->Number->format($excellence->id) ?></td>
                    <td><?= $excellence->has('student') ? $this->Html->link($excellence->student->name, ['controller' => 'Students', 'action' => 'view', $excellence->student->student_id]) : '' ?></td>
                    <td><?= h($excellence->term1_work_education) ?></td>
                    <td><?= h($excellence->term1_art_education) ?></td>
                    <td><?= h($excellence->term1_physical_education) ?></td>
                    <td><?= h($excellence->term1_discipline) ?></td>
                    <td><?= h($excellence->term2_work_education) ?></td>
                    <td><?= h($excellence->term2_art_education) ?></td>
                    <td><?= h($excellence->term2_physical_education) ?></td>
                    <td><?= h($excellence->term2_discipline) ?></td>
                    <td><?= h($excellence->created) ?></td>
                    <td><?= h($excellence->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $excellence->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $excellence->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $excellence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $excellence->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
<!-- index -->
 <!-- view -->
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

  <!-- view  -->
   <!-- controller -->
    
   
   
public function add()
    {
        // Load the 'Marks' and 'Students' models
        $marksTable = $this->loadModel('Marks');
        $studentsTable = $this->loadModel('Students');

        // Create a new Excellence entity
        $excellence = $this->Excellence->newEmptyEntity();

        // Fetch all students to display in a dropdown
        $students = $studentsTable->find('list', ['keyField' => 'student_id', 'valueField' => 'name'])->toArray();

        if ($this->request->is('post')) {
            $studentId = $this->request->getData('student_id');
            $latestMarks = $marksTable->find()
                ->select(['academic_year', 'class'])
                ->where(['student_id' => $studentId])
                ->order(['academic_year' => 'DESC'])
                ->first();

            if ($latestMarks) {
                $excellence = $this->Excellence->patchEntity($excellence, $this->request->getData());
                $excellence->academic_year = $latestMarks->academic_year;
                $excellence->class = $latestMarks->class;

                if ($this->Excellence->save($excellence)) {
                    $this->Flash->success(__('Excellence record has been saved.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('Unable to save excellence record.'));
                }
            } else {
                $this->Flash->error(__('No academic year or class found for the student.'));
            }
        }

        // Pass the excellence and students variables to the view
        $this->set(compact('excellence', 'students'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Excellence id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        // Load the Excellence record by its ID
        $excellence = $this->Excellence->get($id);

        // Load the 'Marks' model to fetch the academic year and class
        $marksTable = $this->loadModel('Marks');

        if ($this->request->is(['patch', 'post', 'put'])) {
            // Get the student ID from the form submission
            $studentId = $this->request->getData('student_id');

            // Fetch the academic year and class from the Marks table
            $latestMarks = $marksTable->find()
                ->select(['academic_year', 'class'])
                ->where(['student_id' => $studentId])
                ->order(['created' => 'DESC']) // Get the latest entry
                ->first();

            if ($latestMarks) {
                // Set the form data to the excellence entity
                $excellence = $this->Excellence->patchEntity($excellence, $this->request->getData());

                // Update the academic year and class fields with the latest data
                $excellence->academic_year = $latestMarks->academic_year;
                $excellence->class = $latestMarks->class;

                // Save the updated excellence record
                if ($this->Excellence->save($excellence)) {
                    $this->Flash->success(__('Excellence record has been updated.'));

                    // Optionally redirect after saving
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('Unable to update excellence record.'));
                }
            } else {
                $this->Flash->error(__('No academic year or class found for the student.'));
            }
        }

        // Set the excellence variable for use in the view
        $this->set(compact('excellence'));
    }
