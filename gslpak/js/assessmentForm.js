const stepMenuOne = document.querySelector(".formbold-step-menu1");
const stepMenuTwo = document.querySelector(".formbold-step-menu2");
const stepMenuThree = document.querySelector(".formbold-step-menu3");

const stepOne = document.querySelector(".formbold-form-step-1");
const stepTwo = document.querySelector(".formbold-form-step-2");
const stepThree = document.querySelector(".formbold-form-step-3");

const formSubmitBtnn = document.querySelector(".formbold-btn.submit-btnn");

// Hide formSubmitBtnn initially
formSubmitBtnn.style.display = "none";

stepMenuOne.addEventListener("click", function () {
  stepMenuOne.classList.add("active");
  stepMenuTwo.classList.remove("active");
  stepMenuThree.classList.remove("active");

  stepOne.classList.add("active");
  stepTwo.classList.remove("active");
  stepThree.classList.remove("active");

  formSubmitBtnn.style.display = "none";
});

stepMenuTwo.addEventListener("click", function () {
  stepMenuOne.classList.remove("active");
  stepMenuTwo.classList.add("active");
  stepMenuThree.classList.remove("active");

  stepOne.classList.remove("active");
  stepTwo.classList.add("active");
  stepThree.classList.remove("active");

  formSubmitBtnn.style.display = "none";
});

stepMenuThree.addEventListener("click", function () {
  stepMenuOne.classList.remove("active");
  stepMenuTwo.classList.remove("active");
  stepMenuThree.classList.add("active");

  stepOne.classList.remove("active");
  stepTwo.classList.remove("active");
  stepThree.classList.add("active");

  if (stepMenuThree.classList.contains("active")) {
    formSubmitBtnn.style.display = "block";
  } else {
    formSubmitBtnn.style.display = "none";
  }
});

const formSubmitBtn = document.querySelector(".formbold-btn.submit-btn");

formSubmitBtn.addEventListener("click", function (event) {
  event.preventDefault();

  if (stepMenuOne.classList.contains("active")) {
    stepMenuOne.classList.remove("active");
    stepMenuTwo.classList.add("active");

    stepOne.classList.remove("active");
    stepTwo.classList.add("active");
  } else if (stepMenuTwo.classList.contains("active")) {
    stepMenuTwo.classList.remove("active");
    stepMenuThree.classList.add("active");

    stepTwo.classList.remove("active");
    stepThree.classList.add("active");
  } else if (stepMenuThree.classList.contains("active")) {
    document.querySelector("form").submit();
  }
});

// Hide formSubmitBtnn initially
formSubmitBtnn.style.display = "none";

stepMenuTwo.addEventListener("click", function () {
  formSubmitBtnn.style.display = "none";
});

stepMenuOne.addEventListener("click", function () {
  formSubmitBtnn.style.display = "none";
});

const confirmationCheckbox = document.querySelector("#confirmation-checkbox");

confirmationCheckbox.addEventListener("change", function () {
  if (this.checked) {
    formSubmitBtnn.style.display = "block";
  } else {
    formSubmitBtnn.style.display = "none";
  }
});
