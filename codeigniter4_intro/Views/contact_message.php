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
      <div class="grid">

        <section>
          <hgroup>
            <h2><?= $title ?></h2>
            <h3>Quisque mi est</h3>
          </hgroup>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis est vel velit bibendum ultrices. Sed aliquam tortor vel odio fermentum ullamcorper eu vitae neque. Sed non diam at tellus venenatis viverra. Vestibulum et leo laoreet arcu tempor eleifend venenatis ac leo. Pellentesque euismod justo sed nisl sollicitudin varius. Duis venenatis nisl sit amet ante rutrum posuere. Etiam nec ullamcorper leo, sed placerat mauris.</p>
          <figure>
            <img src="/images//rockies.jpg" alt="Architecture">
            <figcaption>Image from <a href="https://unsplash.com">unsplash.com</a></figcaption>
          </figure>
          <h3>Nulla augue metus</h3>
          <p>Pacilisis sed ante ut, posuere volutpat quam. Maecenas maximus blandit mi ac finibus. Proin quis lacinia tellus. Aliquam erat volutpat. Aliquam erat volutpat. Phasellus suscipit nisi augue, id accumsan tortor auctor ut. Duis odio arcu, egestas nec nulla vel, fermentum bibendum ex.</p>
          <h3>Sed purus sapien, porta a cursus sed, maximus et metus.</h3>
          <p>Phasellus molestie ante sed massa bibendum, eget tempus ex sollicitudin. Vestibulum libero nulla, porttitor nec faucibus et, scelerisque eget quam. Nullam finibus tempor dui, vel congue urna condimentum ac. Fusce ultricies mauris justo, nec vulputate mauris pulvinar eu. Sed tempus ligula lorem, at tincidunt risus mollis non. Quisque et turpis sit amet sapien gravida ullamcorper in eu velit. Curabitur luctus ornare finibus. Proin tempor nulla sagittis est fermentum dapibus. Vestibulum posuere mattis congue. Ut porttitor id sem euismod tristique. Quisque mi est, posuere nec lorem eu, vulputate vehicula diam. Nullam scelerisque, libero posuere efficitur bibendum, urna odio finibus lorem, sed volutpat dolor ligula in dolor. Suspendisse suscipit efficitur neque, ut porta tellus mollis vel. Nam consequat arcu ac tellus porta, nec egestas orci sodales.</p>
        </section>

        <aside>
          <a href="#" aria-label="Example" onclick="event.preventDefault()"><img src="/images/redwoods.jpg" alt="Architecture"></a>
          <p>
            <a href="#" onclick="event.preventDefault()">Donec sit amet</a><br>
            <small>Class aptent taciti sociosqu ad litora torquent per conubia nostra</small>
          </p>
          <a href="#" aria-label="Example" onclick="event.preventDefault()"><img src="/images/arches.jpg" alt="Architecture"></a>
          <p>
            <a href="#" onclick="event.preventDefault()">Suspendisse potenti</a><br>
            <small>Proin non condimentum tortor. Donec in feugiat sapien.</small>
          </p>
          <a href="#" aria-label="Example" onclick="event.preventDefault()"><img src="/images/joshua_tree.jpg" alt="Architecture"></a>
          <p>
            <a href="#" onclick="event.preventDefault()">Nullam lobortis placerat aliquam</a><br>
            <small>Maecenas vitae nibh blandit dolor commodo egestas vel eget neque. Praesent semper justo orci, vel imperdiet mi auctor in.</small>
          </p>
        </aside>

      </div>
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