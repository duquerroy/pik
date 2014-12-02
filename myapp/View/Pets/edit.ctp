<div class="row">
  <div class="small-6">

    <?= $this->Form->create("Pet"); ?>
      <?= $this->Form->input("id"); ?>
      <?= $this->Form->input("name", array('label' => "Nom")); ?>
      <?= $this->Form->input("birthday", array('label' => "Date de naissance", 'minYear' => date('Y')-70, 'maxYear' => date('Y'))); ?>
      <?= $this->Form->input("genre", array('label' => "Genre", 'options' => array(
      'M' => 'Male',
      'F' => 'Femelle'))); ?>
      <?= $this->Form->input("species_id", array('label' => "Animal")); ?>

    <?= $this->Form->end("Envoyer"); ?>

    
  </div>
</div>