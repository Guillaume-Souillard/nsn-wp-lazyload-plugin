document.addEventListener("DOMContentLoaded", function () {
    let lazyImages = document.querySelectorAll("img.lazyload");

    const lazyLoad = () => {
        lazyImages.forEach((img) => {
            if (img.getBoundingClientRect().top < window.innerHeight && img.dataset.src) {
                img.src = img.dataset.src;
                img.removeAttribute("data-src");
                img.classList.remove("lazyload");
            }
        });
    };

    document.addEventListener("scroll", lazyLoad);
    window.addEventListener("resize", lazyLoad);
    window.addEventListener("orientationchange", lazyLoad);

    lazyLoad();
});
