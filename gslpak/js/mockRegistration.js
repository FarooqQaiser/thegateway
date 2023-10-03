// Get references to the IELTS, OET, and PTE options and their corresponding radio buttons
const ieltsOption = document.querySelector(".ielts");
const ieltsFields = document.querySelectorAll(".ielts-fields");
const oetOption = document.querySelector(".oet");
const oetFields = document.querySelectorAll(".oet-fields");
const pteOption = document.querySelector(".pte");
const pteFields = document.querySelectorAll(".pte-fields");

// Function to show or hide the fields based on the option's state
function toggleFields(option, fields) {
  const displayValue = option.classList.contains("active") ? "none" : "block";
  fields.forEach((field) => {
    field.style.display = displayValue;
  });
  option.classList.toggle("active");
}

// Function to show or hide the sub-options of IELTS
function toggleIeltsFields() {
  ieltsFields.forEach((field) => {
    field.style.display = ieltsOption.classList.contains("active")
      ? "none"
      : "block";
  });
  ieltsOption.classList.toggle("active");
  oetFields.forEach((field) => {
    field.style.display = "none";
  });
  pteFields.forEach((field) => {
    field.style.display = "none";
  });
}

function toggleOetFields() {
  oetFields.forEach((field) => {
    field.style.display = oetOption.classList.contains("active")
      ? "none"
      : "block";
  });
  oetOption.classList.toggle("active");
  ieltsFields.forEach((field) => {
    field.style.display = "none";
  });
  pteFields.forEach((field) => {
    field.style.display = "none";
  });
}

// Function to show or hide the sub-options of PTE
function togglePteFields() {
  pteFields.forEach((field) => {
    field.style.display = pteOption.classList.contains("active")
      ? "none"
      : "block";
  });
  pteOption.classList.toggle("active");
  ieltsFields.forEach((field) => {
    field.style.display = "none";
  });
  oetFields.forEach((field) => {
    field.style.display = "none";
  });
}

// Add a click event listener to the IELTS option
ieltsOption.addEventListener("click", function () {
  toggleIeltsFields();
  oetFields.forEach((field) => {
    field.style.display = "none";
  });
  pteFields.forEach((field) => {
    field.style.display = "none";
  });
});

// Add a click event listener to the OET option
oetOption.addEventListener("click", function () {
  toggleOetFields();
  ieltsFields.forEach((field) => {
    field.style.display = "none";
  });
  pteFields.forEach((field) => {
    field.style.display = "none";
  });
});

// Add a click event listener to the PTE option
pteOption.addEventListener("click", function () {
  togglePteFields();
  ieltsFields.forEach((field) => {
    field.style.display = "none";
  });
  oetFields.forEach((field) => {
    field.style.display = "none";
  });
});

// Validation function for the form submission
function validateForm(event) {
  const testType = document.querySelector('input[name="testType"]:checked');
  const selectedOptions = document.querySelectorAll(
    'input[name="' + testType.value.toLowerCase() + '_type"]:checked'
  );

  if (!testType) {
    event.preventDefault();
    alert("Please select a Test Type (IELTS, OET, or PTE).");
  } else if (
    testType.value === "IELTS" &&
    selectedOptions.length !== 1 &&
    ieltsFields[0].style.display !== "none"
  ) {
    event.preventDefault();
    alert(
      "Please select one of the IELTS sub-options (General Training, Academic, or Life Skills A1)."
    );
  } else if (
    testType.value === "OET" &&
    selectedOptions.length !== 1 &&
    oetFields[0].style.display !== "none"
  ) {
    event.preventDefault();
    alert(
      "Please select one of the OET sub-options (Nursing, Medicine, or Others)."
    );
  } else if (
    testType.value === "PTE" &&
    selectedOptions.length !== 1 &&
    pteFields[0].style.display !== "none"
  ) {
    event.preventDefault();
    alert(
      "Please select one of two of the PTE sub-options (UKVI or Standard)."
    );
  }
}

// Add a submit event listener to the form
const form = document.querySelector("form");
form.addEventListener("submit_btn", validateForm);
