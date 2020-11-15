function chooseTitle() {

    const value = document.getElementById("selection").value;
    const title = document.getElementById("amount_box")

    if (value === "hourly") {
        document.getElementById("amount_box").innerHTML = "Please enter your salary:";
    } else {
        document.getElementById("amount_box").innerHTML = "Please enter your hourly wage:";
    }
}
