const submit_form = (event) => {
  const formData = new FormData(event);
  $(".submit_btn").html('<div class="spinner"></div>');
  $(".submit_btn").css("height", "38px");
  fetch("https://hashnetlinks.com/sendEmail.php", {
    method: "POST",
    body: formData,
    header: {
      contentType: false,
      processData: false,
    },
  })
    .then((resp) => resp.text())
    .then((res) => {
      setTimeout(() => {
        $(".submit_btn").addClass("d-none");
        if (res == 1) {
          $("#pop_up_btn").trigger("click");
          $("#msg").html(
            "Thankyou for your feedback. We will shortly respond you"
          );
          $("#msg").addClass("green d-block");
        } else {
          $("#pop_up_btn").trigger("click");
          $("#msg").html(
            "Due to some fatal error your request for submission is failed. Please try again"
          );
          $("#msg").addClass("danger d-block");
        }
      }, 700);
    })
    .catch((error) => {
      $(".submit_btn").addClass("d-none");
      $("#pop_up_btn").trigger("click");
      $("#msg").html(
        "Due to some fatal error your request for submission is failed. Please try again"
      );
      $("#msg").addClass("danger d-block");
    });
};

const pages = [
  "home.php",
  "about-us.php",
  "contact-us.php",
  "courses.php",
  "pay-fees.php",
  "free-trial.php",
  "fee-structure.php",
];
const pathname = window.location.pathname.split("/");
const currentPage = pages.filter((value) => pathname.includes(value));
console.log(currentPage[0]);
$(`#navbar ul a[href="${currentPage}"]`)
  .addClass("active_pge")
  .siblings()
  .removeClass("active_pge");
const expand_menu = () => {
  $("#mobile_menu").toggleClass("menu_active");
};
