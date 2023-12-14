const images = document.querySelectorAll(".lazy-img");

const options = {
    rootMargin: "0px",
    threshold: 0.5,
};

const observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            const image = entry.target;
            const imgSrc = image.dataset.src;
            const imgLoader = new Image();
            imgLoader.onload = function () {
                image.removeAttribute("data-src");
                observer.unobserve(image);
            };
            imgLoader.src = imgSrc;
        }
    });
}, options);

images.forEach((image) => {
    observer.observe(image);
});

$(document).ready(function () {
    var navbar = $("#navbar");
    var stickyTop = navbar.offset().top;
    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > stickyTop) {
            navbar.addClass("sticky");
            $("body").css(
                "padding-top",
                navbar.outerHeight() + "px"
            ); /* Add padding to body to prevent content from jumping up */
        } else {
            navbar.removeClass("sticky");
            $("body").css("padding-top", 0); /* Remove padding from body */
        }
    });

    // sidebar
    $(function () {
        $(".sb-sticky").theiaStickySidebar({ additionalMarginTop: 60 });
        // $('.sb-sticky').theiaStickySidebar({additionalMarginTop: 60 });
    });

    $(".ds-content iframe, .bp-content iframe").each(function () {
        $(this).addClass("embed-responsive-item");
        if ($(this).height() < 400) {
            $(this).parent().addClass("embed-responsive");
        } else {
            let isMobile = window.matchMedia(
                "only screen and (max-width: 760px)"
            ).matches;
            var pad =
                (parseInt($(this).height()) / parseInt($(this).width())) * 100;
            if (isMobile || $(this).width() > 336) {
                $(this)
                    .parent()
                    .addClass("embed-responsive")
                    .css({
                        "padding-bottom": pad + "%",
                    });
            } else {
                $(this)
                    .parent()
                    .addClass("embed-responsive")
                    .css({
                        "padding-bottom": pad / 2 + "%",
                        width: "50%",
                    });
            }
        }
    });
});
