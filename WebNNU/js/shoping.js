
let carts = document.querySelectorAll('.item');
let Arr_Name = [];
let Arr_Salary = [];
let Arr_img = [];
let Name;
let salary;
let img;
let k;
//store in array
for(k=0;k<carts.length;k++)
{
    Name = document.getElementsByClassName("clock-name")[k].innerHTML;
    Arr_Name.push(Name);
    salary = document.getElementsByClassName("sal")[k].innerHTML;
    Arr_Salary.push(parseFloat(salary));
    img = document.getElementsByClassName("image")[k].src;
    Arr_img.push(img);
}

// on click for any item
for(let i =0;i<carts.length;i++) {

    carts[i].addEventListener('click', ()=> {
        pass( Arr_Name[i],Arr_Salary[i],Arr_img[i] );
    })
}
// passing data to product html page
function pass(product_name,product_salary,product_url)
{
    localStorage.setItem('clock_Na',product_name);
    localStorage.setItem('clock_Salary',product_salary);
    localStorage.setItem('clock_img',product_url);
    window.location.href = 'Product.html';
}