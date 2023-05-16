    var countElement = document.getElementById("count");
    var minusButton = document.getElementById("minus");
    var plusButton = document.getElementById("plus");

    var count = 0;

    function updateCount(value) {
      count += value;
      if (count < 0) {
        count = 0;
      }
      countElement.textContent = count;
    }

    minusButton.addEventListener("click", function () {
      updateCount(-1);
    });

    plusButton.addEventListener("click", function () {
      updateCount(1);
    });