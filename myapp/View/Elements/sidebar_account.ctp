<div class="">
  <ul class="side-nav">
    <li<?php if($this->request->action == 'account'): ?> class="active" <?php endif ?> >
      <?= $this->Html->link("Mon compte",array('controller'=>'users', 'action'=>'account')); ?>
    </li>
    <li<?php if($this->request->action == 'my'): ?> class="active" <?php endif ?> >
      <?= $this->Html->link("Mes animaux",array('controller'=>'pets', 'action'=>'my')); ?>
    </li>
  </ul>
</div>