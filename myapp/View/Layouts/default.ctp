<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');


		echo $this->Html->css('normalize');
		// echo $this->Html->css('foundation');
		echo $this->Html->css('app');
		echo $this->Html->css('foundation-icons');

		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>
<body>
	<nav class="top-bar"data-topbar role="navigation">
		<ul class="title-area">
			<li class="name">
				<h1><?= $this->Html->link('Pickshares', array('controller' => 'pages', 'action' => 'display', 'home')); ?></h1> </li>
				<!-- Remove the class "menu-icon"to get rid of menu icon. Take out "Menu"to just have icon alone -->
			<li class="toggle-topbar menu-icon">
				<a href="#"><span>Menu</span></a>
			</li>
		</ul>
		<section class="top-bar-section">
			<!-- Right Nav Section -->
			<ul class="right">
				<!--nocache-->
	            <?php if ($this->Session->read('Auth.User.id')): ?>
	            <ul>
	              <li><?= $this->Html->link('Mon compte', array('controller' => 'users', 'action' => 'account', 'admin' => false)); ?></li>
	              <li><?= $this->Html->link('Se déconnecter', array('controller' => 'users', 'action' => 'logout', 'admin' => false)); ?></li>
	            </ul>
	            <?php else: ?>
				<li class="has-form">
					<div class="row collapse">
				    <?= $this->Form->create('User', array('action' => 'login')); ?>
					    <div class="large-4 columns">
	 	                <?= $this->Form->input('username', array('label' => false, 'div' => false, 'placeholder' => "Nom d'utilisateur")); ?>
					   	</div>
					   	<div class="large-4 columns">
 		                <?= $this->Form->input('password', array('label' => false, 'div' => false, 'placeholder' => "Mot de passe")); ?>
					   	</div>
					   	<div class="large-4 columns">
							<button type="submit" class="small button">Se connecter</button>
						</div>
				    <?= $this->Form->end(); ?>
				</li>
			<?php endif ?>
			<!--/nocache-->
			</ul>
			<!-- Left Nav Section --> 
			<ul class="left">
        <!--nocache-->
        <?php if ($this->Session->read('Auth.User.role')== 'admin'): ?>
          <li><?= $this->Html->link("Espèces","/admin/species"); ?></li>
        <?php endif ?>
        <!--/nocache-->
				<li><a href="#">Left Nav Button</a></li>
			</ul>
		</section>

	</nav>
	<div id="header">
		<h1 class="text-center">Pickshares</h1>
		<h2 class="text-center">Search & Share Images</h2>
		<a href="users" class="button radius right">LOG</a>
		<a href="http://localhost/pikshares/myapp" class="button radius right">?</a>
	</div>
	<div id="container">
		<div id="content" <?php if ( '/pikshares/myapp/' != $this->request->here() ) echo "class='row'";  ?>>
		<div class="small-12">
			<?= $this->Session->flash(); ?>
	        <?= $this->Session->flash('auth'); ?>

		</div>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<?php  
		echo $this->Html->script('vendor/jquery');
		echo $this->Html->script('vendor/fastclick');
		echo $this->Html->script('vendor/modernizr');
		echo $this->Html->script('foundation');
		echo $this->Html->script('foundation/foundation.alert');
	?>
	<?php echo $this->fetch('script'); ?>
    <script>
      $(document).foundation();
    </script>
</body>
</html>
