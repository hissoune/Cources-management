<x-home-layout>
    <x-slot name="slot">
           

        <div class="container d-flex-justify-content-center w-50 my-5">
        <form action="{{ route('search') }}" method="GET" id="searchForm" onsubmit="return false;">
            <div class="form-group">
            <h3 for="searchInput" class="form-label text-light text-center ">Search for cource</h3>
            <input class="text-white w-100 p-1 rounded border" name="searchInput" id="searchInput" placeholder="Type to search..." style="color: black; border:white;background-color: transparent;">
        </div>
        </form>
        <div class="d-flex-justify-content-center bg-light rounded-b p-2" id="serchResult">

        </div>
    </div>

   
    <script>
        
        document.addEventListener("DOMContentLoaded", function () {
            var searchResult = document.getElementById('serchResult');
            var searchInput = document.getElementById('searchInput');
            searchResult.style.display='none';
            searchInput.addEventListener('input', function () {
                var searchTerm = this.value;
               
                var xhr = new XMLHttpRequest();
                xhr.open('GET', '{{ route("search") }}?searchInput=' + searchTerm, true);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        var data = JSON.parse(xhr.responseText);
    
                        searchResult.innerHTML = '';
    
                        if (data.length === 0) {
                            var cardHtml = `
                            <div class="bg-light border border-secondary shadow rounded p-3">
                                <div>No results found</div>
                            </div>

                                `;
                            searchResult.style.display='block';
                            searchResult.innerHTML = cardHtml;
                        } else {
                            data.forEach(function (Cource) {
                                let cor =Cource;
                                var cardHtml = `
                                <div class="rounded border border-secondary d-flex flex-column justify-content-center border-2 p-1">
                                    
                                    <form action="{{ route('search_details') }}" method="GET" >
                                
                                            <input  name="cource" hidden value="${Cource.id}">
                                            <button class="border-0 text-primary">${Cource.name}</button>
                                    </form>
                                </div>

                                `;
                                searchResult.style.display='block';
                                searchResult.innerHTML += cardHtml;
                                
                            });
                           
                        }
                        if(searchTerm == ""){
                            searchResult.innerHTML = "";
                            searchResult.style.display='none';
                        }
                    }
                };
                xhr.send();
            });
        });
    </script>
   
            
                <section>
                    <div class="container">
                    <div class=" latest_cources">
                        <h1 class="mb-5">latest Corces</h1>
                <div class="teachers-grid">
                    @foreach($cources as $cor)
                        <div class="teacher-card">
                            <div class="img-container">
                                <img src="/storage/{{ $cor->image }}" alt="teacher image">
                            </div>
                            <div class="card-body">
                                <p>{{ $cor->name }}</p>
                                <hr>
                                <p>{{ $cor->date }}</p>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <p><strong>S </strong>{{ $cor->start_time}}</p>
                                    <p><strong>E </strong>{{ $cor->end_time}}</p>
                                </div>
                            
                                <div class="button-group">
                                    <form action="{{ route('cource_details',$cor) }}" method="get">
                                        <button type="submit" class="btn btn-see-profile">See details</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                </div>
                </div>
                </section>
           <section>
            <div class="container">
            <div class=" latest_cources">
                <h1 class="mb-5">populer filliers</h1>
                <div class=" my-5">
                    @foreach($filliers as $fillier)
                        <div class="">
                          <a href="{{ route('fillter_fillier', $fillier) }}" >
                            <div class="card mx-auto my-3">
                                <div class="card-body row">
                                    <div class="col-sm-6">
                                        <h5 class="card-title">{{ $fillier->name }}</h5>
                                        <p class="card-text">{{ $fillier->description }}</p>
                                        <p class="card-text">{{ $fillier->Coureces->count() }} Courses</p>
                                    </div>
                                    <div class="col-sm-6">
                                        @foreach($fillier->Coureces as $course)
                                            <img width="50" src="/storage/{{ $course->image }}" alt="course image">
                                        @endforeach
                                    </div>
                                </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                         </div>
                 </section>
                 <section>
                           <div class="container">
                        <div class=" latest_cources">
                            <h1 class="mb-5">populer filliers</h1>
                        <div class="teachers-grid">
                            @foreach($Teachers as $Teacher)
                                
                                    <div class="famus_teachers">
                                        <img src="/storage/{{ $Teacher->image }}" alt="teacher image">
                                       <a href="{{ route('teacheres_profile', $Teacher) }}"><h4>{{ $Teacher->name }}</h4></a> 
                                       <h6>+{{ $Teacher->followers->count() }} follower</h6>
                                    </div>
                                    {{-- <div class="card-body">
                                        <p>{{ $Teacher->name }}</p>
                                        <hr>
                                        <p>{{ $Teacher->email }}</p>
                                        <hr>
                                        <p>{{ $Teacher->Coureces->count() }} Courses</p>
                                        <div class="button-group">
                                            <button type="button" class="btn btn-follow">+ Follow</button>
                                            <form action="{{ route('teacheres_profile', $Teacher) }}" method="get">
                                                <button type="submit" class="btn btn-see-profile">See Profile</button>
                                            </form>
                                        </div>
                                    </div>
                                --}}
                            @endforeach
                        </div>
                        </div>
                        </div>
                </section>


                              
    </x-slot>
</x-home-layout>

