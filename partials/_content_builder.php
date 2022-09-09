<?php 
    if( have_rows('content_builder') ):
        while ( have_rows('content_builder') ) : the_row();
            if( get_row_layout() == 'columns' ):
                echo partial("_content/_columns");

            elseif( get_row_layout() == 'heading' ):
                echo partial("_content/_heading");

            elseif( get_row_layout() == 'image_text'):
                echo partial("_content/_image_text");

            elseif( get_row_layout() == 'photo_gallery'):
                echo partial("_content/_photo_gallery");
            
            elseif( get_row_layout() == 'call_to_action'):
                echo partial("_content/_call_to_action");

            elseif( get_row_layout() == 'testimonials'):
                echo partial("_content/_testimonials");

            elseif( get_row_layout() == 'single_column_content'):
                echo partial("_content/_single_column_content");

            elseif( get_row_layout() == 'full_width_content'):
                echo partial("_content/_full_width_content");
            
            elseif( get_row_layout() == 'full_width_media'):
                echo partial("_content/_full_width_media");
            endif;
        endwhile;
    endif;
?>