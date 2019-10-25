window.addEventListener(
  "DOMContentLoaded",
  function() {
    let node = document.getElementById("count-text");
    node.addEventListener(
      "keyup",
      function() {
        let count = this.value.length;
        let counterNode = document.querySelector(".show-count-text");
        counterNode.innerText = count;
      },
      false
    );
  },
  false
);
