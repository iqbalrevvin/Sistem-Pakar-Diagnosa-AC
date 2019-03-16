<?php
  $dataNama   = isset($_POST['Txt_Nama']) ? $_POST['Txt_Nama'] : '';
  $dataAlamat = isset($_POST['Txt_Alamat']) ? $_POST['Txt_Alamat'] : '';
  $dataJenkel = isset($_POST['Cmb_Jenkel']) ? $_POST['Cmb_Jenkel'] : '';
?>

                <div class="col s12 m12 20">
                  <div class="card-panel">
                    <h4>Pendaftaran Data Pelanggan</h4>
                    <div class="row">
                      <form class="col s12" method="post" action="index.php?menus=Daftar_Pasien">
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="text" class="validate" name="Txt_Nama" value="<?php echo $dataNama?>"/>
                            <label>Nama Pelanggan</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                              <select name="Cmb_Jenkel">
                                <option value="#">- Pilih Jenis Kelamin -</option>
                                <?php
                                  $Pilihan = array("Laki-Laki","Perempuan");
                                  foreach($Pilihan as $Kelamin){
                                    if($dataJenkel == $Kelamin){
                                      $cek = "selected";
                                    }else{
                                      $cek = "";
                                    }
                                    echo "<option value='".$Kelamin."' ".$cek.">".$Kelamin."</option>";
                                  }
                                ?>
                              </select>
                              <label>Jenis Kelamin</label>
                            </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <textarea class="materialize-textarea validate" length="320" name="Txt_Alamat"><?php echo $dataAlamat?></textarea>
                            <label>Alamat</label>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit">Diagnosis Kerusakan<i class="mdi-content-send right"></i></button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>