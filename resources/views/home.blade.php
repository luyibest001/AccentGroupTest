<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <style type="text/css">

    body {
      font-family: 'Roboto Slab', serif;
      background: #ccc;
      color: #000;
      /*padding: 0px 0px;*/

      margin: 0!important;
    }

    div {
      text-align: center;
    }

    h2 {
      font-weight: bold;
      letter-spacing: 0.04em;
      padding: 0 10px;
      margin-bottom: 5px;
    }

    .stack-parent{
        position: fixed;
        background: #8d8e4c;
        width: 100%;
        height: 100vh;
        background-image: url("{{URL::asset('img/ruirong/bg_small.png')}}");
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; 
        padding: 10px;
    }

    /*.header-wrapper h1{
      font-size: 80px;
      color: #000;
      position: absolute;
    }*/

    .header-title {
        margin-left: 0px;
        margin-right: 0px;
        color: #fff;
        min-height: 40px;
        width: inherit;
        background: clear;
        padding: 4px;
    }

    /* Page content */
    .header-content {
      padding: 16px;
      
    }


    .sticky-title {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 10000;
    }

    
    /* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */
    .sticky-title + .header-content {
      padding-top: 10px;
    }

    .header-wrapper{
      opacity: 1;
      background: #373a1d;
      width: inherit;
      height: 90vh;
      position: relative;
      top: 0;
      left: 0;

    }

    .nav-header{
        opacity: 0.7;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 118px;;
        color: #000;
        height: 50px;
        width: inherit;
        background: white;
        padding: 10px;
    }

    .sticky-nav{
        position: fixed;
        top: 90px;
        left: 0;
        width: 100%;  
        margin-top: 0px!important;
    }

    .sticky-nav + .test-body {
      padding-top: 102px;
    }

    .middle-wrapper{
      opacity: 1;
      background: #000000;
      width: inherit;
      height: 100vh;
      position: relative;
      top: 500px;
      left: 0;

    }

  </style>

  <body>
    <div class="main-wrapper">
      <div class="main-wrapper-head">
        <div class="stack-parent"></div>
        <div class="header-wrapper">
          <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
          <div class="header-title" id="sticky_title">
            <h1>Olive Field</h1>
          </div>
          
          <div class="header-content">
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
          </div>
           <div class="nav-header" id="sticky_nav">
            This is navigation
          </div>
          <!--<div class="test-body">
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
          </div> -->
        </div>
        
        <br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>

        <div class="middle-wrapper">
          <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
        </div>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br><br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br><br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br><br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br><br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br><br><br><br>
        <br><br><br>
        <br><br>

        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br><br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br><br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br><br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br><br><br><br>
        <br><br><br>
        <br><br>

        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br><br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br><br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br><br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br><br><br><br>
        <br><br><br>
        <br><br>
        
      </div>
      <div class="main-wrapper-body">
      </div>

      <footer>
        <div>
          ©Copyright 2020 Yi Lu
        </div>
      </footer>
    </div>
    
    <script type="text/javascript">
      window.onscroll = function() {myFunction()};

      // Get the header
      var header = document.getElementById("sticky_title");

      // Get the offset position of the navbar
      var sticky = header.offsetTop;

      var nav = document.getElementById("sticky_nav");

      // Get the offset position of the navbar
      var sticky_nav = nav.offsetTop - header.offsetHeight;

      // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
      function myFunction() {
        if (window.pageYOffset >= sticky) {
          header.classList.add("sticky-title");
        } else {
          header.classList.remove("sticky-title");
        }

        if (window.pageYOffset >= sticky_nav) {
          nav.classList.add("sticky-nav");
        } else {
          nav.classList.remove("sticky-nav");
        }
      }

    </script>
  </body>
</html> 