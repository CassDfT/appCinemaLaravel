
const $checkbox = document.querySelector('#a1');

$checkbox.addEventListener('change', function(){
  if($checkbox.checked ==true){
    document.getElementById("poltrona").src="Imagens/poltronaOn.png";
  }
  else{
      document.getElementById("poltrona").src="Imagens/poltronaOff.png";
      }
});


