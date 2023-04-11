
const colorElement = document.getElementById('jsColor');
let color = 0;
let i=1;
function changeColor() {
 
  color += i;
  if (color > 255 || color < 0) {
    i=-i;

  }
  
  const rgbColor = `rgb(${color}, 0, ${255 - color})`;
 
  colorElement.style.backgroundColor = rgbColor;
}


setInterval(changeColor, 10);

const button = document.getElementById('jsButton');

let Color='grey';

function changeColorButton() {
  

  
  if (Color=='blue'){
    Color = "red";
  }else{
    Color = "blue";
  }
  
  button.style.backgroundColor =Color;
}


button.addEventListener('click', function() {
  changeColorButton();
});