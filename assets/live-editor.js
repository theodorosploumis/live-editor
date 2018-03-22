$(function() {

  var $editables = $(".css-editable"),
      $filename = "../live-styles.css",
      $forms = $("#editor form");

  $editables.on('click', function(){
    // Use this only for contenteditable elements
    //var el = $(document.activeElement);
    var el = $(this);

    $forms.each(function(){
      $(this)[0].reset();
    });

    // Focus on this element only. Remove class "js-edit" from other html elements.
    $editables.removeClass("js-edit");
    // Add class "js-edited" to every element that has inline styles applied from this editor
    el.addClass("js-edit js-edited");

  });

  // Apply css
  // ToDo: Make this work for any new elements created with js
  $forms.on("change", function(){
    var el = $(this),
        cssProp = el.attr('data-scope'),
        cssPropMain = el.find('.main').val(),
        cssPropHelper = el.find('.helper').val();

    if (cssPropHelper === undefined) {
      cssPropHelper = "";
    }

    $(".js-edit").css(cssProp, cssPropMain+cssPropHelper);

  });

  // Save CSS on file
  // ToDo: Create and use a custom filename
  $(".btn-save-styles").click(function(){
    var $styles = "";
    var $el = $(".js-edited");

    $el.each(function(){
      $styles = $styles +"." + $(this).attr("class").split(" ")[0] +"{"+ $(this).attr('style') + "}";
    });

    $.ajax({
      type: "POST",
      url: "assets/saveCSS.php",
      data: { 'inline_styles' : $styles },
      success: function() {
        console.log($styles);
      }
    });

  });

  // Download CSS file
  $(".btn-download-styles").click(function(){
    var $styles = "";
    var $el = $(".js-edited");

    $el.each(function(){
      $styles = $styles +"." + $(this).attr("class").split(" ")[0] +"{"+ $(this).attr('style') + "}\n";
    });

    download($filename, $styles);
  });

});

// Helper function to download css file
// Thanks to https://stackoverflow.com/a/18197511/1365264
function download(filename, text) {
  var pom = document.createElement('a');
  pom.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
  pom.setAttribute('download', filename);

  if (document.createEvent) {
    var event = document.createEvent('MouseEvents');
    event.initEvent("click", true, true);
    pom.dispatchEvent(event);
  }
  else {
    pom.click();
  }
}
