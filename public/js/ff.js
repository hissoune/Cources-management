
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
                                     
                                    <button class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 24" id="search"><path d="M3.624,15a8.03,8.03,0,0,0,10.619.659l5.318,5.318a1,1,0,0,0,1.414-1.414l-5.318-5.318A8.04,8.04,0,0,0,3.624,3.624,8.042,8.042,0,0,0,3.624,15Zm1.414-9.96a6.043,6.043,0,1,1-1.77,4.274A6,6,0,0,1,5.038,5.038Z"></path></svg>${Cource.name}</button>
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
