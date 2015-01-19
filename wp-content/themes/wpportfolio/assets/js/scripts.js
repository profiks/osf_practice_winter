
$(document).ready(function(){
  $('.menu-item a').addClass('button');
  
 $(document).foundation();   


    $(function(){
  $("#slides").slidesjs({
    pagination: {
      active: false
    },
      navigation: {
      active: false
      },
      play: {
      active: false,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "fade",
        // [string] Can be either "slide" or "fade".
      interval: 5000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: true,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});
    
    
    
});