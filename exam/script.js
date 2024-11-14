document
  .getElementById("priceForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah halaman reload

    // Ambil nilai dari setiap input form
    const roomType = parseInt(document.getElementById("roomType").value);
    const days = parseInt(document.getElementById("days").value);
    const floor = parseInt(document.getElementById("floor").value);
    const discountType = document.getElementById("discount").value;

    // Menentukan nama tipe kamar berdasarkan pilihan pengguna
    let roomTypeName = "";
    if (roomType === 5000) {
      roomTypeName = "Standard";
    } else if (roomType === 6000) {
      roomTypeName = "Superior";
    } else if (roomType === 7000) {
      roomTypeName = "Deluxe";
    }

    // Hitung harga awal berdasarkan room type dan jumlah hari
    let totalPrice = roomType * days;

    // Tambahkan biaya tambahan jika lantai lebih tinggi dari 3
    let floorSurcharge = 0;
    if (floor > 3) {
      floorSurcharge = 500;
      totalPrice += floorSurcharge;
    }

    // Terapkan diskon jika ada
    let discountAmount = 0;
    if (discountType === "member") {
      discountAmount = totalPrice * 0.1; // Diskon 10%
      totalPrice -= discountAmount;
    } else if (discountType === "birthday") {
      discountAmount = 500; // Diskon 500 IDR
      totalPrice -= discountAmount;
    }

    // Pastikan total harga tidak kurang dari 0
    totalPrice = Math.max(totalPrice, 0);

    // Tampilkan hasil penghitungan dengan detail
    document.getElementById("result").innerHTML = `
      <h3>Price Calculation Details</h3>
      <p><strong>Room Type:</strong> ${roomTypeName}</p>
      <p><strong>Number of Days:</strong> ${days} day(s)</p>
      <p><strong>Floor Level:</strong> ${floor}</p>
      <p><strong>Base Price (Room Type x Days):</strong> IDR ${
        roomType * days
      }</p>
      <p><strong>Floor Surcharge:</strong> IDR ${floorSurcharge}</p>
      <p><strong>Discount Applied:</strong> IDR ${discountAmount}</p>
      <h3>Total Price: IDR ${totalPrice}</h3>
  `;
  });
