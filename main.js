function chooseTitle() {
  const value = document.getElementById("selection").value;
  const title = document.getElementById("amount_box");

  if (value === "hourly") {
    title.innerHTML = "Please enter your monthly wage:";
  } else {
    title.innerHTML = "Please enter your hourly wage:";
  }
}
