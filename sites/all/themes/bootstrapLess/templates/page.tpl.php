<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>




<!--<section id="navbar" role="banner" class="<?php print $navbar_classes; ?>"  data-offset-top="60">
  <div class="container-fluid">
    <div class="navbar-header">

      <?php if (!empty($site_name)): ?>
        <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation" class="navbar-right">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</section>-->

<header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Développeur & intégrateur <span>web</span></h1>
            
                <p class="lead">Autonome, bon sens de l'analyse et de la compréhension des besoins. À l’aise pour le travail en équipe, et bonne capacité d'adaptation.</p>
<a class="btn btn-primary js-scrollTo btn-lg outline" href="#about">En savoir plus</a>
            </div>
        </div>
    </header>



 <section class="container content-sm savoir-faire" id="about">
<div class="row margin-bottom-30">
    <div class="col-md-12">
    <div class="headline"><h2>Savoir-faire</h2></div>
              <p>Curieux et intéressé par nature, mes expériences et ma formation professionnelle m'ont permis de développer des compétences variées dans le domaine du web. Soucieux de vouloir suivre efficacement son évolution, j'entretiens une veille technologique constante, avec plaisir et passion.</p>
        </div>
</div>

<div class="row margin-bottom-30">
        <div class="col-md-4">
          <div class="service">
            <i class="fa fa-drupal service-icon"></i>
            <div class="desc">
              <h4>CMS + Bootstrap</h4>
              <p>La fusion entre Bootstrap, le framework CSS de référence, et le CMS Drupal ou WordPress, afin de construire rapidement et facilement des sites web esthétiques, responsives et modulables.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service">
            <i class="fa fa-code service-icon"></i>
            <div class="desc">
              <h4>La POO en PHP + MYSQL</h4>
              <p> Le développement de modules et de themes, nottamment sous Drupal, ansi que sur des projets personnels, me pousse à depasser mes compétences et à en apprendre toujours plus.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service">
            <i class="fa fa-paint-brush service-icon"></i>
            <div class="desc">
              <h4>Adobe® et ses amis</h4>
              <p> Ma formation initiale de préparateur en forme imprimante (ou infographiste, c'est plus simple !) m'a permis d'avoir de bonnes connaissances sur Photoshop® et Ilustrator® de la suite Adobe CS.</p>
            </div>
          </div>
        </div>
      </div>
</div>

    <section class="about">
 <div class="container overflow-h">
        <div class="row">
          <div class="col-md-9 animated fadeInLeft">
            <span>Mon Objectif professionnel</span>
            <p>Je cherche à exercer une fonction d'employée polyvalente dans une petite ou grande entreprise, agences web ou autres, en tant qu’intégrateur/développeur web. À pleins temps ou temps partiel.</p>
          </div>
          <div class="col-md-3 btn-buy animated fadeInRight">
            <a class="btn-u btn-u-lg" href="#"><i class="fa fa-cloud-download"></i>Telecharger le cv</a>
          </div>
        </div>
      </div>
      </section>

<div class="headline"><h2>Travaux récents</h2></div>

<div class="row margin-bottom-20">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-img">
              <div class="overflow-hidden">
                <img alt="" src="sites/all/themes/bootstrapLess/images/img17.jpg" class="img-responsive">
              </div>

            </div>
            <div class="caption">
              <h3><a href="#" class="hover-effect">La cave 20G</a></h3>
              <p>Boutique en ligne de la cave à vin 20G à Carouge.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-img">
              <div class="overflow-hidden">
                <img alt="" src="sites/all/themes/bootstrapLess/images/img12.jpg" class="img-responsive">
              </div>

            </div>
            <div class="caption">
              <h3><a href="#" class="hover-effect">Fleuriste Kalis</a></h3>
              <p>La boutique KALIS, fleuriste sur Genève</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-img">
              <div class="overflow-hidden">
                <img alt="" src="sites/all/themes/bootstrapLess/images/alex-kidd.gif" class="img-responsive">
              </div>
              <a href="#" class="btn-more hover-effect">Jouer à la demo</a>
            </div>
            <div class="caption">
              <h3><a href="#" class="hover-effect">Alex Kidd in Miracle World</a></h3> 
              <p>Remake du celebre jeu de sega avec Unity 3D.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-img">
              <div class="overflow-hidden">
                <img alt="" src="sites/all/themes/bootstrapLess/images/img1.jpg" class="img-responsive">
              </div>

            </div>
            <div class="caption">
              <h3><a href="#" class="hover-effect">Gexfix SA</a></h3>
              <p>Gexfix SA - Groupe de professionnels de l'orthopédie.</p>
            </div>
          </div>
        </div>
      </div>


</section>


<div class="main-container <?php print $container_class; ?>">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
 <?php if (!drupal_is_front_page()) { ?>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>

 <?php 
  }
  ?>

    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>


<div class="footer-v1">

<div class="footer">
        <div class="container">
          <div class="row">
            <!-- About -->
            <div class="col-md-3 md-margin-bottom-40">
              <a href="index.html"><img alt="" src="assets/img/logo2-default.png" class="footer-logo" id="logo-footer"></a>
              <br/><p><strong>Merci pour votre visite !</strong></p><p>n'hésitez pas à me contacter pour toute autre information dont vous avez besoin.</p>
            </div><!--/col-md-3-->
            <!-- End About -->

            <!-- Latest -->
            <div class="col-md-3 md-margin-bottom-40">
              <div class="posts">
                <div class="headline"><h2>Environnement technique</h2></div>
               <ul class="list-unstyled margin-bottom-20">
                <li><i class="fa fa-check color-green"></i> PHP 5, MYSQL</li>
                <li><i class="fa fa-check color-green"></i>JavaScript/Jquery, XHTML et CSS</li>
                <li><i class="fa fa-check color-green"></i>Responsive Bootstrap</li>
                <li><i class="fa fa-check color-green"></i>CMS Drupal 6-7-8, WordPress</li>
                <li><i class="fa fa-check color-green"></i>Photoshop, Illustrator</li>
              </ul>
              </div>
            </div><!--/col-md-3-->
            <!-- End Latest -->

            <!-- Link List -->
            <div class="col-md-3 md-margin-bottom-40">
              <div class="headline"><h2>Compétences personnelles</h2></div>
               <ul class="list-unstyled margin-bottom-20">
                <li><i class="fa fa-check color-green"></i>Unity 3D</li>
                <li><i class="fa fa-check color-green"></i>Audacity</li>
                <li><i class="fa fa-check color-green"></i>Adobe Premiere</li>
              </ul>
            </div><!--/col-md-3-->
            <!-- End Link List -->

            <!-- Address -->
            <div class="col-md-3 map-img md-margin-bottom-40">
              <div class="headline"><h2>Me contacter</h2></div>
              <address class="md-margin-bottom-40">
                21 A rue Jules Verne <br>
                Annemasse, France <br>
                Tél: (+33)06 51 99 35 78  <br>
                Email: <a class="mail" href="mailto:emmanuel.winckel@gmail.com">emmanuel.winckel@gmail.com</a>
              </address>
            </div><!--/col-md-3-->
            <!-- End Address -->
          </div>
        </div>
      </div>


<div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>
                2016 &copy; All Rights Reserved.
              </p>
            </div>

            
      </div></div></div>
     <a href="#0" class="cd-top">Top</a>