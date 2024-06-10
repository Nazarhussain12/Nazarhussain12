// Example animation code (you can add more animations)
document.addEventListener('DOMContentLoaded', function () {
    const featuredVideos = document.querySelector('.featured-videos');
    const popularCategories = document.querySelector('.popular-categories');

    // Example animation on scroll
    window.addEventListener('scroll', function () {
        const scrollPosition = window.scrollY;

        if (scrollPosition > 200) {
            featuredVideos.style.transform = 'translateX(0)';
            popularCategories.style.transform = 'translateX(0)';
        }
    });
});
