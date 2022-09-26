<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CI4 National Parks Adventure</title>
    <meta name="description" content="CI4 National Parks Adventure.">
    <link rel="shortcut icon" href="https://picocss.com/favicon.ico">
    <link rel="canonical" href="https://picocss.com/examples/company/">

    <!-- Pico.css -->
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">

    <!-- Custom styles for this example -->
    <link rel="stylesheet" href="/css/custom.css">
</head>

<body>

    <!-- Hero -->
    <div class="hero" data-theme="dark" style="background-image: url(/images/compass2.jpg)">
        <nav class="container-fluid">
            <ul>
                <li><strong>National Parks Explorer</strong></li>
            </ul>
            <ul>
                <li><a href="#" class="contrast">Trips</a></li>
                <li><a href="#" class="contrast">Parks</a></li>
                <li><a href="#" class="contrast">About</a></li>
                <li><a href="#" class="contrast">Contact</a></li>


            </ul>
        </nav>

        <header class="container">
            <hgroup>
                <h1>Discover Your National Parks</h1>
                <h2><strong>Plan your trip<br>
                        Mark highlights along the way<br>
                        Share your adventure with friends and family</strong></h2>

            </hgroup>
            <p><a href="#" role="button" onclick="event.preventDefault()">Join Today</a></p>
        </header>
    </div><!-- ./ Hero -->

    <!-- Main -->
    <main class="container">
        <article>
            <div>
                <hgroup>
                    <h2>Are you sure you want to delete this trip?</h2>
                    <h3>Once deleted, your trip cannot be recovered</h3>
                </hgroup>
                <p><?= $trip->title?></p>

                <p><?= $trip->body?></p>

                <p><a href="<?= base_url() ?>/trips" role="button" class="secondary">Cancel</a>
                    <a href="<?= base_url() ?>/trips/delete/<?= $trip->id ?>" role="button">Delete</a>
                </p>
            </div>
        </article>



    </main><!-- ./ Main -->


    <!-- Footer -->
    <footer class="container">
        <small>Built with <a href="https://picocss.com">Pico</a> • <a href="https://github.com/picocss/examples/tree/master/company/">Source code</a></small>
    </footer><!-- ./ Footer -->



</body>

</html>