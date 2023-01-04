<!DOCTYPE html>
<html>
<head>
	<title>Nowak Art</title>
	<link href="assets/main.css" rel="stylesheet">
</head>
<body>
  <script src="js/main.js"></script>
<header class="header">
  <div>
    <a>
      <span>Jan Nowak</span>
    </a>
    <nav>
      <a href="about.html">About me</a>
      <a class="contact-me" href="contact.html">Contact</a>
    </nav>
  </div>
</header>

<section class="row">
  <div>
    <div class="column main-title">
      <h1>
        <br>Art & Design
      </h1>
      <p class="sub">passion to provide high quality<br>pieces of art</p>
        <button onclick="topFunction()" class="fill button">see my work</button>
    </div>
    <div class="column">
      <img 
       src="images/head.jpg">
    </div>
  </div>
</section>

<section class="gallery">
  <div>
    <div>
      <h1 class="my-work">My work</h1>
    </div>
    <div class="menu">

               
   <?php
    $dir ="gallery/"; 
      if (is_dir($dir)){
         if ($dh = opendir($dir)){
                 while (($file = readdir($dh)) !== false){
                    if($file=="." OR $file==".."){} else { 
              ?>              
                         <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                          <img alt="gallery" src="gallery/<?php echo $file; ?>">
                        </div>
                      </div>
             <?php
              }
             }
         closedir($dh);
         }
      } ?>

      </div>
    </div>
  </div>
</section>

<footer>
  <div>
    <div>
      <a>
        <span>Jan Nowak</span>
      </a>
      <p>Find me on:</p>
    </div>
  </div>
  <div>
    <div>
      <span>
        <a href="https://www.facebook.com/">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a href="https://www.instagram.com/">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a href="https://www.linkedin.com/">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>

</body>
</html>