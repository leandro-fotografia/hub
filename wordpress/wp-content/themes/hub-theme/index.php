<?php get_header(); 
$page = get_page_by_path('home', OBJECT, 'page');
$id = $page->ID;

$fields = get_fields($id);

?>
<!--==========================
    Intro Section
  ============================-->
<section id="intro" class="clearfix" style="background: url(<?=$fields["fundo"]?>) center bottom no-repeat;">
    <div class="container">

        <div class="intro-img">
            <img src="<?=$fields["icone"]?>" alt="" class="img-fluid">
        </div>

        <div class="intro-info">
            <h2>Faça nosso teste<br><span>vocacional!</span></h2>
            <div>
                <a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
                    class="btn-get-started scrollto">Começar o teste</a>
                <a href="#services" class="btn-services scrollto">Nossos serviços</a>
            </div>
        </div>

    </div>
</section><!-- #intro -->

<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3><?= $fields['titulo-teste']?></h3>
                <p><?= $fields['subititulo-teste']?></p>
            </header>

            <div class="row about-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <p>
                        <?= $fields['chamada']?>
                    </p>
                    <?php

                        // check if the repeater field has rows of data
                        if( have_rows('itens_sobre', $id) ):
                         	// loop through the rows of data
                            while ( have_rows('itens_sobre', $id) ) : the_row(); ?>

                                <div class="icon-box wow fadeInUp">
                                    <div class="icon"><i class="fa <?php  the_sub_field('icone');?>"></i></div>
                                    <h4 class="title"><?php  the_sub_field('titulo');?></h4>
                                    <p class="description"><?php  the_sub_field('texto');?></p>
                                </div>
                                <?php    
                            endwhile;   
                        endif;
                        ?>
                </div>
                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="<?= $fields['icone-sobre']?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->

    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3><?= $fields['titulo-servicos']?></h3>
                <p><?= $fields['subtitulo-servicos']?></p>
            </header>

            <div class="row">

                <?php
                // check if the repeater field has rows of data
                if( have_rows('itens_servicos', $id) ):
                 	// loop through the rows of data
                    while ( have_rows('itens_servicos', $id) ) : the_row(); ?>
                        <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box">
                                <div class="icon"><i class="<?php  the_sub_field('icone');?>"
                                        style="color: <?php  the_sub_field('cor');?>;"></i></div>
                                <h4 class="title"><?php  the_sub_field('titulo');?></h4>
                                <p class="description"><?php  the_sub_field('texto');?></p>
                            </div>
                        </div>
                    <?php    
                    endwhile;   
                endif;
                ?>
            </div>
        </div>
    </section><!-- #services -->


    <!--==========================
      Team Section
    ============================-->
    <?php var_dump($fields); ?>
    <section id="team">
        <div class="container">
            <div class="section-header">
                <h3><?= $fields['titulo-consultores']?></h3>
                <p><?= $fields['subtitulo-consultores']?></p>
            </div>

            <div class="row">

                <?php
                    // check if the repeater field has rows of data
                    if( have_rows('itens-consultores', $id) ):
                     	// loop through the rows of data
                        while ( have_rows('itens-consultores', $id) ) : the_row(); ?>
                            <div class="col-lg-3 col-md-6 wow fadeInUp">
                                <div class="member">
                                    <img src="<?php  the_sub_field('foto');?>" class="img-fluid" alt="">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4><?php  the_sub_field('nome');?></h4>
                                            <span><?php  the_sub_field('descricao');?></span>
                                            <div class="social">
                                                <?php
                                                // check if the repeater field has rows of data
                                                if( have_rows('social') ):
                                                 	// loop through the rows of data
                                                    while ( have_rows('social') ) : the_row(); ?>
                                                        <a href="<?php  the_sub_field('link');?>" target= "_blank"><i class="fa <?php  the_sub_field('icone');?>"></i></a>
                                                    <?php    
                                                    endwhile;   
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php    
                        endwhile;   
                    endif;
                    ?>
            </div>

        </div>
    </section><!-- #team -->
    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3><?= $fields['titulo-depoimentos']?></h3>
            </header>

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="owl-carousel testimonials-carousel wow fadeInUp">
                        <?php
                        // check if the repeater field has rows of data
                        if( have_rows('itens-depoimentos', $id) ):
                         	// loop through the rows of data
                            while ( have_rows('itens-depoimentos', $id) ) : the_row(); ?>
                                <div class="testimonial-item">
                                    <img src="<?php  the_sub_field('foto');?>" class="testimonial-img" alt="">
                                    <h3><?php  the_sub_field('nome');?></h3>
                                    <h4><?php  the_sub_field('titulo');?></h4>
                                    <p>
                                    <?php  the_sub_field('depoimento');?>
                                    </p>
                                </div>
                            <?php    
                            endwhile;   
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #testimonials -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients">

        <div class="container">

            <div class="section-header">
                <h3><?= $fields['titulo-parceiros']?></h3>
                <p><?= $fields['subtitulo-parceiros']?></p>
            </div>

            <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
            	<?php
                // check if the repeater field has rows of data
                if( have_rows('itens-parceiros', $id) ):
                 	// loop through the rows of data
                    while ( have_rows('itens-parceiros', $id) ) : the_row(); ?>
                        <div class="col-lg-3 col-md-4 col-xs-6">
                		    <div class="client-logo">
                		        <img src="<?php the_sub_field('logo');?>" class="img-fluid" alt="">
                		    </div>
                		</div>
                    <?php    
                    endwhile;   
                endif;
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>