<?php
/**
 * Template Name: Quiz
 */
get_header();
?>

<section id="quiz-container">
    <div class="container">
        <p id="pagecounter" class="text-secondary">Questão 
            <span id="page-cur">1</span> de <span id="page-last">22</span></p>
        <?php
            while(have_posts()) {
                the_post();
                the_content();
            }
        ?>
    </div>
</section>

<?php get_footer(); ?>
