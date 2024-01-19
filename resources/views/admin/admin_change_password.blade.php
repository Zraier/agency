@extends('admin.admin_dashboard')
@section('admin')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <div class="page-content">

    <div class="row profile-body">
      <!-- left wrapper start -->
      
      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="d-none d-md-block col-md-4 col-xl-6 left-wrapper">
        <div class="row">
          <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
    
                  <h6 class="card-title">Update Password</h6>
                  <form class="forms-sample" method="POST" action="{{ route('admin.change.password') }}">
                    @csrf
                      <div class="mb-3">
                          <label for="Current Password" class="form-label">Current Password</label>
                          <input type="text" class="form-control" name="current_password" id="current_password"  autocomplete="off">
                      </div>
                      <div class="mb-3">
                        <label for="eNew Password" class="form-label">New Password</label>
                        <input type="text" class="form-control" name="password" id="password"  autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="Confirme Password" class="form-label">Confirme Password</label>
                        <input type="text" class="form-control" name="password_confirmation" id="password_confirmation"  autocomplete="off">
                    </div>
                     
                      
                      <button type="submit" class="btn btn-primary me-2">Save Update</button>

                  </form>
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  


@endsection