/**
 * Created by kauay_deveti on 11/03/2016.
 */
// codigo para inserir dados na base
jQuery(document).ready(function(){
    jQuery('#form_cadastrar_item').submit(function(){
        var dados = jQuery(this).serialize();
        jQuery.ajax({
            type: "POST",
            url: "../_class/_executa/exec_adiciona_item.php",
            data: dados,
            success: function( data )
            {
                alert("Cadastrado com sucesso");
            }
        });
        // desativas o onsubmit
        return false;
    });

    // Alterar produto
    jQuery("#form_alterar_item").submit(function(){
        var dados = jQuery(this).serialize();
        jQuery.ajax({
            type: "POST",
            url: "../_class/_executa/exec_alterar_item.php",
            data: dados,
            success: function(data){
                alert("Produto Alterado com sucesso.");
            }
        });
        return false;
    });

    // Envio de dados do formulario de cadastro dos tipos de item, vulgo categoria.
    jQuery("#form-cad-tipo-item").submit(function(){
        var dados = jQuery(this).serialize();
        jQuery.ajax({
            type: "POST",
            url: "../_class/_executa/exec_adiciona_tipo_item.php",
            data: dados,
           success: function(data){
               alert("Cadastro efetuado com sucesso");
           }
        });
        return false;
    });

    jQuery("#form-movi-estoque").submit(function(){
        var numeroChamado= document.getElementById("numero-chamado");
        var idProduto = document.getElementsByName("id-produto");
        var quantidade = document.getElementsByName("movi-quantidade");

        if(numeroChamado.value == "" || idProduto.value=="" || quantidade.value==""){
            alert("Campo em branco");
            return false;
        }else{
            var dados = $(this).serialize();
            jQuery.ajax({
                type: "POST",
                url: "../_class/_executa/exec_movi_estoque.php",
                data: dados,
                success: function(){
                    alert("Movimentação efetuada com sucesso");
                }
            });
            return false;
        }
    });

    // codigo para poder enviar o que está sendo digitado apra uma rquivo e trazernovamente
    // caso tenha entao ele ira filtrar de acordo com que está sendo digitado, se não tiver, ele leva para a pagina principal novamente.
        jQuery("#campo-pesquisar").keyup(function(){
            var digitado = $(this).val();
            if(digitado != ""){
                var dados = { descricao: digitado}
                jQuery.ajax({
                    type: "post",
                    url: "../_class/_executa/exec_busca_filtro.php",
                    data: dados,
                    success: function(data){
                        jQuery("#tables").html(data);
                }
                });
               // jQuery.post('../_class/_executa/exec_busca_filtro.php', dados, function(retorna) {
                  //  jQuery("#tables").html(retorna);
                //});

            }else{
                window.location.href = '../_view/lista_produtos?inicio=0&final=10';
            }
            //$("#tables").html(digitado);
        });
    //Envio de dados para buscar.


});

/* por a div com o hidden false
var botao = window.document.getElementById("btn");
var div_hidden = window.document.getElementById("div")
var pesquisa_item = window.document.getElementById("pesquisa-item");
// div está escondida ao iniciar, após um novo registro ela reaparece e o botão desaparece.
div_hidden.style.display = "none";
botao.onclick = function(){
    div_hidden.style.display = "block";
    pesquisa_item.style.display = "none";
    this.style.display = "none";

}
*/
