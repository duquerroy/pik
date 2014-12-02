<div class="row collapse">
  <div class="large-10 columns">
    <h1>Mes animaux</h1>
    <?= $this->Html->link("<i class='fi-plus'></i> Ajouter un nouvel animal", array('action' => 'edit'), array('class' => 'button radius', 'escape' => false)); ?>

    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Sexe</th>
            <th>Age</th>
            <th>Animal</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($pets as $k => $v): ?>
          <tr>
            <td><?= $v['Pet']['name'];  ?></td>
            <td><?= $v['Pet']['genre'];  ?></td>
            <td>
              <?php 
              $birthday = new DateTime($v['Pet']['birthday']);
              $birthYea = $birthday->diff(new DateTime('now'))->y;
              $birthMon = $birthday->diff(new DateTime('now'))->m;
              echo $birthYea." an";
              if ($birthYea > 1 ) echo 's'; 
              echo ' et '.$birthMon.' mois';
             ?>
           </td>
            <td><?= $v['Species']['name'];  ?></td>
            <td>
              <?= $this->Html->link("Editer",array('action' => 'edit', $v['Pet']['id'])); ?>
              <?= $this->Html->link("Supprimer",array('action' => 'delete', $v['Pet']['id']), array('confirm' => 'Voulez-vous vraiment supprimer ?')); ?>

            </td>
          </tr>
        <?php endforeach ?>
        </tbody>
      </table> 

    </div>
    <div class="large-2 columns">
      <?= $this->element('sidebar_account'); ?>
    </div>

</div>