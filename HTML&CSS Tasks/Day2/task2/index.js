const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

setTimeout(function () {
    ctx.beginPath();
    ctx.moveTo(0, 0);
    ctx.lineTo(100, 100);
    ctx.lineWidth = 5;
    ctx.strokeStyle ='blue';
    ctx.stroke();
}, 1000);

setTimeout(function () {
    ctx.beginPath();
    ctx.moveTo(100, 100);
    ctx.lineTo(200, 200);
    ctx.lineWidth = 5;
    ctx.strokeStyle = 'blue';
    ctx.stroke();
}, 1600);

setTimeout(function () {
    ctx.beginPath();
    ctx.moveTo(200, 200);
    ctx.lineTo(300, 300);
    ctx.lineWidth = 5;
    ctx.strokeStyle = 'blue';
    ctx.stroke();
}, 2400);

setTimeout(function () {
    ctx.beginPath();
    ctx.moveTo(300, 300);
    ctx.lineTo(400, 400);
    ctx.lineWidth = 5;
    ctx.strokeStyle = 'blue';
    ctx.stroke();
}, 3000);


setTimeout(function () {
    ctx.beginPath();
    ctx.moveTo(400, 400);
    ctx.lineTo(500, 500);
    ctx.lineWidth = 5;
    ctx.strokeStyle = 'blue';
    ctx.stroke();
}, 3600);

setTimeout(function () {
    ctx.beginPath();
    ctx.moveTo(400, 400);
    ctx.lineTo(500, 500);
    ctx.lineWidth = 5;
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.beginPath();
    ctx.moveTo(300, 300);
    ctx.lineTo(400, 400);
    ctx.lineWidth = 5;
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.beginPath();
    ctx.moveTo(200, 200);
    ctx.lineTo(300, 300);
    ctx.lineWidth = 5;
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.beginPath();
    ctx.moveTo(100, 100);
    ctx.lineTo(200, 200);
    ctx.lineWidth = 5;
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.beginPath();
    ctx.moveTo(0, 0);
    ctx.lineTo(100, 100);
    ctx.lineWidth = 5;
    ctx.strokeStyle ='red';
    ctx.stroke();
    document.getElementById('canvas').style.borderColor ="blue";
}, 4200);
setTimeout(function () {
    alert("The end");
}, 4800);