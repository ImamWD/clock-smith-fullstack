let clock_N = localStorage.getItem("clock_Na");
let clock_S = localStorage.getItem("clock_Salary");
let clock_I = localStorage.getItem("clock_img");

document.getElementById("clock-name").innerHTML = clock_N;
document.getElementById("price").innerHTML = clock_S;
document.getElementById("img-clock").src = clock_I ;
document.getElementById("total").innerHTML = clock_S;

let x=10;

function click_plus()
{
    if(parseInt(document.getElementById("input-number").value)<x && document.getElementById("input-number").value<10)
    document.getElementById("input-number").value  = parseInt( document.getElementById("input-number").value)+1;
}

function click_minus()
{
    if(parseInt(document.getElementById("input-number").value)>1)
        document.getElementById("input-number").value  = parseInt( document.getElementById("input-number").value)-1;
    else
        document.getElementById("input-number").value = 1;
}
function total()
{
    let price = parseFloat(document.getElementById("price").innerHTML);
    let tot =  parseFloat(document.getElementById("input-number").value)*price;
    document.getElementById("total").innerHTML =tot.toString();
}

document.getElementById("plus").addEventListener('click',click_plus);
document.getElementById("minus").addEventListener('click',click_minus);
document.getElementById("plus").addEventListener('click',total);
document.getElementById("minus").addEventListener('click',total);
