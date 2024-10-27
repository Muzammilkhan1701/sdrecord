<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
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
 * @method array<\App\Model\Entity\Mark> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mark get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Mark findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Mark patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Mark> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mark|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Mark saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Mark>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Mark>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Mark>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Mark> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Mark>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Mark>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Mark>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Mark> deleteManyOrFail(iterable $entities, array $options = [])
 */
class MarksTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('marks');
        $this->setDisplayField('academic_year');
        $this->setPrimaryKey('mark_id');

        $this->belongsTo('Students', [
            'foreignKey' => 'student_id',
        ]);
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
            ->decimal('term1_subject_1')
            ->allowEmptyString('term1_subject_1');

        $validator
            ->decimal('term1_subject_1_ct')
            ->allowEmptyString('term1_subject_1_ct');

        $validator
            ->decimal('term1_subject_1_periodic_test')
            ->allowEmptyString('term1_subject_1_periodic_test');

        $validator
            ->decimal('term1_subject_1_subject_enrichment')
            ->allowEmptyString('term1_subject_1_subject_enrichment');

        $validator
            ->decimal('term1_subject_1_multiple_assessment')
            ->allowEmptyString('term1_subject_1_multiple_assessment');

        $validator
            ->decimal('term1_subject_1_portfolio')
            ->allowEmptyString('term1_subject_1_portfolio');

        $validator
            ->decimal('term1_subject_1_total')
            ->allowEmptyString('term1_subject_1_total');

        $validator
            ->scalar('term1_subject_1_grade')
            ->maxLength('term1_subject_1_grade', 5)
            ->allowEmptyString('term1_subject_1_grade');

        $validator
            ->decimal('term1_subject_2')
            ->allowEmptyString('term1_subject_2');

        $validator
            ->decimal('term1_subject_2_periodic_test')
            ->allowEmptyString('term1_subject_2_periodic_test');

        $validator
            ->decimal('term1_subject_2_subject_enrichment')
            ->allowEmptyString('term1_subject_2_subject_enrichment');

        $validator
            ->decimal('term1_subject_2_multiple_assessment')
            ->allowEmptyString('term1_subject_2_multiple_assessment');

        $validator
            ->decimal('term1_subject_2_portfolio')
            ->allowEmptyString('term1_subject_2_portfolio');

        $validator
            ->decimal('term1_subject_2_total')
            ->allowEmptyString('term1_subject_2_total');

        $validator
            ->scalar('term1_subject_2_grade')
            ->maxLength('term1_subject_2_grade', 5)
            ->allowEmptyString('term1_subject_2_grade');

        $validator
            ->decimal('term1_subject_3')
            ->allowEmptyString('term1_subject_3');

        $validator
            ->decimal('term1_subject_3_periodic_test')
            ->allowEmptyString('term1_subject_3_periodic_test');

        $validator
            ->decimal('term1_subject_3_subject_enrichment')
            ->allowEmptyString('term1_subject_3_subject_enrichment');

        $validator
            ->decimal('term1_subject_3_multiple_assessment')
            ->allowEmptyString('term1_subject_3_multiple_assessment');

        $validator
            ->decimal('term1_subject_3_portfolio')
            ->allowEmptyString('term1_subject_3_portfolio');

        $validator
            ->decimal('term1_subject_3_total')
            ->allowEmptyString('term1_subject_3_total');

        $validator
            ->scalar('term1_subject_3_grade')
            ->maxLength('term1_subject_3_grade', 5)
            ->allowEmptyString('term1_subject_3_grade');

        $validator
            ->decimal('term1_subject_4')
            ->allowEmptyString('term1_subject_4');

        $validator
            ->decimal('term1_subject_4_periodic_test')
            ->allowEmptyString('term1_subject_4_periodic_test');

        $validator
            ->decimal('term1_subject_4_subject_enrichment')
            ->allowEmptyString('term1_subject_4_subject_enrichment');

        $validator
            ->decimal('term1_subject_4_multiple_assessment')
            ->allowEmptyString('term1_subject_4_multiple_assessment');

        $validator
            ->decimal('term1_subject_4_portfolio')
            ->allowEmptyString('term1_subject_4_portfolio');

        $validator
            ->decimal('term1_subject_4_total')
            ->allowEmptyString('term1_subject_4_total');

        $validator
            ->scalar('term1_subject_4_grade')
            ->maxLength('term1_subject_4_grade', 5)
            ->allowEmptyString('term1_subject_4_grade');

        $validator
            ->decimal('term1_subject_5')
            ->allowEmptyString('term1_subject_5');

        $validator
            ->decimal('term1_subject_5_periodic_test')
            ->allowEmptyString('term1_subject_5_periodic_test');

        $validator
            ->decimal('term1_subject_5_subject_enrichment')
            ->allowEmptyString('term1_subject_5_subject_enrichment');

        $validator
            ->decimal('term1_subject_5_multiple_assessment')
            ->allowEmptyString('term1_subject_5_multiple_assessment');

        $validator
            ->decimal('term1_subject_5_portfolio')
            ->allowEmptyString('term1_subject_5_portfolio');

        $validator
            ->decimal('term1_subject_5_total')
            ->allowEmptyString('term1_subject_5_total');

        $validator
            ->scalar('term1_subject_5_grade')
            ->maxLength('term1_subject_5_grade', 5)
            ->allowEmptyString('term1_subject_5_grade');

        $validator
            ->decimal('term1_subject_6')
            ->allowEmptyString('term1_subject_6');

        $validator
            ->decimal('term1_subject_6_periodic_test')
            ->allowEmptyString('term1_subject_6_periodic_test');

        $validator
            ->decimal('term1_subject_6_subject_enrichment')
            ->allowEmptyString('term1_subject_6_subject_enrichment');

        $validator
            ->decimal('term1_subject_6_multiple_assessment')
            ->allowEmptyString('term1_subject_6_multiple_assessment');

        $validator
            ->decimal('term1_subject_6_portfolio')
            ->allowEmptyString('term1_subject_6_portfolio');

        $validator
            ->decimal('term1_subject_6_total')
            ->allowEmptyString('term1_subject_6_total');

        $validator
            ->scalar('term1_subject_6_grade')
            ->maxLength('term1_subject_6_grade', 5)
            ->allowEmptyString('term1_subject_6_grade');

        $validator
            ->decimal('term1_subject_7')
            ->allowEmptyString('term1_subject_7');

        $validator
            ->decimal('term1_subject_7_periodic_test')
            ->allowEmptyString('term1_subject_7_periodic_test');

        $validator
            ->decimal('term1_subject_7_subject_enrichment')
            ->allowEmptyString('term1_subject_7_subject_enrichment');

        $validator
            ->decimal('term1_subject_7_multiple_assessment')
            ->allowEmptyString('term1_subject_7_multiple_assessment');

        $validator
            ->decimal('term1_subject_7_portfolio')
            ->allowEmptyString('term1_subject_7_portfolio');

        $validator
            ->decimal('term1_subject_7_total')
            ->allowEmptyString('term1_subject_7_total');

        $validator
            ->scalar('term1_subject_7_grade')
            ->maxLength('term1_subject_7_grade', 5)
            ->allowEmptyString('term1_subject_7_grade');

        $validator
            ->decimal('term1_total')
            ->allowEmptyString('term1_total');

        $validator
            ->decimal('term2_subject_1')
            ->allowEmptyString('term2_subject_1');

        $validator
            ->decimal('term2_subject_1_periodic_test')
            ->allowEmptyString('term2_subject_1_periodic_test');

        $validator
            ->decimal('term2_subject_1_subject_enrichment')
            ->allowEmptyString('term2_subject_1_subject_enrichment');

        $validator
            ->decimal('term2_subject_1_multiple_assessment')
            ->allowEmptyString('term2_subject_1_multiple_assessment');

        $validator
            ->decimal('term2_subject_1_portfolio')
            ->allowEmptyString('term2_subject_1_portfolio');

        $validator
            ->decimal('term2_subject_1_total')
            ->allowEmptyString('term2_subject_1_total');

        $validator
            ->scalar('term2_subject_1_grade')
            ->maxLength('term2_subject_1_grade', 5)
            ->allowEmptyString('term2_subject_1_grade');

        $validator
            ->decimal('term2_subject_2')
            ->allowEmptyString('term2_subject_2');

        $validator
            ->decimal('term2_subject_2_periodic_test')
            ->allowEmptyString('term2_subject_2_periodic_test');

        $validator
            ->decimal('term2_subject_2_subject_enrichment')
            ->allowEmptyString('term2_subject_2_subject_enrichment');

        $validator
            ->decimal('term2_subject_2_multiple_assessment')
            ->allowEmptyString('term2_subject_2_multiple_assessment');

        $validator
            ->decimal('term2_subject_2_portfolio')
            ->allowEmptyString('term2_subject_2_portfolio');

        $validator
            ->decimal('term2_subject_2_total')
            ->allowEmptyString('term2_subject_2_total');

        $validator
            ->scalar('term2_subject_2_grade')
            ->maxLength('term2_subject_2_grade', 5)
            ->allowEmptyString('term2_subject_2_grade');

        $validator
            ->decimal('term2_subject_3')
            ->allowEmptyString('term2_subject_3');

        $validator
            ->decimal('term2_subject_3_periodic_test')
            ->allowEmptyString('term2_subject_3_periodic_test');

        $validator
            ->decimal('term2_subject_3_subject_enrichment')
            ->allowEmptyString('term2_subject_3_subject_enrichment');

        $validator
            ->decimal('term2_subject_3_multiple_assessment')
            ->allowEmptyString('term2_subject_3_multiple_assessment');

        $validator
            ->decimal('term2_subject_3_portfolio')
            ->allowEmptyString('term2_subject_3_portfolio');

        $validator
            ->decimal('term2_subject_3_total')
            ->allowEmptyString('term2_subject_3_total');

        $validator
            ->scalar('term2_subject_3_grade')
            ->maxLength('term2_subject_3_grade', 5)
            ->allowEmptyString('term2_subject_3_grade');

        $validator
            ->decimal('term2_subject_4')
            ->allowEmptyString('term2_subject_4');

        $validator
            ->decimal('term2_subject_4_periodic_test')
            ->allowEmptyString('term2_subject_4_periodic_test');

        $validator
            ->decimal('term2_subject_4_subject_enrichment')
            ->allowEmptyString('term2_subject_4_subject_enrichment');

        $validator
            ->decimal('term2_subject_4_multiple_assessment')
            ->allowEmptyString('term2_subject_4_multiple_assessment');

        $validator
            ->decimal('term2_subject_4_portfolio')
            ->allowEmptyString('term2_subject_4_portfolio');

        $validator
            ->decimal('term2_subject_4_total')
            ->allowEmptyString('term2_subject_4_total');

        $validator
            ->scalar('term2_subject_4_grade')
            ->maxLength('term2_subject_4_grade', 5)
            ->allowEmptyString('term2_subject_4_grade');

        $validator
            ->decimal('term2_subject_5')
            ->allowEmptyString('term2_subject_5');

        $validator
            ->decimal('term2_subject_5_periodic_test')
            ->allowEmptyString('term2_subject_5_periodic_test');

        $validator
            ->decimal('term2_subject_5_subject_enrichment')
            ->allowEmptyString('term2_subject_5_subject_enrichment');

        $validator
            ->decimal('term2_subject_5_multiple_assessment')
            ->allowEmptyString('term2_subject_5_multiple_assessment');

        $validator
            ->decimal('term2_subject_5_portfolio')
            ->allowEmptyString('term2_subject_5_portfolio');

        $validator
            ->decimal('term2_subject_5_total')
            ->allowEmptyString('term2_subject_5_total');

        $validator
            ->scalar('term2_subject_5_grade')
            ->maxLength('term2_subject_5_grade', 5)
            ->allowEmptyString('term2_subject_5_grade');

        $validator
            ->decimal('term2_subject_6')
            ->allowEmptyString('term2_subject_6');

        $validator
            ->decimal('term2_subject_6_periodic_test')
            ->allowEmptyString('term2_subject_6_periodic_test');

        $validator
            ->decimal('term2_subject_6_subject_enrichment')
            ->allowEmptyString('term2_subject_6_subject_enrichment');

        $validator
            ->decimal('term2_subject_6_multiple_assessment')
            ->allowEmptyString('term2_subject_6_multiple_assessment');

        $validator
            ->decimal('term2_subject_6_portfolio')
            ->allowEmptyString('term2_subject_6_portfolio');

        $validator
            ->decimal('term2_subject_6_total')
            ->allowEmptyString('term2_subject_6_total');

        $validator
            ->scalar('term2_subject_6_grade')
            ->maxLength('term2_subject_6_grade', 5)
            ->allowEmptyString('term2_subject_6_grade');

        $validator
            ->decimal('term2_subject_7')
            ->allowEmptyString('term2_subject_7');

        $validator
            ->decimal('term2_subject_7_periodic_test')
            ->allowEmptyString('term2_subject_7_periodic_test');

        $validator
            ->decimal('term2_subject_7_subject_enrichment')
            ->allowEmptyString('term2_subject_7_subject_enrichment');

        $validator
            ->decimal('term2_subject_7_multiple_assessment')
            ->allowEmptyString('term2_subject_7_multiple_assessment');

        $validator
            ->decimal('term2_subject_7_portfolio')
            ->allowEmptyString('term2_subject_7_portfolio');

        $validator
            ->decimal('term2_subject_7_total')
            ->allowEmptyString('term2_subject_7_total');

        $validator
            ->scalar('term2_subject_7_grade')
            ->maxLength('term2_subject_7_grade', 5)
            ->allowEmptyString('term2_subject_7_grade');

        $validator
            ->decimal('term1_subject_8')
            ->allowEmptyString('term1_subject_8');

        $validator
            ->decimal('term1_subject_8_periodic_test')
            ->allowEmptyString('term1_subject_8_periodic_test');

        $validator
            ->decimal('term1_subject_8_subject_enrichment')
            ->allowEmptyString('term1_subject_8_subject_enrichment');

        $validator
            ->decimal('term1_subject_8_multiple_assessment')
            ->allowEmptyString('term1_subject_8_multiple_assessment');

        $validator
            ->decimal('term1_subject_8_portfolio')
            ->allowEmptyString('term1_subject_8_portfolio');

        $validator
            ->decimal('term1_subject_8_total')
            ->allowEmptyString('term1_subject_8_total');

        $validator
            ->scalar('term1_subject_8_grade')
            ->maxLength('term1_subject_8_grade', 5)
            ->allowEmptyString('term1_subject_8_grade');

        $validator
            ->decimal('term2_subject_8')
            ->allowEmptyString('term2_subject_8');

        $validator
            ->decimal('term2_subject_8_periodic_test')
            ->allowEmptyString('term2_subject_8_periodic_test');

        $validator
            ->decimal('term2_subject_8_subject_enrichment')
            ->allowEmptyString('term2_subject_8_subject_enrichment');

        $validator
            ->decimal('term2_subject_8_multiple_assessment')
            ->allowEmptyString('term2_subject_8_multiple_assessment');

        $validator
            ->decimal('term2_subject_8_portfolio')
            ->allowEmptyString('term2_subject_8_portfolio');

        $validator
            ->decimal('term2_subject_8_total')
            ->allowEmptyString('term2_subject_8_total');

        $validator
            ->scalar('term2_subject_8_grade')
            ->maxLength('term2_subject_8_grade', 5)
            ->allowEmptyString('term2_subject_8_grade');

        $validator
            ->decimal('term1_subject_9')
            ->allowEmptyString('term1_subject_9');

        $validator
            ->decimal('term1_subject_9_periodic_test')
            ->allowEmptyString('term1_subject_9_periodic_test');

        $validator
            ->decimal('term1_subject_9_subject_enrichment')
            ->allowEmptyString('term1_subject_9_subject_enrichment');

        $validator
            ->decimal('term1_subject_9_multiple_assessment')
            ->allowEmptyString('term1_subject_9_multiple_assessment');

        $validator
            ->decimal('term1_subject_9_portfolio')
            ->allowEmptyString('term1_subject_9_portfolio');

        $validator
            ->decimal('term1_subject_9_total')
            ->allowEmptyString('term1_subject_9_total');

        $validator
            ->scalar('term1_subject_9_grade')
            ->maxLength('term1_subject_9_grade', 5)
            ->allowEmptyString('term1_subject_9_grade');

        $validator
            ->decimal('term2_subject_9')
            ->allowEmptyString('term2_subject_9');

        $validator
            ->decimal('term2_subject_9_periodic_test')
            ->allowEmptyString('term2_subject_9_periodic_test');

        $validator
            ->decimal('term2_subject_9_subject_enrichment')
            ->allowEmptyString('term2_subject_9_subject_enrichment');

        $validator
            ->decimal('term2_subject_9_multiple_assessment')
            ->allowEmptyString('term2_subject_9_multiple_assessment');

        $validator
            ->decimal('term2_subject_9_portfolio')
            ->allowEmptyString('term2_subject_9_portfolio');

        $validator
            ->decimal('term2_subject_9_total')
            ->allowEmptyString('term2_subject_9_total');

        $validator
            ->scalar('term2_subject_9_grade')
            ->maxLength('term2_subject_9_grade', 5)
            ->allowEmptyString('term2_subject_9_grade');

        $validator
            ->decimal('term2_total')
            ->allowEmptyString('term2_total');

        $validator
            ->decimal('term1_subject_2_ct')
            ->allowEmptyString('term1_subject_2_ct');

        $validator
            ->decimal('term1_subject_3_ct')
            ->allowEmptyString('term1_subject_3_ct');

        $validator
            ->decimal('term1_subject_4_ct')
            ->allowEmptyString('term1_subject_4_ct');

        $validator
            ->decimal('term1_subject_5_ct')
            ->allowEmptyString('term1_subject_5_ct');

        $validator
            ->decimal('term1_subject_6_ct')
            ->allowEmptyString('term1_subject_6_ct');

        $validator
            ->decimal('term1_subject_7_ct')
            ->allowEmptyString('term1_subject_7_ct');

        $validator
            ->decimal('term1_subject_8_ct')
            ->allowEmptyString('term1_subject_8_ct');

        $validator
            ->decimal('term1_subject_9_ct')
            ->allowEmptyString('term1_subject_9_ct');

        $validator
            ->decimal('term2_subject_1_ct')
            ->allowEmptyString('term2_subject_1_ct');

        $validator
            ->decimal('term2_subject_2_ct')
            ->allowEmptyString('term2_subject_2_ct');

        $validator
            ->decimal('term2_subject_3_ct')
            ->allowEmptyString('term2_subject_3_ct');

        $validator
            ->decimal('term2_subject_4_ct')
            ->allowEmptyString('term2_subject_4_ct');

        $validator
            ->decimal('term2_subject_5_ct')
            ->allowEmptyString('term2_subject_5_ct');

        $validator
            ->decimal('term2_subject_6_ct')
            ->allowEmptyString('term2_subject_6_ct');

        $validator
            ->decimal('term2_subject_7_ct')
            ->allowEmptyString('term2_subject_7_ct');

        $validator
            ->decimal('term2_subject_8_ct')
            ->allowEmptyString('term2_subject_8_ct');

        $validator
            ->decimal('term2_subject_9_ct')
            ->allowEmptyString('term2_subject_9_ct');

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
        $rules->add($rules->existsIn(['student_id'], 'Students'), ['errorField' => 'student_id']);

        return $rules;
    }
}
