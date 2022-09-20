const sort = document.getElementById("sort");
const currentPage = document.getElementById("currentPage");

sort.addEventListener('change', getProducts);

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
    /* filter start */
    const formData = new FormData(document.getElementById("filter"));
    const params = new URLSearchParams(formData);
    searchParams.push(params.toString());
    /* filter end */
    //url change
    const searchParamsString = searchParams.join('&');
    window.history.replaceState('', '', location.origin + location.pathname + "?" + searchParamsString);
    //get
    document.getElementById("product_container").innerHTML = await ( await fetch(`/product_list?${searchParamsString}`) ).text();
}

document.querySelectorAll(".shop-view-type").forEach(item => {
    item.addEventListener('click', function(){
        Cookies.set("shop-view-type", item.dataset.bsTarget);
    });
})