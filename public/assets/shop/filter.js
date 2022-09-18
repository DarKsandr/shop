const sort = document.getElementById("sort");
const currentPage = document.getElementById("currentPage");

sort.addEventListener('change', function(){
    getProducts();
})

function setPage(page){
    currentPage.value = page;
    getProducts();
}

async function getProducts(){
    const searchParams = [];
    //page
    searchParams.push(`page=${currentPage.value}`);
    //sort
    if(sort.value) searchParams.push(sort.value);
    //filter

    const searchParamsString = searchParams.join('&');
    window.history.replaceState('', '', location.origin + location.pathname + "?" + searchParamsString);
    //get
    document.getElementById("product_container").innerHTML = await ( await fetch(`/product_list?${searchParamsString}`) ).text();
}