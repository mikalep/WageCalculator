function onOptionChange() {
  const value = document.getElementById("selection").value;
  const title = document.getElementById("amount_box");
  const text = document.getElementById("amount_input");

  if (value === "hourly") {
    title.innerHTML = "Please enter your monthly wage:";
    text.placeholder = "Enter an amount, eg. 4000";
  } else {
    title.innerHTML = "Please enter your hourly wage:";
    text.placeholder = "Enter an amount, eg. 30";
  }
}
