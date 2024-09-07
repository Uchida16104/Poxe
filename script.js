/*
  This is your site JavaScript code!
*/

// Print a message in the browser's dev tools console each time the page loads
// Use your menus or right-click / control-click and choose "Inspect" > "Console"
console.log("Hello 🌎");

// ----- ADD ANY JS YOU LIKE HERE! -----


// ----- GLITCH STARTER PROJECT HELPER CODE -----

// Open file when the link in the preview is clicked
let goto = (file, line) => {
  window.parent.postMessage(
    { type: "glitch/go-to-line", payload: { filePath: file, line: line } }, "*"
  );
};
// Get the file opening button from its class name
const filer = document.querySelectorAll(".fileopener");
filer.forEach((f) => {
  f.onclick = () => { goto(f.dataset.file, f.dataset.line); };
});

window.onload = function() {
    const canvas = document.getElementById("scrollable");
    if (canvas.getContext) {
        const context = canvas.getContext("2d");
        let value = ['miter', 'bevel', 'round'];
        for(let i=0; i<value.length; i++) {
            context.beginPath();
            context.lineWidth = 20;
            context.lineJoin = value[i];
            context.moveTo(10, 10 + i * 40,);
            context.lineTo(100, 100 + i * 40,);
            context.lineTo(190, 10 + i * 40,);
            context.stroke();
        }
    }
};
