
<form class="forms-sample" method="post" enctype ="multipart/formdata">
    
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
                    <label for="exampleInputName1 mt-2">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                  </div>
                  <div class="form-group mt-2">
                    <label for="exampleInputEmail3 mt-2">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                  </div>
                  <div class="form-group mt-2">
                    <label for="exampleInputPassword4 mt-2">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                  </div>
                  <div class="form-group mt-2">
                    <label for="exampleSelectGender mt-2">Gender</label>
                    <select class="form-control" id="exampleSelectGender">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                  <div class="form-group mt-2">
                    <label>File upload</label>
                    <input type="file" name="img[]" class="file-upload-default" >
                    <div class="input-group col-xs-12 mt-2">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                  </div>
                  <div class="form-group mt-2">
                    <label for="exampleInputCity1 mt-2">City</label>
                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                  </div>
                  <div class="form-group mt-2">
                    <label for="exampleTextarea1 mt-1">Textarea</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                  </div>
                 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </form>