<?php
/**
 *
 * Template Name: Submit Page Template
 */

get_header();
$shortcode = get_field('submit_code');
?>
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col text-center">
      <?php echo do_shortcode($shortcode); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>



<style>

/* CF 7 override */
/* form.wpcf7-form{
	background: rgba(0,0,0,.1);
	padding: 1em;
	box-shadow: 0 0 1em rgba(0,0,0,.3);
}
form.wpcf7-form * {
	transition: 225ms;
}
form.wpcf7-form label {
	display: block;
	width: 100%;
	cursor: pointer;
}
form.wpcf7-form input,
form.wpcf7-form select,
form.wpcf7-form textarea {
	display: block;
	width: 100%;
	padding: .5em 0;
	margin-bottom: 1.5em;
	border: 0;
	border-bottom: 1px solid rgba(255,255,255,.7);
	background: transparent;
	font-size: 1.2em;
}
form.wpcf7-form input:hover,
form.wpcf7-form select:hover,
form.wpcf7-form textarea:hover {
	cursor: pointer;
	border-bottom: 1px solid rgba(255,255,255,1);
}
form.wpcf7-form input:focus,
form.wpcf7-form select:focus,
form.wpcf7-form textarea:focus {
	border-bottom: 1px solid #333;
	box-shadow: inset 0 -2px 0 #333;
	outline: none;
}


form.wpcf7-form input,
form.wpcf7-form textarea{
	background: rgba(0,0,0,.03));
}

form.wpcf7-form input[type="submit"] {
	padding: 1em;
	margin-bottom: 0;
	text-transform: uppercase;
	font-size: 110%;
	border: 2px solid #fff;
	box-shadow: none;
	background: rgba(0,0,0,.1);
	color: #fff;
	line-height: 1.2em;
}
form.wpcf7-form input[type="submit"]:hover {
	background-color: rgba(255,255,255,.2);
	font-weight: 900;
}


span.wpcf7-not-valid-tip {
	position: relative;
	top: -1em;
	color: #e87676;
}
div.wpcf7-response-output {
	padding: 1em !important;
	margin: 0 !important;
}

div.wpcf7 .ajax-loader {
	display:none;
   background: none;
  -webkit-animation: spin 1s ease-in-out infinite;
  animation: spin 1s cubic-bezier(0.36, 0.09, 0.27, 0.97) infinite;
  border: 3px solid #dedede;
  border-top: 3px solid #000000;
  border-radius: 50%;
  height: 1em;
  width: 1em;
  margin: 0;
  vertical-align: middle;
}

@-webkit-keyframes spin {
  50% {
    border-top-color: #a7005d;
  }
  100% {
    border-top-color: #000000;
   -webkit-transform: rotate(360deg);
           transform: rotate(360deg);
  }
}

@keyframes spin {
  50% {
    border-top-color: #a7005d;
  }
  100% {
    border-top-color: #000000;
   -webkit-transform: rotate(360deg);
           transform: rotate(360deg);
  }
}


.wpcf7-form-control.g-recaptcha.wpcf7-recaptcha {
    opacity: .75;
}



 */
</style>
