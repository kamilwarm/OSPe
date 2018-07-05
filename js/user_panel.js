function generateUserTable(){
  $.ajax({ //odpowiada za asynchroniczne pobranie listy uzytkownikow z skryptu get_users.php
    success:function(result){ //parametr success odpalany jest w momencie kiedy skrypt get_users.php zwroci jakas wartosc
      var users = JSON.parse(result); // odebranie listy uzytkownikow w formie stringa json i konwersja na obiekt javascript
      $(".table_firefighters_tbody").html("");
      $.each(users, function(index, user){  // dla kazdego wpisu w tablicy users uruchom funkcje z dwoma parametrami gdzie pierwszym parametrem jest index a drugim uzytkownik w postaci obiektu
        var color = user.status === 1 ? "green" : "red";
        var status = user.status === 1 ? "TAK" : "NIE";
        $(".table_firefighters").append("\n<tbody class='table_firefighters_tbody'><tr>" +
            "\n<td>" +
              "\n<font color='" + color + "'>" + user.id +
            "\n</td>" +
            "\n<td>" +
              "\n<font color='" + color +"'>" + user.name +
            "\n</td>" +
            "\n<td>" +
              "\n<font color='" + color +"'>" + user.last_name +
            "\n</td>" +
            "\n<td>" +
              "\n<font color='" + color +"'>" + status +
            "\n</td>" +
          "\n</tr></tbody>");
        });
    },
    url:"/OSP/php/admin_panel/ajax/get_users.php",
  });
};

$(document).ready(function(){ //w momencie kiedy caly dokument strony zostanie zaladowany
  generateUserTable(); //wywołaj funkcje generujaca tabele z uzytkownikami ktora przejmuje funkcje dodajaca event jako argument.
  $(".back_button").on("click", function(event){ //cofnij
  javascript:history.back(-1);
  });
  
});
