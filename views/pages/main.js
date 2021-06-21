$(document).ready(function() {
    $('#TAcrim').DataTable();
    $('#TAcrim1').DataTable();
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

function tambahAkun()
{
    $('#tambahAkun').modal('show');
}

function saveAkunAjax()
{
    let no_polisi=$("#no_polisiT").val();
    let nama=$("#namaT").val();
    let username=$("#usernameT").val();
    let password=$("#passwordT").val();
    let pangkat=$("#pangkatT").val();

    $.post('../../php/tambahAkun.php', {no_polisi:no_polisi,nama:nama,username:username,password:password,pangkat:pangkat}, function(response){
        // console.log(response);
        swal(response) .then((value) => {
            location.reload();
    });;
        $('#tambahAkun').modal('hide');
    });
}


function editUser(id)
{

    $.post('../../php/editAkun.php', {id:id}, function(response){
        console.log(response);
        response=JSON.parse(response);
        var rLngth=response.features.length;

        var i=0;
        while(i<rLngth)
        {
            $("#no_polisiE").val(response.features[i].properties['no_polisi']);
            $("#pangkatE").val(response.features[i].properties['id_pangkat']);
            $("#namaE").val(response.features[i].properties['nama']);
            $("#usernameE").val(response.features[i].properties['username']);
            $("#passwordE").val(response.features[i].properties['password']);


            i++;
        }
        console.log(response);
    });
    $('#editAkun').modal('show');

}

function deleteUser(id)
{
    $.post('../../php/deleteAkun.php', {id:id}, function(response){
        // console.log(response);
        swal(response)
            .then((value) => {
            location.reload();
    });

    });
}

function saveEditAkunAjax()
{
    let no_polisi=$("#no_polisiE").val();
    let pangkat=$("#pangkatE").val();
    let nama=$("#namaE").val();
    let username=$("#usernameE").val();
    let password=$("#passwordE").val();


    $.post('../../php/editAkunSave.php', {no_polisi:no_polisi,pangkat:pangkat,nama:nama,username:username,password:password}, function(response){
        // console.log(response);
        swal(response)
            .then((value) => {
            location.reload();
    });
        $('#editPangkat').modal('hide');
    });

}