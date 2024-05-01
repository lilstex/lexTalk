@extends('layouts.app')

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- Chat Design --}}
                <section style="background-color: #eee;">
                    <div class="container py-5">
                  
                      <div class="row d-flex justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                  
                          <div class="card" id="chat1" style="border-radius: 15px;">
                            <div
                              class="card-header d-flex justify-content-between align-items-center p-3 bg-info text-white border-bottom-0"
                              style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                              <i class="fas fa-angle-left"></i>
                              <p class="mb-0 fw-bold">Live chat</p>
                              <i class="fas fa-times"></i>
                            </div>
                            <div class="card-body">
                  
                              <div class="d-flex flex-row justify-content-start mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                  alt="avatar 1" style="width: 45px; height: 100%;">
                                <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                                  <p class="small mb-0">Hello and thank you for visiting MDBootstrap. Please click the video
                                    below.</p>
                                </div>
                              </div>
                  
                              <div class="d-flex flex-row justify-content-end mb-4">
                                <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
                                  <p class="small mb-0">Thank you, I really like your product.</p>
                                </div>
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                  alt="avatar 1" style="width: 45px; height: 100%;">
                              </div>
                  
                              <div class="d-flex flex-row justify-content-start mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                  alt="avatar 1" style="width: 45px; height: 100%;">
                                <div class="ms-3" style="border-radius: 15px;">
                                  <div class="bg-image">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/screenshot1.webp"
                                      style="border-radius: 15px;" alt="video">
                                    <a href="#!">
                                      <div class="mask"></div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                  
                              <div class="d-flex flex-row justify-content-start mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                  alt="avatar 1" style="width: 45px; height: 100%;">
                                <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                                  <p class="small mb-0">...</p>
                                </div>
                              </div>
                  
                              <div data-mdb-input-init class="form-outline">
                                <textarea class="form-control" id="textAreaExample" placeholder="Type your message" rows="4"></textarea>
                                <div class="mt-3 text-right">
                                    <button class="btn btn-info text-white sm">Send</button>
                                </div>
                              </div>
                  
                            </div>
                          </div>
                  
                        </div>
                      </div>
                  
                    </div>
                </section>
                {{-- Chat Design Ends --}}
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
  @vite('resources/js/app.js')
  <script type="module">
    Echo.channel('chat-room')
      .listen('MessageSent', (e) => {
        console.log(e.message);
    });
  </script>
@endsection