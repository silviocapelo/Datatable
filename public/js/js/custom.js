$(function () {
    const tableLanguage = {
        "sEmptyTable": "Nenhum registro encontrado",
        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
        "sInfoPostFix": "",
        "sInfoThousands": ".",
        "sLengthMenu": "_MENU_ resultados por página",
        "sLoadingRecords": "Carregando...",
        "sProcessing": "Processando...",
        "sZeroRecords": "Nenhum registro encontrado",
        "sSearch": "Pesquisar",
        "oPaginate": {
            "sNext": "Próximo",
            "sPrevious": "Anterior",
            "sFirst": "Primeiro",
            "sLast": "Último"
        },
        "oAria": {
            "sSortAscending": ": Ordenar colunas de forma ascendente",
            "sSortDescending": ": Ordenar colunas de forma descendente"
        }
    };


    $('.data-table').DataTable({
        "language": tableLanguage,
    });

    $('#tabela-atributos').DataTable({
        "language": tableLanguage,
        "searching": false,
        "paging":   false,
        "info":     false
    });

    // $('#add-group').click(function(){
    //     const group = `

    //     `;

    //     $('#groups').append(group);
    // });
});

// Funções da Página Métodos Dinâmicos
function remove(e){
    // Remove a linha da tabela
    $(e).closest('tr').remove();
}

function add(){
    // Resgata os valores buscados nos inputs
    const name = $('#name').val();
    const type = $('#type').val();
    const description = $('#description').val();

    // Verifica se os inputs não estão vazios
    if (name && type && description) {
        // Adiciona os dados na tabela
        $('#tabela-atributos > tbody:last-child').append(
            '<tr>'
                + '<td>' + name + '</td>'
                + '<td>' + type + '</td>'
                + '<td>' + description + '</td>'
                + '<td class="options">'
                +   '<a href="#" onclick="edit(this)"><i class="edit-btn fa fa-fw fa-pencil"></i> Editar</a</li>'
                +    '<a href="#" onclick="remove(this)"><i class="delete-btn fa fa-fw fa-trash"></i> Excluir</a</li>'
                + '</td>' +
            '</tr>'
        );

        // Limpa os dados dos inputs
        clear();
    }
}

var parent;
var elements;

function edit(e){
    // Busca a linha de tabela mais próxima e seus elementos internos
    parent = $(e).closest('tr');
    elements = $(parent).children();

    const name = elements[0];
    const type = elements[1];
    const description = elements[2];

    // Atribui os valores retornados para os inputs
    $('#name').val($(name).text());
    $('#type').val($(type).text());
    $('#description').val($(description).text());

    // Muda o texto e a função do botão adicionar
    $('.add-button').text('Salvar').attr("onclick", "update()");
}

function update(){
    const name = $('#name').val();
    const type = $('#type').val();
    const description = $('#description').val();

    if (name && type && description) {
        $(elements[0]).text(name);
        $(elements[1]).text(type);
        $(elements[2]).text(description);

        clear();

        $('.add-button').text('Adicionar').attr("onclick", "add()");
    }
}


function clear(){
    $('#name').val('');
    $('#description').val('');
}
