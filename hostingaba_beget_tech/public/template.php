<?php 
// Something, that isn't meaning
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<title><?= $page->getTitle(); ?></title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="/public/assets/fontawesome/js/all.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="/public/assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="/public/assets/plugins/prism/prism.css">
    <link rel="stylesheet" href="/public/assets/plugins/elegant_font/css/style.css">  
      
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="/public/assets/css/styles.css">
    <style>
      <?= $page->getCss(); ?>
    </style>
    
</head> 

<body class="body-green">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="/">
                            <span aria-hidden="true" class="icon_documents_alt icon"></span>
                             <span class="text-highlight">Wiki</span><span class="text-bold">developer</span>
                        </a>
                    </h1>
                    
                </div><!--//branding-->
                
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Начало</a></li>
                    <li class="breadcrumb-item active">Quick Start</li>
                </ol>
                
                <div class="top-search-box">
	                 <form class="form-inline search-form justify-content-center" action="" method="get">
	            
			            <input type="text" placeholder="Search..." name="search" class="form-control search-input">
			            
			            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
			            
			        </form>
                </div>
                
            </div><!--//container-->
        </header><!--//header-->
        
	<div class="container">
	  <?= $page->getHtml(); ?>
	</div>
        
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i></h1>
                    <div class="meta"><i class="far fa-clock"></i> Last updated: Oct 28 th, 2020</div>
                </div><!--//doc-header-->
            </div>
        </div>    
    <footer id="footer" class="footer text-center">
        <div class="container">
            <small class="copyright">Designed by <a href="https://www.facebook.com/abay.reushenov" target="_blank">Abay Reushenov</a> for developers</small>
            
        </div><!--//container-->
    </footer><!--//footer-->
    
     
    <!-- Main Javascript -->          
    <script type="text/javascript" src="/public/assets/plugins/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/public/assets/plugins/prism/prism.js"></script>    
    <script type="text/javascript" src="/public/assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>      
    <script type="text/javascript" src="/public/assets/plugins/stickyfill/dist/stickyfill.min.js"></script>                                                             
    <script><?= $page->getJs(); ?></script>
</body>
</html> 

