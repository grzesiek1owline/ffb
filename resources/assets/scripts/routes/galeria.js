export default {
    init() {
      // JavaScript to be fired on the gallery
      alert('siema');
    },
    finalize() {
      jQuery('.gallery__element a').simpleLightbox();
      // JavaScript to be fired on the home page, after the init JS
    },
  };
  