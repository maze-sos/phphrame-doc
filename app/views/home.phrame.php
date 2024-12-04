<?php $this->view('includes/header', $data); ?>


    <!-- Hero Section -->
    <div class="hero" id="hero">
        <h1>Welcome to PHPhrame Framework</h1>
        <p>Your one-stop solution for all app documentation needs. Easy to navigate and use.</p>
        <a href="<?=ROOT?>/documentation" class="btn btn-docs-hero">View Documentation</a>
        <a href="<?=ROOT?>/assets/docs/phphrame.zip" class="btn btn-download" download>Download Framework</a>
    </div>    

    <!-- Features Section -->
    <section class="features" id="features">
        <h2>Our Features</h2>
        <div class="feature-cards">
            <div class="feature-card">
                <i class="fas fa-book"></i>
                <h3>Comprehensive Docs</h3>
                <p>All the information you need in one place.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-code"></i>
                <h3>Code Examples</h3>
                <p>Ready-to-use snippets to kickstart development.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-headset"></i>
                <h3>24/7 Support</h3>
                <p>We are here to help, anytime, anywhere.</p>
            </div>
        </div>
    </section>
   
    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <h2>What Our Users Say</h2>
        <div class="testimonial-cards">
            <div class="testimonial-card">
                <p>"The support team is fantastic. They helped us resolve an issue within minutes!"</p>
                <h4>- Treasure A., Project Manager</h4>
            </div>            
            <div class="testimonial-card">
                <p>"PHPhrame has streamlined our development process. The documentation is incredibly detailed."</p>
                <h4>- Oluwanifemi F., Developer</h4>
            </div>
            <div class="testimonial-card">
                <p>"I love the pre-built code examples. It’s saved me so much time in prototyping."</p>
                <h4>- Damilola O., Software Engineer</h4>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works" id="how-it-works">
        <h2>How It Works</h2>
        <div class="feature-cards">
            <div class="feature-card">
                <i class="fas fa-download"></i>
                <h3>Download</h3>
                <p>Start by downloading the PHPhrame framework from our website.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-cogs"></i>
                <h3>Configure</h3>
                <p>Easily configure settings to suit your project requirements.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-play"></i>
                <h3>Deploy</h3>
                <p>Build and deploy your application with just a few steps.</p>
            </div>
        </div>
    </section>

    <!-- Why Choose PHPhrame Section -->
    <section class="why-choose" id="why-choose">
        <h2>Why Choose PHPhrame?</h2>
        <div class="feature-cards">
            <div class="feature-card">
                <i class="fas fa-leaf"></i>
                <h3>Beginner-Friendly</h3>
                <p>PHPhrame is designed with simplicity in mind, making it perfect for developers just starting out.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-graduation-cap"></i>
                <h3>Learn PHP the Right Way</h3>
                <p>Built on core PHP principles, PHPhrame helps you build a solid foundation in programming.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-gem"></i>
                <h3>100% Free and Open Source</h3>
                <p>Access all features without spending a dime. Contribute to the project and make it even better.</p>
            </div>
        </div>
    </section>

    <!-- Get Started Section -->
    <section class="get-started" id="get-started">
        <h2>Get Started Today</h2>
        <p>Ready to transform your development workflow? Join thousands of developers using PHPhrame.</p>
        <a href="<?=ROOT?>/documentation" class="btn btn-docs-hero">View Documentation</a>
        <a href="mailto:phphramesupport@phphrame.com.ng" class="btn btn-contact" target="_blank">Contact Us</a>
    </section>

<?php $this->view('includes/footer', $data); ?>
