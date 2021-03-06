<div class="row collapse">
    <h1>Mon compte</h1>
    <p>&nbsp;</p>
    <div class="large-3 avatar columns">
        <?php if ($this->Session->read('Auth.User.avatar')): ?>
            <?= $this->Html->image($this->Session->read('Auth.User.avatari') . '?' . rand()); ?>
        <?php endif ?>
    </div>
    <div class="large-7 columns">
        <?= $this->Form->create('User', array('type' => 'file')); ?>
            <?= $this->Form->input('avatarf', array('type' => 'file', 'label' => 'Avatar (au format jpg)')); ?>
            <?= $this->Form->input('username', array('label' => "Nom d'utilisateur", "disabled" => true, 'value' => $this->Session->read('Auth.User.username'))); ?>
            <?= $this->Form->input('firstname', array('label' => 'Prénom')); ?>
            <?= $this->Form->input('lastname', array('label' => 'Nom')); ?>
        <?= $this->Form->end('Modifier'); ?>
    </div>
    <div class="large-2 columns">
    <?= $this->element('sidebar_account'); ?>
    </div>
</div>