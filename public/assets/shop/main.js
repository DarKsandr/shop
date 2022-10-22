(function () {

    const search = document.getElementById("search");
    const searchList = document.getElementById("search-list");
    const searchForm = document.getElementById("search-form");

    const searchItems = async () => {
        if (search.value.length > 2) {
            const res = await ajaxPost("/search", {
                search: search.value,
            });
            if (res.ok) {
                const data = await res.json();
                console.log(data);
                if (data.items.length > 0) {
                    searchList.innerHTML = '';
                    data.items.forEach(item => {
                        const li = document.createElement('li');
                        li.innerHTML = item.name;
                        li.classList.add('search-item');
                        li.addEventListener('click', function(){
                            location.href = document.getElementById('route-product').value.replace("@id", item.id);
                        });
                        searchList.append(li);
                    })
                } else {
                    searchList.innerHTML = `<li>Not found</li>`;
                }
                showSearchList();
            }
        } else {
            hideSearchList();
            searchList.innerHTML = '';
        }
    };

    search.addEventListener("input", searchItems);
    searchForm.addEventListener("submit", searchItems);
    
    const showSearchList = () => {
        searchList.style.display = 'block';
    }
    const hideSearchList = async () => {
        searchList.style.display = 'none';
    }
    
    search.addEventListener('focus', function(){
        if(search.value != '' && searchList.innerHTML != ''){
            showSearchList();
        }
    });

    document.addEventListener('click', function(e){
        if(!e.path.includes(searchForm)){
            hideSearchList();
        }
    });

})();
