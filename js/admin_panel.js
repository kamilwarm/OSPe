function generateUserTable(callback){
  $.ajax({ //odpowiada za asynchroniczne pobranie listy uzytkownikow z skryptu get_users.php
    success:function(result){ //parametr success odpalany jest w momencie kiedy skrypt get_users.php zwroci jakas wartosc
      var users = JSON.parse(result); // odebranie listy uzytkownikow w formie stringa json i konwersja na obiekt javascript
      $(".table_firefighters_tbody").html("");
      $.each(users, function(index, user){  // dla kazdego wpisu w tablicy users uruchom funkcje z dwoma parametrami gdzie pierwszym parametrem jest index a drugim uzytkownik w postaci obiektu
        var color = user.rights === 1 ? "green" : "red";
        var checked = user.rights === 1 ? "checked" : "";
        $(".table_firefighters").append("\n<tbody class='table_firefighters_tbody'><tr>" +
            "\n<td>" +
              "\n<font color='" + color + "'>" + user.id +
            "\n</td>" +
            "\n<td>" +
              "\n<font color='" + color +"'>" + user.login +
            "\n</td>" +
			 "\n<td>" +
              "\n<font color='" + color +"'>" + user.name +
            "\n</td>" +
            "\n<td>" +
              "\n<font color='" + color +"'>" + user.last_name +
            "\n</td>" +
            "\n<td>" +
              "\n<input type='checkbox' user_id=" + user.id + " " + checked + " ></input>" +
            "\n</td>" +
          "\n</tr></tbody>");
        });
        if (callback !== null){ //jezeli argument callback jest podany wywolaj go ( uruchom funkcje o nazwie callback)
          callback();
        }
    },
    error:function(){
      alert("błąd");
    },
    url:"/OSP/php/admin_panel/ajax/get_users.php",
  });
}

function addEvents(){
  $(".table_firefighters input").on("click", function(){
    $.ajax({
      success:function(result){
        generateUserTable(addEvents);
      },
      error:function(){
        alert("błąd");
      },
      url:"/OSP/php/admin_panel/ajax/change_status.php",
      type:"POST",
      data:{
        rights:$(this).is(":checked") ? 1 : 0,
        id:$(this).attr("user_id")
      }
    });
   });
};

$(document).ready(function(){ //w momencie kiedy caly dokument strony zostanie zaladowany
  generateUserTable(addEvents); //wywołaj funkcje generujaca tabele z uzytkownikami ktora przejmuje funkcje dodajaca event jako argument.
 
  $(".back_button").on("click", function(event){ //cofnij
  javascript:history.back(-1);
  });
  
  $(".register_button").on("click", function(){

    $.ajax({
      success:function(){
        $('#success').removeClass('alert-disactive').addClass('alert-active');
      },
      error:function(){
		  $('#danger').removeClass('alert-disactive').addClass('alert-active');
      },
      url:"/OSP/php/admin_panel/ajax/add_user.php",
      type:"POST",
      data:{
		login:$("#user_register_login").val(),
        user:$("#user_register").val(),
        last_name:$("#user_register_last_name").val(),
        pass:$("#pass_register").val()
      }
    });
  });
  
  $(".delete_button_panel").on("click", function(){
  //return;
    $.ajax({
      success:function(){
        alert("usunięto");
		 window.location.reload();
      },
      error:function(){
        console.log("#delete_user").val();
        alert("błąd");
      },
	   
      url:"/OSP/php/admin_panel/ajax/delete_user.php",
      type:"POST",
      data:{
      user:$("#delete_user").val(),

      }
    });
  });
});
