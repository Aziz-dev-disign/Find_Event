/**
 * Ce fichier comporte une suite de @function 
 * qui permettrons de mettre en page les vues
 */

 // function sliders

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.slider').slider();
  });