{{-- Elizer Engana & Isaac Manguerra --}}
@extends('layouts.app')

@section('title', 'Forum')

@section('content')

{{-- <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
      data-bs-theme="dark">
      <div class="container">
          <a class="navbar-brand fw-light" href="/"><span class="fas fa-brain me-1"> </span>Ideas</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/login">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/register">Register</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/profile">Profile</a>
                  </li>
              </ul>
          </div>
      </div>
</nav> --}}
  
<div class="container py-4">
      <div class="row">
          <div class="col-3">
              <div class="card overflow-hidden">
                  <div class="card-body pt-3">
                      <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                          <li class="nav-item">
                              <a class="nav-link text-dark" href="#">
                                  <span>Home</span></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">
                                  <span>Settings</span></a>
                          </li>
                      </ul>
                  </div>
                  <div class="card-footer text-center py-2">
                      <a class="btn btn-link btn-sm" href="forum-profile.blade.php">View Profile</a>
                  </div>
              </div>
          </div>
          <div class="col-6">
              {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Posted
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div> --}}
              <div class="row">
                <div class="mb-3">
                  <div class="card">
                      <div class="card-body">
                          <input placeholder="search something...
                          " class="form-control w-100" type="text"
                              id="search">
                          <button class="btn btn-danger mt-2"> Search</button>
                      </div>
                  </div>
                </div>
              
                  <div class="mb-3">
                      <textarea class="form-control" id="idea" rows="3"></textarea>
                  </div>
                  <div class="">
                      <button class="btn btn-danger"> add post </button>
                  </div>
              </div>
              <hr>
              <div class="mt-3">
                  <div class="card">
                      <div class="px-3 pt-4 pb-2">
                          <div class="d-flex align-items-center justify-content-between">
                              <div class="d-flex align-items-center">
                                  <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                      src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                                  <div>
                                      <h4 class="mb-0"><a href="#">Elizer
                                          </a></h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <p class="fs-6 fw-light text-muted">
                              Paano po ba kumuha ng lisensya?
                          </p>
                          <div class="d-flex justify-content-between">
                              <div>
                                  <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                                      </span> 100 </a>
                              </div>
                              <div>
                                  <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                                      3-5-2023 </span>
                              </div>
                          </div>
                          <div>
                              <div class="mb-3">
                                  <textarea class="fs-6 form-control" rows="1"></textarea>
                              </div>
                              <div>
                                  <button class="btn btn-danger btn-sm"> Post Comment </button>
                              </div>

                              <hr>
                              <div class="d-flex align-items-start">
                                  <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                                      src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi"
                                      alt="Luigi Avatar">
                                  <div class="w-100"> 
                                      <div class="d-flex justify-content-between">
                                          <h4 class="">Luigi
                                          </h6>
                                          <small class="fs-6 fw-light text-muted">3 hours ago</small>
                                      </div>
                                      <p class="fs-6 mt-3 fw-light">
                                         punta ka lang LTO 
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
 </div>



@endsection
