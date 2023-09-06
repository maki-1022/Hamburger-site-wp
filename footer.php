    <footer class="l-footer">

        <!-- カスタムメニューの呼び出し -->
        <?php wp_nav_menu( array (
        'theme_location' => 'footer_nav'
        ) ); ?>

        <li class="l-footer__copyright"><small>Copyright: RaiseTech</small></li>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>