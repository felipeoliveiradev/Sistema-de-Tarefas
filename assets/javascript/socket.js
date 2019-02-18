$(function(){
  $('#registerGroupTaskFormulario').on('submit', function(e){
    e.preventDefault();

    var form = $('#registerGroupTaskFormulario')[0];
    var data = new FormData(form);


    $.ajax({
      type:'POST',
      url:'http://localhost/framework/GroupTasks/insert',
      data:data,
      contentType:false,
      processData:false,
      success:function(msg){
        $('#verde').iziModal('setTitle', 'Criada Com Sucesso');
        $('#verde').iziModal('setSubtitle', 'Obrigado');
        $('#verde').iziModal('open');
        setTimeout(location.reload.bind(location), '2000');
      }
    })

  });





});