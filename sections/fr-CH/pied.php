<!-- DÉBUT EN-PIED -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-scroll">
                    <a href="#page-top"><i class="icon-Arrow-Up"></i></a>
                </div>
                <!-- //.page-scroll -->
                
                <ul class="list-inline social-icons">
                    <li>
                        <div class="item">
                            <a href="http://www.twitter.com/grantmukai" target="_blank"><i class="fa fa-twitter"></i></a>
                        </div>
                        <!-- //.item -->
                    </li>
                    
                    <li>
                        <div class="item">
                            <a href="http://www.linkedin.com/in/grantmukai" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <!-- //.item -->
                    </li>
                    
                    <li>
                        <div class="item">
                            <a href="http://www.github.com/grantmukai" target="_blank"><i class="fa fa-github"></i></a>
                        </div>
                        <!-- //.item -->
                    </li>
                    
                    <li>
                        <div class="item">
                            <a href="http://www.youtube.com/manto51" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div>
                        <!-- //.item -->
                    </li>
                </ul>
            </div>
            <!-- //.col-md-12 -->
        </div>
        <!-- //.row -->
        
        <div class="row">
            <div class="col-md-12">
                <div class="copyright text-center">
                    <p class="text-grey">&copy; <?php echo date('Y'); ?> Grant Kiyoshi MUKAÏ. Tous droits réservés. Icônes des drapeaux gracieusement fournies par <a href='http://www.icondrawer.com'>Icon Drawer</a>.</p>
                    <?php if (isset($imageVille)) {
                echo "<p class='text-grey'>Cr&eacute;dit de la photo principale: <em>".$creditsImages[$quelleVille][1]."</em> (".$creditsImages[$quelleVille][2].") par <a href='http://www.flickr.com/photos/".$creditsImages[$quelleVille][4]."'>".$creditsImages[$quelleVille][3]."</a>.<br />Autorisée sous le permis Creative Commons. Aucune modification n'a ét&é appliquée à cette photo.</p>";
                }
                ?>
                </div>
                <!-- //.copyright -->
            </div>
            <!-- //.col-md-12 -->
        </div>
        <!-- //.row -->
    </div>
    <!-- //.container -->
</footer>
<!-- //FIN EN-PIED -->                           