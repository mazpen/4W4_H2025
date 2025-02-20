<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
            </div>
            <div class="piedpage__s1__adresse">
                
            </div>
            
        </section>
        <section class="piedpage__s2"></section>
            <div class="piedpage__s2__adresse__coord">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere porro veniam vitae, tempore corporis omnis nam 
            </div>
            <div class="piedpage__s2__adresse__recherche">
                <?php get_search_form();   ?>
            </div>

        <section class="piedpage__s3"></section>
        <div class="piedpage__s3__description">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat vero explicabo iure sit enim, ea ducimus nesciunt inventore impedit blanditiis unde omnis facere, deleniti eligendi fuga molestias dolor eveniet laborum!
            </div>


    </div>
</footer>
<?php wp_footer() ?>