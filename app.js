document.addEventListener("DOMContentLoaded", function() {
    let request = new XMLHttpRequest();
    request.open('GET', './script.json', true);
    request.send();
    request.onreadystatechange = function() {
        if (request.readyState === 4 && request.status === 200) {
            let jsonData = JSON.parse(request.responseText);            
            console.log(JSON.stringify(jsonData, null , "\t"));
        }
    };
});
window.addEventListener("DOMContentLoaded", function() {
    fetch('./script.ts')
        .then(response => response.text())
        .then(tsCode => {
            const jsCode = ts.transpile(tsCode);
            const scriptElement = document.createElement('script');
            scriptElement.type = 'module';
            scriptElement.text = jsCode;
            document.body.appendChild(scriptElement);
        })
        .catch(error => console.error('Error loading TypeScript file:', error));
});
