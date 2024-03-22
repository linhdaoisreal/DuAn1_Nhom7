document.addEventListener('DOMContentLoaded', function(){
    const searchIcon = document.getElementById('search_icon');
    const searchForm = document.getElementById('search_form');
    const searchInput = searchForm.querySelector('input');

    searchIcon.addEventListener('click', function (){
        if(searchInput.classList.contains('hidden')){
            searchInput.classList.remove('hidden');
        }else{
            searchInput.classList.add('hidden');
        }
    });

    // Click out
    document.addEventListener('click', function(event){
        if(event.target != searchIcon && !searchForm.contains(event.target)){
            searchInput.classList.add('hidden');
        }
    });
});