//REGISTER MODALS
$("#registerTask").iziModal();
$("#registerGroupTask").iziModal();
$("#editorGroupTask").iziModal();

$("#updateGroupTask").iziModal();
$("#vermelho").iziModal({
  headerColor: '#d43838', 
  width: 400, 
  timeout: 10000,
  pauseOnHover: true,
  timeoutProgressbar: true,
  attached: 'bottom',
  bottom:0
});

$("#verde").iziModal({
  headerColor: '#5ecc62', 
  width: 400, 
  timeout: 10000,
  pauseOnHover: true,
  timeoutProgressbar: true,
  attached: 'bottom',
  bottom:0
});


//FUNÇÃO
function openRegisterGroupTask(){
  $("#registerGroupTask").iziModal('open');

}



function editorGroupTask(id){
  $("#editorGroupTask").iziModal('open');

  var id = id;

  $.ajax({
    type:'GET',
    url:'http://localhost/framework/tasks/listUnic/?id=' + id,
    dataType: 'JSON',
    success:function(msg){        
        $('#editorGroupTask .titleTaskNameInput').html('<input type="text" value="'+msg['0'].name+'" name="name"/>');
        $('#editorGroupTask .inputContainerSingleId').html('<input type="hidden" name="id" value="'+msg["0"].id+'"/>');
        $('#editorGroupTask .inputContainerSingleStatus').html('<input type="hidden" name="status" value="'+msg["0"].status+'"/>');
        $('#editorGroupTask .inputContainerSingleUserId').html('<input type="hidden" name="user_id" value="'+msg["0"].user_id+'"/>');
        $( "#editorGroupTask option:selected" ).text(msg['0'].name);
        $( "#editorGroupTask option:selected" ).val(msg['0'].id);
        
        
        

        $("#editorGroupTask .ChecklistRegisterTask").html('<input type="hidden" name="id_task" value="'+id+'" placeholder="Nome do Grupo"/>');
        $("#editorGroupTask .ChecklistRegisterStatus").html('<input type="hidden" name="status" value="1" placeholder="Nome do Grupo"/>');
        $("#editorGroupTask .ChecklistRegisterUserId").html('<input type="hidden" name="user_id" value="1" placeholder="Nome do Grupo"/>');
    }
  })


  $.ajax({
    type:'GET',
    url:'http://localhost/framework/checklist/listAll/?id=' + id,
    
    success:function(msg3){    
       
    }
  })



}

function updateGroupTask(){
  $("#editorGroupTask").iziModal('open');

}

function registerTask(id){
  var id = id;
  $("#registerTask").iziModal('open');
  $("#registerTask .inputContainerSingleId").html('<input type="hidden" name="id_group_task" value="'+id+'" placeholder="Nome do Grupo"/>');
  $("#registerTask .inputContainerSingleUserId").html('<input type="hidden" name="status" value="1" placeholder="Nome do Grupo"/>');
  $("#registerTask .inputContainerSingleStatus").html('<input type="hidden" name="user_id" value="1" placeholder="Nome do Grupo"/>');



}
function reabrirTask(){

  $('#verde').iziModal('setTitle', 'titlo');
  $('#verde').iziModal('setSubtitle', 'Subtitulo');
  $('#verde').iziModal('open');
  setTimeout(location.reload.bind(location), '2000');
  	
}

function entregueTask(){

  $('#verde').iziModal('setTitle', 'titlo');
  $('#verde').iziModal('setSubtitle', 'Subtitulo');
  $('#verde').iziModal('open');
  setTimeout(location.reload.bind(location), '2000');
  	
}




function deleteGroupTask(id){

  var id = id;
  
$.ajax({
  type:'GET',
  url:'http://localhost/framework/GroupTasks/delete/?id=' + id,
  contentType:false,
  processData:false,
  success:function(msg){
    $('#vermelho').iziModal('setTitle', 'Deletada com Sucesso');
    $('#vermelho').iziModal('setSubtitle', 'Obrigado');
    $('#vermelho').iziModal('open');
    setTimeout(location.reload.bind(location), '2000');
  }
})

};

function deleteTask(id){

  var id = id;
  
$.ajax({
  type:'GET',
  url:'http://localhost/framework/tasks/delete/?id=' + id,
  contentType:false,
  processData:false,
  success:function(msg){
    $('#vermelho').iziModal('setTitle', 'Deletada com Sucesso');
    $('#vermelho').iziModal('setSubtitle', 'Obrigado');
    $('#vermelho').iziModal('open');
    setTimeout(location.reload.bind(location), '2000');
  }
})

};

