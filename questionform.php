<div class="question-form">

<div class="centered">
      Can't find what you're looking for? Ask a question below!
</div>

  <?php
  if ( function_exists( 'ccf_output_form' ) ) {
    ccf_output_form(55);
  }
  ?>

  <script>
  window.onload = function() {
    var textarea = document.querySelector('#ccf_field_question');
    textarea.value = '<?php echo get_query_var('s'); ?>';
    textarea.focus();
  };
  </script>

<div class="return-home">
    <a class="return-home" href="/">Return to the home page</a>
</div>

</div>

<!-- col-xs-5 col-s-5 col-md-5 col-lg-5  -->
