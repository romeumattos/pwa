<div class="actions columns large-2 medium-3">
    <h4><?= __('Profile Actions') ?></h4>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'profiles', 'action' => 'add']) ?></li>
    </ul>
    <h4><?= __('User Actions') ?></h4>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List User'), ['controller' => 'users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']) ?></li>
    </ul>
</div>
