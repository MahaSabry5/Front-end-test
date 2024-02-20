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
