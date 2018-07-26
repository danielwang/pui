<!-- ******************
*** T5 template ***
******************  -->
<?php
  $site = "PageUp GEL";
  require_once 'ti.php';
  include_once '_head.php';
  include_once 'ui/func.php';
  ?>
  <nav id="gel-navbar" class="navbar navbar-expand-lg navbar-dark bg-navy" role="navigation">
    <div class="container">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><span class="nav-toggle"><i class="gel-icon-menu gel-icon-2x"></i></span></li>
        <li class="nav-item"><a class="logo" href="<?php echo ($resURL) ?>"><?php startblock('logo') ?> <img alt="logo" src="<?php echo ($resURL) ?>images/gel-logo.png" width="60"/><?php endblock() ?> <sub class="badge badge-info"><small>WIP</small></sub></a></li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" target="_blank" href="https://pageup.slack.com/messages/C2X8J0V70/team/" title="Slack">
          <i aria-hidden="true" class="gel-icon-lg gel-icon-slack" title="Slack"></i>
        </a></li>
        <li class="nav-item"><a class="nav-link" target="_blank" href="http://getbootstrap.com/docs/4.0/getting-started/introduction/" title="Feedback">
          <svg width="18" height="18" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet" style="
              margin-top: 10px;
          ">
            <path d="M0 222.991C0 241.223 14.779 256 33.009 256H222.99C241.223 256 256 241.221 256 222.991V33.01C256 14.777 241.221 0 222.991 0H33.01C14.777 0 0 14.779 0 33.009V222.99z" fill="#fff"></path>
            <path
              d="M106.158 113.238V76.985h31.911c3.04 0 5.97.253 8.792.76 2.822.506 5.319 1.41 7.49 2.713 2.17 1.303 3.907 3.112 5.21 5.427 1.302 2.316 1.954 5.283 1.954 8.9 0 6.513-1.954 11.217-5.862 14.111-3.907 2.895-8.9 4.342-14.979 4.342h-34.516zM72.075 50.5v155h75.112c6.947 0 13.713-.868 20.298-2.605 6.585-1.737 12.446-4.414 17.584-8.032 5.137-3.618 9.226-8.286 12.265-14.002 3.04-5.717 4.559-12.483 4.559-20.298 0-9.697-2.352-17.982-7.055-24.856-4.704-6.875-11.832-11.687-21.384-14.437 6.947-3.328 12.194-7.598 15.74-12.808 3.545-5.21 5.318-11.722 5.318-19.538 0-7.236-1.194-13.314-3.582-18.235-2.388-4.92-5.753-8.864-10.095-11.831-4.341-2.967-9.551-5.102-15.63-6.404-6.078-1.303-12.808-1.954-20.189-1.954H72.075zm34.083 128.515v-42.549h37.121c7.381 0 13.315 1.7 17.802 5.102 4.486 3.401 6.73 9.081 6.73 17.041 0 4.053-.688 7.381-2.063 9.986-1.375 2.605-3.22 4.668-5.536 6.187-2.315 1.52-4.993 2.605-8.032 3.257-3.04.65-6.223.976-9.552.976h-36.47z"
              fill="#142c52"></path>
          </svg>

          </a></li>
        <li class="nav-item"><a class="nav-link" target="_blank" href="https://github.com/PageUpPeopleOrg/PU-Styleguide" title="Github">
            <i class="gel-icon-lg gel-icon-github" aria-hidden="true"></i></a>
      </ul>
    </div>
  </nav>
  <!-- ************ menu ************  -->
  <aside id="gel-menu" role='menu'>
    <span class="nav-toggle close"><i class="gel-icon-close-o gel-icon-2x"></i></span>

    <a href="<?php echo ($resURL) ?>" class="logo"> <?php startblock('logo') ?><img alt="logo" src="<?php echo ($resURL) ?>images/gel-logo.png" width="75"/><?php endblock() ?></a>

    <menu class="scroll">
      <?php include ("_partials/menu/ui.html");?>
    </menu>
  </aside>
<!-- page header -->
  <header id="gel-header" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-lg-8">
          <h1 class="page-title"><?php echo $pageTitle  ?></h1>
          <blockquote class="tagline"><?php startblock('page-tagline');?>Tagline goes here<?php endblock() ?></blockquote>
        </div>
        <?php startblock('page-actions');?>
          <div class="page-actions col-md-3 col-lg-4 mt-2 align-items-start">
          <span class="item">
            <a class="text-center" target="_blank" href="#" title="Download Sketch files">
              <i class="gel-icon-lg gel-icon-sketch" aria-hidden="true"></i> <span>Sketch</span>
            </a>
          </span>
          <span class="item">
              <a class="text-center" target="_blank" href="https://pageup.slack.com/messages/C2X8J0V70/team/" title="Slack">
                <i aria-hidden="true" class="gel-icon-lg gel-icon-print" title="Print"></i> <span>Print</span>
              </a>
          </span>
          <span class="item">
              <a class="text-center" target="_blank" href="#" title="Feedback">
                <i aria-hidden="true" class="gel-icon-lg gel-icon-feedback" title="Feedback"></i> <span>Feedback</span>
              </a>
          </span>
          </div>
        <?php endblock() ?>
      </div>
    </div>
  </header>
  <!-- ************  page sub pages ************ -->
   <nav id="gel-subpages" role="navigation">
      <div class="container">
        <ul class="page-tabs nav" role="tablist">
         <?php startblock('page-tabs') ?>
         <?php endblock() ?>
        </ul>
      </div>
   </nav>
<!-- page body -->
	<main id="gel-main">
		<section class="container">
			<?php startblock('page-body')?>
			<?php endblock()?>
		</section>
	</main>
  <footer id="gel-footer" role="footer">
    <div class="container">
      <div class="row">
        <div class="col-6">Design by DUX team 2018</div>
        <div class="col-6 text-right">
          <a href="#">PageUp</a>
        </div>
      </div>
    </div>
  </footer>
<?php include '_foot.html';?>
