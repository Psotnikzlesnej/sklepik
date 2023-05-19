const rangeMin = document.querySelector('.range-min');
const rangeMax = document.querySelector('.range-max');
const inputMin = document.querySelector('.number-min');
const inputMax = document.querySelector('.number-max');

// var px = ((rangeMin.valueAsNumber - parseInt(rangeMin.min)) * off) - (myValue.clientWidth / 2) + (thumbWidth / 2);

rangeMin.addEventListener('input', (e)=>{
  const maxValue = +rangeMax.value;
  const minValue = +rangeMin.value;
  if(minValue >= maxValue ){
    rangeMin.value = maxValue - 1
  }
  inputMin.value = rangeMin.value
  updateProperties()
})
rangeMax.addEventListener('input', ()=>{
  const maxValue = +rangeMax.value;
  const minValue = +rangeMin.value;
  if(minValue >= maxValue){
    rangeMax.value = minValue + 1
  }
  inputMax.value = rangeMax.value
  updateProperties()
})
inputMin.addEventListener('input', ()=>{
  const maxValue = +inputMax.value;
  const minValue = +inputMin.value;
  if(minValue >= maxValue ){
    inputMin.value = maxValue - 1
  }
  rangeMin.value= inputMin.value
  updateProperties()
})
inputMax.addEventListener('input', ()=>{
  const maxValue = +inputMax.value;
  const minValue = +inputMin.value;
  if(minValue >= maxValue){
    inputMax.value = minValue + 1
  }
  rangeMax.value= inputMax.value
  updateProperties()
})

function updateProperties(){
  const maxValue = +rangeMax.value;
  const minValue = +rangeMin.value;
  const minWidth = ((minValue - 1)/(10-1)*210)
  const maxWidth = ((maxValue - 1) / (10 - 1)*210)
  document.documentElement.style.setProperty("--left", Math.floor(minWidth) + "px");
  document.documentElement.style.setProperty("--width", Math.floor(maxWidth-minWidth) + "px");
}