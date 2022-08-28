const listSeries = document.querySelectorAll(`.delete-series`);
const nameSerieModal = document.querySelector(`#modalNameSerie`);
const enviar = document.querySelector(`#confirmaModal`);
var formAtual;

listSeries.forEach((btnSerie) => {
    btnSerie.addEventListener('click', (e) => {
        e.preventDefault();

        let id = btnSerie.id
        let nameSerie = document.querySelector(`#label-${id}`);
    
        formAtual = document.querySelector(`#form${id}`);
        
        nameSerieModal.textContent = nameSerie.textContent;
        
    });
});
        
enviar.addEventListener('click', () => {            
    if(formAtual != null){
        formAtual.submit();
    }
});