$(document).ready(function() {

    $('#type').change(function(){ 

        // get value of selected option  
        var id = $(this).children(":selected").attr("id");

        // loads template according to the value of id
        if (id == "furniture") {
            $( "#template" ).load( "assets\\form-templates\\template-furniture.html" );
        }
        else if(id == "book"){
            $( "#template" ).load( "assets\\form-templates\\template-book.html" );
        }
        else if(id == "dvd"){
            $( "#template" ).load( "assets\\form-templates\\template-dvd.html" );
        }
        else{
            $( "#template" ).empty();
        }
        
    });
    
});