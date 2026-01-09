<!DOCTYPE html>
<html lang="en">
<head>
   @include('pages.new-meta')
   <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Main hero section with background color */
        .hero {
            background-color: #F9AB43;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
            overflow: hidden;
            padding-top: 120px; /* Increased top padding */
        }

        /* White card container */
        .white-card {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 3rem;
            max-width: 1200px;
            width: 100%;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
        }

        /* Container for content and image inside the card */
        .card-content {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 4rem;
            width: 100%;
        }

        /* Text content section */
        .text-content {
            flex: 1;
            text-align: left;
            color: #333;
        }

        .text-content h4 {
            font-size: 20px;
            font-weight: bold;
            line-height: 1.4;
            color: #333;
        }

        .text-content p {
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .text-content ul {
            font-size: 22px;
            line-height: 1.6;
            margin-bottom: 2rem;
            padding-left: 1.5rem;
            color: #333;
        }

        .text-content li {
            margin-bottom: 0.5rem;
        }

        /* Donate button styling */
        .donate-button {
            display: inline-block;
            background-color: #F9AB43;
            color: #fff;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 18px;
            transition: all 0.3s ease;
            border: 2px solid #F9AB43;
            margin: 1.5rem 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .donate-button:hover {
            background-color: #e6992e;
            border-color: #e6992e;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(249, 171, 67, 0.2);
        }

        /* Image section */
        .image-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            min-width: 300px;
        }

        .image-content img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        /* Responsive design for tablets */
        @media (max-width: 1024px) {
            .card-content {
                gap: 3rem;
            }

            .white-card {
                padding: 2.5rem;
            }

            .hero {
                padding-top: 100px; /* Adjusted for tablet */
            }

            .text-content h4,
            .text-content p,
            .text-content ul {
                font-size: 20px;
            }
        }

        /* Mobile responsive - stack vertically */
        @media (max-width: 768px) {
            .card-content {
                flex-direction: column;
                gap: 3rem;
            }

            .text-content {
                order: 1; /* Text comes first on mobile */
                text-align: center;
            }

            .image-content {
                order: 2; /* Image comes after text on mobile */
                width: 100%;
                min-width: auto;
            }

            .white-card {
                padding: 2rem;
            }

            .hero {
                padding: 2rem 1.5rem;
                padding-top: 90px; /* Adjusted for mobile */
                min-height: auto;
            }

            .text-content ul {
                text-align: left;
            }
        }

        /* Small mobile devices */
        @media (max-width: 480px) {
            .white-card {
                padding: 1.5rem;
                border-radius: 15px;
            }

            .text-content h4,
            .text-content p,
            .text-content ul {
                font-size: 18px;
            }

            .donate-button {
                padding: 0.9rem 2rem;
                font-size: 16px;
            }

            .hero {
                padding: 1.5rem 1rem;
                padding-top: 80px; /* Adjusted for small mobile */
            }
        }

        /* Extra small devices */
        @media (max-width: 360px) {
            .hero {
                padding-top: 70px;
            }

            .white-card {
                padding: 1rem;
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

        .white-card {
            animation: fadeInUp 0.8s ease forwards;
        }
   </style>
</head>
<body>
    @include('pages.new-header')

    <!-- Main Content -->
    <main class="hero">
        <div class="white-card">
            <div class="card-content">
                <!-- Text Content (Left side on desktop, top on mobile) -->
                <div class="text-content">
                    <h4>
                        Tracking completed development projects and public welfare programmes across the country is resource-intensive. Your support enables us to continue documenting delivery accurately, independently, and consistently.
                    </h4>

                    <a href="{{ route('donate-page') }}" class="donate-button">Donate</a>

                    <p>
                        <br>
                        <span style="font-weight: bold;">Every donation goes directly into:</span>
                    </p>

                    <ul>
                        <li>Research and verification</li>
                        <li>Editorial production</li>
                        <li>Expanding coverage across regions and sectors</li>
                    </ul>

                    <p>
                        <span style="font-weight: bold;">By supporting Milestone Badge, you help:</span>
                    </p>

                    <ul>
                        <li>Keep leaders accountable</li>
                        <li>Strengthen public understanding of delivery</li>
                        <li>Place Kenya's development record on a clear, documented map</li>
                    </ul>
                </div>

                <!-- Image Content (Right side on desktop, bottom on mobile) -->
                <div class="image-content">
                    <img
                        src="https://static.wixstatic.com/media/287178_dd2894af5caa4dc2aeb715ace1ee53a9~mv2.png/v1/fill/w_1148,h_1144,al_c,q_90,usm_0.66_1.00_0.01,enc_avif,quality_auto/Astro%20AD%20White_edited.png"
                        alt="Milestone Badge Illustration"
                    >
                </div>
            </div>
        </div>
    </main>

    @include('pages.script')
</body>
</html>
