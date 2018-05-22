$(document).ready(function(){
    $("button").click(function(){
        $.post("consulta.php",
        {
          nombre: "dasfas",
          apPaterno: "afasd"
        },
        function(data,status){
            alert("Data: " + data + "\nStatus: " + status);
        });
    });
});

