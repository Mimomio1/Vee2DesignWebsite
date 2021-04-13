<footer class="bg-pink-400 mt-8">
      <h6 class="py-3 text-3xl text-center text-white">QUALITY . CUSTOM . SERVICE</h6>

      <a class="block px-2 py-2 mx-2 my-4 text-3xl text-center text-white bg-pink-800 rounded-full hover:shadow-lg hover:bg-pink-600"
        href="about-us">About Us</a>

        <div class="flex items-center justify-center pb-5" id="Socialmedia">
          <div class="pr-5">
            <a title="Instagram" target="_blank" href="http://instagram.com/vee2designs">
              <img class="" src="<?php echo get_template_directory_uri(); ?>/images/images4/my_igicon.png"></img>
            </a>
          </div>
          <div class="pr-5">
            <a title="Twitter" target="_blank" href="https://twitter.com/DesignsVee2">
              <img class="" src="<?php echo get_template_directory_uri(); ?>/images/images4/logotwitter.png"></img>
            </a>
          </div>
          <div class="pr-5">
            <a title="Facebook" target="_blank" href="https://www.facebook.com/Vee2Designs/">
              <img class="" src="<?php echo get_template_directory_uri(); ?>/images/images4/facebookLogo.png"></img>
            </a>
          </div>
            <a title="Youtube" target="_blank" href="https://www.youtube.com/channel/UCaQLfdU6Vp5-llTfim35VJg">
              <img class="" src="<?php echo get_template_directory_uri(); ?>/images/images4/myytube.png"></img>
            </a>
        </div>
</footer>

</main>
<script>
  var slideIndex = 0;
  function carousel() {
    var x = document.getElementsByClassName("materialboxed1");
    var y = document.getElementsByClassName("materialboxed2");
    var z = document.getElementsByClassName("materialboxed3");
    var a = document.getElementsByClassName("materialboxed4");

    for (var i = 0; i < x.length; i++) {
      x[i].style.display = "none";
      y[i].style.display = "none";
      z[i].style.display = "none";
      a[i].style.display = "none";
    }
    slideIndex++;

    if (slideIndex > x.length) {slideIndex = 1}

    x[slideIndex - 1].style.display = "block";
    y[slideIndex - 1].style.display = "block";
    z[slideIndex - 1].style.display = "block";
    a[slideIndex - 1].style.display = "block";

    setTimeout(carousel, 3000);
  }
  carousel()
</script>

<?php wp_footer(); ?>
</body>

</html>
