
    var searchResult = document.getElementById('serchResult');
    var searchInput = document.getElementById('searchInput');
    
    searchResult.style.display='none';
    searchInput.addEventListener('input', function () {
        var searchTerm = this.value;
        var xhr = new XMLHttpRequest();
        xhr.open('GET', searchRoute+'?searchInput=' + searchTerm, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.responseText);

                searchResult.innerHTML = '';

                if (data.length === 0) {
                    var cardHtml = `
                    <div class="">
                        <div>No results found</div>
                    </div>
                        `;
                    searchResult.style.display='block';
                    searchResult.innerHTML = cardHtml;
                } else {
                    data.forEach(function (Cource) {
                        let cor =Cource;
                        var cardHtml = `
                        <div class="result_item" >
                            <form action="${courcedetail}" method="GET" >
                        
                                    <input  name="cource" hidden value="${Cource.id}">
                                    <div class="d-flex">
                                     
                                    <button class="">${Cource.name}</button>
                                </div>
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
