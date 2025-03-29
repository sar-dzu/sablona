<?php
include('parts/header.php');
?>

<?php
include_once("classes/QnA.php");
use otazkyodpovede\QnA;

$qna = new QnA();
$otazkyAOdpovede = $qna->getQnA();
?>

  <main>
    <section class="banner">
      <div class="container text-white">
        <h1>Q&A</h1>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-100 text-center">
          <p><strong><em>Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui. Mollit deserunt culpa incididunt laborum commodo in culpa.</em></strong></p>
        </div>
      </div>
    </section>
      <section class="container">
          <?php
          foreach($otazkyAOdpovede as $item){
          echo '<div class="accordion">';
          echo '<div class="question">'.$item['otazka'].'</div>';
          echo '<div class="answer">'.$item['odpoved'].'</div>';
          echo '</div>';
          }
          ?>
    </section>
    </section>
  </div>
  </main>
<?php include 'parts/footer.php'?>


</body>
</html>