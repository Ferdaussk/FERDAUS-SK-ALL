<?php 
/**
* Template Name: Contact Form Test
*/  
the_post();
get_header(); 
?>

    <!-- Here have all header and menu section. location another-navigation.php -->
    <?php get_template_part("templates/common/another-navigation"); ?>
    


<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
	<ul>
		<li>
			<label for="contactName">Name:</label>
			<input type="text" name="contactName" id="contactName" value="" />
		</li>
		<li>
			<label for="email">Email</label>
			<input type="text" name="email" id="email" value="" />
		</li>
		<li>
			<label for="commentsText">Message:</label>
			<textarea name="comments" id="commentsText" rows="20" cols="30"></textarea>
		</li>
		<li>
			<button type="submit">Send email</button>
		</li>
	</ul>
	<input type="hidden" name="submitted" id="submitted" value="true" />
</form>

<?php get_footer(); ?>