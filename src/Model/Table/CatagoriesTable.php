<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Catagories Model
 *
 * @method \App\Model\Entity\Catagory get($primaryKey, $options = [])
 * @method \App\Model\Entity\Catagory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Catagory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Catagory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Catagory|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Catagory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Catagory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Catagory findOrCreate($search, callable $callback = null, $options = [])
 */
class CatagoriesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('catagories');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('catagoryname')
            ->maxLength('catagoryname', 200)
            ->requirePresence('catagoryname', 'create')
            ->allowEmptyString('catagoryname', false);

        $validator
            ->scalar('priority')
            ->maxLength('priority', 200)
            ->requirePresence('priority', 'create')
            ->allowEmptyString('priority', false);

        $validator
            ->integer('tickets')
            ->requirePresence('tickets', 'create')
            ->allowEmptyString('tickets', false);

        $validator
            ->scalar('graph')
            ->requirePresence('graph', 'create')
            ->allowEmptyString('graph', true);

        $validator
            ->scalar('options')
            ->maxLength('options', 200)
            ->requirePresence('options', 'create')
            ->allowEmptyString('options', true);

        return $validator;
    }
}
