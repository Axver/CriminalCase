$(document).ready(function() {
    $('#TAcrim').DataTable();
    $('#TAcrimPangkat').DataTable();
    $('#TAcrimAkun').DataTable();
} );


function tambahPangkat(){
// alert("test");
    $('#tambahPangkat').modal('show');
}

function savePangkatAjax()
{
    let id_pangkat= $("#id_pangkat").val();
    let nama_pangkat= $("#nama_pangkat").val();

    $.post('../../php/tambahPangkat.php', {id:id_pangkat, pangkat:nama_pangkat}, function(response){
     // console.log(response);
        swal(response) .then((value) => {
            location.reload();
    });;
        $('#tambahPangkat').modal('hide');
    });
}

function editPangkat(id)
{
    $.post('../../php/editPangkat.php', {id:id}, function(response){
        // console.log(response);
        response=JSON.parse(response);
        var rLngth=response.features.length;

        var i=0;
        while(i<rLngth)
        {
            $("#id_pangkatEdit").val(response.features[i].properties['id']);
            $("#nama_pangkatEdit").val(response.features[i].properties['pangkat']);

            i++;
        }
      console.log(response);
    });
    $('#editPangkat').modal('show');
}

function deletePangkat(id)
{
    $.post('../../php/deletePangkat.php', {id:id}, function(response){
        // console.log(response);
        swal(response)
            .then((value) => {
            location.reload();
    });

    });
}


function editPangkatAjax()
{

    let id=$("#id_pangkatEdit").val();
    let pangkat=$("#nama_pangkatEdit").val();
    $.post('../../php/editPangkatSave.php', {id:id, pangkat:pangkat}, function(response){
        // console.log(response);
        swal(response)
            .then((value) => {
            location.reload();
    });
        $('#editPangkat').modal('hide');
    });

}