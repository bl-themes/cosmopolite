    <?php if ($WHERE_AM_I == 'home'): ?>
    <!-- Feature Post -->
    <div class="container-fluid pt-4">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php
          $featured = array_slice($content, 0, 2);
          $content = array_slice($content, 2);
          foreach ($featured as $page):
        ?>
        <div class="col">
          <a class="text-dark text-decoration-none" href="<?php echo $page->permalink(); ?>" alt="<?php echo $page->title(); ?>">
          <div class="card bg-dark text-white border-0 img-gradient h-100">
            <img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" class="card-img" alt="..." >
            <div class="card-img-overlay h-100 d-flex flex-column justify-content-end" style="z-index: 100">
              <h2 class="card-title fw-bold shadow-sm"><?php echo $page->title(); ?></h2>
              <p class="card-text small text-secondary"><i class="far fa-clock text-white"></i> <?php echo $page->date(); ?></p>
            </div>
          </div>
          </a>
        </div>
        <?php endforeach ?>
      </div>
    </div>
    <!--/ Feature Post -->
    <?php endif; ?>

    <!-- Main Content -->
    <div class="container-fluid pt-4 pb-5">
      <div class="row">
        <h4 class="fw-bold pb-2"><?php ($WHERE_AM_I=='search'?$language->p('Search'):$language->p('All News')) ?></h4>
        <!-- Left Content -->
        <div class="col-md-8">
          <!-- Start Post -->
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php if (empty($content)) { $language->p('No pages found'); } ?>
            <?php foreach ($content as $page): ?>
            <div class="col ">
              <a class="text-dark text-decoration-none" href="<?php echo $page->permalink(); ?>" alt="<?php echo $page->title(); ?>">
              <div class="card h-100">
                <img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" class="card-img-top crop" alt="<?php echo $page->title(); ?>">
                <div class="card-body">
                  <h5 class="card-title fw-bold"><?php echo $page->title(); ?></h5>
                  <p class="card-text"><small class="text-muted"><i class="far fa-clock text-dark"></i> <?php echo $page->date(); ?></small></p>
                </div>
              </div>
              </a>
            </div>
            <?php endforeach ?>
          </div>
          <!--/ End Post -->
        <!-- Braedcrumb -->
        <?php if (Paginator::numberOfPages()>1): ?>
        <div class="col-md-12 mt-4 mb-4">
          <div class="btn-group">
            <?php if (Paginator::showPrev()): ?>
            <a href="<?php echo Paginator::previousPageUrl() ?>" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i></a>
            <?php endif ?>
            <?php if (Paginator::showNext()): ?>
            <a href="<?php echo Paginator::nextPageUrl() ?>" class="btn btn-outline-dark"><i class="fas fa-arrow-right"></i></a>
            <?php endif ?>
          </div>
        </div>
        <?php endif ?>
        <!--/ Breadcrumb -->
        </div>
        <!--/ Left Content -->
        <!-- Right Content -->
        <div class="col-md-4">
          <!-- Weather -->
          <div class="card mb-3">
          <div class="card-body">
          <a class="weatherwidget-io" href="https://forecast7.com/en/n8d67115d21/denpasar-city/" data-label_1="DENPASAR CITY" data-label_2="WEATHER" data-font="Roboto" data-icons="Climacons Animated" data-days="3" data-theme="pure" data-lowcolor="#5d5d5d" data-mooncolor="#ffbc00" data-cloudcolor="#c8c8c8" data-raincolor="#2acccc" >DENPASAR CITY WEATHER</a>
          <script>
          !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
          </script>
          <!--/ Weather -->
          </div>
          </div>
          <h6 class="pt-4">TRANDING</h6>
          <ul class="list-group list-group-flush">
            <?php
              $listOfKeys = $pages->getList(1, 13);
              if ($listOfKeys) :
              foreach ($listOfKeys as $key) :
              $lPage = new Page($key);
            ?>
            <li class="list-group-item"><a href="<?php echo $lPage->permalink() ?>"><?php echo $lPage->title() ?></a></li>
            <?php endforeach ?>
            <?php endif ?>
          </ul>
        </div>
        <!--/ Right Content -->
      </div>
    </div>
    <!--/ Main Content -->