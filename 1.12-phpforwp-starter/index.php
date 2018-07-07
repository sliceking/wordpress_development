<?php get_header(); ?>

    <div id="content">

      <!-- Static Front Page -->
        <?php if (is_front_page() && !is_home()) {
            echo 'front page';
        }

//   <!-- Blog Home -->
        if (is_home()) {
            echo "home!";
        }

//   <!-- Page (Not Front Page) -->
        if (is_page() && !is_front_page()) {
            echo "am page!";
        }

//   <!-- Single Post -->
        if (is_single() && !is_attachment()) {
            echo "i am a single";
        }

//   <!-- Single Attachment (Media) -->
        if (is_attachment()) {
            echo "attachment";
        }

//   <!-- Category Archive -->
        if (is_category()) {

        }
//   <!-- Tag Archive -->

//   <!-- Author Archive -->
        if (is_author()) {
            echo "author";
        }

//   <!-- Date Archive -->

//   <!-- 404 Page -->
        if (is_404()) {
            echo '404ed';
        }

        ?>

    </div>

<?php get_footer(); ?>
