document.addEventListener("DOMContentLoaded", function() {
    let request = new XMLHttpRequest();
    request.open('GET', './script.json', true);
    request.send();
    request.onreadystatechange = function() {
        if (request.readyState === 4 && request.status === 200) {
            let jsonData = JSON.parse(request.responseText);            console.log(JSON.stringify(jsonData));
        }
    };
});