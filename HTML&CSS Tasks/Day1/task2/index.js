function task2(){
    let red = document.getElementById("red-bar").value;
    let green = document.getElementById("green-bar").value;
    let blue = document.getElementById("blue-bar").value;
    let color = 'rgb(' + red + ',' + green + ',' + blue + ')';
    document.getElementById("test-color").style.color = color;
}


document.getElementById("red-bar").addEventListener('input',task2);

document.getElementById("green-bar").addEventListener('input',task2);

document.getElementById("blue-bar").addEventListener('input',task2);