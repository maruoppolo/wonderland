<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> </head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <span class="text-jost-reg"><?php _e('Free consultations for the month of October!', 'wonderland'); ?></span>
                <span class="text-mont-bold spacer-left"><?php _e('I Want this Deal!', 'wonderland'); ?></span>
            </div>
            
            <div class="top-bar-right">
                <div class="info-item">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="15" cy="15" r="15" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0269 7.06521C12.0279 7.42144 10.4762 8.57229 9.60936 10.3416C8.35903 12.8936 9.04197 16.0494 11.574 19.4196C12.6341 20.8304 14.7631 23 15.0876 23C15.2104 23 15.7993 22.4818 16.3962 21.8483C19.3919 18.6693 21.1752 15.383 21.1842 13.0249C21.1939 10.4419 19.4845 8.05122 17.0963 7.30788C16.1898 7.02574 14.8449 6.91941 14.0269 7.06521ZM16.1787 10.4932C18.0965 11.2944 18.4891 13.9302 16.8873 15.2507C15.0441 16.77 12.2949 15.4833 12.2949 13.1014C12.2949 11.9457 12.938 10.943 13.9646 10.4984C14.5333 10.2521 15.5955 10.2496 16.1787 10.4932Z" fill="#093317"/>
                    </svg>
                    <span class="text-mont-bold"><?php _e('Plano, TX', 'wonderland'); ?></span>
                </div>
                <a href="tel:5080000000" class="btn-top-phone">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="15" cy="15" r="15" fill="#093317"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.7914 7.24805C6.97389 7.78596 6.8329 8.51594 7.17135 10.4568C8.12821 15.9442 12.1017 20.5533 17.3553 22.2702C18.6848 22.7045 20.8564 23.0824 21.4605 22.9844C22.0366 22.891 22.4565 22.6089 22.7597 22.1116C22.96 21.783 23.0037 21.4791 23.0041 20.4115C23.0046 18.9586 22.8054 18.4305 22.1236 18.078C21.6743 17.8457 19.0697 17.5417 18.5096 17.6562C18.2121 17.7171 17.7908 18.039 17.0692 18.7568L16.0493 19.7714L14.9254 19.0423C13.1042 17.8607 11.7615 16.4855 10.6895 14.7044L10.2403 13.958L11.2299 12.944C11.7964 12.3638 12.2593 11.7727 12.3124 11.562C12.3635 11.3594 12.3383 10.523 12.2566 9.70319C12.0178 7.30978 11.7026 6.99863 9.51931 7C8.38415 7.00063 8.10668 7.04045 7.7914 7.24805ZM15.2651 7.25443C14.9168 7.57898 14.8983 8.25362 15.2293 8.55338C15.3604 8.67195 15.8405 8.847 16.2961 8.94241C17.4083 9.17505 18.5347 9.79435 19.3718 10.6335C20.2223 11.4858 20.6813 12.3187 21.0041 13.5946C21.3589 14.9973 21.9957 15.4068 22.7103 14.6922C22.9956 14.407 23.0212 14.3081 22.944 13.7931C22.4747 10.6631 20.0735 7.98116 17.039 7.19771C16.0168 6.93389 15.5947 6.94729 15.2651 7.25443ZM15.2633 10.92C14.7296 11.4881 14.9699 12.1509 15.845 12.5247C16.6298 12.8599 17.0925 13.315 17.4442 14.098C17.8749 15.0566 18.4861 15.2854 19.066 14.7053C19.4631 14.3083 19.4533 13.9917 19.016 13.0719C18.4207 11.82 16.8921 10.6303 15.8789 10.6303C15.6818 10.6303 15.4195 10.7537 15.2633 10.92Z" fill="white"/>
                    </svg>

                    <span class="text-mont-bold">(508) 0000-0000</span>
                </a>
            </div>
        </div>
    </div>

    <nav class="nav-main">
        <div class="container">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wonderland.svg" alt="Wonder Land" class="logo-img">
            </div>
            
            <div class="nav-content">
                <ul class="nav-menu">
                    <li><a href="#"><?php _e('About Us', 'wonderland'); ?></a></li>
                    <li><a href="#"><?php _e('Our Services', 'wonderland'); ?></a></li>
                    <li><a href="#"><?php _e('Maintenance Packages', 'wonderland'); ?></a></li>
                </ul>
                <a href="#" class="btn-nav-quote"><?php _e('I Want a Quote', 'wonderland'); ?></a>
            </div>
        </div>
    </nav>
</header>