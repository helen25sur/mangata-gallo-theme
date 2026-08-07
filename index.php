<?php get_header();?>

  <main>
    <section class="promo">
      <div class="container">
        <div class="img-products-block">
          <img src="<?php echo get_theme_file_uri('./images/promo/promo-1.jpeg') ?>" width="580" alt="set of earrings">
          <img src="<?php echo get_theme_file_uri('./images/promo/promo-2.webp') ?>" width="580" alt="Necklace">
          <img src="<?php echo get_theme_file_uri('./images/promo/promo-4.webp') ?>" width="580" alt="Necklace">
          <img src="<?php echo get_theme_file_uri('./images/promo/promo-3.jpeg') ?>" width="580" alt="Necklace">
        </div>
        <div class="promo-content">
          <h1 class="main-title">Magnata Gallo</h1>
          <p class="promo-text"><span class="promo-percent">20%</span> off</p>
          <p class="promo-text">Diamond Jewelers Value</p>
          <button class="btn btn-shop">Shop now</button>
        </div>
      </div>
    </section>
    <section id="top-selling" class="top-selling">
      <h2 class="section-title">Top Selling</h2>
      <div class="container">
        <article>
          <img width="320" src="<?php echo get_theme_file_uri('./images/products/necklace.png') ?>" alt="Necklace">
          <h3>Necklace</h3>
        </article>
        <article>
          <img width="320" src="<?php echo get_theme_file_uri('./images/products/braceletes.png') ?>" alt="Bracelets">
          <h3>Bracelets</h3>
        </article>
        <article>
          <img width="320" src="<?php echo get_theme_file_uri('./images/products/bangles.png') ?>" alt="Bangles">
          <h3>Bangles</h3>
        </article>
      </div>
    </section>
    <div class="banner-discount">
      <div class="container">
        <img width="300" src="<?php echo get_theme_file_uri('./images/bracelet.png') ?>" alt="Golden Bracelets">
        <p class="banner-title">
          UP TO <big>20% OFF</big> <br>
          <small>On Golden Bracelets</small>
        </p>
      </div>
    </div>
    <section class="products" id="products">
      <div class="container">
        <h2 class="section-title">Our Products</h2>
        <ul class="product-categories">
          <li class="product-item">
            <img width="280" src="<?php echo get_theme_file_uri('./images/product-categories/engagement-ring.jpg') ?>" alt="Engagement Ring">
            <h3>Engagement Ring</h3>
          </li>
          <li class="product-item">
            <img width="280" src="<?php echo get_theme_file_uri('./images/product-categories/bracelets.png') ?>" alt="Bracelets">
            <h3>Bracelets</h3>
          </li>
          <li class="product-item">
            <img width="280" src="<?php echo get_theme_file_uri('./images/product-categories/necklace.jpg') ?>" alt="Necklace">
            <h3>Necklace</h3>
          </li>
          <li class="product-item">
            <img width="280" src="<?php echo get_theme_file_uri('./images/product-categories/noise-pins.jpg') ?>" alt="Noise Pins">
            <h3>Noise Pins</h3>
          </li>
          <li class="product-item">
            <img width="280" src="<?php echo get_theme_file_uri('./images/product-categories/pendant-sets.jpg') ?>" alt="Pendant Sets">
            <h3>Pendant Sets</h3>
          </li>
          <li class="product-item">
            <img width="280" src="<?php echo get_theme_file_uri('./images/product-categories/finger-rings.jpg') ?>" alt="Finger Rings">
            <h3>Finger Rings</h3>
          </li>
          <li class="product-item">
            <img width="280" src="<?php echo get_theme_file_uri('./images/product-categories/bangles.jpg') ?>" alt="Bangles">
            <h3>Bangles</h3>
          </li>
          <li class="product-item">
            <img width="280" src="<?php echo get_theme_file_uri('./images/product-categories/mangalsutras.jpg') ?>" alt="Mangalsutras">
            <h3>Mangalsutras</h3>
          </li>
        </ul>
      </div>
    </section>
  </main>

<?php  get_footer(); ?>
