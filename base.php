<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Indie+Flower|Waiting+for+the+Sunrise|Shadows+Into+Light" rel="stylesheet">
    <style>
      body, html {
        padding: 0;
        margin: 0;
        font-family: "Montserrat", sans-serif;
      }
      body {
        overflow-y: scroll;
      }
      p {
        text-align: justify;
        letter-spacing: 2px;
        line-height: 200%;
        text-indent: 64px;
      }
      blockquote {
        text-align: center;
        font-family: "Shadows Into Light", sans-serif;
        font-size: 200%;
        padding: 0 16px 0 0;
        border-right: 8px solid salmon;
      }
      blockquote > :not(.blockquote-footer)::before {
        content: "\201C";
      }
      blockquote > :not(.blockquote-footer)::after {
        content: "\201D";
      }
      .blockquote-footer {
        color: #ccc;
        text-align: right;
        font-size: 90%;
      }
      .blockquote-footer::before {
        content: "\2014 ";
      }
      header {
        padding: 0px;
      }
      aside, main, footer {
        padding: 16px;
      }
      .container {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        grid-template-rows: 64px auto 64px;
      }
      .container-gallery {
        display: grid;
        grid-gap: 8px;
        grid-template-columns: repeat(auto-fit, minmax(256px, 1fr));
        grid-template-rows: repeat(auto-fit, minmax(100px, 1fr));
      }
      .container-gallery > div > img {
        width: 100%;
        height: 100%;
        object-fit: fill;
      }
      header {
        background-color: salmon;
        display: flex;
        grid-column: span 12;
      }
      header > div {
        width: auto;
        height: 64px;
        padding: 0 8px;
        margin: 0 8px;
        line-height: 64px;
      }
      header > div:nth-child(4) {
        margin-left: auto;

      }
      header a:active,
      header a:link,
      header a:hover,
      header a:visited {
        color: inherit;
        text-decoration: none;
      }
      header div:active,
      header div:hover {
        background-color: #fff;
      }
      aside {
        background-color: #fff;
        border-right: 8px solid salmon;
        grid-column: span 2;
      }
      main {
        background-color: #fff;
        grid-column: span 10;
      }
      main > p:first-of-type::first-letter {
        background-color: salmon;
        color: #fff;
        font-size: 200%;
        font-weight: bold;
      }
      footer {
        background-color: salmon;
        grid-column: span 12;
      }
      dialog::backdrop {
        background-color: rgba(128, 128, 128, 0.5);
      }
    </style>
  </head>
  <body>
    <div class="container">
      <header>
        <div style="font-weight: bold;"><a href="javascript:void(0);">FOOBAR</a></div>
        <div><a href="javascript:void(0);">Objective</a></div>
        <div><a href="javascript:void(0);">About</a></div>
        <div><a href="javascript:void(0);">Donate</a></div>
      </header>
      <aside>aside</aside>
      <main>
        <dialog>Please Subscribe!</dialog>
        <h1>Lorem ipsum dolor sit amet!</h1>
        <h4><em>Koko Torralba, 20 January 2018</em></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <blockquote>
          <p>Paalam sa ating huling sayaw. May dulo pala ang lanigt. Kaya't sabay tayong bibitaw sa ating huling sayaw!</p>
          <p class="blockquote-footer">
            Kamikazee
          </p>
        </blockquote>
        <p>Maecenas pellentesque, felis vitae accumsan vehicula, tellus lorem aliquet ante, ut porta sapien magna sit amet purus. Aliquam quis justo ut neque tincidunt feugiat vitae sed dui. Ut odio felis, aliquet sed erat sit amet, hendrerit consectetur est. Aenean et justo velit. Nam viverra tortor quis ex volutpat suscipit. Quisque consequat lorem risus, nec vulputate tortor fringilla at. Quisque suscipit, nisi non fringilla cursus, eros nisl feugiat eros, id auctor libero eros quis felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at lorem viverra, ultrices felis quis, luctus risus. Sed id metus id massa luctus rutrum. Curabitur porta convallis lacus in ornare. Sed nec nunc in lectus accumsan pretium in vel ante. Nullam quis ultricies tellus, tincidunt fermentum erat. Sed sit amet purus leo. Duis euismod ante lorem, eu accumsan ligula mattis eget. Nullam scelerisque a lorem ut semper. Mauris nec ullamcorper dolor. Maecenas convallis, mi eget gravida commodo, turpis velit ultricies ipsum, ut rutrum massa elit sed quam. Maecenas laoreet, sem in suscipit rutrum, arcu nunc semper risus, id tempus ligula erat non libero. Ut non leo faucibus, vulputate augue id, suscipit urna.</p>
        <div class="container-gallery">
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
          <div class=""><img src="https://i.imgur.com/D7ZfPgh.jpg" alt=""></div>
        </div>
      </main>
      <footer>footer</footer>
      <script>
        const modal = document.querySelector('dialog');
        modal.showModal();
        // modal.close();
      </script>
    </div>
  </body>
</html>
