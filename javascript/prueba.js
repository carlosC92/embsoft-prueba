$(document).ready(function(){


$("#send").click(function (e) { 
    e.preventDefault();
    text = $("#text").val().split(" ");
    $("#result").html('<p>Numero de palabras: '+textLenght(text)+'</p>'
    +'<p>Primera palabra: '+getFirstLetter(text)+'</p>'
    +'<p>Ultima palabra: '+getLastLetter(text)+'</p>'
    +'<p>Palabras invertidas: '+getInverted(text)+'</p>'
    +'<p>Palabras en orden A-Z: '+text.sort()+'</p>'
    +'<p>Palabras en orden Z-A: '+text.reverse()+'</p>');
});

})

function textLenght(text){
    return text.length
}

function getFirstLetter(text){
    return text[0]
}

function getLastLetter(text){
    return text[text.length -1]
}


function getInverted(texto){
    var words = [];
    texto.forEach(word => {
        var inverWord = []
        for(var i = word.length; i >= 0 ; i--){
            inverWord.push(word[i]) 
        }   
        
        words.unshift(inverWord.join('') )    
    });
    return words.join(' ');
}
