<?php
include_once('parts/header.php');

?>
    
    <main>
      <section class="slides-container">
        <?php include_once 'functions.php';
        generateSlides('img/banners');
        ?>
        
      </section>
      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
            <?php
          $hour = date('H');
          if ($hour < 12) {
              echo "<h3>Dobré ráno</h3>";
            } elseif ($hour < 18) {
            echo "<h3>Dobrý deň</h3>";
            } else {
            echo "<h3>Dobrý večer</h3>";
            }
            ?>
          </div>
        </div>
      </section>
      <section class="container">
        <div class="row">
          <div class="col-50">
            <h2>Mollit cupidatat velit quis irure non eiusmod culpa cillum velit magna est aliquip.</h2>
          </div>
          <div class="col-50">
            <p>Nulla dolore sit esse pariatur culpa sint nulla fugiat nulla ut. Sit adipisicing fugiat id consequat qui est. Nulla ea aliquip culpa nulla mollit do excepteur ex ullamco consequat tempor consectetur. Tempor et ea voluptate irure est magna magna reprehenderit qui non dolore. Consequat id ad cillum do qui. Proident ipsum enim eiusmod fugiat quis anim consequat ullamco mollit excepteur. Eiusmod eu ad irure anim velit laborum commodo nostrud pariatur id ea ad.</p>
            <p>Incididunt pariatur ipsum in culpa sit cillum consequat nostrud do. Esse commodo ad qui ea. Pariatur elit mollit deserunt aute do culpa eu veniam pariatur in adipisicing qui adipisicing irure. Est minim sint ipsum nulla eiusmod. Amet do officia consectetur labore. Id aute labore culpa aliquip. Adipisicing mollit excepteur Lorem quis elit ipsum irure quis occaecat qui consectetur ad irure dolor.</p>
          </div>
        </div>
      </section>
    </main>
<?php include 'parts/footer.php'?>


</body>
</html>