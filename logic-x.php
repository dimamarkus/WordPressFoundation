<?php
/*
Template Name: The Shop Index
*/

include 'views/old-header.php'; ?>



<!--===========================================================================
=                                 MAIN-CONTENT                                =
============================================================================-->

<div class="row">

  <div class="large-4 large-centered columns">
    <ul class="pricing-table">
      <li class="title">Logic X Program</li>
      <li class="price">$4999.99</li>
      <li class="description">Master Logic Pro X with our complete program of courses. In addition to gaining a comprehensive overview of the composition process in Logic you’ll create a portfolio including a collection of original tracks, a remix entered in an active remix contest, a re-scored scene from a film and sound effects and music for a video game to widen your scope.</li>
      <li class="bullet-item">6 Courses</li>
      <li class="bullet-item">Open Enrollment</li>
      <?php
        if ( is_user_logged_in() ) {
          echo '
          <li class="cta-button">
            <form action="http://shoptest.dubspot.com/cart/add" method="post">
              <input type="hidden" name="id" value="393895260" />
              <input type="hidden" name="return_to" value="back" />
              <input type="submit" value="Add To Cart" class="small radius button"/>
            </form> 
          
            <a href="http://shoptest.dubspot.com/checkout" class="small radius button" id="checkout-button"  target="checkout">Checkout</a>
          </li>';
          } else {
            echo 
            '
            <li class="cta-button login-wall"><a class="button small radius" href="#" data-reveal-id="loginModal" title="Login" class="hunderline">Login</a> or <a class="button small radius" href="#" data-reveal-id="registerModal">Register</a><br>to purchase this course.</li>'
            ;
          }
          ?>
    </ul>
  </div>
</div>






<div class="row checkout-row">
  <div class="large-12 columns">
    <iframe src="" name="checkout" id="checkout-iframe"></iframe>
  </div>
</div>


<!--=======================    end of MAIN-CONTENT    =======================-->










<!--===========================================================================
=                                UPCOMING COURSES                             =
============================================================================-->
<div class="row">

</div>
<!--=====================    end of UPCOMING COURSES    ====================-->










<!--===========================================================================
=                                SECONDARY-CONTENT                            =
============================================================================-->

<div class="row">

</div>
<!--=====================    end of SECONDARY-CONTENT    ===================-->






<div id="loginModal" class="reveal-modal user-modal">
    <?php echo do_shortcode( '[wppb-login]' ) ?>
  <a class="close-reveal-modal">&#215;</a>
</div>
<div id="registerModal" class="reveal-modal user-modal">
    <?php echo do_shortcode( '[wppb-register]' ) ?>
  <a class="close-reveal-modal">&#215;</a>
</div>



<?php include 'views/old-footer.php' ?>
