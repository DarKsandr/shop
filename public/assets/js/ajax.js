async function ajaxPost(url, data){
    return await fetch(url, {
        method: "POST",
        credentials: "same-origin",
        body: JSON.stringify(data),
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": document.querySelector('input[name="_token"]').value,
        },
    });
}