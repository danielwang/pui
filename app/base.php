<!-- ******************
*** T5 template ***
******************  -->
<?php
  $site = "MockUp";
  require_once 'ti.php';
  include_once '_head.php';
  ?>
  <nav id="gel-navbar" class="navbar navbar-expand-lg navbar-dark bg-navy" role="navigation">
    <div class="container">
        <a href="<?php echo ($resURL) ?>" class="logo"><img alt="logo" src="<?php echo ($resURL) ?>images/pu-logo.png" width="100"></a>
    </div>
  </nav>
<!-- page header -->
  <header id="gel-header" role="banner">
      <div class="container">
        <h1 class="page-title"><?php echo $pageTitle  ?></h1>
      </div>
  </header>
<!-- page body -->
	<main id="gel-main">
		<section class="container">
			<?php startblock('page-body')?>
			<?php endblock()?>
		</section>
  </main>
<?php include ("_drawer.html");?> 
<?php include '_foot.html';?>
