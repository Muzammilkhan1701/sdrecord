<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry; // Required to use the TableRegistry

class MarksComponent extends Component
{
    // Example method where you use the find method on the MarksTable
    public function getStudentMarks($studentId)
    {
        // Load the MarksTable
        $marksTable = TableRegistry::getTableLocator()->get('Marks');
        
        // Use the find method on MarksTable
        $query = $marksTable->find()
            ->where(['student_id' => $studentId])
            ->all();

        return $query;
    }
}
