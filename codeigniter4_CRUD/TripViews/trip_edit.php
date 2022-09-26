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
    <li><a href="#" class ="contrast">Trips</a></li>
    <li><a href="#"class ="contrast" >Parks</a></li>
    <li><a href="#" class ="contrast">About</a></li>
    <li><a href="#"class ="contrast" >Contact</a></li>
    
   
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
            <h2>Edit your Trip</h2>
            <h3>Update Details of Your Trip Right Here!</h3>
          </hgroup>
   
            <?php if (isset($validation)) : ?>
              <p> <?= $validation->listErrors() ?>
            </p>
            <?php endif; ?>
            <form action="/trips/tripUpdate/<?= $trip->id ?>" method="post">
                <?= csrf_field() ?>

                <label for="title">Title</label>
                <input type="input" name="title" value= "<?= $trip->title ?>" /><br />

                <label for="body">Description</label>
                <textarea name="body" cols="45" rows="4"><?= $trip->body ?></textarea><br />
                <input type = "hidden" name = "id" value = "<?= $trip->id ?>" />
                <input type="submit" name="submit" value="Update" />
                
            </form>
               <div style= "text-align:center"><a href="<?= base_url() ?>/trips">Return to Trips</a></div>
        
        </div>
       
    </article> 


      
    </main><!-- ./ Main -->

    <!-- Subscribe -->
    <section aria-label="Subscribe example">
      <div class="container">
        <article>
          <hgroup>
            <h2>Subscribe</h2>
            <h3>Litora torquent per conubia nostra</h3>
          </hgroup>
            <form class="grid">
              <input type="text" id="firstname" name="firstname" placeholder="First name" aria-label="First name" required>
              <input type="email" id="email" name="email" placeholder="Email address" aria-label="Email address" required>
              <button type="submit" onclick="event.preventDefault()">Subscribe</button>
          </form>
        </article>
      </div>
    </section><!-- ./ Subscribe -->

    <!-- Footer -->
    <footer class="container">
      <small>Built with <a href="https://picocss.com">Pico</a> • <a href="https://github.com/picocss/examples/tree/master/company/">Source code</a></small>
    </footer><!-- ./ Footer -->



  </body>

</html>
