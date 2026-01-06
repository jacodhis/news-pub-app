<!DOCTYPE html>
<html lang="en">
<head>
    @include('pages.new-meta')

    <!-- Additional CSS for About Page -->
    <style>
        /* About Page Specific Styles */
        .about-page {
            padding-top: 140px;
            padding-bottom: 80px;
            background-color: #ffffff;
            min-height: 100vh;
            color: #333333;
        }

        .about-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* About Header with Image - Updated for seamless blending */
        .about-header {
            margin-bottom: 50px;
            text-align: center;
        }

        .about-image {
            width: 100%;
            max-width: 800px;
            height: auto;
            margin: 0 auto 40px;
            border-radius: 0; /* Changed from 8px to 0 for seamless blend */
            overflow: hidden;
            box-shadow: none; /* Removed shadow for seamless blend */
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 0; /* Removed border-radius for seamless blend */
        }

        .about-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #000;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .about-subtitle {
            font-size: 1.4rem;
            color: #555;
            font-weight: 500;
            margin-bottom: 30px;
            line-height: 1.4;
        }

        /* About Content */
        .about-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 25px;
            color: #333;
        }

        .about-text.italic {
            /* font-style: italic; */
        }

        .about-text strong {
            font-weight: 600;
            color: #000; /* Make strong text stand out more */
        }

        /* Simple List Styles */
        .about-list {
            margin: 25px 0 25px 20px;
            padding-left: 0;
        }

        .about-list li {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 12px;
            color: #333;
            list-style-type: disc;
        }

        /* Contact Info */
        .contact-info {
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #eee;
        }

        .contact-text {
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 15px;
            color: #333;
        }

        .contact-email {
            color: #0066cc;
            text-decoration: none;
            font-weight: 500;
        }

        .contact-email:hover {
            text-decoration: underline;
        }

        /* Buttons Container */
        .buttons-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
            margin-bottom: 40px;
        }

        .about-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #000;
            color: #fff;
            font-weight: 600;
            padding: 14px 30px;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            transition: all 0.3s ease;
            text-decoration: none;
            border: 2px solid #000;
            font-size: 0.95rem;
            min-width: 200px;
        }

        .about-button:hover {
            background-color: #fff;
            color: #000;
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .about-button.whatsapp {
            background-color: #25D366;
            border-color: #25D366;
            color: #fff;
        }

        .about-button.whatsapp:hover {
            background-color: #fff;
            color: #25D366;
        }

        .about-button.donate {
            background-color: #f8c300;
            border-color: #f8c300;
            color: #000;
        }

        .about-button.donate:hover {
            background-color: #fff;
            color: #f8c300;
        }

        .button-icon {
            margin-right: 10px;
            font-size: 1.1rem;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .about-page {
                padding-top: 120px;
                padding-bottom: 60px;
            }

            .about-title {
                font-size: 2.2rem;
            }

            .about-subtitle {
                font-size: 1.3rem;
            }

            .about-container {
                max-width: 800px;
            }
        }

        @media (max-width: 768px) {
            .about-page {
                padding-top: 100px;
                padding-bottom: 50px;
            }

            .about-title {
                font-size: 2rem;
            }

            .about-subtitle {
                font-size: 1.2rem;
            }

            .about-text {
                font-size: 1.05rem;
            }

            .about-list li {
                font-size: 1.05rem;
            }

            .about-image {
                margin-bottom: 30px;
            }

            .buttons-container {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }

            .about-button {
                width: 100%;
                max-width: 300px;
            }
        }

        @media (max-width: 576px) {
            .about-page {
                padding-top: 90px;
                padding-bottom: 40px;
            }

            .about-title {
                font-size: 1.8rem;
            }

            .about-subtitle {
                font-size: 1.1rem;
            }

            .about-text {
                font-size: 1rem;
            }

            .about-list li {
                font-size: 1rem;
            }

            .about-container {
                padding: 0 15px;
            }

            .contact-info {
                margin-top: 30px;
                padding-top: 20px;
            }
        }

        /* Print-friendly styles */
        @media print {
            .about-page {
                padding-top: 0;
                padding-bottom: 0;
                background-color: #fff;
            }

            .buttons-container {
                display: none;
            }

            .about-button {
                display: none;
            }
        }
    </style>
</head>
<body>
    @include('pages.new-header')

    <!-- About Page Content -->
    <main class="about-page">
        <div class="about-container">
            <!-- Page Header with Image -->
            <div class="about-header">
                <div class="about-image">
                    <img src="https://static.wixstatic.com/media/287178_8f21d31120b64584862c94dc9b830c6a~mv2.jpg/v1/crop/x_0,y_473,w_1772,h_759/fill/w_800,h_343,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Astro%20AD%20white.jpg" alt="Milestone Badge">
                </div>
            </div>

            <!-- About Content -->
            <div class="about-content">
                <p class="about-text italic">
                    <strong>Milestone Badge</strong> is a bi-weekly digital newspaper documenting completed development projects, reforms, and public welfare programmes delivered by Kenyan leaders across the country.
                </p>

                <p class="about-text italic">
                    <strong>Our editorial principle is simple and firm:</strong> If it is not completed and verifiable, it does not appear in Milestone Badge.
                </p>

                <p class="about-text">
                    We do not report on:
                </p>

                <ul class="about-list">
                    <li>Political promises</li>
                    <li>Planned or projected projects</li>
                    <li>Campaign pledges</li>
                    <li>Announcements without delivery</li>
                </ul>

                <p class="about-text">
                    Every edition is published and distributed directly to readers through downloads and WhatsApp, ensuring accessibility and long-term reference.
                </p>

                <p class="about-text">
                    Milestone Badge exists to help citizens, researchers, and voters clearly see how leadership translates into real outcomes on the ground.
                </p>

                <!-- Contact Information -->
                <div class="contact-info">
                    <p class="contact-text">
                        Contact us on <a href="mailto:info@milestonebadge.co.ke" class="contact-email">info@milestonebadge.co.ke</a>
                        or <a href="mailto:ads@milestonebadge.co.ke" class="contact-email">ads@milestonebadge.co.ke</a>
                    </p>
                </div>

                <!-- Buttons -->
                <div class="buttons-container">
                    <a href="{{ route('donate-page') }}" target="_blank" class="about-button donate">
                        <i class="fas fa-heart button-icon"></i> DONATE
                    </a>

                    <a href="https://wa.me/254110567872?text=SUBSCRIBE" target="_blank" class="about-button whatsapp">
                        <i class="fab fa-whatsapp button-icon"></i> SUBSCRIBE ON WHATSAPP
                    </a>
                </div>
            </div>
        </div>
    </main>

    @include('pages.script')
</body>
</html>
