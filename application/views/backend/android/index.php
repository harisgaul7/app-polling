<link rel="stylesheet" href="">
<style>
    @font-face {
        font-family: tulisan_keren;
        src: <?= base_url('assets/fonts/tes/Samantha.ttf') ?>;
    }
    h2{
        font-family: 'tulisan_keren';
        font-size: 70pt;
        font-variant: inherit;
    }
	.colorpicker-alpha {display:none !important;} .colorpicker{ min-width:128px !important;}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="card">
    			<div class="card-header">
                    <h4 class="float-left">Pengaturan Android</h4>
    			</div>
                

                <div class="card-body">
                    <form action="<?= base_url() ?>set/android" method="POST">
                    


                    <!-- PENGATURAN TANGGAL DAN JAM -->
                    
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5>Pengaturan Tanggal & Jam</h5>
                        <hr>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <label>Preview</label>
                            <h4 class="mt-3" id="preview-jam" style="font-family:<?= $jam['font_jam'] ?>;color:<?= $jam['color_jam'] ?>; "><?= date("h:i:s") ?></h4>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4 form-group"> 
                            <label> Gaya Tulisan </label>                           
                                <select id="font-jam" name="font_jam">
                                    <option value="<?= $jam['font_jam'] ?>">- Pilih Gaya Tulisan -</option>
                                    <option>Courier New</option>
                                    <option>Comic Sans</option>
                                    <option>Impact</option>
                                    <option>Verdana</option>
                                    <option>Garamond</option>
                                    <option>Bookman</option>
                                    <option>Candara</option>
                                </select>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label> Warna Tulisan </label>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input type="text" name="color_jam" id="color-jam" class="form-control" value="<?= $jam['color_jam'] ?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label>Size</label>
                                <input type="number" min="1" id="size-jam"  value="<?= $jam['size_jam'] ?>" name="size_jam" max="999" class="form-control">
                            </div>
                        </div>
                    </div>
                    




                    <!-- PENGATURAN JUDUL -->

                    <div class="row justify-content-center mt-5">
                        <div class="col-md-10">
                            <h5>Pengaturan Judul</h5>
                        <hr>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <label>Preview</label>
                            <h5 id="preview-judul" style="font-family: <?= $judul['font_judul'] ?>;"><?= $judul['isi_judul'] ?></h5>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Isi Tulisan</label>
                                <textarea name="isi_judul" id="isi-judul"  rows="2" placeholder="tulis disini" class="form-control"><?= $judul['isi_judul'] ?></textarea>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label >Gaya Tulisan</label>
                                <select name="font_judul" id="font-judul" name="andro_font">
                                    <option  value="<?= $judul['font_judul'] ?>">- Pilih Gaya Tulisan -</option>
                                    <option>Courier New</option>
                                    <option>Comic Sans</option>
                                    <option>Impact</option>
                                    <option>Verdana</option>
                                    <option>Garamond</option>
                                    <option>Bookman</option>
                                    <option>Candara</option>
                                </select>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Warna Tulisan </label>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input type="text" id="color-judul" name="color_judul" class="form-control" value="<?= $judul['color_judul'] ?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                            </div>
                        </div>
                        

                        <div class="col-md-1">
                            <div class="form-group">
                                <label>Size</label>
                                <input type="number" min="1" id="size-judul"  value="<?= $judul['size_judul'] ?>" name="size_judul" max="999" class="form-control">
                            </div>
                        </div>

                    </div>
    

                    <!-- PENGATURAN ALAMAT -->

                    <div class="row justify-content-center mt-5">
                        <div class="col-md-10">
                            <h5>Pengaturan Alamat</h5>
                        <hr>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <label>Preview</label>
                            <h5 id="preview-alamat" style="font-family: <?= $alamat['font_alamat'] ?>;"><?= $alamat['isi_alamat'] ?></h5>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Isi Tulisan</label>
                                <textarea name="isi_alamat"  rows="2" placeholder="tulis disini" class="form-control"><?= $alamat['isi_alamat'] ?></textarea>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label >Gaya Tulisan</label>
                                <select name="font_alamat" id="font-alamat" name="andro_font">
                                    <option value='<?= $alamat['font_alamat'] ?>'>- Pilih Gaya Tulisan -</option>
                                    <option>Courier New</option>
                                    <option>Comic Sans</option>
                                    <option>Impact</option>
                                    <option>Verdana</option>
                                    <option>Garamond</option>
                                    <option>Bookman</option>
                                    <option>Candara</option>
                                </select>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Warna Tulisan </label>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input type="text" id="color-alamat" name="color_alamat" class="form-control" value="<?= $alamat['color_alamat'] ?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                            </div>
                        </div>
                        

                        <div class="col-md-1">
                            <div class="form-group">
                                <label>Size</label>
                                <input type="number" min="1" id="size-alamat" value="<?= $alamat['size_alamat'] ?>" name="size_alamat" max="999" class="form-control">
                            </div>
                        </div>

                    </div>



                    <!-- PENGATURAN PERTANYAAN -->

                    <div class="row justify-content-center mt-5">
                        <div class="col-md-10">
                            <h5>Pengaturan Pertanyaan Atas dan Bawah</h5>
                        <hr>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <label>Preview</label>
                            <h5 id="preview-ptn" style="font-family: <?= $ptn['font_ptn'] ?>;"><?= $ptn['isi_ptn'] ?></h5>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Isi Tulisan</label>
                                <textarea name="isi_ptn"  rows="2" placeholder="tulis disini" class="form-control"><?= $ptn['isi_ptn'] ?></textarea>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label >Gaya Tulisan</label>
                                <select name="font_ptn" id="font-ptn" name="andro_font">
                                    <option value='<?= $ptn['font_ptn'] ?>'>- Pilih Gaya Tulisan -</option>
                                    <option>Courier New</option>
                                    <option>Comic Sans</option>
                                    <option>Impact</option>
                                    <option>Verdana</option>
                                    <option>Garamond</option>
                                    <option>Bookman</option>
                                    <option>Candara</option>
                                </select>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Warna Tulisan </label>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input type="text" id="color-ptn" name="color_ptn" class="form-control" value="<?= $ptn['color_ptn'] ?>;">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                            </div>
                        </div>
                        

                        <div class="col-md-1">
                            <div class="form-group">
                                <label>Size</label>
                                <input type="number" min="1" id="size-ptn" value="<?= $ptn['size_ptn'] ?>" name="size_ptn" max="999" class="form-control">
                            </div>
                        </div>

                    </div>




                    <!-- PENGATURAN PERTANYAAN BAWAH -->

                    <div class="row justify-content-center mt-5">
                        <div class="col-md-10 form-group">
                            <h5>Pengaturan Text Berjalan 

                                  
                                        <label class="ml-5">
                                            <input class="with-gap" name="status" type="radio" checked value='on'>
                                            <span>On</span>
                                        </label>
                                        <label>
                                            <input class="with-gap" name="status" type="radio"  value='off'>
                                            <span>Off</span>
                                        </label>
                            </h5>
                        <hr>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <label>Preview</label>
                            <h5 id="preview-text"  style="font-family: <?= $text['font_text'] ?>;"><?= $text['isi_text'] ?></h5>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Isi Tulisan</label>
                                <textarea name="isi_text"  rows="2" placeholder="tulis disini" class="form-control"><?= $text['isi_text'] ?></textarea>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label >Gaya Tulisan</label>
                                <select name="font_text" id="font-text" name="andro_font">
                                    <option value='<?= $text['font_text'] ?>'>- Pilih Gaya Tulisan -</option>
                                    <option>Courier New</option>
                                    <option>Comic Sans</option>
                                    <option>Impact</option>
                                    <option>Verdana</option>
                                    <option>Garamond</option>
                                    <option>Bookman</option>
                                    <option>Candara</option>
                                </select>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Warna Tulisan </label>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input type="text" name="color_text" id="color-text" class="form-control" value="<?= $text['color_text'] ?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                            </div>
                        </div>
                        

                        <div class="col-md-1">
                            <div class="form-group">
                                <label>Size</label>
                                <input type="number" min="1" id="size-text" value="<?= $text['size_text'] ?>" name="size_text" max="999" class="form-control">
                            </div>
                        </div>

                    </div>



                    <div class="row mt-4 justify-content-center">
                    <div class="col-md-10 text-right">
                        <button class="float-right btn btn-success btn-sm" type="submit" name="set">Simpan</button>
                    </div>
                    </div>
                    
                    </form>


                    </div>	
	            </div>
        </div>
    </div>
</div>
