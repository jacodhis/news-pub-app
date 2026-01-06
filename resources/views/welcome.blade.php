<!DOCTYPE html>
<html lang="en">
<head>
   @include('pages.new-meta')
</head>
<body>
    @include('pages.new-header')
    <!-- Header/Navigation -->


    <!-- Hero/Main Content -->
    <main class="hero">
        <!-- Background Image -->
        <div class="hero-bg">
            <img src="https://static.wixstatic.com/media/287178_568cbbdf784545d2af9a0ad31fd99c3c~mv2.jpg" alt="Background">
        </div>

        <div class="hero-content">

            <p class="hero-description">
                Milestone Badge is an innovative public-interest newspaper dedicated to documenting completed, verifiable development projects, reforms, and public welfare programmes delivered by Kenyan leaders.
            </p>

            <div class="editions-container">
                <!-- Featured Edition -->
                 @if($feauturedEdition)
                    <div class="edition-card">
                        <div class="edition-header">
                            <h3 class="edition-label">Featured Edition</h3>
                        </div>
                        <div class="edition-image">
                            <!-- Featured Badge -->
                            <!-- For demonstration - replace with your PHP code -->
                            <a href="{{ Storage::url($feauturedEdition->pdf_path) }}" target="_blank">
                                <img sizes="231px" srcset=" {{ Storage::url($feauturedEdition->thumbnail_path) }} 1x, {{ Storage::url($feauturedEdition->thumbnail_path) }}  2x" id="img_comp-mgaulg6n" src="{{ Storage::url($feauturedEdition->thumbnail_path) }}">
                            </a>
                        </div>
                    </div>
                @endif


                <!-- Latest Edition -->
                @if($latestEdition)
                    <div class="edition-card">
                        <div class="edition-header">
                            <h3 class="edition-label">Latest Edition</h3>
                        </div>
                        <div class="edition-image">
                            <a href="{{ Storage::url($latestEdition->pdf_path) }}" target="_blank">
                                <img sizes="231px"
                                                                            srcset="
                                                                                {{ Storage::url($latestEdition->thumbnail_path) }} 1x,
                                                                                {{ Storage::url($latestEdition->thumbnail_path) }} 2x
                                                                            "
                                                                            id="img_comp-m2p5jmbp"
                                                                            src="{{ Storage::url($latestEdition->thumbnail_path) }}">
                            </a>
                        </div>
                    </div>
                @endif
            </div>

            <a href="{{ route('contact-us') }}" class="contact-link">Contact Us</a>
        </div>
    </main>

@include('pages.script')
</body>
</html>
