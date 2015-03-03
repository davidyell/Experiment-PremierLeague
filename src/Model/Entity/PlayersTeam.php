<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PlayersTeam Entity.
 */
class PlayersTeam extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'player_id' => true,
        'team_id' => true,
        'player' => true,
        'team' => true,
    ];
}
