<header class="blog-header border-bottom shadow-sm bg-white">
    <div class="container-fluid" style="padding-left: 3rem; padding-right:3rem">

        <div class="d-flex flex-column flex-md-row align-items-center py-2">
            <a href="index.php" class="my-0 mr-md-auto" style="width: 6rem;">
                <!-- <img src="img/logo/logo.png" alt="dev culture logo" style="width: 80%;height: auto;">Include Head -->
            </a>

            <?php if ($loggedin) : ?>

                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 px-5 text-muted" href="index.php">Binaries Page</a>
                    <a class="p-2 px-5 text-muted" href="revshell.php">Reverse Shell</a>
                    <a class="p-2 px-5 text-muted" href="categories.php">Category</a>
                    <a class="p-2 px-5 text-muted" href="article.php">Edit Binaries</a>
                    <a class="p-2 px-5 text-muted" href="author.php">Author</a>
                </nav>

            <?php else : ?>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 px-5 text-muted" href="single_article.php?id=0">How To Use?</a>
                    <a class="p-2 px-5 text-muted" href="articleOfCategory.php">Binaries Page</a>
                    <a class="p-2 px-5 text-muted" href="revshell.php">Reverse Shell</a>
                </nav>

            <?php endif;  ?>

            <a class="btn btn-outline-success" href="<?= ($loggedin) ? 'logout.php' : 'login.php'; ?>">
                <?= ($loggedin) ? 'Logout' : 'Sign in'; ?>
            </a>

        </div>
    </div>
</header>
