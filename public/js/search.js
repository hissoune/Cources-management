document.addEventListener("DOMContentLoaded", function () {
    var searchResult = document.getElementById('serchResult');
    var searchInput = document.getElementById('searchInput');
    searchResult.style.display='none';
    searchInput.addEventListener('input', function () {
        var searchTerm = this.value;
       console.log(searchTerm);
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