<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Excellence Model
 *
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\BelongsTo $Students
 *
 * @method \App\Model\Entity\Excellence newEmptyEntity()
 * @method \App\Model\Entity\Excellence newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Excellence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Excellence get($primaryKey, $options = [])
 * @method \App\Model\Entity\Excellence findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Excellence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Excellence[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Excellence|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Excellence saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Excellence[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Excellence[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Excellence[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Excellence[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ExcellenceTable extends Table
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

        $this->setTable('excellence');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->allowEmptyString('academic_year');

        $validator
            ->scalar('class')
            ->maxLength('class', 50)
            ->allowEmptyString('class');

        $validator
            ->scalar('term1_work_education')
            ->maxLength('term1_work_education', 2)
            ->allowEmptyString('term1_work_education');

        $validator
            ->scalar('term1_art_education')
            ->maxLength('term1_art_education', 2)
            ->allowEmptyString('term1_art_education');

        $validator
            ->scalar('term1_physical_education')
            ->maxLength('term1_physical_education', 2)
            ->allowEmptyString('term1_physical_education');

        $validator
            ->scalar('term1_discipline')
            ->maxLength('term1_discipline', 2)
            ->allowEmptyString('term1_discipline');

        $validator
            ->scalar('term2_work_education')
            ->maxLength('term2_work_education', 2)
            ->allowEmptyString('term2_work_education');

        $validator
            ->scalar('term2_art_education')
            ->maxLength('term2_art_education', 2)
            ->allowEmptyString('term2_art_education');

        $validator
            ->scalar('term2_physical_education')
            ->maxLength('term2_physical_education', 2)
            ->allowEmptyString('term2_physical_education');

        $validator
            ->scalar('term2_discipline')
            ->maxLength('term2_discipline', 2)
            ->allowEmptyString('term2_discipline');

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
