const app = require('express')();
const port = 80;

const NUM_TV = 2;  // mudar para cada TV!!!!!!!


app.get('/', async  (req, res) => {
  // Chamada à API
  fetch('https://tv.alunos.esmonserrate.org/app/getPlaylists.php?tv='+NUM_TV)
    .then(response => response.json())
    .then(data => {
      // Renderizar o conteúdo do JSON
	    // construir a página
      console.log(data)
      var pagina = '<html><head><title>TV AEM</title></head><body style="display: flex; flex-direction: row; height: 100vh; margin: 0;">';
      data.forEach(function(schema){
        pagina += '<div id="painel' + schema.id + '" style="position: absolute; top: '+ schema.y+'%; left: '+ schema.x+'%; width: '+ schema.larg+'%; height: '+ schema.alt+'%; ">'
        pagina += '<p>playlist......</p>';
        pagina +=  '</div>';

        console.log('<div id="painel' + schema.id + '" style="position: absolute; top: '+ schema.y+'%; left: '+ schema.x+'%; width: '+ schema.larg+'%; height: '+ schema.alt+'%; ">');
      })

      pagina += '<script>setInterval(function(){  }, 1000); ';
      pagina += '</script>     </body>    </html>';
	   res.send(pagina);
	  
	  	  
	  
    });
});



app.listen(port, () => {
  console.log(`Servidor rodando em http://localhost:${port}`);
});
