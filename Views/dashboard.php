<div class="dashboardContainer tingle-content-wrapper">
    <div class="left">
      <h1>Menu<hr /></h1>
      <ul>
        <li><a href="#" onclick="openRegisterGroupTask()">Cadastrar Grupo</a></li>
      </ul>
      


    </div>
    <div class="right">
    <?php
    
      foreach($groupTasks as $item) {
  ?>
      <div class="containerCard">
        <h1><?php echo $item['name']?> <a onClick="updateGroupTask(<?php echo $item['id'] ?>)"> - <small style="font-weight;normal; color:#ddd;">Edit</small></a></h1>
        <ul>
            <?php foreach($tasks as $item2) {   

              if($item['id'] == $item2['id_group_task']){
                  if($item2['status'] == '2'){ 
              ?>
              
                   <li><a style="text-decoration: line-through;" onClick="editorGroupTask(<?php echo $item2['id'];?>)"><?php echo $item2['name'];  ?></a><a onClick="reabrirTask(<?php echo $item2['id'];?>)" class="btnConcluir">Reabrir</a><a href="" onClick="deleteTask(<?php echo $item2['id'];?>)" class="btnDelete">X</a></li>
               <?php

                    }else{
                ?>

                    <li><a style="" onClick="editorGroupTask(<?php echo $item2['id'];?>)"><?php echo $item2['name'];  ?></a><a onClick="concluirTask(<?php echo $item2['id'];?>)" class="btnConcluir">Ok</a><a onClick="deleteTask(<?php echo $item2['id'];?>)" class="btnDelete">X</a></li>
                <?php
                 }
            }else{

        } 
        
        } ?>
        </ul>
        <hr style="margin-top:0.5rem; margin-top: 2.5rem;  margin-bottom: 1.5rem;" />
        <a  onClick="registerTask(<?php echo $item['id'];?>)" class="btnCadastrarNova" style="margin-bottom:1.5rem;">Cadastrar Nova</a>
        <a  onClick="deleteGroupTask(<?php echo $item['id'];?>)" class="btnDelete" style="margin-bottom:1.5rem;">Deletar</a>
      </div>
      
      <?php
    }
    ?>

    </div>
</div>

<!-- MODAL REGISTER GROUP TASK -->
<div id="registerGroupTask">
  <h1>Cadastrar Grupo de Tarefas<hr /></h1>
  
  <form id="registerGroupTaskFormulario" method="POST">
    <div class="inputContainerSingle">
        <input type="text" name="name" placeholder="Nome do Grupo"/>
    </div>

    <input type="hidden" name="status" value="1"/>
    <input type="hidden" name="user_id" value="1"/>
    <div class="inputContainerBtnSingle">
        <input type="submit" value="Cadastrar" class="btnEntrar" />
    </div>
    
  </form>
</div>

<!-- MODAL EDITOR GROUP TASK -->
<div id="editorGroupTask">
    <h1>
        <form method="post" id="titleTaskNameForm" style='padding:0;'>
            <div class="titleTaskNameInput">
            </div>
            <div class="inputContainerSingleId">
        
            </div>
            <div class="inputContainerSingleStatus">
                
            </div>

            <div class="inputContainerSingleUserId">
            
            </div>
            <div class="selectContainer">
                
                <select name="id_group_task" id="idGroupTaskNameSelect" class="selectDefaultStyle">

                        <option value="default"></option>
                    <?php
                    
                        foreach ($groupTasks as $key){
                            ?>
                                $
                                <option value="<?php echo $key['id'];?>"><?php echo $key['name'];?></option>
                            <?php
                        } 
                    ?>
                </select>
                
            </div>
            <div class="btnTaskClass">   
                    <input type="submit" class="btnpadrao" value="editar"/>   
            </div>
        </form>
        <hr />
    </h1>
    <form method="post" id="formRegisterSubTask">
        <input type="text" name="name" placeholder="Cadastrar SubTarefa" style="width:100%; border-bottom:1px dashed #000;"/>
            <div class="ChecklistRegisterStatus">
                
            </div>
            <div class="ChecklistRegisterTask">
                
                </div>
            <div class="ChecklistRegisterUserId">
            
            </div>
        <div class="inputContainerBtnSingle">
            <input type="submit" value="Cadastrar" class="btnEntrar" />
        </div>
    </form>
    <form>
      <div class="inputContainerSingle">
        <ul>

          <li><span><a href="">x</a></span><input type="text" name="checkName" placeholder="Nome da SubTarefa"/></li>
          <li><span><a href="">x</a></span><input type="text" name="checkName" placeholder="Nome da SubTarefa"/></li>
          <li><span><a href="">x</a></span><input type="text" name="checkName" placeholder="Nome da SubTarefa"/></li>
          <li><span><a href="">x</a></span><input type="text" name="checkName" placeholder="Nome da SubTarefa"/></li>
          <li><span><a href="">x</a></span><input type="text" name="checkName" placeholder="Nome da SubTarefa"/></li>
        </ul>
      </div>
      
  
      <div class="inputContainerBtnSingle">
          <input type="submit" value="Atualizar" class="btnEntrar" />
      </div>
      
    </form>
</div>


<!-- MODAL REGISTER GROUP TASK -->
<div id="registerTask">
  <h1>Cadastrar Tarefa<hr /></h1>
  
  <form method="POST" id="registerTaskForm">
    <div class="inputContainerSingle">
        <input type="text" name="name" placeholder="Nome da Tarefa"/>
    </div>
    <div class="inputContainerSingleId">
        
    </div>
    <div class="inputContainerSingleStatus">
            
    </div>
    <div class="inputContainerSingleUserId">
            
    </div>

    <div class="inputContainerBtnSingle">
        <input type="submit" value="Cadastrar" class="btnEntrar" />
    </div>
    
  </form>
</div>


<!-- MODAL REGISTER GROUP TASK -->
<div id="updateGroupTask">
  <h1>Alterar GRUPO<hr /></h1>

  <form method="POST" id="changeNameGroup">
    <div class="inputContainerSingle">
        <input type="text" name="name"  placeholder="Nome do Grupo"/>
    </div>
    
    <div class="inputContainerSingleId">
        
    </div>
    <div class="inputContainerSingleStatus">
        
    </div>
    <div class="inputContainerSingleUserId">
        
        </div>
    
    <div class="inputContainerBtnSingle">
        <input type="submit" value="Editar" class="btnEntrar" />
    </div>
    
  </form>

</div>


        
<div id="vermelho" ></div>
<div id="verde" ></div>


