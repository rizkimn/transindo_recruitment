class TextSlide {
  constructor(slides) {
    this.slides = slides;
  }

  start() {
    let xi; let xn = this.slides.length;
    this.slides.forEach((slide, index) => {
      if(slide.classList.contains('active')) {
        slide.classList.remove('active');
        return xi = (index+1) % xn;
      }
    });
    this.slides[xi].classList.add('active');
  }
}

// tagline
let taglines = document.querySelectorAll(".taglines .tagline");
let TaglineSlide = new TextSlide(taglines);

setInterval(() => {TaglineSlide.start()}, 5000);
