<?php
  require 'var.php';
  include 'web/head.php';
  include 'web/header.php';

  // Start record posters displayed on page
  $resultsUpdate = 0;
?>

<main class="container-fluid">
  <?php   include 'web/filters.php'; ?>

  <!-- introduction text area -->

  <article class="my-5">
    <div class="">
      <h2>Premium Posters</h2>
      <p class="total-results" id="resultsUpdate-top"></p>
    </div>

    <p>
      Whether your walls are looking bare or it's simply time for something new, dressing them up with art is always a great idea. Let your rooms reflect your personality with our photography, illustration and typography art prints and much, much more.
    </p>

  </article>

<?php

// Sort options

  if (isset($_POST["sort"])) {
    $sort = $_POST['sort'] ;

    switch ($sort) {
      case 'popularity':
          echo 'Articles sorted by popularity';
          shuffle ( $posters ) ;
          break;
      case 'price_asc':
          echo 'Articles sorted by Price - Low to High';

          // from low to high
            usort($posters, function($a, $b) { //Sort the array using a user defined function
                return $a->price > $b->price ; //Compare the scores
            });

           $posters ;

          break;
      case 'price_desc':
          echo 'Articles sorted by price - High to Low';

          // from high to low
            usort($posters, function($a, $b) { //Sort the array using a user defined function
                return $a->price < $b->price ; //Compare the scores
            });
            $posters ;

          break;
      default:
          echo "Articles are random - chose sorting option";
    }

  } else{
    echo "Articles are random - chose sorting option";
  }

?>


  <!-- products section -->

  <section class="row d-flex flex-wrap justify-content-center">

    <!-- display product card -->

    <?php foreach ($posters as $poster) {

      // Filter posters by themes

      if (isset($_POST["theme"]) ) {
        $theme = $_POST['theme'] ;

        switch ($theme) {

          case 'animals':
            $filter =  ($poster->theme == "animals" ) ;
              break;

            case 'typography':
              $filter = ($poster->theme == "typography" ) ;
              break;

            case 'travel':
              $filter = ($poster->theme == "travel" ) ;
              break;

              case 'cities':
                $filter = ($poster->theme == "cities" ) ;
                break;

              case 'architecture':
                $filter = ($poster->theme == "architecture" ) ;
                break;

              case 'food':
                $filter = ($poster->theme == "food" ) ;
                break;

              case 'pop_art':
                  $filter = ($poster->theme == "pop_art" ) ;
                  break;

              case 'fiction':
                  $filter = ($poster->theme == "fiction" ) ;
                  break;

              case 'people':
                  $filter = ($poster->theme == "people" ) ;
                  break;

              default:
                $filter = ($poster->theme != "random" );
              }

      } // end of switch case for theme filter

      // Filter posters by style (must have at least one style selected) : photo manip , photography , graphic design , illustrations

      elseif (isset($_POST["illustrations"]) || isset($_POST["photography"])  || isset($_POST["graphic_design"]) || isset($_POST["photo_manipulation"]) ) {

          $illustrations = ( (isset($_POST["illustrations"]) == true ) && ($poster->illustrations == true) ) ;
          $photography = ((isset($_POST["photography"]) == true ) && ($poster->photography == true)) ;
          $graphic_design = ( (isset($_POST["graphic_design"]) == true ) && ($poster->graphic_design == true) ) ;
          $photo_manipulation = ( (isset($_POST["photo_manipulation"]) == true ) && ($poster->photo_manipulation == true) ) ;

          $filter = $illustrations || $photography || $graphic_design || $photo_manipulation ;

      } // end if (isset


      else {
            $filter = ($poster->theme != "random" );
      }


      if ($filter) {
      ?>



    <figure class="product-card col-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center" data-theme="">

        <!-- poster image -->
        <div class="d-flex justify-content-center img-container" style="">
          <img class="img-fluid" src="img/cover/<?php echo $poster->id ?>.jpg" alt="<?php echo $poster->title ; ?> premium poster" style="" >
        </div>


        <!-- poster description -->
        <div class="product-description pl-2 d-flex justify-content-between align-items-start" style="max-height:360px;max-width:249px">

          <!-- text description -->
          <div class="text-truncate">
            <h2><?php echo $poster->title ; ?></h2>
            <h3><?php echo $poster->artist ; ?></h3>
            <p>from <?php echo round($poster->price, 2); ?> €</p>
          </div>

          <!-- wishlist icon -->
          <div class="wishlist" id="normal-alert">
            <i class="heart" data-feather="heart" ></i>
          </div>

      </figure>

      <?php
            // Keep track of posters displayed
            $resultsUpdate += 1;
      ?>

    <?php } ?>
  <?php } ?>

  </section>

  <div id="toastem"></div>

</main>

<?php include 'web/footer.php'; ?>
