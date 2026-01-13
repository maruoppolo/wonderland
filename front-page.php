<?php get_header(); ?>

<section class="hero">
    <div class="container hero-grid">
        <div class="hero-text-content">
            <h1 class="hero-h1"><?php _e('As a Court Appointed Expert Witness in Mold-Related Cases, We’re Trusted Across Washington, DC', 'wonderland'); ?></h1>
            <h2 class="hero-h2"><?php _e('Contact Us for a Free Consultation', 'wonderland'); ?></h2>
            <p class="hero-p"><?php _e('Let our expertise guide you. Schedule a consultation to determine if on-site mold testing is the next step for you.', 'wonderland'); ?></p>
            
            <div class="hero-btns">
                <a href="#" class="btn-hero-primary"><?php _e('Schedule a visit', 'wonderland'); ?></a>
                <a href="#" class="btn-hero-secondary"><?php _e('Call Us Now!', 'wonderland'); ?></a>
            </div>

            <div class="yelp-badge">
                <div class="badge-icon-container">
                    <svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="56.637" height="56.64" rx="28.3185" fill="#22B712"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.6601 37.2178C19.0591 35.0291 16.8169 32.0308 15.9906 30.8535L13.6816 27.5635L17.6979 27.405C23.4535 27.1777 27.6169 28.3774 30.1196 30.3282C31.3738 31.3059 32.2999 32.551 32.6304 33.969C32.9735 35.4411 32.6249 36.9424 31.602 38.0931C30.8842 38.9006 30.0147 39.4689 29.0204 39.7449C28.0407 40.0169 27.074 39.9684 26.1984 39.7583C24.5113 39.3533 22.9405 38.2952 21.6601 37.2178ZM27.8481 35.5219C27.9495 35.4938 28.1109 35.4238 28.3264 35.1813C28.3673 35.1354 28.3948 35.1041 28.3621 34.9639C28.3168 34.7695 28.1151 34.3227 27.4252 33.7849C26.5267 33.0845 24.9537 32.3654 22.547 32.0019C23.1538 32.6539 23.8093 33.2984 24.4819 33.8644C25.581 34.7892 26.5234 35.3291 27.2214 35.4966C27.5384 35.5727 27.7321 35.5541 27.8481 35.5219Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M40.6195 27.9256C41.6191 25.745 42.2729 23.2031 42.4932 21.961L43.0407 18.8744L40.2488 20.2998C36.7511 22.0856 34.3799 24.3399 33.3016 26.4425C32.7701 27.479 32.4663 28.6564 32.7393 29.7685C33.0433 31.0068 33.9795 31.8322 35.199 32.1309C36.6921 32.4966 37.903 31.7461 38.6974 30.9316C39.4908 30.1181 40.1244 29.0056 40.6195 27.9256ZM35.9435 29.1023C35.9426 29.1021 35.9417 29.1019 35.9408 29.1017C35.8384 29.0766 35.7892 29.0491 35.7715 29.0371C35.7706 29.0342 35.7694 29.0302 35.7682 29.025C35.7436 28.925 35.7262 28.5492 36.0767 27.8657C36.4674 27.1039 37.2118 26.1746 38.3582 25.2207C38.1842 25.6965 37.9923 26.1725 37.7844 26.6261C37.3465 27.5815 36.8907 28.3172 36.4647 28.7541C36.2581 28.9659 36.1089 29.0547 36.0285 29.0876C35.9738 29.11 35.9584 29.1061 35.9435 29.1023Z" fill="white"/>
                    </svg>

                </div>
                <div class="badge-content">
                    <div class="rating-row">
                        <div class="stars">
                            <?php for($i=0; $i<5; $i++): ?>
                            <svg width="34" height="32" viewBox="0 0 34 32" fill="#F1C500" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 0L20.8 11.7H33.2L23.2 18.9L27 30.6L17 23.4L7 30.6L10.8 18.9L0.8 11.7H13.2L17 0Z"/>
                            </svg>
                            <?php endfor; ?>
                        </div>
                        <span class="rating-number">4.95/5.00</span>
                    </div>
                    <p class="yelp-text">
                        <?php _e('Over 14.5k happy customers on', 'wonderland'); ?> 
                        <a href="#" class="yelp-link">Yelp</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>