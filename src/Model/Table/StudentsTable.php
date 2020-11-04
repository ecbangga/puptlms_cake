<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Students Model
 *
 * @method \App\Model\Entity\Student newEmptyEntity()
 * @method \App\Model\Entity\Student newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Student[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Student get($primaryKey, $options = [])
 * @method \App\Model\Entity\Student findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Student patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Student[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Student|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Student saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class StudentsTable extends Table
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

        $this->setTable('students');
        $this->setDisplayField('stud_id');
        $this->setPrimaryKey('stud_id');
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
            ->scalar('stud_id')
            ->maxLength('stud_id', 50)
            ->allowEmptyString('stud_id', null, 'create');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 50)
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 50)
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name');

        $validator
            ->scalar('middle_name')
            ->maxLength('middle_name', 50)
            ->requirePresence('middle_name', 'create')
            ->notEmptyString('middle_name');

        $validator
            ->date('birthdate')
            ->requirePresence('birthdate', 'create')
            ->notEmptyDate('birthdate');

        $validator
            ->scalar('birthplace')
            ->maxLength('birthplace', 50)
            ->requirePresence('birthplace', 'create')
            ->notEmptyString('birthplace');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 50)
            ->requirePresence('gender', 'create')
            ->notEmptyString('gender');

        $validator
            ->scalar('nationality')
            ->maxLength('nationality', 50)
            ->requirePresence('nationality', 'create')
            ->notEmptyString('nationality');

        $validator
            ->scalar('residential_address')
            ->maxLength('residential_address', 100)
            ->requirePresence('residential_address', 'create')
            ->notEmptyString('residential_address');

        $validator
            ->scalar('ra_zipcode')
            ->maxLength('ra_zipcode', 50)
            ->requirePresence('ra_zipcode', 'create')
            ->notEmptyString('ra_zipcode');

        $validator
            ->scalar('permanent_address')
            ->maxLength('permanent_address', 100)
            ->requirePresence('permanent_address', 'create')
            ->notEmptyString('permanent_address');

        $validator
            ->scalar('pa_zipcode')
            ->maxLength('pa_zipcode', 50)
            ->requirePresence('pa_zipcode', 'create')
            ->notEmptyString('pa_zipcode');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('religion')
            ->maxLength('religion', 50)
            ->requirePresence('religion', 'create')
            ->notEmptyString('religion');

        $validator
            ->scalar('year')
            ->maxLength('year', 50)
            ->requirePresence('year', 'create')
            ->notEmptyString('year');

        $validator
            ->scalar('course')
            ->maxLength('course', 50)
            ->requirePresence('course', 'create')
            ->notEmptyString('course');

        $validator
            ->scalar('password')
            ->maxLength('password', 50)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('academic_status')
            ->maxLength('academic_status', 50)
            ->requirePresence('academic_status', 'create')
            ->notEmptyString('academic_status');

        $validator
            ->scalar('batch')
            ->maxLength('batch', 50)
            ->requirePresence('batch', 'create')
            ->notEmptyString('batch');

        $validator
            ->scalar('guardian_name')
            ->maxLength('guardian_name', 50)
            ->requirePresence('guardian_name', 'create')
            ->notEmptyString('guardian_name');

        $validator
            ->scalar('relationship')
            ->maxLength('relationship', 50)
            ->requirePresence('relationship', 'create')
            ->notEmptyString('relationship');

        $validator
            ->scalar('guardian_contactno')
            ->maxLength('guardian_contactno', 50)
            ->requirePresence('guardian_contactno', 'create')
            ->notEmptyString('guardian_contactno');

        $validator
            ->scalar('guardian_mobileno')
            ->maxLength('guardian_mobileno', 50)
            ->requirePresence('guardian_mobileno', 'create')
            ->notEmptyString('guardian_mobileno');

        $validator
            ->scalar('guardian_email')
            ->maxLength('guardian_email', 50)
            ->allowEmptyString('guardian_email');

        $validator
            ->scalar('educ_attain')
            ->maxLength('educ_attain', 50)
            ->requirePresence('educ_attain', 'create')
            ->notEmptyString('educ_attain');

        $validator
            ->scalar('guardian_occupation')
            ->maxLength('guardian_occupation', 50)
            ->requirePresence('guardian_occupation', 'create')
            ->notEmptyString('guardian_occupation');

        $validator
            ->scalar('guardian_employer_name')
            ->maxLength('guardian_employer_name', 50)
            ->requirePresence('guardian_employer_name', 'create')
            ->notEmptyString('guardian_employer_name');

        $validator
            ->scalar('guardian_employer_address')
            ->maxLength('guardian_employer_address', 50)
            ->requirePresence('guardian_employer_address', 'create')
            ->notEmptyString('guardian_employer_address');

        $validator
            ->scalar('family_monthly_income')
            ->maxLength('family_monthly_income', 50)
            ->requirePresence('family_monthly_income', 'create')
            ->notEmptyString('family_monthly_income');

        $validator
            ->scalar('section')
            ->maxLength('section', 20)
            ->requirePresence('section', 'create')
            ->notEmptyString('section');

        $validator
            ->scalar('semester')
            ->maxLength('semester', 50)
            ->requirePresence('semester', 'create')
            ->notEmptyString('semester');

        $validator
            ->scalar('mom_name')
            ->maxLength('mom_name', 50)
            ->requirePresence('mom_name', 'create')
            ->notEmptyString('mom_name');

        $validator
            ->scalar('dad_name')
            ->maxLength('dad_name', 50)
            ->requirePresence('dad_name', 'create')
            ->notEmptyString('dad_name');

        $validator
            ->scalar('mom_cnum')
            ->maxLength('mom_cnum', 50)
            ->requirePresence('mom_cnum', 'create')
            ->notEmptyString('mom_cnum');

        $validator
            ->scalar('dad_cnum')
            ->maxLength('dad_cnum', 50)
            ->requirePresence('dad_cnum', 'create')
            ->notEmptyString('dad_cnum');

        $validator
            ->scalar('mom_mnum')
            ->maxLength('mom_mnum', 50)
            ->requirePresence('mom_mnum', 'create')
            ->notEmptyString('mom_mnum');

        $validator
            ->scalar('dad_mnum')
            ->maxLength('dad_mnum', 50)
            ->requirePresence('dad_mnum', 'create')
            ->notEmptyString('dad_mnum');

        $validator
            ->scalar('mom_email')
            ->maxLength('mom_email', 50)
            ->requirePresence('mom_email', 'create')
            ->notEmptyString('mom_email');

        $validator
            ->scalar('dad_email')
            ->maxLength('dad_email', 50)
            ->requirePresence('dad_email', 'create')
            ->notEmptyString('dad_email');

        $validator
            ->scalar('mom_educ')
            ->maxLength('mom_educ', 50)
            ->requirePresence('mom_educ', 'create')
            ->notEmptyString('mom_educ');

        $validator
            ->scalar('dad_educ')
            ->maxLength('dad_educ', 50)
            ->requirePresence('dad_educ', 'create')
            ->notEmptyString('dad_educ');

        $validator
            ->scalar('mom_work')
            ->maxLength('mom_work', 50)
            ->requirePresence('mom_work', 'create')
            ->notEmptyString('mom_work');

        $validator
            ->scalar('dad_work')
            ->maxLength('dad_work', 50)
            ->requirePresence('dad_work', 'create')
            ->notEmptyString('dad_work');

        $validator
            ->scalar('mom_emp_name')
            ->maxLength('mom_emp_name', 50)
            ->requirePresence('mom_emp_name', 'create')
            ->notEmptyString('mom_emp_name');

        $validator
            ->scalar('dad_emp_name')
            ->maxLength('dad_emp_name', 50)
            ->requirePresence('dad_emp_name', 'create')
            ->notEmptyString('dad_emp_name');

        $validator
            ->scalar('mom_emp_add')
            ->maxLength('mom_emp_add', 50)
            ->requirePresence('mom_emp_add', 'create')
            ->notEmptyString('mom_emp_add');

        $validator
            ->scalar('dad_emp_add')
            ->maxLength('dad_emp_add', 50)
            ->requirePresence('dad_emp_add', 'create')
            ->notEmptyString('dad_emp_add');

        $validator
            ->scalar('mom_add')
            ->maxLength('mom_add', 50)
            ->requirePresence('mom_add', 'create')
            ->notEmptyString('mom_add');

        $validator
            ->scalar('dad_add')
            ->maxLength('dad_add', 50)
            ->requirePresence('dad_add', 'create')
            ->notEmptyString('dad_add');

        $validator
            ->scalar('elementary_school')
            ->maxLength('elementary_school', 50)
            ->requirePresence('elementary_school', 'create')
            ->notEmptyString('elementary_school');

        $validator
            ->scalar('elementary_school_year_graduated')
            ->maxLength('elementary_school_year_graduated', 50)
            ->requirePresence('elementary_school_year_graduated', 'create')
            ->notEmptyString('elementary_school_year_graduated');

        $validator
            ->scalar('highschool')
            ->maxLength('highschool', 50)
            ->requirePresence('highschool', 'create')
            ->notEmptyString('highschool');

        $validator
            ->scalar('highschool_year_graduated')
            ->maxLength('highschool_year_graduated', 50)
            ->requirePresence('highschool_year_graduated', 'create')
            ->notEmptyString('highschool_year_graduated');

        $validator
            ->scalar('highschool_address')
            ->maxLength('highschool_address', 100)
            ->requirePresence('highschool_address', 'create')
            ->notEmptyString('highschool_address');

        $validator
            ->scalar('path')
            ->maxLength('path', 500)
            ->allowEmptyString('path');

        $validator
            ->scalar('account_status')
            ->maxLength('account_status', 15)
            ->requirePresence('account_status', 'create')
            ->notEmptyString('account_status');

        $validator
            ->scalar('contact_num')
            ->maxLength('contact_num', 15)
            ->requirePresence('contact_num', 'create')
            ->notEmptyString('contact_num');

        $validator
            ->scalar('elementary_school_address')
            ->maxLength('elementary_school_address', 200)
            ->requirePresence('elementary_school_address', 'create')
            ->notEmptyString('elementary_school_address');

        return $validator;
    }
}
