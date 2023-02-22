
var code;
function createCaptcha() {
  document.getElementById('captcha').innerHTML = "";
  var charsArray =
    "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@";
  var lengthOtp = 6;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    var index = Math.floor(Math.random() * charsArray.length + 1);
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 100;
  canv.height = 50;
  var ctx = canv.getContext("2d");
  ctx.font = "25px Georgia";
  ctx.strokeText(captcha.join(""), 0, 30);
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv);
}


function validateCaptcha() {
  var recaptcha = $("#g-recaptcha-response").val()
  event.preventDefault();
  debugger
  if (recaptcha === "") {
    alert("Invalid Captcha. try Again");
    createCaptcha();

  } else {
    submitForms();
  }
}
$("#mynewForm").submit(function (e) {
  e.preventDefault();
});
$("document").ready(function () {
  $("#successDiv").fadeOut();
});

function submitForms() {
  // var recaptcha = $("#g-recaptcha-response").val()
  // $.post("/submit.php", {
  //   "secret": "6LcnazMjAAAAAM6Bmo2-bI7KSkdriQZFCWwseFRS",
  //   "response": recaptcha
  // }, function (response) {
  //   console.log(response)
  // });
  var isAgree = $("#agree").val();
  // $("#successDiv").css("display", "block");
  // document.getElementById("#successDiv").style.display = "block";
  var fname = $("#name-input").val();
  var lname = $("#lname-input").val();
  var uemail = $("#email-input").val();
  var ucontact = $("#contact-input").val();
  var cname = $("#message-textarea").val();

  console.log(isAgree, fname, lname, uemail, ucontact, cname);
  $.ajax({
    type: "POST",
    url: "/form.php",
    data: {
      fname: fname,
      lname: lname,
      uemail: uemail,
      ucontact: ucontact,
      cname: cname
    },
    success: function (response) {
      console.log("php", response);
      var resp = $.parseJSON(response);
      // console.log("IN");
      if (resp.result == "Success") {
        // console.log("IN");
        //$("#successDiv").css("display","block");
        // $("#successDiv").fadeIn();
        $("#successDiv").css("display", "block");
        setTimeout(function () {
          $("#successDiv").css("display", "none");
        }, 2000);
        $("#fname-input").val("");
        $("#lname-input").val("");
        $("#uemail-input").val("");
        $("#ucontact-input").val("");
        $("#cname-input").val("");
      } else {
        $("#unsuccessDiv").css("display", "block");
        setTimeout(function () {
          $("#unsuccessDiv").css("display", "none");
        }, 2000);
      }
    },
  });
}
