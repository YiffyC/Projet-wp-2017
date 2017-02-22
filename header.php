<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

<script async src="https://use.fontawesome.com/e5e2902e5d.js"></script>

<title><?php bloginfo('Site de Bérenger Thévenet') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>

<meta name="Description" content="Le portfolio de Bérenger Thévenet. Vous y retrouverez mon CV, mes compétences et mes réalisations.">
<meta name="Keywords" content="Bérenger Thévenet portfolio photoshop création ">
<meta name="Identifier-Url" content="http://bthevenet.000webhostapp.com/">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>

<?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>


<!-- <link rel="stylesheet" href="style.css" type="text/css" media="screen" />-->
<!-- bootstrap -->

  <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />

<!-- fin bootstrap   -->



<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" /> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
<script src="https://use.fontawesome.com/e5e2902e5d.js"></script>

  <!-- la police pour les réseaux sociaux -->





<nav class="navbar navbar-inverse navbar-fixed-top">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
           <span class="sr-only">Afficher le plan du site</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="wordpress/home">Bienvenue</a>
       </div>
       <div id="navbar" class="collapse navbar-collapse">
         
	 <ul class="nav navbar-nav">
           <li class="active"><a href="wordpress/home">Accueil</a></li>
           <li><a href="wordpress/cv">CV</a></li>
           <li><a href="wordpress/competences">Comp&eacute;tences</a></li>
           <li><a href="https://bthevenet.000webhostapp.com/?post_type=projet">Portfolio</a></li>
           <li><a href="wordpress/contact">Contact</a></li>
         </ul>
       </div>
     </div>
   </nav>
   <!--sticky Fin navbar -->
</head>
<body>