<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Marks Model
 *
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\BelongsTo $Students
 *
 * @method \App\Model\Entity\Mark newEmptyEntity()
 * @method \App\Model\Entity\Mark newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Mark[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mark get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mark findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Mark patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mark[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mark|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mark saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mark[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mark[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mark[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mark[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MarksTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('marks');
        $this->setDisplayField('academic_year');
        $this->setPrimaryKey('mark_id');

        // src/Model/Table/MarksTable.php
$this->belongsTo('Students', [
    'foreignKey' => 'student_id',
    'joinType' => 'INNER',
]);

// In MarksTable.php
// In MarksTable.php
$this->hasOne('Results', [
    'foreignKey' => 'student_id', // Adjust to the correct foreign key in Results table
    'bindingKey' => 'student_id', // Match the key in Marks table
    'joinType' => 'INNER', // Or 'LEFT' if results may not exist
]);
$this->hasOne('Excellence', [
    'foreignKey' => 'student_id', // or marks_id if applicable
]);


    }

    public function addMarks($data) {
        // Extract data
        $student_id = $data['student_id'];
        $academic_year = $data['academic_year'];
        $term1_total = $data['term1_total'];
        $term2_total = $data['term2_total'];
    
        // Calculate percentages
        $term1_percent = ($term1_total / 700) * 100;
        $term2_percent = ($term2_total / 700) * 100;
    
        // Determine grades
        $term1_grade = $this->calculateGrade($term1_percent);
        $term2_grade = $this->calculateGrade($term2_percent);
    
        // Check if the academic year exists for the student
        $academicYearExists = $this->AcademicYears->find()
            ->where(['student_id' => $student_id, 'academic_year' => $academic_year])
            ->first();
    
        if (!$academicYearExists) {
            // Insert the academic year if it doesn't exist
            $newAcademicYear = $this->AcademicYears->newEntity([
                'academic_year' => $academic_year,
                'student_id' => $student_id
            ]);
            $this->AcademicYears->save($newAcademicYear);
        }
    
        // Insert into marks table
        $marksEntry = $this->Marks->newEntity([
            'student_id' => $student_id,
            'academic_year' => $academic_year,
            'term1_total' => $term1_total,
            'term2_total' => $term2_total,
            'term1_percentage' => $term1_percent,
            'term1_grade' => $term1_grade,
            'term2_percentage' => $term2_percent,
            'term2_grade' => $term2_grade,
        ]);
        $this->Marks->save($marksEntry);
    
        // Insert into results table
        $resultsEntry = $this->Results->newEntity([
            'student_id' => $student_id,
            'academic_year' => $academic_year,
            'term1_total_marks' => $term1_total,
            'term1_percentage' => $term1_percent,
            'term1_grade' => $term1_grade,
            'term2_total_marks' => $term2_total,
            'term2_percentage' => $term2_percent,
            'term2_grade' => $term2_grade,
        ]);
        $this->Results->save($resultsEntry);
    }
    
    public function updateMarks($data) {
        // Extract data
        $student_id = $data['student_id'];
        $academic_year = $data['academic_year'];
        $term1_total = $data['term1_total'];
        $term2_total = $data['term2_total'];
    
        // Calculate percentages and grades
        $term1_percent = ($term1_total / 700) * 100;
        $term2_percent = ($term2_total / 700) * 100;
        $term1_grade = $this->calculateGrade($term1_percent);
        $term2_grade = $this->calculateGrade($term2_percent);
    
        // Update marks table
        $marksEntry = $this->Marks->find()
            ->where(['student_id' => $student_id, 'academic_year' => $academic_year])
            ->first();
    
        if ($marksEntry) {
            $marksEntry->term1_total = $term1_total;
            $marksEntry->term1_percentage = $term1_percent;
            $marksEntry->term1_grade = $term1_grade;
            $marksEntry->term2_total = $term2_total;
            $marksEntry->term2_percentage = $term2_percent;
            $marksEntry->term2_grade = $term2_grade;
            $this->Marks->save($marksEntry);
        }
    
        // Update results table
        $resultsEntry = $this->Results->find()
            ->where(['student_id' => $student_id, 'academic_year' => $academic_year])
            ->first();
    
        if ($resultsEntry) {
            $resultsEntry->term1_total_marks = $term1_total;
            $resultsEntry->term1_percentage = $term1_percent;
            $resultsEntry->term1_grade = $term1_grade;
            $resultsEntry->term2_total_marks = $term2_total;
            $resultsEntry->term2_percentage = $term2_percent;
            $resultsEntry->term2_grade = $term2_grade;
            $this->Results->save($resultsEntry);
        }
    }

    public function deleteMarks($student_id, $academic_year) {
        // Delete from marks table
        $marksEntry = $this->Marks->find()
            ->where(['student_id' => $student_id, 'academic_year' => $academic_year])
            ->first();
    
        if ($marksEntry) {
            $this->Marks->delete($marksEntry);
    
            // Delete from results table
            $resultsEntry = $this->Results->find()
                ->where(['student_id' => $student_id, 'academic_year' => $academic_year])
                ->first();
    
            if ($resultsEntry) {
                $this->Results->delete($resultsEntry);
            }
        }
    }
    
    private function calculateGrade($percentage) {
        if ($percentage >= 91) return 'A1';
        if ($percentage >= 81) return 'A2';
        if ($percentage >= 71) return 'B1';
        if ($percentage >= 61) return 'B2';
        if ($percentage >= 51) return 'C1';
        if ($percentage >= 41) return 'C2';
        if ($percentage >= 33) return 'D';
        return 'E';
    }
    

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('student_id')
            ->allowEmptyString('student_id');

        $validator
            ->scalar('academic_year')
            ->maxLength('academic_year', 9)
            ->requirePresence('academic_year', 'create')
            ->notEmptyString('academic_year');

        $validator
            ->scalar('rollno')
            ->maxLength('rollno', 20)
            ->requirePresence('rollno', 'create')
            ->notEmptyString('rollno');

        $validator
            ->scalar('class')
            ->maxLength('class', 50)
            ->requirePresence('class', 'create')
            ->notEmptyString('class');

        $validator
            ->integer('term1_subject_1')
            ->allowEmptyString('term1_subject_1');

        $validator
            ->integer('term1_subject_1_periodic_test')
            ->allowEmptyString('term1_subject_1_periodic_test');

        $validator
            ->integer('term1_subject_1_subject_enrichment')
            ->allowEmptyString('term1_subject_1_subject_enrichment');

        $validator
            ->integer('term1_subject_1_multiple_assessment')
            ->allowEmptyString('term1_subject_1_multiple_assessment');

        $validator
            ->integer('term1_subject_1_portfolio')
            ->allowEmptyString('term1_subject_1_portfolio');

        $validator
            ->integer('term1_subject_1_total')
            ->allowEmptyString('term1_subject_1_total');

        $validator
            ->scalar('term1_subject_1_grade')
            ->maxLength('term1_subject_1_grade', 5)
            ->allowEmptyString('term1_subject_1_grade');

        $validator
            ->integer('term1_subject_2')
            ->allowEmptyString('term1_subject_2');

        $validator
            ->integer('term1_subject_2_periodic_test')
            ->allowEmptyString('term1_subject_2_periodic_test');

        $validator
            ->integer('term1_subject_2_subject_enrichment')
            ->allowEmptyString('term1_subject_2_subject_enrichment');

        $validator
            ->integer('term1_subject_2_multiple_assessment')
            ->allowEmptyString('term1_subject_2_multiple_assessment');

        $validator
            ->integer('term1_subject_2_portfolio')
            ->allowEmptyString('term1_subject_2_portfolio');

        $validator
            ->integer('term1_subject_2_total')
            ->allowEmptyString('term1_subject_2_total');

        $validator
            ->scalar('term1_subject_2_grade')
            ->maxLength('term1_subject_2_grade', 5)
            ->allowEmptyString('term1_subject_2_grade');

        $validator
            ->integer('term1_subject_3')
            ->allowEmptyString('term1_subject_3');

        $validator
            ->integer('term1_subject_3_periodic_test')
            ->allowEmptyString('term1_subject_3_periodic_test');

        $validator
            ->integer('term1_subject_3_subject_enrichment')
            ->allowEmptyString('term1_subject_3_subject_enrichment');

        $validator
            ->integer('term1_subject_3_multiple_assessment')
            ->allowEmptyString('term1_subject_3_multiple_assessment');

        $validator
            ->integer('term1_subject_3_portfolio')
            ->allowEmptyString('term1_subject_3_portfolio');

        $validator
            ->integer('term1_subject_3_total')
            ->allowEmptyString('term1_subject_3_total');

        $validator
            ->scalar('term1_subject_3_grade')
            ->maxLength('term1_subject_3_grade', 5)
            ->allowEmptyString('term1_subject_3_grade');

        $validator
            ->integer('term1_subject_4')
            ->allowEmptyString('term1_subject_4');

        $validator
            ->integer('term1_subject_4_periodic_test')
            ->allowEmptyString('term1_subject_4_periodic_test');

        $validator
            ->integer('term1_subject_4_subject_enrichment')
            ->allowEmptyString('term1_subject_4_subject_enrichment');

        $validator
            ->integer('term1_subject_4_multiple_assessment')
            ->allowEmptyString('term1_subject_4_multiple_assessment');

        $validator
            ->integer('term1_subject_4_portfolio')
            ->allowEmptyString('term1_subject_4_portfolio');

        $validator
            ->integer('term1_subject_4_total')
            ->allowEmptyString('term1_subject_4_total');

        $validator
            ->scalar('term1_subject_4_grade')
            ->maxLength('term1_subject_4_grade', 5)
            ->allowEmptyString('term1_subject_4_grade');

        $validator
            ->integer('term1_subject_5')
            ->allowEmptyString('term1_subject_5');

        $validator
            ->integer('term1_subject_5_periodic_test')
            ->allowEmptyString('term1_subject_5_periodic_test');

        $validator
            ->integer('term1_subject_5_subject_enrichment')
            ->allowEmptyString('term1_subject_5_subject_enrichment');

        $validator
            ->integer('term1_subject_5_multiple_assessment')
            ->allowEmptyString('term1_subject_5_multiple_assessment');

        $validator
            ->integer('term1_subject_5_portfolio')
            ->allowEmptyString('term1_subject_5_portfolio');

        $validator
            ->integer('term1_subject_5_total')
            ->allowEmptyString('term1_subject_5_total');

        $validator
            ->scalar('term1_subject_5_grade')
            ->maxLength('term1_subject_5_grade', 5)
            ->allowEmptyString('term1_subject_5_grade');

        $validator
            ->integer('term1_subject_6')
            ->allowEmptyString('term1_subject_6');

        $validator
            ->integer('term1_subject_6_periodic_test')
            ->allowEmptyString('term1_subject_6_periodic_test');

        $validator
            ->integer('term1_subject_6_subject_enrichment')
            ->allowEmptyString('term1_subject_6_subject_enrichment');

        $validator
            ->integer('term1_subject_6_multiple_assessment')
            ->allowEmptyString('term1_subject_6_multiple_assessment');

        $validator
            ->integer('term1_subject_6_portfolio')
            ->allowEmptyString('term1_subject_6_portfolio');

        $validator
            ->integer('term1_subject_6_total')
            ->allowEmptyString('term1_subject_6_total');

        $validator
            ->scalar('term1_subject_6_grade')
            ->maxLength('term1_subject_6_grade', 5)
            ->allowEmptyString('term1_subject_6_grade');

        $validator
            ->integer('term1_subject_7')
            ->allowEmptyString('term1_subject_7');

        $validator
            ->integer('term1_subject_7_periodic_test')
            ->allowEmptyString('term1_subject_7_periodic_test');

        $validator
            ->integer('term1_subject_7_subject_enrichment')
            ->allowEmptyString('term1_subject_7_subject_enrichment');

        $validator
            ->integer('term1_subject_7_multiple_assessment')
            ->allowEmptyString('term1_subject_7_multiple_assessment');

        $validator
            ->integer('term1_subject_7_portfolio')
            ->allowEmptyString('term1_subject_7_portfolio');

        $validator
            ->integer('term1_subject_7_total')
            ->allowEmptyString('term1_subject_7_total');

        $validator
            ->scalar('term1_subject_7_grade')
            ->maxLength('term1_subject_7_grade', 5)
            ->allowEmptyString('term1_subject_7_grade');

        $validator
            ->integer('term1_total')
            ->allowEmptyString('term1_total');

        $validator
            ->integer('term2_subject_1')
            ->allowEmptyString('term2_subject_1');

        $validator
            ->integer('term2_subject_1_periodic_test')
            ->allowEmptyString('term2_subject_1_periodic_test');

        $validator
            ->integer('term2_subject_1_subject_enrichment')
            ->allowEmptyString('term2_subject_1_subject_enrichment');

        $validator
            ->integer('term2_subject_1_multiple_assessment')
            ->allowEmptyString('term2_subject_1_multiple_assessment');

        $validator
            ->integer('term2_subject_1_portfolio')
            ->allowEmptyString('term2_subject_1_portfolio');

        $validator
            ->integer('term2_subject_1_total')
            ->allowEmptyString('term2_subject_1_total');

        $validator
            ->scalar('term2_subject_1_grade')
            ->maxLength('term2_subject_1_grade', 5)
            ->allowEmptyString('term2_subject_1_grade');

        $validator
            ->integer('term2_subject_2')
            ->allowEmptyString('term2_subject_2');

        $validator
            ->integer('term2_subject_2_periodic_test')
            ->allowEmptyString('term2_subject_2_periodic_test');

        $validator
            ->integer('term2_subject_2_subject_enrichment')
            ->allowEmptyString('term2_subject_2_subject_enrichment');

        $validator
            ->integer('term2_subject_2_multiple_assessment')
            ->allowEmptyString('term2_subject_2_multiple_assessment');

        $validator
            ->integer('term2_subject_2_portfolio')
            ->allowEmptyString('term2_subject_2_portfolio');

        $validator
            ->integer('term2_subject_2_total')
            ->allowEmptyString('term2_subject_2_total');

        $validator
            ->scalar('term2_subject_2_grade')
            ->maxLength('term2_subject_2_grade', 5)
            ->allowEmptyString('term2_subject_2_grade');

        $validator
            ->integer('term2_subject_3')
            ->allowEmptyString('term2_subject_3');

        $validator
            ->integer('term2_subject_3_periodic_test')
            ->allowEmptyString('term2_subject_3_periodic_test');

        $validator
            ->integer('term2_subject_3_subject_enrichment')
            ->allowEmptyString('term2_subject_3_subject_enrichment');

        $validator
            ->integer('term2_subject_3_multiple_assessment')
            ->allowEmptyString('term2_subject_3_multiple_assessment');

        $validator
            ->integer('term2_subject_3_portfolio')
            ->allowEmptyString('term2_subject_3_portfolio');

        $validator
            ->integer('term2_subject_3_total')
            ->allowEmptyString('term2_subject_3_total');

        $validator
            ->scalar('term2_subject_3_grade')
            ->maxLength('term2_subject_3_grade', 5)
            ->allowEmptyString('term2_subject_3_grade');

        $validator
            ->integer('term2_subject_4')
            ->allowEmptyString('term2_subject_4');

        $validator
            ->integer('term2_subject_4_periodic_test')
            ->allowEmptyString('term2_subject_4_periodic_test');

        $validator
            ->integer('term2_subject_4_subject_enrichment')
            ->allowEmptyString('term2_subject_4_subject_enrichment');

        $validator
            ->integer('term2_subject_4_multiple_assessment')
            ->allowEmptyString('term2_subject_4_multiple_assessment');

        $validator
            ->integer('term2_subject_4_portfolio')
            ->allowEmptyString('term2_subject_4_portfolio');

        $validator
            ->integer('term2_subject_4_total')
            ->allowEmptyString('term2_subject_4_total');

        $validator
            ->scalar('term2_subject_4_grade')
            ->maxLength('term2_subject_4_grade', 5)
            ->allowEmptyString('term2_subject_4_grade');

        $validator
            ->integer('term2_subject_5')
            ->allowEmptyString('term2_subject_5');

        $validator
            ->integer('term2_subject_5_periodic_test')
            ->allowEmptyString('term2_subject_5_periodic_test');

        $validator
            ->integer('term2_subject_5_subject_enrichment')
            ->allowEmptyString('term2_subject_5_subject_enrichment');

        $validator
            ->integer('term2_subject_5_multiple_assessment')
            ->allowEmptyString('term2_subject_5_multiple_assessment');

        $validator
            ->integer('term2_subject_5_portfolio')
            ->allowEmptyString('term2_subject_5_portfolio');

        $validator
            ->integer('term2_subject_5_total')
            ->allowEmptyString('term2_subject_5_total');

        $validator
            ->scalar('term2_subject_5_grade')
            ->maxLength('term2_subject_5_grade', 5)
            ->allowEmptyString('term2_subject_5_grade');

        $validator
            ->integer('term2_subject_6')
            ->allowEmptyString('term2_subject_6');

        $validator
            ->integer('term2_subject_6_periodic_test')
            ->allowEmptyString('term2_subject_6_periodic_test');

        $validator
            ->integer('term2_subject_6_subject_enrichment')
            ->allowEmptyString('term2_subject_6_subject_enrichment');

        $validator
            ->integer('term2_subject_6_multiple_assessment')
            ->allowEmptyString('term2_subject_6_multiple_assessment');

        $validator
            ->integer('term2_subject_6_portfolio')
            ->allowEmptyString('term2_subject_6_portfolio');

        $validator
            ->integer('term2_subject_6_total')
            ->allowEmptyString('term2_subject_6_total');

        $validator
            ->scalar('term2_subject_6_grade')
            ->maxLength('term2_subject_6_grade', 5)
            ->allowEmptyString('term2_subject_6_grade');

        $validator
            ->integer('term2_subject_7')
            ->allowEmptyString('term2_subject_7');

        $validator
            ->integer('term2_subject_7_periodic_test')
            ->allowEmptyString('term2_subject_7_periodic_test');

        $validator
            ->integer('term2_subject_7_subject_enrichment')
            ->allowEmptyString('term2_subject_7_subject_enrichment');

        $validator
            ->integer('term2_subject_7_multiple_assessment')
            ->allowEmptyString('term2_subject_7_multiple_assessment');

        $validator
            ->integer('term2_subject_7_portfolio')
            ->allowEmptyString('term2_subject_7_portfolio');

        $validator
            ->integer('term2_subject_7_total')
            ->allowEmptyString('term2_subject_7_total');

        $validator
            ->scalar('term2_subject_7_grade')
            ->maxLength('term2_subject_7_grade', 5)
            ->allowEmptyString('term2_subject_7_grade');

        $validator
            ->integer('term2_total')
            ->allowEmptyString('term2_total');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('student_id', 'Students'), ['errorField' => 'student_id']);

        return $rules;
    }
}
