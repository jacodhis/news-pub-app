<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone Badge</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Barlow', sans-serif;
            /* background-color: #0a0a0a; */
            color: #fff;
            line-height: 1.6;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header/Navigation Styles */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .header-top {
            /* background-color: rgba(20, 20, 20, 0.9); */
            background-color: white;
            padding: 8px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .header-main {
            padding: 0px 0;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            max-width: 400px;
            height: auto;
        }

        /* Social Links Bar */
        .social-bar {
            display: flex;
            justify-content: flex-end;
        }

        .social-links {
            display: flex;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            /* background-color: rgba(255, 255, 255, 0.08); */
            background-color: black;
            border-radius: 50%;
            margin-left: 8px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: #f8c300;
            transform: translateY(-2px);
        }

        .social-links i {
            font-size: 16px;
        }

        /* Desktop Navigation */
        .nav-desktop {
            display: flex;
            align-items: center;
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-menu li {
            margin-left: 30px;
        }

        .nav-menu a {
            font-weight: 600;
            font-size: 15px;
            /* text-transform: uppercase; */
            letter-spacing: 0.8px;
            padding: 8px 0;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-menu a:hover {
            color: #f8c300;
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #f8c300;
            transition: width 0.3s ease;
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        /* Mobile Navigation */
        .mobile-nav-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 28px;
            cursor: pointer;
            width: 40px;
            height: 40px;
            align-items: center;
            justify-content: center;
            z-index: 1001;
        }

        .nav-mobile {
            display: none;
            position: fixed;
            top: 110px;
            left: 0;
            width: 100%;
            /* background-color: rgba(0, 0, 0, 0.98); */
            background: #FEFEFE;
            padding: 30px 20px;
            z-index: 999;
            transform: translateY(-100%);
            opacity: 0;
            transition: all 0.4s ease;
            /* box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); */
        }

        .nav-mobile.active {
            transform: translateY(0);
            opacity: 1;
            display: block;
        }

        .nav-mobile .social-links {
            justify-content: center;
            margin-bottom: 25px;
            margin-right: 0;
        }

        .nav-mobile .social-links a {
            margin: 0 6px;
        }

        .nav-mobile .nav-menu {
            flex-direction: column;
            align-items: center;
            color: black;
        }

        .nav-mobile .nav-menu li {
            margin: 0 0 18px 0;
        }

        .nav-mobile .nav-menu a {
            font-size: 18px;
            padding: 5px 0;
            display: block;
            width: 100%;
            text-align: center;
        }

        /* Hero Section */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 140px;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
        }

        .hero-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.9) 100%); */
            z-index: 1;
        }

        .hero-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
            position: relative;
            z-index: 2;
        }



        .hero-description {
            font-size:24px;
            max-width: 800px;
            color: #fff;
            line-height: 1.7;
            font-weight: bold;
            letter-spacing: 0.03em;
        }

        .editions-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            width: 100%;
            margin-top: 20px;
        }

        .edition-card {
            flex: 1;
            min-width: 300px;
            max-width: 400px;
            /* background-color: rgba(0, 0, 0, 0.7); */
            /* border-radius: 12px; */
            overflow: hidden;
            /* box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5); */
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            /* border: 1px solid rgba(255, 255, 255, 0.1); */
            position: relative;
        }

        .edition-card:hover {
            /* transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.7); */
        }

        .edition-header {
            padding: 20px 25px;
            text-align: center;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        }

        .edition-label {
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff;
            /* text-transform: uppercase; */
            letter-spacing: 1px;
            margin: 0;
        }

        .edition-image {
            height: 300px;
            overflow: hidden;
            position: relative;
        }

        .edition-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .edition-card:hover .edition-image img {
            transform: scale(1.05);
        }

        /* Badge Styles */
        .image-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 8px 16px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 20px;
            z-index: 2;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .featured-badge {
            background-color: #f8c300;
            color: #000;
        }

        .latest-badge {
            background-color: #e74c3c;
            color: #fff;
        }

        .contact-link {
            margin-top: 60px;
            font-size: 1.1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding-bottom: 5px;
            border-bottom: 2px solid #f8c300;
            transition: all 0.3s ease;
        }

        .contact-link:hover {
            color: #f8c300;
            letter-spacing: 2px;
        }

        /* Responsive Styles */
        @media (max-width: 1024px) {
            .hero-title {
                font-size: 2.4rem;
            }

            .editions-container {
                gap: 30px;
            }

            .nav-menu li {
                margin-left: 20px;
            }
        }

        @media (max-width: 768px) {
            .mobile-nav-toggle {
                display: flex;
            }

            .nav-desktop {
                display: none;
            }

            .header-top {
                display: none;
            }

            .hero {
                padding-top: 100px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-description {
                font-size: 1.1rem;
                margin-bottom: 40px;
            }

            .editions-container {
                flex-direction: column;
                align-items: center;
            }

            .edition-card {
                max-width: 100%;
            }

            .nav-mobile {
                top: 40px;
            }

            .edition-header {
                padding: 15px 20px;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 1.8rem;
            }

            .hero-description {
                font-size: 1rem;
            }

            .edition-label {
                font-size: 1.3rem;
            }

            .logo {
                max-width: 160px;
            }

            .social-links a {
                width: 36px;
                height: 36px;
                margin-left: 10px;
            }

            .social-links i {
                font-size: 18px;
            }

        }
    </style>
