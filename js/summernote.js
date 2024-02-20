$(document).ready(function () {
  $("#summernote").summernote();

  // Bug Fix
  var noteBar = $(".note-toolbar");
  noteBar.find("[data-toggle]").each(function () {
    $(this)
      .attr("data-bs-toggle", $(this).attr("data-toggle"))
      .removeAttr("data-toggle");
  });
});
