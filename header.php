

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" />
    <script src="https://kit.fontawesome.com/94b068f459.js" crossorigin="anonymous"></script>
    <link
      rel="preload"
      href="/fonts/poppins-bold.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="/fonts/poppins-bold.woff"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="/fonts/poppins-regular.woff"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="/fonts/poppins-regular.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />

    <link
      rel="preload"
      href="/fonts/fa-regular-400.woff"
      as="font"
      type="font/woff2"
      crossorigin
    />

    <link
      rel="preload"
      href="/fonts/fa-regular-400.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__wrapper">
          <div class="inner">
            <div class="branding">
              <a href="#"> BLOG</a>
            </div>
            <nav>
              <ul>
              <?php wp_menu_li(); ?>
              </ul>
            </nav>
          </div>
          <button id="themeToggle"><i class="fas fa-sun"></i></button>
        </div>
      </div>
    </header>