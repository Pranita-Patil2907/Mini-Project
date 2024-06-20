const initSlider = () => {
    const imageList= document.querySelector(".slider-wraper .img-list ");
    const slideButtons= document.querySelectorAll(".slider-wraper .slide-button ");
    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

    // Slide images according to the slide button clicks
    slideButtons.forEach(button => {
        button.addEventListener("click", () => {
            const direction = button.id === "prev-slide" ? -0.8 : 0.8;
            const scrollAmount =  imageList.clientWidth * direction;
            imageList.scrollBy({ left: scrollAmount, behaviour: "smooth"});
        });
    });

    const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "block";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "block";

    }

    imageList.addEventListener("scroll", () => {
        handleSlideButtons();
    })

}


window.addEventListener("load", initSlider);