
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet"  href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
   
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style_corona.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/sass/app.scss') }}">   
    <!-- End layout styles -->
    <link rel="shortcut icon"  src="{{ asset('images/download.png') }}" />
  </head>
  <body>
    @include('sweetalert::alert')
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-6 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Register</h3>
                 
<form action="{{ route('regis.store') }}" method="POST" enctype="multipart/form-data">
  @csrf

   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>NPM</strong>
              <input type="text" name="npm" class="form-control" placeholder="Post Title">
             @error('npm')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
             @enderror
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama </strong>
            <input type="text" name="nama" class="form-control" placeholder="Post Title">
           @error('nama')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
           @enderror
        </div>
        
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Jurusan </strong>
              <input type="text" class="form-control" name="jurusan" placeholder="jurusan">
              @error('jurusan')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat </strong>
                <input type="text" class="form-control"  name="alamat" placeholder="alamat">
                @error('alamat')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Fakultas </strong>
                  <input type="text" class="form-control"  name="fakultas" placeholder="fakultas">
                  @error('fakultas')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
              </div>
      </div>        
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Kartu Tanda Mahasiswa </strong>
               <input type="file" name="image" class="form-control" placeholder="Post Title">
              @error('image')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
             @enderror
          </div>
      </div>
      <a href="/"><button type="button" class="btn btn-secondary">Close</button></a>
      <button type="submit" class="btn btn-primary ml-3">Submit</button>
  </div>
 
</form>
                {{-- <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectGender">Gender</label>
                    <select class="form-control" id="exampleSelectGender">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCity1">City</label>
                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Textarea</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>
                </form> --}}
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
<!-- plugins:js -->
<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../../assets/js/off-canvas.js"></script>
<script src="../../assets/js/hoverable-collapse.js"></script>
<script src="../../assets/js/misc.js"></script>
<script src="../../assets/js/settings.js"></script>
<script src="../../assets/js/todolist.js"></script>
<!-- endinject -->
  </body>
</html>