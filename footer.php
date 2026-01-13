        <div id="modal-overlay" class="modal-overlay">
            <div class="modal-card">
                <button class="modal-close">&times;</button>
                
                <div class="modal-header">
                    <h3><?php _e("Don't wait any longer!", "wonderland"); ?></h3>
                    <p><?php _e("Fill out this form and we'll create the landscape of your dreams.", "wonderland"); ?></p>
                </div>

                <form id="multistep-form">
                    <div class="form-step active" data-step="1">
                        <div class="input-group">
                            <label>Email*</label>
                            <input type="email" name="user_email" placeholder="email@email.com" required>
                        </div>
                        <div class="form-footer">
                            <button type="button" class="btn-next"><?php _e('Next', 'wonderland'); ?></button>
                        </div>
                    </div>

                    <div class="form-step" data-step="2">
                        <div class="input-group">
                            <label>First and last name</label>
                            <input type="text" name="user_name" placeholder="Jane Doe">
                        </div>
                        <div class="form-footer">
                            <button type="button" class="btn-back"><?php _e('Go back', 'wonderland'); ?></button>
                            <button type="button" class="btn-next"><?php _e('Next', 'wonderland'); ?></button>
                        </div>
                    </div>

                    <div class="form-step" data-step="3">
                        <div class="input-group">
                            <label>Phone number*</label>
                            <input type="tel" name="user_phone" placeholder="(000) 000 - 0000" required>
                        </div>
                        <div class="form-footer">
                            <button type="button" class="btn-back"><?php _e('Go back', 'wonderland'); ?></button>
                            <button type="submit" class="btn-submit"><?php _e('Submit', 'wonderland'); ?></button>
                        </div>
                    </div>

                    <div class="form-step success-step" data-step="4">
                        <div class="success-content">
                            <div class="success-icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="20" fill="#22B712"/>
                                    <path d="M12 20L17 25L28 14" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="success-text">
                                <h4><?php _e('Thank you!', 'wonderland'); ?></h4>
                                <p><?php _e("We've received your information and we'll get back to you.", "wonderland"); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="progress-bar">
                        <div class="dot active" data-step="1"></div>
                        <div class="line"></div>
                        <div class="dot" data-step="2"></div>
                        <div class="line"></div>
                        <div class="dot" data-step="3"></div>
                        <div class="line"></div>
                        <div class="dot" data-step="4"></div>
                    </div>
                </form>
            </div>
        </div>

        <footer class="site-footer"></footer>
    
        <?php wp_footer(); ?> 
    </body>
</html>