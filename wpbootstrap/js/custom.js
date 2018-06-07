jQuery(document).ready(function($) {

   // Accordions
   jQuery('.accordionContent').hide();
   jQuery('.accordion').find('.accordionToggle').click(function(){

      //Expand or collapse this panel
      jQuery(this).next().slideToggle('fast');

      //Hide the other panels
      jQuery(".accordionContent").not(jQuery(this).next()).slideUp('fast');

   });
});
