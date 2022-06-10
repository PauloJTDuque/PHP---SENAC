$(function () {

  // the input field
  var $input = $("input[type='search']"),
    $searchBtn = $("button[data-search='search']"), // adicionado
    $content = $(".container-fluid"),
    // jQuery object to save <mark> elements
    $results,
    // the class that will be appended to the current
    // focused element
    currentClass = "current",
    currentIndex = 0;
  /**
   * Jumps to the element matching the currentIndex
   */
  function jumpTo() {
    if ($results.length) {
      var position,
        $current = $results.eq(currentIndex);
      $results.removeClass(currentClass);
      if ($current.length) {
        $current.addClass(currentClass);
        // position = $current.offset().top - offsetTop;
        window.scrollTo(0, position);
      }
    }
  }

  /**
   * Searches for the entered keyword in the
   * specified context on input
   */
  $searchBtn.on("click", function () { // alterado
    var searchVal = $input.val(); // alterado
    $content.unmark({
      done: function () {
        $content.mark(searchVal, {
          separateWordSearch: true,
          done: function () {
            $results = $content.find("mark");
            currentIndex = 0;
            jumpTo();
          }
        });
      }
    });
  });
});
document.addEventListener("keypress", function (e) {
  if (e.key === 'Enter') {
    e.preventDefault();
    var btn = document.querySelector("#pesquise");

    btn.click();

  }
});