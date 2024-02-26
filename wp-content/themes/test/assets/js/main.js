jQuery(document).ready(function ($) {
  $(".phone1").attr("placeholder", " ");
  $(".phone2").attr("placeholder", " ");

  const phoneInputField1 = document.querySelector(".phone1");
  const phoneInputField2 = document.querySelector(".phone2");
  $(document).ready(function () {
    $(".iti").width("100%");
  });

  const phoneInput1 = window.intlTelInput(phoneInputField1, {
    utilsScript:
      "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });
  const phoneInput2 = window.intlTelInput(phoneInputField2, {
    utilsScript:
      "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });
});
// document.addEventListener("DOMContentLoaded", function () {
  // var collection = document.getElementsByClassName("du-mid du");
  // var collection = document.querySelectorAll(".du-mid");
  // console.log(collection);
  // collection.forEach(element => {
  //   element.addEventListener("click", (e) => {
  //     console.log(e);
  //     element.style.borderColor = element.style.borderColor == "blue" ? "" : "blue";
          // console.log(collection.item(cell));
    // console.log(element);
//   });
// });

  // for(let cell of collection){
  //   cell.addEventListener("click", (e) => {
  //     console.log(collection.item(cell));

      // console.log(e.target);
      // cell.style.borderColor = cell.style.borderColor == "blue" ? "" : "blue";

    // });
  // }

// });
