$(function() {
  // Generic function to load data for every ".load-html" element
  $(".load-html").each(function () {
    var el = $(this),
      template = el.attr("data-template"),
      source = el.attr("data-source").split(",");

    jsonTemplate(el, source, template);
  });
});

/**
 *
 * @param element (object, DOM element)
 * @param jsonSource (string, json sources path)
 * @param htmlTemplate (string, html template path)
 */
function jsonTemplate(element, jsonSource, htmlTemplate) {
  // Create
  $.get(htmlTemplate)
    .done(function (data) {
      element.attr("data-processed", "1").html(data);
    })
    .fail(function (data) {
      element.attr("data-processed", "0");
    });

  for (i = 0; i < jsonSource.length; i++) {
    // Map values from json
    $.getJSON(jsonSource[i], function(data) {
      $.each(data, function (key, value) {
        var dataBind = element.find("[data-bind=" + key + "]");
        var dataTarget = dataBind.attr("data-target");

        // Check if value is an attribute and not the whole text
        if (dataTarget == "html") {
          dataBind.html(value);
        } else {
          dataBind.attr(dataTarget, value);
        }
      });
    });
  }
}
