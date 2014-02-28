$( document ).ready(function() {

    var delay=1000//1 seconds
    setTimeout(function(){

var seriously = new Seriously(),
    video = seriously.source('#myvideo'), // get video element by CSS selector
    target = seriously.target('#canvas'), // output canvas
    effects = {
    vignette: seriously.effect('vignette'),
    blur: seriously.effect('blur'),
    filmgrain: seriously.effect('filmgrain')
    };  
effects.vignette.source = video;
effects.vignette.amount = 0;
effects.blur.source = effects.vignette;
effects.blur.amount = document.getElementById('blur_amount');
effects.filmgrain.source = effects.blur;
effects.filmgrain.amount = document.getElementById('grain_amount');
target.source = effects.filmgrain;

seriously.go();

var editor_text =  
"\
  	\n\
   	effects = {\n\
    	blur: seriously.effect('blur'),\n\
    	filmgrain: seriously.effect('filmgrain')\n\
    };\n\
    \n\
    //Set object parameters here. \n\
   ";

    editor.setValue(editor_text + '\n\    effects.filmgrain.amount = .1;\n\    effects.blur.amount = .01;\n\ ');

    $("#grain_amount").change(function(){
    	editor.gotoLine(9);
		editor.setValue(editor_text + '\n\    effects.filmgrain.amount = ' + effects.filmgrain.amount + ';\n\    effects.blur.amount = ' + effects.blur.amount + ';');

    });

    $("#blur_amount").change(function(){
     	editor.gotoLine(10); 
        editor.setValue(editor_text + '\n\    effects.filmgrain.amount = ' + effects.filmgrain.amount + ';\n\    effects.blur.amount = ' + effects.blur.amount + ';');
     
    });
       },delay) 
});


