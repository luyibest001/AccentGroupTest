<body>
  <head>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/home.css')}}"/>
  </head>
    <nav class="nav" id="menu">
      <div class="wrap">
        <div class="brand">
          <span>Olive Field</span>
        </div>
          <button id="mobile-btn" class="hamburger-btn">
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
        </button>
        <ul class="top-menu" id="top-menu">
          <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </nav>

    <header class="hero">
      <div class="content">
        <p></p>
        <button class="cta">Learn More</button>
      </div>
    </header>

    <main class="main">
      <section id="gallary-section">
        <div class="tab-row">
          <div class="col-12">
            <!--Gallery Section Start-->
            <div id="service-features">

                <div class="gallery-feature" id='feature-1'>
                  <h2 id="feature-title"></h2>

                  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. </p>

                  <a href="#"><button class="feature-button"> See more! </button></a>
                </div>

                <div class="gallery-feature" id='feature-2'>

                  <h2 id="feature-title"></h2>

                  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. </p>

                  <a href="#"><button class="feature-button"> See more! </button></a>
                </div>

                <div class="gallery-feature" id='feature-3'>

                  <h2 id="feature-title"></h2>

                  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. </p>

                  <a href="#"><button class="feature-button"> See more! </button></a>
                </div>

              </div>

            </div>
            <!--Gallery Section ends-->
          </div>
        </section>
        <section class="feature">
          <div class="tab-row">
            <div class="col-12">
              <h2>Feature Section</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur nihil dignissimos eos repellat perferendis qui corrupti explicabo vel inventore minima.</p>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="tab-row">
          <div class="col-4">
            <h2>Columns</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga porro sapiente, corporis dignissimos laudantium illo expedita corrupti asperiores esse quae.</p>
          </div>
          <div class="col-4">
            <h2>Columns</h2>
            <p>Repellat qui, dolores nemo asperiores incidunt quidem dolorum. Quos, deleniti neque architecto dolore magni aliquid. Inventore suscipit consequuntur excepturi ipsam.</p>
          </div>
          <div class="col-4">
            <h2>Columns</h2>
            <p>Doloribus perferendis a ipsum ad, consectetur animi aliquam maxime, earum aspernatur, ea commodi tempore suscipit explicabo cupiditate at nemo quae.</p>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
        <div class="row">
          <div class="col-6">
            <p><i class="fa fa-phone" aria-hidden="true"></i> +44 (0)123 456 789</p>
    			<p><i class="fa fa-envelope" aria-hidden="true"></i> info@landingpage.com</p>
          </div>
          <div class="col-6" style="text-align: right;">
            <h3>Heading</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi a unde iste harum quis veritatis laudantium tempora, error veniam, incidunt?</p>
            </ul>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-12">&copy; 2017 Brand - <a href="#">Facebook</a> - <a href="#">Twitter</a></div>
        </div>
    </footer>

    <script type="text/javascript">
            //IIFE
      (function () {
        "use strict";
        var menuId;
        function init () {
          menuId = document.getElementById("menu");
          document.addEventListener("scroll",scrollMenu,false);
        }
        function scrollMenu () {
          if (document.documentElement.scrollTop > 50) {
            menuId.classList.add("scroll");
            console.log('scroll');
          }
          else {
            menuId.classList.remove("scroll");
            console.log('no-scroll');
          }
        }
        document.addEventListener("DOMContentLoaded",init,false);
      })();

      (function (){
        "use strict";
        var mobBtn, topMenu;
        
        function init() {
          mobBtn = document.getElementById("mobile-btn");
        topMenu = document.getElementById("top-menu");
          mobBtn.addEventListener("click",mobileMenu,false);
        }
        
        function mobileMenu() {
          if(topMenu.classList.contains("mobile-open")) {
             topMenu.classList.remove("mobile-open");
             }else{
              topMenu.classList.add("mobile-open");
             }
          if (mobBtn.classList.contains("hamburger-cross")) {
            mobBtn.classList.remove("hamburger-cross");
          }
          else {
            mobBtn.classList.add("hamburger-cross");
          }
        }
        
        document.addEventListener("DOMContentLoaded",init);
        
      })();
    </script>
</body>