// JavaScript code
function search_animal() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('animals');
    let u = document.getElementsByClassName('gorod');
    let a = document.getElementsByClassName('krovi');
    let b = document.getElementsByClassName('der');
    let c = document.getElementsByClassName('sendra');
    let d = document.getElementsByClassName('zetsubo');
    let e = document.getElementsByClassName('revelation');
    let g = document.getElementsByClassName('monn');
    let k = document.getElementsByClassName('nuketon');

      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
            u[i].style.display="none";
            a[i].style.display="none";
            b[i].style.display="none";
            c[i].style.display="none";
            d[i].style.display="none";
            e[i].style.display="none";
            g[i].style.display="none";
            k[i].style.display="none";
        }
        else {
            x[i].style.display="table-cell";    
            u[i].style.display="table-cell";
            a[i].style.display="table-cell";    
            b[i].style.display="table-cell"; 
            c[i].style.display="table-cell";    
            d[i].style.display="table-cell"; 
            e[i].style.display="table-cell";    
            g[i].style.display="table-cell"; 
            k[i].style.display="table-cell";          
        }
    }
}
