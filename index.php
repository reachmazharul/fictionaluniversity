<?php
    /*function myFunctionName(){
        echo 2+2;
    }
    myFunctionName();*/

    /*function greet($color, $name){
        echo "<p>My name is $color and my color is $name</p>";
    }
    greet("red", "omuk");*/
    ?>

    <h1> <?php echo bloginfo ('name'); ?> </h1>
    <p> <?php echo bloginfo('description');?> </p>

    <?php get_header(); 
        while (have_posts()){
            the_post(); ?>
                <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                <?php the_content();?>
            <?php
        }
        get_footer();
    ?>
