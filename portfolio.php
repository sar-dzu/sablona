<?php
include_once('parts/header.php');
?>
<?php
include_once('functions.php');
?>

        <main>
            <section class="banner">
                <div class="container text-black">
                    <h1>Portfólio</h1>
                </div>
            </section>
              <section class="container">
                  <?php
                  finishPortfolio();
                  ?>
            </section>   

        </main>
<?php
include_once('parts/footer.php');
?>
    <script src="js/menu.js"></script>
    </body>
</html>