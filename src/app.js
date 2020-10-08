const $ = require('jquery');
const Handlebars = require ('handlebars');

$(document).ready(function() {
  $.ajax(
    {
      "url":"../index.php",
      "method":"GET",
      "success":function (data) {
        for (var i = 0; i < data.length; i++) {
          var source = $("#template").html();
          var template = Handlebars.compile(source);
          var context = {
            "title": data[i]["title"],
            "author": data[i]["author"],
            "year": data[i]["year"],
            "poster": data[i]["poster"]
          };
          var html = template(context);
          $(".album").append(html);
        }
      },
      "error":function (err) {
        alert("Errore"+ err);
    }
  });
});
