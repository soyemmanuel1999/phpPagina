function buscar(){
    var palabra=$("#palabraBuscar").val();
    alert(palabra)
   jQuery( $.ajax({
        method: "POST",
        url: "buscador.php",
        data: { texto: palabra }
      })
        .done(function( msg ) {
          alert( "Data Saved: " + msg );
        }))
}


