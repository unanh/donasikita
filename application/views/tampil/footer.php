<!-- FOOTER SECTION -->
  <div class="footer" data-background="images/footer/img-1920x900-3.jpg">
    <div class="content-wrap">
      <div class="container">
        
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="footer-item">
              <img src="images/footer/logo_w.png" alt="logo bottom" class="logo-bottom">
              <div class="spacer-30"></div>
              <p>Bantu saja merupakan salah satu website penghubung antar orang baik agar bisa tetap saling membantu disela kesibukan dimanapun dan kapanpun dengan sistem yang transparan laporan penggunaan yang jelas serta penyaluran bantuan diberikan secara penuh ( 100% ) tanpa biaya admin ( 0% ) dengan Retensi</p>
              <a href="#"><i class="fa fa-angle-right"></i> Selengkapnya</a>
            </div>
          </div>

          <div class="col-sm-3 col-md-3">
            <div class="footer-item">
              <div class="footer-title">
                SIAPA KITA
              </div>
              
              <div class="row">
                <div class="col-sm-6 col-md-6">
                  <ul class="list">
                    <li><a href="<?php echo base_url().'about'?>" title="About us">Tentang kami</a></li>
                    <li><a href="<?php echo base_url().'faq'?>" title="Faq">Faq</a></li>
                  </ul>
                </div>
                <div class="col-sm-6 col-md-6">
                  <ul class="list">
                    <li><a href="<?php echo base_url().'events'?>" title="Events">Events</a></li>
                    <li><a href="<?php echo base_url().'contact'?>" title="Contact Us">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-md-3">
            <div class="footer-item">
              <div class="footer-title">
                DIMANA BANTU SAJA  
              </div>
              <ul class="list-info">
                <li>
                  <div class="info-icon">
                    <span class="fa fa-map-marker"></span>
                  </div>
                  <div class="info-text">Wonosobo Jawa Tengah</div> </li>
                <li>
                  <div class="info-icon">
                    <span class="fa fa-phone"></span>
                  </div>
                  <div class="info-text">0852-8512-6000</div>
                </li>
                <li>
                  <div class="info-icon">
                    <span class="fa fa-envelope"></span>
                  </div>
                  <div class="info-text">info@bantusaja.com</div>
                </li>
                <li>
                  <div class="info-icon">
                    <span class="fa fa-clock-o"></span>
                  </div>
                  <div class="info-text">Senin - Sabtu 09:00 - 17:00</div>
                </li>
              </ul>

            </div>
          </div>
          
          <div class="col-sm-3 col-md-3">
            <div class="footer-item">
              <div class="footer-title">
                FOLLOW US
              </div>
              <p>Kunjungi akun sosial kami</p>
              <div class="sosmed-icon primary">
                <a href="#"><i class="fa fa-facebook"></i></a> 
                <a href="#"><i class="fa fa-twitter"></i></a> 
                <a href="#"><i class="fa fa-instagram"></i></a> 
                <a href="#"><i class="fa fa-youtube"></i></a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="fcopy">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <p class="ftex">Copyright 2019 &copy; <span class="color-primary">Bantusaja.com</span></p> 
          </div>
        </div>
      </div>
    </div>
    
  </div>
  
  <!-- JS VENDOR -->
  <script src="js/vendor/jquery.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/vendor/owl.carousel.js"></script>
  <script src="js/vendor/jquery.magnific-popup.min.js"></script>

  <!-- SENDMAIL -->
  <script src="js/vendor/validator.min.js"></script>
  <script src="js/vendor/form-scripts.js"></script>

  <script src="js/script.js"></script>

   <!-- Modal edit-->
  <script>
    $(document).ready(function(){
      $("#modaledit").click(function(){
        $("#myModal").modal();
      });
    });
  </script>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Profil</h4>
        </div>
        <div class="modal-body">
          syapek...!!!!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
        </div>
      </div>
    </div>
  </div>

    <!-- modal Galang dana  -->
  <script>
    $(document).ready(function(){
      $("#loginheader").click(function(){
        $("#myModalheader").modal();
      });
    });
  </script>

  <!-- Modal -->
  <div class="modal fade" id="myModalheader" role="dialog">
    <div class="modal-dialog">
      
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">NIATI NGIBADAH YA...HAHA</h4>
        </div>
        <div class="modal-body">

          <form method="post" action="<?php echo base_url().'profil'?>">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="username"  autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" 
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <button class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="#">Forgot Password?</a>
        </div>
        </div>
        <div class="modal-footer">

          
           <a href="#" class="btn btn-lg btn-primary" >Register</a>
        
         
        </div>
      </div>
    </div>
  </div>

</body>
</html>