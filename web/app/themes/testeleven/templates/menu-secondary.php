<nav role="navigation">
  <ul>
    <?php if (!is_front_page()) : ?>
      <li>
        <a href="<?php echo get_home_url(); ?>">Home</a>
      </li>
    <?php endif; ?>
    <li>
      <a href="/Contact">Contact</a>
    </li>
  </ul>
</nav>