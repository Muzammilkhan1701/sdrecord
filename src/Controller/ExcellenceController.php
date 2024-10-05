<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Excellence Controller
 *
 * @property \App\Model\Table\ExcellenceTable $Excellence
 * @method \App\Model\Entity\Excellence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExcellenceController extends AppController
{
    
public function initialize(): void
{
    parent::initialize();
    $this->fetchTable('Students'); // This loads the StudentsComponent
    $this->Excellence = $this->fetchTable('Excellence');

}
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->viewBuilder()->setLayout('uhome');

        // Add to the beforeFilter method of UsersController
    // $this->Authentication->addUnauthenticatedActions(['login',]);
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Excellence->find()
            ->contain( ['Students']);
        $excellence = $this->paginate($query);

        $this->set(compact('excellence'));
    }

    /**
     * View method
     *
     * @param string|null $id Excellence id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $excellence = $this->Excellence->get($id, contain: ['Students']);

        $this->set(compact('excellence'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
   
// src/Controller/ExcellenceController.php

public function add()
{
    // Load the 'Marks' and 'Students' models
    $marksTable = $this->fetchTable('Marks');
    $studentsTable = $this->fetchTable('Students');

    // Create a new Excellence entity
    $excellence = $this->Excellence->newEmptyEntity();

    // Fetch all students to display in a dropdown
    $students = $this->Excellence->Students->find('list', ['keyField' => 'student_id', 'valueField' => 'name'])->toArray();

    // Fetch all possible academic years and classes
    $academicYears = $marksTable->find('list', ['keyField' => 'academic_year', 'valueField' => 'academic_year'])->group('academic_year')->toArray();
    $classes = $marksTable->find('list', ['keyField' => 'class', 'valueField' => 'class'])->group('class')->toArray();

    if ($this->request->is('post')) {
        $studentId = $this->request->getData('student_id');
        $selectedAcademicYear = $this->request->getData('academic_year'); // Fetch selected academic year
        $selectedClass = $this->request->getData('class'); // Fetch selected class

        // Check if the combination of student_id, academic_year, and class exists in the Marks table
        $marksExists = $marksTable->exists([
            'student_id' => $studentId,
            'academic_year' => $selectedAcademicYear,
            'class' => $selectedClass
        ]);

        // Check if the entry already exists in the Excellence table (to prevent duplicates)
        $excellenceExists = $this->Excellence->exists([
            'student_id' => $studentId,
            'academic_year' => $selectedAcademicYear,
            'class' => $selectedClass
        ]);

        if ($marksExists) {
            if (!$excellenceExists) {

            // Patch the excellence entity with form data
            $excellence = $this->Excellence->patchEntity($excellence, $this->request->getData());
            $excellence->academic_year = $selectedAcademicYear;
            $excellence->class = $selectedClass;

            // Save the excellence entry
            if ($this->Excellence->save($excellence)) {
                $this->Flash->success(__('Excellence record has been saved.'));
                return $this->redirect(['controller' => 'Marks','action' => 'index']);
            } else {
                $this->Flash->error(__('Unable to save excellence record. Please try again.'));
            }
        } else {
            $this->Flash->error(__('Duplicate entry. An excellence record for this student, academic year, and class already exists.'));
        }
        } else {
            // Flash message if the combination of academic year, class, and student_id doesn't exist
            $this->Flash->error(__('No marks found for the selected student, academic year, and class.'));
        }
    }

    // Pass the excellence, students, academicYears, and classes variables to the view
    $this->set(compact('excellence', 'students', 'academicYears', 'classes'));
}


/**
 * Edit method
 *
 * @param string|null $id Excellence id.
 * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
 */
// src/Controller/ExcellenceController.php

public function edit($id = null)
{
    // Load the 'Marks' and 'Students' models
    $marksTable = $this->fetchTable('Marks');
    $studentsTable = $this->fetchTable('Students');

    // Fetch the excellence entry by ID
    $excellence = $this->Excellence->get($id);

    // Fetch all students to display in a dropdown
    $students = $this->Excellence->Students->find('list', ['keyField' => 'student_id', 'valueField' => 'name'])->toArray();

    // Fetch all possible academic years and classes from the marks table
    $academicYears = $marksTable->find('list', ['keyField' => 'academic_year', 'valueField' => 'academic_year'])->group('academic_year')->toArray();
    $classes = $marksTable->find('list', ['keyField' => 'class', 'valueField' => 'class'])->group('class')->toArray();

    if ($this->request->is(['patch', 'post', 'put'])) {
        $studentId = $this->request->getData('student_id');
        $selectedAcademicYear = $this->request->getData('academic_year');
        $selectedClass = $this->request->getData('class');

        // Check if the combination of student_id, academic_year, and class exists in the Marks table
        $marksExists = $marksTable->exists([
            'student_id' => $studentId,
            'academic_year' => $selectedAcademicYear,
            'class' => $selectedClass
        ]);

        // Check for duplicate in Excellence table
        $excellenceExists = $this->Excellence->exists([
            'student_id' => $studentId,
            'academic_year' => $selectedAcademicYear,
            'class' => $selectedClass,
            'id !=' => $id // Exclude current record
        ]);

        if ($marksExists) {
            if (!$excellenceExists) {
            // Patch the excellence entity with form data
            $excellence = $this->Excellence->patchEntity($excellence, $this->request->getData());
            $excellence->academic_year = $selectedAcademicYear;
            $excellence->class = $selectedClass;

            // Save the excellence entry
            if ($this->Excellence->save($excellence)) {
                $this->Flash->success(__('Excellence record has been updated.'));
                return $this->redirect(['controller' => 'Marks','action' => 'index']);
            } else {
                $this->Flash->error(__('Unable to update excellence record. Please try again.'));
            }

        } else {
            $this->Flash->error(__('Duplicate entry. An excellence record for this student, academic year, and class already exists.'));
        }
        } else {
            // Flash message if the combination of academic year, class, and student_id doesn't exist
            $this->Flash->error(__('No marks found for the selected student, academic year, and class.'));
        }
    }

    // Pass the excellence, students, academicYears, and classes variables to the view
    $this->set(compact('excellence', 'students', 'academicYears', 'classes'));
}



    /**
     * Delete method
     *
     * @param string|null $id Excellence id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $excellence = $this->Excellence->get($id);
        if ($this->Excellence->delete($excellence)) {
            $this->Flash->success(__('The excellence has been deleted.'));
        } else {
            $this->Flash->error(__('The excellence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
