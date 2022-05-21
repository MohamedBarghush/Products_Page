function EnableEditForm () {
    // Move the the AddProducts page
    window.location.href = "https://mbproductspage.000webhostapp.com/add-product.php";
}

// function MassDelete () {
//     // Delete object from page and from database
    
// }

function CancelAdd () {
    window.location.href = "https://mbproductspage.000webhostapp.com/";
}

function Save (object) {
    object.preventDefault();
}

document.getElementById("delete-product-btn").addEventListener("click", function () {
    var attribute = "";
    Array.from(document.getElementsByClassName("grid-item")).forEach((element) => {
        if (element.children[0].checked) {
            attribute += element.getAttribute("db_id");
            attribute += "-";
        }
    })
    window.location.replace("delete.php?mass-delete="+attribute);
});

if(document.getElementById("productType") != null) {
var typeSwitcher = document.getElementById("productType");
var dvdForm = document.getElementById("dvdForm");
var furnitureForm = document.getElementById("furnitureForm");
var bookForm = document.getElementById("bookForm");
var discription = document.getElementById("discription");
var type = "";
var content = "";
typeSwitcher.addEventListener("change", function() {
    if (typeSwitcher.value == "DVD") {
        dvdForm.style.display = "block";
        furnitureForm.style.display = "none";
        bookForm.style.display = "none";
    } else if (typeSwitcher.value == "Furniture") {
        dvdForm.style.display = "none";
        furnitureForm.style.display = "block";
        bookForm.style.display = "none";
    } else if (typeSwitcher.value == "Book") {
        dvdForm.style.display = "none";
        furnitureForm.style.display = "none";
        bookForm.style.display = "block";
    } else {
        dvdForm.style.display = "none";
        furnitureForm.style.display = "none";
        bookForm.style.display = "none";
    }
    discription.innerText = ``;
});

var inputFields = document.getElementsByClassName("op");
for (var element of inputFields) {
    element.addEventListener("input", function () {
        if (typeSwitcher.value == "DVD") {
            type = "DVD";
            content = `size of: ${document.getElementById("size").value} MB`;
        } else if (typeSwitcher.value == "Furniture") {
            type = "Furniture";
            content = `dimensions of: ${form1.width.value}x${form1.height.value}x${form1.length.value}`;
        } else if (typeSwitcher.value == "Book") {
            type = "Book";
            content = `weight of: ${document.getElementById("weight").value} KG`;
        } else {
            type = "";
            content = ``;
        }
        discription.innerHTML = `You will add a product with the type of: ${type}, with the ${content}`;
    });
}
}

function validate(object) {
    object.preventDefault();
    if (document.form1.sku.value == '') {
        alert('Please provide unique sku');
        document.form1.sku.focus();				
        return false;
    }
    if (document.form1.name.value == '') {
        alert('Please provide a name');
        document.form1.name.focus();
        return false;
    }
    if (document.form1.price.value == '') {
        alert('Please provide a price');
        document.form1.price.focus();				
        return false;
    }
    return true;
}