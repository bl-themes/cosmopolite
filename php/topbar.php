<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container-fluid pt-2 pb-2">
        <a class="navbar-brand fw-bolder" href="<?php echo $site->url(); ?>"><?php echo $site->title(); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $site->url(); ?>category/coronavirus">Coronavirus</a>
            </li>
            <li class="nav-item dropdown">
              <button class="btn btn-warning btn-sm dropdown-toggle mt-1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bars"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                <?php foreach ($categories->db as $key=>$fields):
                if($fields['list']):  ?>
                <li><a class="dropdown-item" href="<?php echo DOMAIN_CATEGORIES.$key; ?>"><?php echo $fields['name']; ?></a></li>
                <?php
                endif;
                endforeach; ?>
              </ul>
            </li>
          </ul>
          <div class="d-flex">
            <?php if (pluginActivated('pluginSearch')): ?>
            <div class="input-group"> 
            <input id="search-input" class="form-control border-light border-end-0" type="search" placeholder="Search" aria-label="Search">
            <button onClick="searchNow()" class="btn border-light bg-white border-start-0 border rounded-end" type="submit"><i class="fas fa-search text-warning"></i></button>
            <script>
              function searchNow() {
                var searchURL = "<?php echo Theme::siteUrl(); ?>search/";
                window.open(searchURL + document.getElementById("search-input").value, "_self");
                }
                var elem = document.getElementById('search-input');
                elem.addEventListener('keypress', function(e){
                  if (e.keyCode == 13) {
                  searchNow();
                }
              });
            </script>
            </div>
            <?php endif ?>
          </div>
        </div>
      </div>
    </nav>
    <!--/ Navigation -->