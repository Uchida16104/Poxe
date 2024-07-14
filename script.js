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