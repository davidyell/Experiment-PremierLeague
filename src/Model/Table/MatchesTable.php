<?php
namespace App\Model\Table;

use App\Model\Entity\Match;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Matches Model
 */
class MatchesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('matches');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('HomeTeams', [
            'foreignKey' => 'home_team_id',
            'className' => 'App\Model\Table\TeamsTable'
        ]);
        $this->belongsTo('AwayTeams', [
            'foreignKey' => 'away_team_id',
            'className' => 'App\Model\Table\TeamsTable'
        ]);
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->add('home_team_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('home_team_id')
            ->add('away_team_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('away_team_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['home_team_id'], 'HomeTeams'));
        $rules->add($rules->existsIn(['away_team_id'], 'AwayTeams'));
        return $rules;
    }
}
