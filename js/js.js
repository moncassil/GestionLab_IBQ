 $(document).ready(function(){
    $.post("BD/articulos.php",function(data) {
            $("#result").html(data);
    });
  })