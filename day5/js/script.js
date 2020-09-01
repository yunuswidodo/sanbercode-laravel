var items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'img/logitek.jpg'],
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'img/msi.jpg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'img/genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'img/jerry.jpg']
]

//---------------------------- function print items yang terfilter ----------------------------------------------
function printItems(array) {

    var output = ""
    for (var i = 0; i < array.length; i++) {
        output += `<div class="card  mr-4 mt-4" style="width: 18rem;">
        <img src="${array[i][4]}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title" id="itemName">${array[i][1]}</h5>
            <p class="card-text" id="itemDesc">${array[i][2]}</p>
            <p class="card-text">${array[i][3]}</p>
            <a href="#" class="btn btn-primary" id="addCart" onClick="addKeranjang()">Tambahkan ke keranjang</a>
        </div>
        </div>`

    }
    return output
}
//----------------------------------- end filter-------------------------------------------------------------------
//-------------------------------tapilkan data tanpa fiter---------------------------------------------------------

// var listBarang = document.getElementById("listBarang");
// var output = ""
// for (var i = 0; i < items.length; i++) {
//     output += `<div class="card  mr-4 mt-4" style="width: 18rem;">
//     <img src="${items[i][4]}" class="card-img-top" alt="...">
//     <div class="card-body">
//         <h5 class="card-title" id="itemName">${items[i][1]}</h5>
//         <p class="card-text" id="itemDesc">${items[i][2]}</p>
//         <p class="card-text">${items[i][3]}</p>
//         <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
//     </div>
//     </div>`
// 
// }
// ------------------------------------------end ------------------------------------------------------------------
var listBarang = document.getElementById("listBarang");
listBarang.innerHTML = printItems(items);

// realse 1
// -------------------------------------------- logic filter --------------------------------------------------------
function filter(keyword) {
    var filteredItems = [];
    for (var j = 0; j < items.length; j++) {
        var item = items[j];
        var cocok = item[1].toLowerCase().includes(keyword.toLowerCase()); // cocokan kata dengan function include dengan nilai default bolean || jika ada kata yang sesuai dengan yang sesuai dengan yang dicari tampilkna
        if (cocok) {
            // menampung sesuai di array pakai push     
            filteredItems.push(item);

        }
    }
    return filteredItems;
}
//-------------------------------------------------end-----------------------------------------------------------------

//------------------------------------------------ serach --------------------------------------------------------------
var formItem = document.getElementById("formItem");
formItem.addEventListener("submit", function (evt) { // name, anonim funt , param
    evt.preventDefault(); // tidak reload
    var keyword = document.getElementById("keyword").value
    // console.log(keyword);
    // hasil tampil terfilter
    var terfilter = filter(keyword); // panggil funtion filter
    document.getElementById("listBarang").innerHTML = printItems(terfilter);
})

//-------------------------------------------------- on key up -----------------------------------------------------------
// langsung muncul tanpa reload
// var inputKeyword = document.getElementById("keyword")

// inputKeyword.addEventListener("keyup", function (e) {
//     // console.log(e.target.value);
//     var kataKunci = e.target.value;
//     var terfilterItems = filter(kataKunci);
//     document.getElementById("listBarang").innerHTML = printItems(terfilterItems);
// })
//---------------------------------------------------- end key up -----------------------------------------------------------

// relase 2

count = 0;

function addKeranjang() {
    count += 1;
    var shoping = document.getElementsByTagName('button')[1];
    shoping.innerHTML = `<i class="fas fa-shopping-cart"></i> (${count})`
}