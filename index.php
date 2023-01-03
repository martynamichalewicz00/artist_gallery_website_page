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

        <a href="#menu" class="fill button">see my work</a>

    </div>
    <div class="column">
      <img 
       src="images/head.jpg">
    </div>
  </div>
</section>

<section id="menu" class="gallery">
  <div>
    <div>
      <h1 class="my-work">My work</h1>
    </div>
    <div class="menu">

               
   <?php
    $dir ="gallery/"; // image folder name
      if (is_dir($dir)){
         if ($dh = opendir($dir)){
                 while (($file = readdir($dh)) !== false){
                    if($file=="." OR $file==".."){} else { 
              ?>   <!---- its a loop [change the folder name on img path]----->                
                         <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                          <img alt="gallery" class="border-gray-200 w-full object-cover object-center" style="height: 260px;" src="gallery/<?php echo $file; ?>">
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
      <p>Znajdź mnie na:</p>
    </div>
  </div>
  <div>
    <div>
      <span>
        <a>
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
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