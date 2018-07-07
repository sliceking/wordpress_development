<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div id="content">

    <?php if (have_posts()): while (have_posts()): the_post(); // Start the loop here ?>

		                    <h1><?=the_title();?></h1>

		                    <p><?=the_content();?></p>
		                    <!-- Display the_title and the_content here -->

		                <?php endwhile;else: // End while and start else ?>

	        <h1>nothing!</h1>
	        <!-- Display a 404 message here -->

	    <?php endif; // End if ?>

  </div>

</body>
</html>
