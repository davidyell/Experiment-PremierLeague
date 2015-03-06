<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Teams'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Home Matches'), ['controller' => 'Matches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Match'), ['controller' => 'Matches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="teams form large-10 medium-9 columns">
    <?= $this->Form->create($team, ['type' => 'file']); ?>
    <fieldset>
        <legend><?= __('Add Team') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('image', ['type' => 'file']);
            echo $this->Form->input('players._ids', ['options' => $players]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
