
$(document).ready(function(){
    var citys ={
        "Yucatan" :{
            "estados" : [
                "Kanasin", 
                "Merida",
                "Concal",
                "Progreso"
            ]   
        },      
    
        "Monterrey":{
            "estados":[
                "Estado en monterrey 1",
                "Estado en monterrey 2",
                "Estado en monterrey 3"
            ]
        }
    }

    for (city in citys){
        $("#citys").append('<option >'+city+'</option>')
    }
    
    startSelected = $("#citys").val()
    var selectedStates = findSelected(startSelected,citys) 
    selectedStates.forEach(element => {
    $("#states").append('<option >'+element+'</option>')
    });
    
    $("#citys").change(function (e) {
        var selected = $(this).val();
        var selectedStates = findSelected(selected,citys) 
        $("#states").html('')  
        selectedStates.forEach(element => {
        $("#states").append('<option >'+element+'</option>')
        });
           
        
    });

   
    
})

function findSelected(selected = null,citys){
    estados = []
    if(selected != null){
        for (cit in citys){
            if(cit == selected){
              return  citys[selected]['estados']
            }
        }  
    }
    
}