function updatePrice() {
    var packageSelect = document.getElementById("package");
    var priceElement = document.getElementById("price");

    if (packageSelect.value === "bronze") {
      priceElement.textContent = "150000";
    } else if (packageSelect.value === "silver") {
      priceElement.textContent = "200000";
    } else if (packageSelect.value === "gold") {
      priceElement.textContent = "300000";
    } else if (packageSelect.value === "platinum") {
      priceElement.textContent = "400000";
    }
  }