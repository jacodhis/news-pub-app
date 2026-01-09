<!DOCTYPE html>
<html lang="en">
<head>
   @include('pages.new-meta')
   <style>
        /* Main hero section */
        .hero {
            background-color: #F9AB43;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
            overflow: hidden;
            margin-top: 80px; /* Added to prevent header overlap */
        }

        /* Container for content and image */
        .content-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            width: 100%;
            gap: 4rem;
        }

        /* Text content section */
        .text-content {
            flex: 1;
            color: #fff;
            text-align: left;
        }

        .text-content h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            font-weight: 700;
        }

        .text-content p {
            font-size: 1.25rem;
            line-height: 1.6;
            margin-bottom: 2rem;
            opacity: 0.95;
        }



        .cta-button:hover {
            background-color: transparent;
            color: #fff;
            transform: translateY(-3px);
        }

        /* Image section - shadow removed */
        .image-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-content img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.5s ease;
            /* Shadow removed as requested */
        }

        .image-content img:hover {
            transform: scale(1.02);
        }

        /* Responsive design for tablets and mobile */
        @media (max-width: 1024px) {
            .content-container {
                gap: 2rem;
            }

            .text-content h1 {
                font-size: 2.5rem;
            }

            .text-content p {
                font-size: 1.1rem;
            }
        }

        /* Mobile responsive - stack vertically */
        @media (max-width: 768px) {
            .content-container {
                flex-direction: column;
                text-align: center;
                gap: 3rem;
            }

            .text-content {
                text-align: center;
                order: 2;
            }

            .image-content {
                order: 1;
                max-width: 80%;
            }

            .text-content h1 {
                font-size: 2rem;
            }

            .text-content p {
                font-size: 1rem;
            }

            .hero {
                padding: 1.5rem;
                margin-top: 60px; /* Reduced for mobile if needed */
            }
        }

        /* Small mobile devices */
        @media (max-width: 480px) {
            .text-content h1 {
                font-size: 1.8rem;
            }

            .image-content {
                max-width: 100%;
            }

            .cta-button {
                padding: 0.8rem 1.5rem;
                font-size: 1rem;
            }

            .hero {
                margin-top: 41px; /* Further reduced for very small screens */
            }
        }

        /* Animation for entrance */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .text-content, .image-content img {
            animation: fadeInUp 0.8s ease forwards;
        }

        .image-content img {
            animation-delay: 0.2s;
        }
   </style>
</head>
<body>
    @include('pages.new-header')

    <!-- Main Content -->
    <main class="hero">
        <div class="content-container">
            <!-- Text Content (Left side on desktop, below image on mobile) -->
            <div class="text-content">
                <h1>It’s free. And it takes no time to subscribe</h1>
                <p style="color:black">
                  Want your leader’s track record delivered  to your phone every two weeks (Mondays)?.
                </p>
                <p>
                    <span style="color:black"> Save Milestone Badge number (</span> +254110567872  <span style="color:black">) send us a </span><a href="#">WhatsApp</a>,  <span style="color:black"> message, and you’re in.</span>
                </p>
                <p style="color:black">We'll do the rest.</p>
                <p><span style="color:black">Prefer  </span> </span><a href="telegram">Telegram </a><span style="color:black">? Join us there.</span></p>
                <p style="color:black">That’s it. Your leader’s development record comes to you.</p>

            </div>

            <!-- Image Content (Right side on desktop, above text on mobile) -->
            <div class="image-content">
                <img
                    src="https://static.wixstatic.com/media/287178_dd2894af5caa4dc2aeb715ace1ee53a9~mv2.png/v1/fill/w_1148,h_1144,al_c,q_90,usm_0.66_1.00_0.01,enc_avif,quality_auto/Astro%20AD%20White_edited.png"
                    alt="Milestone Badge Illustration"
                >
            </div>
        </div>
    </main>

    @include('pages.script')
</body>
</html>
