function sersh_mobile(){
   
    search_input=document.getElementById('searchForm');
    inpurt=document.getElementById('searchInput');
    cont_resulrt=document.getElementById('serchResult');
        inpurt.value ='';
        search_input.classList.toggle('show');

        if( inpurt.value ===''){
            cont_resulrt.style.display ='none';
        }
       
}