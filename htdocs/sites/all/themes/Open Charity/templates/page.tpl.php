<div id="wrapper">
  <header id="header" class="header clearfix">
    <div class="width">
      <?php if ($logo): ?><div class="logo"><a href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a></div><?php endif; ?>
      <nav class="navigation">
        <?php print render($page['header']); ?>
      </nav>
    </div>
  </header>

  <main id="main" class="main clearfix">
    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar">
        <?php print render($page['sidebar_first']); ?>
      </div>
    <?php endif; ?>
    
    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="column sidebar">
        <?php print render($page['sidebar_second']); ?>
      </div>
    <?php endif; ?>

    <div id="content" class="column content">
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </div>
  </main>

  <footer id="footer" class="footer clearfix">
    <div class="width">
      <?php print render($page['footer']); ?>
    </div>
  </footer>
</div>