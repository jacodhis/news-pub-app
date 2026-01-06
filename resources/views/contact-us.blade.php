<!DOCTYPE html>
<html lang="en">
<head>
    @include('pages.new-meta')

    <!-- Additional CSS for Contact Page -->
    <style>
        /* Contact Page Specific Styles */
        .contact-page {
            padding-top: 140px;
            padding-bottom: 80px;
            background-color: #ffffff;
            min-height: 100vh;
            color: #333333;
        }

        .contact-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Contact Header */
        .contact-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .contact-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #000;
            margin-bottom: 20px;
            line-height: 1.2;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .contact-subtitle {
            font-size: 1.4rem;
            color: #555;
            font-weight: 500;
            margin-bottom: 30px;
            line-height: 1.4;
        }

        /* Form Card - Updated to match existing UI */
        .form-card {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        /* Form Grid */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-bottom: 25px;
        }

        /* Form Group */
        .form-group {
            margin-bottom: 25px;
        }

        /* Labels */
        .form-label {
            font-size: 14px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        .form-label.required::after {
            content: " *";
            color: #e74c3c;
        }

        /* Inputs & Textarea */
        .form-input,
        .form-textarea {
            width: 100%;
            padding: 14px 16px;
            font-size: 15px;
            font-family: 'Barlow', sans-serif;
            border-radius: 8px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
            color: #333;
        }

        /* Focus State */
        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #f8c300;
            background-color: #fff;
            box-shadow: 0 0 0 3px rgba(248, 195, 0, 0.15);
        }

        /* Textarea */
        .form-textarea {
            min-height: 140px;
            resize: vertical;
            line-height: 1.6;
        }

        /* Submit Button - Matching existing button styles */
        .submit-button {
            background-color: #000;
            color: #fff;
            font-weight: 600;
            padding: 14px 36px;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            transition: all 0.3s ease;
            border: 2px solid #000;
            font-size: 15px;
            cursor: pointer;
            font-family: 'Barlow', sans-serif;
            width: 100%;
            max-width: 200px;
            margin: 0 auto;
            display: block;
        }

        .submit-button:hover {
            background-color: #fff;
            color: #000;
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        /* Submit Wrapper */
        .submit-wrapper {
            text-align: center;
            margin-top: 40px;
        }

        /* Error Messages */
        .error-message {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 5px;
            display: block;
        }

        /* Alert Messages */
        .alert-wrapper {
            margin: 0 auto 40px;
            max-width: 800px;
        }

        .alert {
            padding: 16px 20px;
            border-radius: 10px;
            font-weight: 500;
            text-align: center;
            border: 1px solid transparent;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: #ecfdf5;
            color: #065f46;
            border-color: #a7f3d0;
        }

        .alert-danger {
            background-color: #fef2f2;
            color: #991b1b;
            border-color: #fecaca;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .contact-page {
                padding-top: 120px;
                padding-bottom: 60px;
            }

            .contact-title {
                font-size: 2rem;
            }

            .contact-subtitle {
                font-size: 1.2rem;
            }

            .form-card {
                padding: 30px 20px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .submit-button {
                width: 100%;
                max-width: none;
            }
        }

        @media (max-width: 576px) {
            .contact-page {
                padding-top: 100px;
                padding-bottom: 40px;
            }

            .contact-title {
                font-size: 1.8rem;
            }

            .contact-subtitle {
                font-size: 1.1rem;
            }

            .form-card {
                padding: 25px 15px;
            }

            .contact-container {
                padding: 0 15px;
            }
        }
    </style>
</head>
<body>
    @include('pages.new-header')

    <!-- Contact Page Content -->
    <main class="contact-page">
        <div class="contact-container">
            <!-- Page Header -->
            <div class="contact-header">
                <h1 class="contact-title">Contact Us</h1>
                <p class="contact-subtitle">Get in touch with Milestone Badge</p>
            </div>

            <!-- Alert Messages -->
            <div class="alert-wrapper">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>

            <!-- Contact Form -->
            <div class="form-card">
                <form method="POST" action="{{ route('contact') }}">
                    @csrf

                    <div class="form-grid">
                        <!-- Name Field -->
                        <div class="form-group">
                            <label for="name" class="form-label">Your Name</label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-input"
                                value="{{ old('name') }}"
                                required
                            >
                            @error('name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="email" class="form-label required">Your Email</label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-input"
                                value="{{ old('email') }}"
                                required
                            >
                            @error('email')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-grid">
                        <!-- Company Field -->
                        <div class="form-group">
                            <label for="company" class="form-label required">Company Name</label>
                            <input
                                type="text"
                                name="company"
                                id="company"
                                class="form-input"
                                value="{{ old('company') }}"
                                required
                            >
                            @error('company')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Phone Field -->
                        <div class="form-group">
                            <label for="phone" class="form-label required">Phone Number</label>
                            <input
                                type="tel"
                                name="phone"
                                id="phone"
                                class="form-input"
                                value="{{ old('phone') }}"
                                required
                            >
                            @error('phone')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Message Field -->
                    <div class="form-group">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea
                            name="message"
                            id="message"
                            class="form-textarea"
                            rows="5"
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="submit-wrapper">
                        <button type="submit" class="submit-button">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    @include('pages.script')
</body>
</html>
