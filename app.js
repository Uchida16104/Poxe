document.addEventListener("DOMContentLoaded", function() {
    let request = new XMLHttpRequest();
    request.open('GET', './script.json', true);
    request.send();
    request.onreadystatechange = function() {
        if (request.readyState === 4 && request.status === 200) {
            let jsonData = JSON.parse(request.responseText);
            let html = `
                <p>Published date: ${jsonData.datePublished}</p>
                <p>Website: <a href="${jsonData.mainEntityOfPage}" target="_blank">${jsonData.mainEntityOfPage}</a></p>
            `;            document.getElementById('content').innerHTML = html;
        }
    };
});