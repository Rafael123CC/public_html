const express = require('express');
const path = require('path');

const app = require('express')();
const port = 80;



const fs = require('fs');
const ytdl = require('ytdl-core');


const NUM_TV = 2;  // mudar para cada TV!!!!!!!

function youtube_parser(url){
  var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
  var match = url.match(regExp);
  return (match&&match[7].length==11)? match[7] : false;
}

async function downloadYT(yt, ficheiro){
  if (!fs.existsSync(ficheiro)) {  //descarregar se necessário
    ytdl(yt).pipe(fs.createWriteStream(ficheiro));
    console.log(yt, " para ", ficheiro)
  }
}

var listaMedia = [];
app.get('/', async  (req, res) => {
  // Chamada à API
  fetch('https://tv.alunos.esmonserrate.org/app/getPlaylists.php?tv='+NUM_TV)
    .then(response => response.json())
    .then(data => {
      // Renderizar o conteúdo do JSON
	    // construir a página
      
      var pagina = '<html><head><title>TV AEM</title></head><body style="display: flex; flex-direction: row; height: 100vh; margin: 0;">';
      var arrayMedias = '<script>var medias=[];';
	  var controlo = 'var controlo=[];';
	  
      data.forEach(function(schema){
        listaMedia[schema.id] = [];
        schema.playlist[1].forEach(function(media){
          listaMedia[schema.id].push([media[0], media[1]]);
        })
        //console.log("medias:", listaMedia)        

        pagina += '<div id="painel' + schema.id + '" style="position: absolute; top: '+ schema.y+'%; left: '+ schema.x+'%; width: '+ schema.larg+'%; height: '+ schema.alt+'%; ">'
       // if (listaMedia[schema.id][1]==1)
       pagina += '<video id="schema'+schema.id +'" width="100%" height="100%" style="object-fit: fill;" muted autoplay nocontrols>';
       pagina += '<source  src="" type="video/mp4">';
//        pagina += '<iframe width="100%" height="100%" src="'+ listaMedia[schema.id][0]+'"  frameborder="0" allow="autoplay;" allowfullscreen></iframe>';
        pagina +='</video>';
        pagina +=  '</div>';
        //arrayMedias += 'medias["schema'+schema.id+'"] = ' +  JSON.stringify(listaMedia[schema.id])+';'
		controlo += 'controlo["schema'+schema.id+'"] = [0,0];'; //o número do video em reprodução e o tempo
      })
	  
     
	  
      // descarregar os videos do YT
      listaMedia.forEach(function(schema, id){	
		arrayMedias += 'medias["schema'+id+'"]=[];';	  
        schema.forEach(async function(video){
		  let filename = youtube_parser(video[0])+'.mp4';
		  arrayMedias += 'medias["schema'+id+'"].push("' + filename +'");'
          if (video[0].search(/youtube/i)>=0){  // video do yt
            
            await downloadYT(video[0], filename);
         
          }
        });
		
      });
	  pagina += arrayMedias + controlo + '</script>';
	  console.log("medias", arrayMedias);

	  pagina += '<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>';
      pagina += '<script>$(document).ready(function(){ ServidorVideos = "/"; \n';
	  pagina += 'function emReproducao(){\n';
	  pagina += '    controlo.forEach(function(painel){\n';
	  pagina += '    if (controlo[painel][1]==$("#"+painel).currentTime)\n ';
	  pagina += '       alteraVideo(); \n})\n}\n';
	  pagina += '$("video").on("ended",function(){\n alteraVideo($(this).id);\n});\n'
	  pagina +='function alteraVideo(schema){\n 	console.log(schema);	     ';
      pagina +='  $("#"+schema).attr("src", ServidorVideos+medias[schema][0]);      \n';
      pagina +='  controlo[schema][0] = (controlo[schema][0]+1) % medias[schema].length;\n';
      pagina +='  controlo[schema][1]=$("#"+schema).currentTime; \n}\n';
		
      
      pagina += 'console.log("videos", medias);for(var schema in medias)alteraVideo(schema);})\n</script>\n</body>\n</html>';
	   res.send(pagina);
	  	  
	  
    });
});

app.get("/*.mp4", (request, response) => {
	 console.log("req.path", request.path);
    response.sendFile(__dirname + request.path);
});

app.listen(port, () => {
  console.log(`Servidor rodando em http://localhost:${port}`);
});
