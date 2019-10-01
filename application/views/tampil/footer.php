</div>
</div>
<div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
<div class="ui inverted blue vertical footer segment">
        <div class="ui container">
          <div
            class="ui stackable inverted divided equal height stackable grid"
          >
            <div class="three wide column">
              <h4 class="ui inverted header">About</h4>
              <div class="ui inverted link list">
                <a class="item" href="#root">Sitemap</a>
                <a class="item" href="#root">Contact Us</a>
                <a class="item" href="#root">Religious Ceremonies</a>
                <a class="item" href="#root">Gazebo Plans</a>
              </div>
            </div>
            <div class="three wide column">
              <h4 class="ui inverted header">Services</h4>
              <div class="ui inverted link list">
                <a class="item" href="#root">Banana Pre-Order</a>
                <a class="item" href="#root">DNA FAQ</a>
                <a class="item" href="#root">How To Access</a>
                <a class="item" href="#root">Favorite X-Men</a>
              </div>
            </div>
            <div class="seven wide column">
              <h4 class="ui inverted header">Footer Header</h4>
              <p>
                Extra space for a call to action inside the footer that could
                help re-engage users.
              </p>
            </div>
          </div>
        </div>
      </div>
	</div>
  </div class="ui orange inverted segment column">
			<p align="center">Copyright &copy; 2019 . All rights reserved. </p>
		</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
    <script>
      $(document).ready(function() {
        // fix menu when passed
        $(".masthead").visibility({
          once: false,
          onBottomPassed: function() {
            $(".fixed.menu").transition("fade in");
          },
          onBottomPassedReverse: function() {
            $(".fixed.menu").transition("fade out");
          }
        });
        // create sidebar and attach to menu open
        $(".ui.sidebar").sidebar("attach events", ".toc.item");
      });
    </script>
  </body>
</html>