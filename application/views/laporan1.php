<div class="ui stackable grid segment container">
  <div class="sixteen wide column grid">
    <div class="ui secondary pointing menu">
      <a class="active item">
        Profil
      </a>
      <a href="<?php echo base_url().'editprofil'?>" class="item">
        Edit profil
      </a>
      <a href="<?php echo base_url().'notifikasi'?>" class="item">
        Notifikasi
      </a>
      <div class="right menu">
        <a class="ui item">
          Logout
        </a>
      </div>
    </div>
    <div class="ui segment ">
      <p>
        <!-- foto profi -->
        <div class="six wide column">
          <div class="ui link cards">
            <div class="card">
              <div class="image">
                <img src="./semantic/images/fotopenggalang/kecelakaan.jpeg">
              </div>
              <div class="content">
                <div class="header">[nama profil]</div>
              </div>

              <div>
                <h3>
                  <table>
                    <tr>
                      <td colspan="" rowspan="" headers="">Username</td>
                      <td>:</td>
                      <td>
                        [username]
                      </td>
                    </tr>
                    <tr>
                      <td colspan="" rowspan="" headers="">Password</td>
                      <td>:</td>
                      <td>
                        [Password]
                      </td>
                    </tr>
                    <tr>
                      <td colspan="" rowspan="" headers="">E-mail/No.Hp</td>
                      <td>:</td>
                      <td>
                        [email/No.HP]
                      </td>
                    </tr>
                    <tr>
                      <td colspan="" rowspan="" headers="">Nomor Rekening</td>
                      <td>:</td>
                      <td>
                        [no Rekening]
                      </td>
                    </tr>
                    <tr>
                      <td colspan="" rowspan="" headers="">Moto hidup</td>
                      <td>:</td>
                      <td>
                        [tampil moto hidup]
                      </td>
                    </tr>
                  </table>
                </h3>
              </div>
              <div class="extra content">
                <span class="right floated">
                  Joined in 2019
                </span>
                <span>
                  <i class="upload icon"></i>
                  Foto profil
                </span>
              </div>
            </div>





            <div class="ten wide column">
              <form class="ui large form">
                <div class="ui stacked segment">
                  <div class="field">
                    <div class="ui left icon input">
                      <i class="calendar alternate outline icon"></i>
                      <input type="date" name="pencairan" placeholder="Tanggal kebutuhan">
                    </div>
                  </div>
                  <div class="field">
                    <div class="ui left icon input">
                      <i class="file alternate outline icon"></i>
                      <input type="text" name="nama" placeholder="Pengguna">
                    </div>
                  </div>
                  <div class="field">
                    <div class="ui left icon input">
                      <i class="money icon"></i>
                      <input type="number" name="nominal" placeholder="Nominal kebutuhan">
                    </div>
                  </div>
                  <div class="field">
                    <div class="ui left icon input">
                      <i class="pencil alternate icon"></i>
                      <textarea name="deskripsi" placeholder="keterangan"></textarea>
                    </div>
                  </div>
                  <div class="field">
                    <div class="ui left icon input">
                      <i class="upload icon"></i>
                      <input type="file" name="doc" placeholder="upload dokumen">Dokumen
                    </div>
                  </div>
                  <div class="field">
                    <div class="ui left icon input">
                      <i class="upload icon"></i>
                      <input type="file" name="doc" placeholder="upload dokumen">Dokumen
                    </div>
                  </div>
                  <a href="<?php echo base_url().'detail' ?>" title="">
                    <div class="ui fluid large teal submit button">Ajukan</div>
                  </a>
                </div>

                <div class="ui error message"></div>

              </form>

            </div>




          </div>
      </p>
    </div>

    <div class="ui segment">
    <h3><p align="center">Laporan status</p></h3>
        
       
          
          
              <table class="ui padded celled right aligned table"> 
                <tr align="center">
                  <td width="50px">No</td>
                  <td width="60px">Tanggal  </td>
                  <td width="80px">dana masuk</td>
                  <td width="80px">dana keluar  </td>
                  <td width="150px">pengguna</td>
                  <td width="200px">dokumen foto</td>
                  <td width="90px">keterangan  </td>
                </tr>
                  <tr>
                  <td>No</td>
                  <td>date  </td>
                  <td>Rp.</td>
                  <td>Rp.</td>
                  <td>nama</td>
                  <td>foto</td>
                  <td>keterangan  </td>
                </tr>
                
              </table>
           
          
        
    </div>
  </div>
</div>


<style type="text/css" media="screen">
  .fotoprofil {
    width: 100px;
    height: 200px;
  }
</style>