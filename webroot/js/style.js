$( document ).ready(function() {
  $('#input-limited-range').pickatime({
    darktheme: true,
    twelvehour: true,
    min: "8:20am",
    max: "5:15pm"
  });
});
