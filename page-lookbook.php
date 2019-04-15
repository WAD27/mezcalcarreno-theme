<?php
/*
Template Name: Lookbook
*/
?>
<?php 
global $woocommerce;
$no_padding = dh_get_post_meta('no_padding');
/**
 * script
 * {{
 */
wp_enqueue_script('vendor-carouFredSel');
?>
<?php get_header() ?>
	<div class="content-container no-padding">
		<div class="container-full">
			<div class="row">
				<div class="col-md-12 main-wrap" data-itemprop="mainContentOfPage" role="main">
					<div class="main-content">
						<?php if($lookbooks = get_terms('product_lookbook',array('hide_empty'=>0,'orderby'=>'name','menu_order'=>'DESC'))):?>
						<div class="lookbooks">
							<?php foreach ((array)$lookbooks as $lookbook):?>
								<?php
								$thumbnail_id  			= get_woocommerce_term_meta( $lookbook->term_id, 'thumbnail_id', true  );
								$thumbnail_align 		= get_woocommerce_term_meta( $lookbook->term_id, 'thumbnail_align', true  );
								$small_title 			= get_woocommerce_term_meta( $lookbook->term_id, 'small_title', true  );
								$image 					= wp_get_attachment_url( $thumbnail_id  );
								if(empty($image))
									$image = wc_placeholder_img_src();
								?>
								<div class="lookbook lookbook-<?php echo esc_attr($thumbnail_align) ?> clearfix">
								<?php if($thumbnail_id):?>
									<div class="loobook-wrap clearfix">
										<div class="lookbook-info">
											<div class="lookbook-info-wrap" style="background: url(<?php echo esc_attr($image)?>) no-repeat scroll center center">
												<div class="lookbook-info-sumary">
													<span class="lookbook-small-title"><?php echo esc_html($small_title )?></span>
													<h3>
														<a href="<?php echo get_term_link($lookbook,'product_lookbook') ?>">
															<?php echo dh_nth_word(esc_html($lookbook->name),'first',false)?>
														</a>
													</h3>
													<?php if($description = $lookbook->description):?>
													<div class="lookbook-description"><?php echo ($description)?></div>
													<?php endif;?>
													<a class="btn btn-primary lookbook-action" href="<?php echo get_term_link($lookbook,'product_lookbook') ?>"><span><?php esc_html_e('Shop Now','woow')?></span></a>
												</div>
											</div>	
										</div>
										<div class="lookbook-thumb">
											<?php 
											$query_args = array(
												'posts_per_page' => 12,
												'post_status'    => 'publish',
												'post_type'      => 'product',
												'no_found_rows'  => 1,
												'order'          => "DESC",
												'orderby'		 =>'date',
												'meta_query'     => WC()->query->get_meta_query(),
												'tax_query' 			=> array(
													array(
														'taxonomy' 		=> 'product_lookbook',
														'terms' 		=> array($lookbook->slug),
														'field' 		=> 'slug',
													)
												)
											);
											global $woocommerce_loop;
											
											$products                    = new WP_Query( $query_args );
											$columns                     = 3;
											$woocommerce_loop['columns'] = $columns;
											
											ob_start();
											
											if ( $products->have_posts() ) : ?>
									
												<?php woocommerce_product_loop_start(); ?>
									
													<?php while ( $products->have_posts() ) : $products->the_post(); ?>
									
														<?php wc_get_template_part( 'content', 'product' ); ?>
									
													<?php endwhile; // end of the loop. ?>
									
												<?php woocommerce_product_loop_end(); ?>
									
									
											<?php endif;
									
											wp_reset_postdata();
											$output = '';
											$output .='<div class="caroufredsel product-slider"  data-height="variable" data-scroll-fx="scroll" data-scroll-item="1" data-visible-min="1" data-visible-max="3"  data-responsive="1" data-infinite="1" data-autoplay="0" data-circular="1">';
											$output .='<div class="caroufredsel-wrap">';
											$output .= '<div class="woocommerce woocommerce-lookbok columns-' . $columns . '">' . ob_get_clean() . '</div>';
											$output .='<a href="#" class="caroufredsel-prev"></a>';
											$output .='<a href="#" class="caroufredsel-next"></a>';
											$output .='</div>';
											$output .='</div>';
											print $output;
											?>
										</div>
									</div>
								<?php endif;?>
								</div>
							<?php endforeach;?>
						</div>
						<?php endif;?>
						<?php if ( have_posts() ) : ?>
							<?php 
							 while (have_posts()): the_post();
								the_content();
							 endwhile;
							 ?>
							 <?php 
							if(dh_get_theme_option('comment-page',0) && comments_open(get_the_ID()))
								comments_template( '', true ); 
							?>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer() ?>