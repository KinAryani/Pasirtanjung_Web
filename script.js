document.addEventListener('DOMContentLoaded', () => {
    function createSlideCarousel(slideSelector, containerSelector, interval) {
        const slides = document.querySelectorAll(slideSelector);
        const slideContainer = document.querySelector(containerSelector);
        let currentIndex = 0;

        function showSlide(index) {
            slideContainer.style.transform = `translateX(-${index * 100}%)`;
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (i === index) {
                    slide.classList.add('active');
                }
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        setInterval(nextSlide, interval);
    }

    function createFadeCarousel(slideSelector, interval) {
        const slides = document.querySelectorAll(slideSelector);
        let currentIndex = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (i === index) {
                    slide.classList.add('active');
                }
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        setInterval(nextSlide, interval);
    }

    // Initialize the carousels
    createSlideCarousel('.carousel-wisata-item', '.carousel-wisata-slide', 4000);
    createFadeCarousel('.carousel-kegiatan-item', 7000);
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
