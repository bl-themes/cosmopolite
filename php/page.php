    <!-- Main Content -->
    <div class="container-fluid pt-4 pb-5">
      <div class="row">
        <!-- Left Content -->
        <div class="col-md-8 pb-4">
          <!-- Load Bludit Plugins: Page Begin -->
          <?php Theme::plugins('pageBegin'); ?>
          <!-- Start Post -->
          <h1 class="fw-bold"><?php echo $page->title(); ?></h1>
          <p><small class="text-muted"><i class="far fa-clock text-dark"></i> <?php echo $page->date(); ?></small> | <a class="text-decoration-none text-uppercase text-dark" href="#"><?php echo $page->category() ?></a></p>
          <?php if ($page->coverImage()): ?>
          <figure class="figure">
          <img src="<?php echo $page->coverImage(); ?>" class="img-fluid rounded" alt="<?php echo $page->title(); ?>">
          <figcaption class="figure-caption pt-2"><?php echo $page->custom('figure'); ?></figcaption>
          </figure>
          <?php endif ?>
          <!-- Content -->
          <?php echo $page->content(); ?>
          <!--/ Content -->
          <?php if (!empty($page->tags(true))): ?>
          <div class="col pt-3">
            <p class="fw-bold">Tag</p>
            <?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
            <a class="btn btn btn-outline-warning text-dark fw-bold btn-sm mb-1" href="<?php echo DOMAIN_TAGS.$tagKey ?>" role="button"><?php echo $tagName; ?></a>
            <?php endforeach ?>
          </div>
          <?php endif; ?>
          <!--/ End Post -->
          <br>
        <?php Theme::plugins('pageEnd'); ?>
        </div>
        <!--/ Left Content -->
        <!-- Right Content -->
        <div class="col-md-4">
          <h6 class="pt-2">CATEGORIES</h6>
          <ul class="list-group list-group-flush">
            <?php foreach ($categories->db as $key=>$fields):
            if($fields['list']):  ?>
            <li class="list-group-item"><a href="<?php echo DOMAIN_CATEGORIES.$key; ?>"><?php echo $fields['name']; ?></a></li>
            <?php
            endif;
            endforeach; ?>
          </ul>

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