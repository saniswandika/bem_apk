
<form class="forms-sample"  method="post" enctype ="multipart/formdata">
    <div class="modal fade" id= "modalcreate"tabindex="-1" role="dialog">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Pendaftaran BEM</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
              <div class="form-group mt-2">
                <label for="exampleInputName1 mt-2">NPM</label>
                <input type="text" name="npm" class="form-control" id="exampleInputName1" placeholder="Name">
                @error('npm ')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
              </div>

                <div class="form-group mt-2">
                    <label for="exampleInputName1 mt-2">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputName1" placeholder="Name">
                    @error('nama')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group mt-2">
                    <label for="exampleInputName1 mt-2">alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputName1" placeholder="Name">
                    @error('nama')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group mt-2">
                    <label for="exampleInputName1 mt-2">jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="exampleInputName1" placeholder="Name">
                    @error('jurusan')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                  </div>


               
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputFile">Masukan file kartu tanda mhs</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="kartu tanda mahasiswa"
                                        id="foto warna">
                                </div>
                            </div>

                        </div>

                  
                        <div class="card-body">

                          <div class="form-group">
                              <label for="exampleInputFile">Masukan surat pernyataan</label>
                              <div class="input-group">
                                  <input type="file" class="form-control" name="surat pernyataan"
                                      id="foto warna">
                              </div>
                          </div>

                      </div>

                 
               
                      <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputFile">Masukan foto baru</label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="foto warna"
                                    id="foto warna">
                            </div>
                        </div>

                    </div>
                 
            </div>
            <div class="modal-footer">
            
                    <button class="btn btn-primary save">Upload</button>
          
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </form>