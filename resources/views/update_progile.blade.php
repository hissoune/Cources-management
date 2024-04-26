<x-home-layout>
<x-slot name="slot">

    <div class="container rounded bg-white  update_form">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="/storage/{{ $user->image }}" width="90"><span class="font-weight-bold">{{ $user->name  }}</span><span class="text-black-50">{{ $user->email  }}</span></div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        
                        <h6 class="text-right">Edit Profile</h6>
                    </div>
                    <form action="{{ route('user_update',$user) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                    <div class="row mt-2">
                        <div class="col-md-6"><input type="text" name="name" class="form-control" value="{{ $user->name  }}" placeholder="Doe"></div>
                        <div class="col-md-6"><input type="email" readonly name="email" class="form-control" placeholder="Email" value="{{ $user->email  }}"></div>
                        <div class="col-md-6"><input type="text" hidden name="image"  p value="{{ $user->image  }}"></div>

                    </div>
                   
                    <div class="row mt-3 border">
                        <label for="imageInput" class="custom-file-upload text-dark ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-upload mb-2" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"/>
                              </svg> Choose Image
                        </label>
                        <div class="col-md-6"><input type="file" name="image"  class="text-dark"></div>
                    </div>
                    
                    <div class="mt-5 text-right"><button class="update_profile mb-4 text-center mx-3" type="submit">Save Profile</button></div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-slot>
</x-home-layout>