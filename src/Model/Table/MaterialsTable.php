<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Materials Model
 *
 * @method \App\Model\Entity\Material newEmptyEntity()
 * @method \App\Model\Entity\Material newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Material[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Material get($primaryKey, $options = [])
 * @method \App\Model\Entity\Material findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Material patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Material[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Material|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Material saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MaterialsTable extends Table
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

        $this->setTable('materials');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('qrcode')
            ->maxLength('qrcode', 150)
            ->requirePresence('qrcode', 'create')
            ->notEmptyString('qrcode');

        $validator
            ->scalar('accnum')
            ->maxLength('accnum', 100)
            ->requirePresence('accnum', 'create')
            ->notEmptyString('accnum');

        $validator
            ->scalar('isbn')
            ->maxLength('isbn', 50)
            ->requirePresence('isbn', 'create')
            ->notEmptyString('isbn');

        $validator
            ->date('datereceived')
            ->requirePresence('datereceived', 'create')
            ->notEmptyDate('datereceived');

        $validator
            ->scalar('title')
            ->maxLength('title', 2000)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('subj')
            ->maxLength('subj', 500)
            ->requirePresence('subj', 'create')
            ->notEmptyString('subj');

        $validator
            ->scalar('callno')
            ->maxLength('callno', 200)
            ->requirePresence('callno', 'create')
            ->notEmptyString('callno');

        $validator
            ->scalar('issueno')
            ->maxLength('issueno', 150)
            ->requirePresence('issueno', 'create')
            ->notEmptyString('issueno');

        $validator
            ->scalar('author')
            ->requirePresence('author', 'create')
            ->notEmptyString('author');

        $validator
            ->scalar('publisher')
            ->requirePresence('publisher', 'create')
            ->notEmptyString('publisher');

        $validator
            ->scalar('amount')
            ->requirePresence('amount', 'create')
            ->notEmptyString('amount');

        $validator
            ->scalar('edition')
            ->requirePresence('edition', 'create')
            ->notEmptyString('edition');

        $validator
            ->scalar('volume')
            ->maxLength('volume', 25)
            ->requirePresence('volume', 'create')
            ->notEmptyString('volume');

        $validator
            ->scalar('pages')
            ->requirePresence('pages', 'create')
            ->notEmptyString('pages');

        $validator
            ->scalar('source')
            ->requirePresence('source', 'create')
            ->notEmptyString('source');

        $validator
            ->scalar('copyright')
            ->requirePresence('copyright', 'create')
            ->notEmptyString('copyright');

        $validator
            ->scalar('month')
            ->requirePresence('month', 'create')
            ->notEmptyString('month');

        $validator
            ->scalar('year')
            ->maxLength('year', 250)
            ->requirePresence('year', 'create')
            ->notEmptyString('year');

        $validator
            ->scalar('date')
            ->maxLength('date', 250)
            ->requirePresence('date', 'create')
            ->notEmptyString('date');

        $validator
            ->scalar('copies')
            ->requirePresence('copies', 'create')
            ->notEmptyString('copies');

        $validator
            ->scalar('boxno')
            ->requirePresence('boxno', 'create')
            ->notEmptyString('boxno');

        $validator
            ->scalar('thesisaccnum')
            ->maxLength('thesisaccnum', 150)
            ->requirePresence('thesisaccnum', 'create')
            ->notEmptyString('thesisaccnum');

        $validator
            ->scalar('articles')
            ->requirePresence('articles', 'create')
            ->notEmptyString('articles');

        $validator
            ->scalar('frequency')
            ->maxLength('frequency', 250)
            ->requirePresence('frequency', 'create')
            ->notEmptyString('frequency');

        $validator
            ->scalar('region')
            ->maxLength('region', 200)
            ->requirePresence('region', 'create')
            ->notEmptyString('region');

        $validator
            ->scalar('organizers')
            ->maxLength('organizers', 1000)
            ->requirePresence('organizers', 'create')
            ->notEmptyString('organizers');

        $validator
            ->scalar('place')
            ->requirePresence('place', 'create')
            ->notEmptyString('place');

        $validator
            ->scalar('categoryid')
            ->maxLength('categoryid', 25)
            ->requirePresence('categoryid', 'create')
            ->notEmptyString('categoryid');

        $validator
            ->scalar('duration')
            ->maxLength('duration', 150)
            ->requirePresence('duration', 'create')
            ->notEmptyString('duration');

        $validator
            ->scalar('Remarks')
            ->requirePresence('Remarks', 'create')
            ->notEmptyString('Remarks');

        $validator
            ->scalar('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->scalar('location')
            ->maxLength('location', 50)
            ->requirePresence('location', 'create')
            ->notEmptyString('location');

        $validator
            ->scalar('ebook_path')
            ->maxLength('ebook_path', 4294967295)
            ->requirePresence('ebook_path', 'create')
            ->notEmptyString('ebook_path');

        return $validator;
    }
}
