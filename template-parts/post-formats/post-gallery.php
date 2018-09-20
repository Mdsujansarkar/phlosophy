<article class="masonry__brick entry format-gallery" data-aos="fade-up">
                        
 <?php if(class_exists("Attachments")): 
    $philosopy_attachments = new Attachments("philosophy_a"); ?>
 <?php if( $philosopy_attachments -> exist()): ?>
                    <div class="entry__thumb slider">
                        <div class="slider__slides">
        <?php while($philosopy_attachment = $philosopy_attachments -> get()): ?>
                            <div class="slider__slide">
                               <?php echo $philosopy_attachments->image("large"); ?>
                            </div>
 <?php endwhile; ?>
                        </div>
                    </div>
 <?php endif; ?>
<?php endif; ?>
                    <?php get_template_part("template-parts/common/post/summery"); ?>
    
                </article> <!-- end article -->