<x-home-layout>
    <x-slot name="slot">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
           

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

    <section class="py-4">
      <div class="container"></div>
    </section>
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
    
            
            <div data-bs-spy="scroll" data-bs-target="#navbar-scroll-boo" data-bs-offset="0" class="scrollspy-example"
                tabindex="0">
      
            </div>
        </div>
    </x-slot>
</x-home-layout>

