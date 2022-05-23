<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container mt-4">
<form  action=""  method="POST" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  

        <div class="form-outline mb-4">
          <label class="form-label" for="">Matricule </label>
          <input type="number" id="" name="stud_Matricule" class="form-control form-control"placeholder="Enter Le Matricule" value="<?php echo  $data->Matricule ; ?>"/>
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Nom Complet </label>
          <input type="text" id="" name="stud_Name" class="form-control form-control"placeholder="Enter Le Matricule" value="<?php echo $data->Nom ; ?>" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Genre</label>
          <input type="text" id="" name="stud_Genre" class="form-control form-control"placeholder="Entrez Le Genre" value="<?php echo $data->Genre ; ?>"/>
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Classe</label>
          <input type="number" id="" name="stud_Classe" class="form-control form-control"placeholder="Entrez La Classe" value="<?php echo $data->Classe ; ?>"/>
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Adresse</label>
          <input type="text" id="" name="stud_Adresse" class="form-control form-control"placeholder="Entrez Adresse" value="<?php echo $data->Adresse ; ?>"/>
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Date</label>
          <input type="date" id="" name="stud_Date_Naissance" class="form-control form-control"placeholder="Entrez La Date" value="<?php echo $data->Date_de_naissance ; ?>"/>
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Nom Des Parents</label>
          <input type="text" id="" name="stud_Parent_Name" class="form-control form-control"placeholder="Entrez les parents" value="<?php echo $data->Nom_parents ; ?>" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Email</label>
          <input type="text" id="" name="stud_Email" class="form-control form-control" placeholder="Email" value="<?php echo $data->Email ; ?>"/>
        </div>
        <div class="form-outline mb-4">
          <label class="form-label" for="">Parent id</label>
          <input type="number" id="" name="parent_id" class="form-control form-control" placeholder="Must be an existing id in parents tables" value="<?php echo $data->fk_parent ; ?>"/>
        </div>
      <div class="modal-footer">
        <button type="submit"  name="editStudent"  class="btn btn-info text-white fw-bold w-100">Add Student</button>
      </div>
   
</form>

</div>
</body>
</html>