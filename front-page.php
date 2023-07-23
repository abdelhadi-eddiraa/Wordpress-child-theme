<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abdelhadi
 */

get_header();
?>

	<main id="primary" class="site-main">
        <section class="container py-5 ">
<div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded-3">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img loading="lazy" src="<?php echo get_template_directory_uri().'./images/slider/slide-1.jpg'  ?>" class="d-block w-100" alt="...">
      
    </div>
    <div class="carousel-item" data-bs-interval="2000">
	<img loading="lazy" src="<?php echo get_template_directory_uri().'./images/slider/slide-2.jpg'  ?>" class="d-block w-100" alt="...">
      
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
		</section>




		<section class="container populaire-products">
             <div class=" text-center pt-5 opening">
                <h1>Popular Products</h1>
				<p class="opening-paragraph">We Offer a Nomber Of Hight Quality Toys To Help keep Your Peets Healtes And Speacial</p>
			 </div>
			 <div class="row my-4">
			    <?php echo do_shortcode('[products popularity   columns=4 limit=4]')?>
			 </div>
		</section>

<div class="categories pb-5 pt-5">
<section class="container">
		<div class=" text-center pt-5 opening">
                <h1>Categories</h1>
				<p class="opening-paragraph">We Offer a Nomber Of Hight Quality Toys To Help keep Your Peets Healtes And Speacial</p>
			 </div>
            <div  class="row pt-5">
               <!--first grid-->
			   <div class=" categories__col col-md-4 col-sm-12 ">
				 <a class="w-100 h-100 d-inline-block col-md-12 position-relative overflow-hidden rounded">
			        <img loading="lazy" class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri().'./images/categories/accessories.jpg'  ?>"  alt="...">
			         <h2 class="position-absolute  bottom-0 end-0 start-0 text-center p-2 mb-0 text-white">Care</h2>
					</a> 
				</div>
			   <!--first grid-->


			    <!--second grid-->
				<div class=" categories__col col-md-4 col-sm-12 ">
				 <a class="w-100 h-100 d-inline-block col-md-12 position-relative overflow-hidden rounded">
			        <img loading="lazy" class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri().'./images/categories/care.jpg'  ?>" class="d-block w-100" alt="...">
			         <h2 class="position-absolute  bottom-0 end-0 start-0 text-center p-2 mb-0 text-white">Care</h2>
					</a> 
				</div>
			   <!--second grid-->

			    <!--third grid-->
				<div class=" categories__col col-md-4 col-sm-12 ">
				 <a class="w-100 h-100 d-inline-block col-md-12 position-relative overflow-hidden rounded">
			        <img loading="lazy" class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri().'./images/categories/food.jpg'  ?>" class="d-block w-100" alt="...">
			         <h2 class="position-absolute  bottom-0 end-0 start-0 text-center p-2 mb-0 text-white">Foods</h2>
					</a> 
				</div>
			   <!--third grid-->
			</div>



			<div class="row my-3">
			    <!--forth grid-->
				<div class=" categories__col col-md-4 col-sm-12 ">
				 <a class="w-100 h-100 d-inline-block col-md-12 position-relative overflow-hidden rounded">
			        <img loading="lazy" class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri().'./images/categories/toys.jpg'  ?>" class="d-block w-100" alt="...">
			         <h2 class="position-absolute  bottom-0 end-0 start-0 text-center p-2 mb-0 text-white">Toys</h2>
					</a> 
				</div>
			   <!--fourth grid-->

			    <!--five grid-->
				<div class=" categories__col last-div col-md-8 col-sm-12 ">
				 <a class="w-100 h-100 d-inline-block col-md-12 position-relative overflow-hidden rounded">
			        <div class="cover position-absolute top-0 bottom-0 start-0 end-0"></div>
				 <img loading="lazy" class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri().'./images/categories/special-offers.jpg'  ?>" class="d-block w-100" alt="...">
			         <h2 class="position-absolute top-50 p-2 end-0 start-0 text-center p-2 mb-0 text-white">Special Offers</h2>
                  
					</a> 
				</div>
			   <!--vive grid-->
			</div>
		</section>
         


	</main>

</div>








<section class="container pt-5 products-sales">
             <div class=" text-center pt-5 opening">
                <h1>Speacial Offers</h1>
				<p class="opening-paragraph">We Offer a Nomber Of Hight Quality Toys To Help keep Your Peets Healtes And Speacial</p>
			 </div>
			 <div class="row my-4">
			    <?php echo do_shortcode('[sale_products  columns=4 limit=4]')?>
			 </div>
		</section>

<?php

get_footer();
