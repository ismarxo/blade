export default {
  init() {
    // JavaScript to be fired on all pages  
    
    /**
     * Sections scripts 
     *
     */

    // 1. hero sections

    // 1.1. heroSimple

    $('#hero-slider').slick({
      infinite: true,
      arrows: false,
      dots: false,
    });   
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    
  },
};
