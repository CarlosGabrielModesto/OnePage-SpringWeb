const imagensPainel = document.querySelectorAll('.imagem-painel');
const setaAvancar = document.getElementById('btn-avancar');
const setaVoltar = document.getElementById('btn-voltar');
let imagemAtual = 0;

function esconderImagens() {
    imagensPainel.forEach(imagem => {
        imagem.classList.remove('mostrar')
    });  

}

function mostrarImagem() {
    imagensPainel[imagemAtual].classList.add('mostrar');
}

/* Ao clicar na seta para avançar, deve-se esconder todas as imagens e mostrar a próxima imagem */

setaAvancar.addEventListener('click', function(){

    //testa se o contador da imagemAtual é igual ao total de imagens
    const totalDeImagens = imagensPainel.length - 1;
    if(imagemAtual === totalDeImagens) {
        console.log('não pode avançar mais');
        return;
    }
    
/* A imagem atual começa em 0. Deve-se acrescentar mais 1 ao contador de imagens, assim em diane */
    
imagemAtual++;

/* Escondendo todas as imagens: Pega todas as imagens usando o DOM e remove a classe mostrar */

esconderImagens();
/* Mostrando a próxima imagem: Pega todas as imagens, descobre qual é a proxima e coloca a classe mostrar nela */

mostrarImagem();

});

setaVoltar.addEventListener('click', function(){

    if(imagemAtual === 0) {
        return;
    }

    imagemAtual--;

    esconderImagens();       
    mostrarImagem();
})