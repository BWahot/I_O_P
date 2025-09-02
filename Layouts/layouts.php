<?php
class layouts {
    public function header($conf) {
    ?>
        <header>
            <h1>Welcome to <?php print $conf['site_name']; ?></h1>
        </header>
    <?php
    }

    public function footer($conf) {
    ?>
        <footer>
            <p>Copyright 2023 &copy; <?php print $conf['site_name']; ?></p>
        </footer>
    <?php
    }
}