function concluirTask(id){
  $.ajax({
    type:'GET',
    url:'http://localhost/framework/tasks/concluir/?id=' + id,
    contentType:false,
    processData:false,
    success:function(msg){
      $('#verde').iziModal('setTitle', 'Atualizado com Sucesso');
      $('#verde').iziModal('setSubtitle', 'Obrigado');
      $('#verde').iziModal('open');
      setTimeout(location.reload.bind(location), '2000');

    }
  })
}
function reabrirTask(id){


  $.ajax({
    type:'GET',
    url:'http://localhost/framework/tasks/reabrir/?id=' + id,
    contentType:false,
    processData:false,
    success:function(msg){
      $('#verde').iziModal('setTitle', 'Atualizado com Sucesso');
      $('#verde').iziModal('setSubtitle', 'Obrigado');
      $('#verde').iziModal('open');
      setTimeout(location.reload.bind(location), '2000');

    }
  })
}
function updateGroupTask(id){

  $("#updateGroupTask").iziModal('open');
  var id = id;
  $.ajax({
    type:'GET',
    url:'http://localhost/framework/GroupTasks/listUnic/?id=' + id,
    dataType: 'JSON',
    success:function(msg){
        var retorno = msg;
      
        $('#updateGroupTask .inputContainerSingle').html('<input type="text" name="name" value="'+msg["0"].name+'" placeholder="Nome do Grupo"/>');
        $('#updateGroupTask .inputContainerSingleId').html('<input type="hidden" name="id" value="'+msg["0"].id+'" placeholder="Nome do Grupo"/>');
        $('#updateGroupTask .inputContainerSingleStatus').html('<input type="hidden" name="status" value="'+msg["0"].status+'" placeholder="Nome do Grupo"/>');
        $('#updateGroupTask .inputContainerSingleUserId').html('<input type="hidden" name="user_id" value="'+msg["0"].user_id+'" placeholder="Nome do Grupo"/>');
    }
  })


};
$('#changeNameGroup').on('submit', function(e){
  e.preventDefault();

  var form = $('#changeNameGroup')[0];
  var data = new FormData(form);
  var id = $('input[name=id]');


  $.ajax({
    type:'POST',
    url:'http://localhost/framework/GroupTasks/update',
    data:data,
    contentType:false,
    processData:false,
    success:function(msg){
      $('#verde').iziModal('setTitle', 'Atualizado com Sucesso');
      $('#verde').iziModal('setSubtitle', 'Obrigado');
      $('#verde').iziModal('open');
      setTimeout(location.reload.bind(location), '2000');

    }
  })



});
$('#registerTaskForm').on('submit', function(e){
  e.preventDefault();

  var form = $('#registerTaskForm')[0];
  var data = new FormData(form);


  $.ajax({
    type:'POST',
    url:'http://localhost/framework/tasks/insert',
    data:data,
    contentType:false,
    processData:false,
    success:function(msg){
      $('#verde').iziModal('setTitle', 'Criada com Sucesso');
      $('#verde').iziModal('setSubtitle', 'Obrigado');
      $('#verde').iziModal('open');
      setTimeout(location.reload.bind(location), '2000');

    }
  })



});

$('#formRegisterSubTask').on('submit', function(e){
  e.preventDefault();

  var form = $('#formRegisterSubTask')[0];
  var data = new FormData(form);
  var id = $('input[name=id]');

  $.ajax({
    type:'POST',
    url:'http://localhost/framework/checklist/insert/',
    data:data,
    contentType:false,
    processData:false,
    success:function(msg2){      
        alert(msg2);
      $.ajax({
        type:'GET',
        url:'http://localhost/framework/checklist/listAll/?id=' + msg2['4'].id,
        dataType: 'JSON',
        success:function(msg4){        

          alert(msg4);
            
        }
      })
      

    }
  })



});
$('#titleTaskNameForm').on('submit', function(e){
  e.preventDefault();

  var form = $('#titleTaskNameForm')[0];
  var data = new FormData(form);
  var id = $('input[name=id]');

  $.ajax({
    type:'POST',
    url:'http://localhost/framework/tasks/updateTitle/',
    data:data,
    contentType:false,
    processData:false,
    success:function(msg){
      alert('editado');
      setTimeout(location.reload.bind(location), '2000');
      

    }
  })



});