document
  .getElementById("priceForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    // Get values from form inputs
    const roomPrice = parseInt(document.getElementById("roomType").value);
    const days = parseInt(document.getElementById("days").value);
    const floor = parseInt(document.getElementById("floor").value);
    const discount = document.getElementById("discount").value;

    // Calculate the total price
    let totalPrice = roomPrice * days;

    // Additional cost for rooms above the 5th floor
    if (floor > 5) {
      totalPrice += 1000;
    }

    // Apply discount
    if (discount === "member") {
      totalPrice *= 0.9; // 10% discount
    } else if (discount === "birthday") {
      totalPrice -= 500; // 500 off
    }

    // Display the result
    document.getElementById(
      "result"
    ).innerText = `Total Price: IDR ${totalPrice.toFixed(2)}`;
  });
