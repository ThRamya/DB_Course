var pop1 = document.querySelector(".popuphide");
var pop2 = document.querySelector(".popupoverlay");

document.getElementById("add-popup-button").addEventListener("click", function (e) {

     pop1.style.display = "block";
     pop2.style.display = "block";


})




document.getElementById("add").addEventListener("click", function (e) {
     e.preventDefault();


     // var add_data = document.querySelector(".append_container");

     var book_title = document.getElementById("title").value;
     var book_author = document.getElementById("author").value;
     var book_desc = document.getElementById("desc").value;

     var container = document.createElement("div");

     container.classList.add("book");

     container.innerHTML = `
     <h3>${book_title}</h3>
     <h6>${book_author}</h6>
     <p>${book_desc}<p>
     <button type=button class="del">Delete</button>   
     `;

     document.body.append(container);
     pop1.style.display = "none";
     pop2.style.display = "none";



})

document.getElementById("del1").addEventListener("click", function (e) {
     e.preventDefault();
     pop1.style.display = "none";
     pop2.style.display = "none";

})

document.addEventListener("click", function (e) {

    if (e.target.classList.contains("del")) {
        e.target.closest(".book").remove();
        
         //e.targetparentElement.remove();
    }

});



// console.log(pop1);
// console.log(pop2);
// .book{
//     background-color: black;
//     color:white;
//     width:20%;
//     padding:2%;
//     margin:5%;
//     border-radius:10%;
    


// }





