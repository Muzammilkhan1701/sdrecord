public function marksheet()
{
$this->viewBuilder()->setLayout('home');

if ($this->request->is('post')) {
$data = $this->request->getData();

// Get form data
$rollNo = isset($data['rollno']) ? $data['rollno'] : null;
$term = isset($data['term']) ? $data['term'] : 'Term1';
$motherName = isset($data['mother_name']) ? $data['mother_name'] : null;
$academicYear = isset($data['academic_year']) ? $data['academic_year'] : null;

// Validate that all form fields are provided
if (!$rollNo || !$motherName || !$academicYear) {
$this->Flash->error(('All fields (Roll No, Term, Mother\'s Name, Academic Year) are required.'));
return $this->redirect(['action' => 'rform']);
}

// 1. Check if Roll Number exists in Marks table
$markEntry = $this->Marks->find()
->where(['Marks.rollno' => $rollNo, 'Marks.academic_year' => $academicYear])
->first();

// Debugging: Check what is returned for Marks
if (!$markEntry) {
$this->Flash->error(('No record found for the given Roll Number and Term.'));
return $this->redirect(['action' => 'rform']);
}

// 2. Check if Mother's Name matches for the student in the Students table
$student = $this->Marks->Students->find()
->where(['Students.mother_name' => $motherName])
->first();

// Debugging: Check what is returned for Student
if (!$student) {
$this->Flash->error(('Mother\'s name does not match for this Roll Number.'));
return $this->redirect(['action' => 'rform']);
}

// 3. Check if Academic Year exists in AcademicYears table


// Debugging: Check what is returned for Academic Year


// If all checks pass, proceed to fetch and display the marksheet
$this->set('marks', $markEntry); // Set marks
$this->set('student', $student); // Set student data
$this->set('term', $term); // Set term for conditional display

// Load the marksheet view
$this->viewBuilder()->setTemplate('marksheet');
}
}