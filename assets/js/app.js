
function registrarChamado()
{
    var registraTitulo = document.getElementById('registra_chamado').elements.namedItem('titulo').value;
    var registraDescricao = document.getElementById('registra_chamado').elements.namedItem('descricao').value;

    if(registraTitulo && registraDescricao != '')
    {
        alert('tudo certo');
    }
    else
    {   
        event.preventDefault();
    }
}