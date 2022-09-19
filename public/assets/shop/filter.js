const sort = document.getElementById("sort");
const currentPage = document.getElementById("currentPage");

sort.addEventListener('change', getProducts);

function setPage(page){
    currentPage.value = page;
    getProducts();
}

document.querySelectorAll(".checkbox-filter").forEach(item => {
    item.addEventListener('change', getProducts);
});

async function getProducts(){
    const searchParams = [];
    //page
    searchParams.push(`page=${currentPage.value}`);
    //sort
    if(sort.value) searchParams.push(sort.value);
    /* filter start */
    //category
    document.querySelectorAll("input[type='checkbox'].category:checked").forEach(item => {
        searchParams.push(item.value);
    });
    //price
    searchParams.push(`price_min=${document.getElementById("price_min").value}&price_max=${document.getElementById("price_max").value}`);
    /* filter end */
    //url change
    const searchParamsString = searchParams.join('&');
    window.history.replaceState('', '', location.origin + location.pathname + "?" + searchParamsString);
    //get
    document.getElementById("product_container").innerHTML = await ( await fetch(`/product_list?${searchParamsString}`) ).text();
}

$(document).ready(function(){
    const slider = $( "#slider-range" );
    const price_min = $("#price_min");
    const price_max = $("#price_max");
    slider.slider({
      range: true,
      min: slider.data("min"),
      max: slider.data("max"),
      values: [ price_min.val(), price_max.val() ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        price_min.val(ui.values[ 0 ]);
        price_max.val(ui.values[ 1 ]);
      },
      change: getProducts,
    });
    $( "#amount" ).val( "$" + slider.slider( "values", 0 ) +
      " - $" + slider.slider( "values", 1 ) );

});