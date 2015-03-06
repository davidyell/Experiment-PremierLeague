<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Team'), ['action' => 'edit', $team->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team'), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Matches'), ['controller' => 'Matches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Match'), ['controller' => 'Matches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="teams view large-10 medium-9 columns">
    <h2><?= h($team->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($team->name) ?></p>
            <h6 class="subheader"><?= __('Image') ?></h6>
            <p><?= h($team->image) ?></p>
            <h6 class="subheader"><?= __('Image Dir') ?></h6>
            <p><?= h($team->image_dir) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($team->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($team->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($team->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Matches') ?></h4>
    <?php if (!empty($team->home_matches)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Home Team Id') ?></th>
            <th><?= __('Away Team Id') ?></th>
            <th><?= __('Played') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($team->home_matches as $homeMatches): ?>
        <tr>
            <td><?= h($homeMatches->id) ?></td>
            <td><?= h($homeMatches->home_team_id) ?></td>
            <td><?= h($homeMatches->away_team_id) ?></td>
            <td><?= h($homeMatches->played) ?></td>
            <td><?= h($homeMatches->created) ?></td>
            <td><?= h($homeMatches->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Matches', 'action' => 'view', $homeMatches->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Matches', 'action' => 'edit', $homeMatches->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Matches', 'action' => 'delete', $homeMatches->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeMatches->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Matches') ?></h4>
    <?php if (!empty($team->away_matches)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Home Team Id') ?></th>
            <th><?= __('Away Team Id') ?></th>
            <th><?= __('Played') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($team->away_matches as $awayMatches): ?>
        <tr>
            <td><?= h($awayMatches->id) ?></td>
            <td><?= h($awayMatches->home_team_id) ?></td>
            <td><?= h($awayMatches->away_team_id) ?></td>
            <td><?= h($awayMatches->played) ?></td>
            <td><?= h($awayMatches->created) ?></td>
            <td><?= h($awayMatches->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Matches', 'action' => 'view', $awayMatches->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Matches', 'action' => 'edit', $awayMatches->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Matches', 'action' => 'delete', $awayMatches->id], ['confirm' => __('Are you sure you want to delete # {0}?', $awayMatches->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Players') ?></h4>
    <?php if (!empty($team->players)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('First Name') ?></th>
            <th><?= __('Last Name') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($team->players as $players): ?>
        <tr>
            <td><?= h($players->id) ?></td>
            <td><?= h($players->first_name) ?></td>
            <td><?= h($players->last_name) ?></td>
            <td><?= h($players->created) ?></td>
            <td><?= h($players->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Players', 'action' => 'view', $players->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Players', 'action' => 'edit', $players->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Players', 'action' => 'delete', $players->id], ['confirm' => __('Are you sure you want to delete # {0}?', $players->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
