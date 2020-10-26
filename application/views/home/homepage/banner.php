 
    <script>
        $(document).ready(function (){
            $("#click").click(function (){
              // $("html, body").animate({ scrollTop: 700 }, "medium");
              $('html, body').animate({
                scrollTop: ($('#about').offset().top-60)
              }, 500);
              return false;
            });
        });
    </script>
<!-- banner section BEGIN -->

<div class="navbar-inverse_new"></div>

    <section class="banner" id="home">

    
      <div class="overlay"></div>

      <div class="banner-content">

        <div class="tree-group1">
          <svg width="150px" height="150px" class="svg-tree0">
            <g id="tree" class="tree3">
              <image xlink:href="<? base_url()?>assets/images/tree3.png" x="0" y="0" height="150px" width="150px"/>         
            </g>
          </svg>
           <svg width="387px" height="317px" class="svg-tree">
            <g id="tree" class="tree">
              <image xlink:href="<? base_url()?>assets/images/tree.png" x="0" y="0" height="387px" width="317px"/>         
            </g>
          </svg>
          <svg width="80px" height="80px" class="svg-tree2">
            <g id="tree" class="tree">
              <image xlink:href="<? base_url()?>assets/images/tree2.png" x="0" y="0" height="80px" width="80px"/>         
            </g>
          </svg>
          <svg width="111px" height="61px" class="svg-root">
            <g>
              <image xlink:href="<? base_url()?>assets/images/root.png" x="0" y="0" height="61px" width="111px"/>         
            </g>
          </svg>
          <svg width="100px" height="100px" class="svg-tree6">
            <g id="tree" class="tree4">
              <image xlink:href="<? base_url()?>assets/images/tree3.png" x="0" y="0" height="100px" width="100px"/>         
            </g>
          </svg>
          <svg width="150px" height="150px" class="svg-tree3">
            <g id="tree" class="tree2">
              <image xlink:href="<? base_url()?>assets/images/tree3.png" x="0" y="0" height="150px" width="150px"/>         
            </g>
          </svg>

          <svg width="200px" height="200px" class="svg-tree4">
            <g id="tree" class="tree3">
              <image xlink:href="<? base_url()?>assets/images/tree4.png" x="0" y="0" height="200px" width="200px"/>         
            </g>
          </svg>

           <svg width="100px" height="100px" class="svg-tree5">
            <g id="tree" class="tree4">
              <image xlink:href="<? base_url()?>assets/images/tree3.png" x="0" y="0" height="100px" width="100px"/>         
            </g>
          </svg>
        </div>

       
        <div class="car-frame">
          <div class="car"></div>
          <div class="car2"></div>
          <div style="clear:both"></div>
        </div>

        <div class="">
          <div class="tooltip tooltip-west">
            <span class="tooltip-item"></span>
            <span class="tooltip-content">
                <div class="welcome-eyes-left"></div>
                <div class="welcome-eyes-right"></div>
                <div class="welcome-mouth"></div>
                <div class="welcome-eyebrow-left"></div>
                <div class="welcome-eyebrow-right"></div>
              <div class="face_inhouse"></div>
              Welcome to my house :) <br> <button id="click" class="button_inhouse">Come In</button></span>
          </div>
        </div>
        
        

      </div><!-- /.banner-content -->


       
    </section><!-- /.banner -->
    
    <!-- banner section END -->