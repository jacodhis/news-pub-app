<script>
        // Mobile Navigation Toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileNavToggle = document.getElementById('mobileNavToggle');
            const mobileNav = document.getElementById('mobileNav');
            const mobileNavIcon = document.getElementById('mobileNavIcon');

            // Toggle mobile menu when hamburger is clicked
            mobileNavToggle.addEventListener('click', function(e) {
                e.stopPropagation(); // Prevent event from bubbling up
                mobileNav.classList.toggle('active');

                // Change icon based on state
                if (mobileNav.classList.contains('active')) {
                    mobileNavIcon.classList.remove('fa-bars');
                    mobileNavIcon.classList.add('fa-times');
                } else {
                    mobileNavIcon.classList.remove('fa-times');
                    mobileNavIcon.classList.add('fa-bars');
                }
            });

            // Close mobile menu when clicking a link
            const mobileLinks = mobileNav.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileNav.classList.remove('active');
                    mobileNavIcon.classList.remove('fa-times');
                    mobileNavIcon.classList.add('fa-bars');
                });
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                if (mobileNav.classList.contains('active') &&
                    !mobileNav.contains(event.target) &&
                    !mobileNavToggle.contains(event.target)) {
                    mobileNav.classList.remove('active');
                    mobileNavIcon.classList.remove('fa-times');
                    mobileNavIcon.classList.add('fa-bars');
                }
            });

            // Close mobile menu on escape key
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape' && mobileNav.classList.contains('active')) {
                    mobileNav.classList.remove('active');
                    mobileNavIcon.classList.remove('fa-times');
                    mobileNavIcon.classList.add('fa-bars');
                }
            });
        });
    </script>
