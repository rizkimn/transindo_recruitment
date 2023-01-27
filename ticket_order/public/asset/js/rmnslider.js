class RMNSlider {
  constructor(slides) {
    this.slides = slides
    this.slides.forEach(slide => {
      slide.style.backgroundImage = "url('"+ slide.dataset.imageSrc +"')";
      slide.style.backgroundSize = 'cover';
      slide.style.backgroundPositionY = 'center';
      slide.style.backgroundAttachment = 'fixed';
    });
  }

  next() {
    let ix;
    this.slides.forEach((slide, i) => {
      if(slide.classList.contains('active')) {
        slide.classList.remove('active');
        return ix = (i+1)%this.slides.length;
      }
    });
    this.slides[ix].classList.add('active');
  }
}
