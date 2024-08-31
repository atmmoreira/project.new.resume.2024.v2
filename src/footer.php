<footer>
  <div class="container text-center py-3">
    <small>
      <?php the_field('copyright_author'); ?> -
      <a class="text-decoration-none text-danger fw-bold" href="<?php the_field('copyright_url'); ?>" target="_blank">
        <?php the_field('copyright_repository_name'); ?>
      </a>
    </small>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>