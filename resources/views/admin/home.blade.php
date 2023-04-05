<x-app-layout>

  
</x-app-layout>
@extends('admin.includes.main')

@section('content')


<!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
              <h1>Welcome to admin panel</h1>
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{ $user->count() }}</h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Users</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{ $list->count() }}</h3>
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Property</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{ $qeury->count() }}</h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Query</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{ $contact->count() }}</h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Contact us</h6>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            
            <!-- partial -->
          </div>
@endsection