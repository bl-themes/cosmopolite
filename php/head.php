<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>
<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>
<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>
<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('css/bootstrap.min.css'); ?>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/99398214e6.js" crossorigin="anonymous"></script>
<!-- Custom CSS -->
<script src="https://kit.fontawesome.com/99398214e6.js" crossorigin="anonymous"></script>
<style>
      .dropdown-toggle::after {
          content: none;
      }
        .img-gradient{
          position:relative;
          display:inline-block;
        }
        .img-gradient:after {
          content:'';
          position:absolute;
          left:0; top:0;
          width:100%; height:100%;
          display:inline-block;
          background-image: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,1));
          border-bottom-right-radius: 5px;
          border-bottom-left-radius: 5px;
        }
       .crop {
          object-fit: cover;
          width: 100%;
          height: 177px;
          object-position: center 40%;
        }
        li.list-group-item {padding-left: 0px;font-weight: bold;font-size: 14px;}
        li.list-group-item a{color:#000;text-decoration: none;}
        li.list-group-item a:hover{color:#333;text-decoration: underline;}
        li.breadcrumb-item a{color:#000;text-decoration: none;}
        li.breadcrumb-item a:hover{color:#333;text-decoration: underline;}
        p a{color:#000;text-decoration: underline;font-weight: bold;}
        p a:hover{color:#333;font-weight: bold;}
        li a{color:#000;text-decoration: underline;font-weight: bold;}
        li a:hover{color:#333;font-weight: bold;}
        p img{width: 100%;border-radius: 5px;}
    </style>
<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>