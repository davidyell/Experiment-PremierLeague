<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Teams Model
 */
class TeamsTable extends Table
{

    protected function _initializeSchema(\Cake\Database\Schema\Table $table)
    {
        $table->columnType('image', 'proffer.file');
        return $table;
    }

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('teams');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Proffer.Proffer', [
            'image' => [
                'dir' => 'image_dir',
                'thumbnailSizes' => [
                    'square' => ['w' => 100, 'h' => 100]
                ]
            ]
        ]);

        $this->belongsToMany('Players', [
            'foreignKey' => 'team_id',
            'targetForeignKey' => 'player_id',
            'joinTable' => 'players_teams'
        ]);

        $this->hasMany('HomeMatches', [
            'foreignKey' => 'home_team_id',
            'className' => 'App\Model\Table\MatchesTable'
        ]);
        $this->hasMany('AwayMatches', [
            'foreignKey' => 'away_team_id',
            'className' => 'App\Model\Table\MatchesTable'
        ]);

        $listener = new \App\Event\UploadFilenameListener();
        $this->eventManager()->on($listener);
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
