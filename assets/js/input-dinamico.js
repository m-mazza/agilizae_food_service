$(document).ready(function() {
    //INCLUIR CAMPOS DINAMICAMENTE NO FORMULÁRIO
    let count = 1;
    
    var HTMLitem = '<div id="linha{count}" class="col-6">'+
            '<div class="m-1">'+
                '<label>Item Adicional nº{count}</label>'+
                '<div class="form-group mb-0 d-flex">'+
                    '<select class="form-control" id="itemadicional{count}" name="itemadicional[]">';
                        $.each(item_adicional,(i)=> {
                            var opcao = item_adicional[i];
                            console.log(opcao);
                            HTMLitem+='<option value="'+opcao.cd_itemad+'">'+opcao.nm_itemad+'</option>';
                        });
                    HTMLitem +='</select>{btn}'+
                '</div>'+
            '</div>'+
        '</div>';

    $('.itensAdicionais').append(HTMLitem.replaceAll("{count}", count).replaceAll("{btn}", ''));

    $(".adicionar").on("click", function(e) {
        $(this).blur();
        e.preventDefault();
        count++;
        $('.itensAdicionais').append(HTMLitem.replaceAll("{count}", count).replaceAll("{btn}", '<a href="#" id="'+count+'" class="btn btn-danger deletar"><i class="fa-solid fa-trash"></i></a>')); 
    });

    //REMOVER CAMPOS DINAMICAMENTE NO FORMULÁRIO
    $("form").on("click", ".deletar", function(e) {
        e.preventDefault();
        let btn = $(this).attr('id');
        if(btn != count) {
            $('.modal-header h4').html('ATENÇÃO').css('color','#c82333');
            $('.modal-body p').html('Não possível deletar o item <strong>nº'+btn+'</strong> antes do item <strong>nº'+count+'</strong>.');
            $('#modal_validation').modal('toggle');
            $(e.target(btn)).click(false);
        }
        $('#linha'+btn+'').remove();
        count--;
    });
    
});