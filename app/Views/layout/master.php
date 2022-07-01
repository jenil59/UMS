<html>
    <head>
        <title> master page</title>
    </head>
    <body>
        <header>
            header
        </header>

        <?= $this->renderSection('body-about-content') ?>
        <?= $this->renderSection('body-contact-content') ?>


        <footer>
            footer
        </footer>
    </body>
</html>