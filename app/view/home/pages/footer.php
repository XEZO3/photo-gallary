</div>
<script src="<?=PATH?>js/slider.js"> </script>
<footer class="mt-auto text-center "  style="background-color:#090a0a;width:100%;">
  <!-- Grid container -->
  <div class="container pt-2">
    <!-- Section: Social media -->
    <section class="mb-4">
      <?php foreach($footer as $row): ?>
      <a
        class="btn btn-outline-light btn-floating m-1"
        href="<?=$row['link']?>"
        target="_blank"
        role="button"
        data-mdb-ripple-color="dark"
        ><?=$row['icon']?>
      </a>
<?php endforeach ?>
     
      

     
      
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->


  
</footer>

</body>
</html>