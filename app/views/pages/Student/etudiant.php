<?php require APPROOT . '/views/inc/header.php'; ?>

     <body class="background-body">

          <!-- start side bar -->
          <?php require APPROOT . '/views/inc/sidebar.php'; ?>
            <!-- end side bar  -->
            <!-- start navbar -->
            <?php require APPROOT . '/views/inc/nav.php'; ?>
            <!-- end navbar -->
            
            <!-- start table  -->
            <div class="bg-light py-2 mt-5 ">
                <div class="d-flex align-items-center  justify-content-center justify-content-sm-between  mt-3">
                    <h5 class=" fw-bolder d-none d-sm-block mx-3">ETUDIANT</h5>
                    <div class="d-flex align-items-center">
                        <i class="far fs-6 fa-sort me-3 text-info d-sm-block"></i>
                        <!-- Modal -->
                        <button type="button" class=" btn btn-info btn-lg me-3 text-white fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Student</button>

<form class="modal fade"  action="<?php echo URLROOT?>/etudiants/addStudents"  method="POST" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="form-outline mb-4">
          <label class="form-label" for="">Matricule </label>
          <input type="number" id="" name="stud_Matricule" class="form-control form-control"placeholder="Enter Le Matricule" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Nom Complet </label>
          <input type="text" id="" name="stud_Name" class="form-control form-control"placeholder="Enter Le Matricule" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Genre</label>
          <input type="text" id="" name="stud_Genre" class="form-control form-control"placeholder="Entrez Le Genre" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Classe</label>
          <input type="number" id="" name="stud_Classe" class="form-control form-control"placeholder="Entrez La Classe" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Adresse</label>
          <input type="text" id="" name="stud_Adresse" class="form-control form-control"placeholder="Entrez Adresse" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Date</label>
          <input type="date" id="" name="stud_Date_Naissance" class="form-control form-control"placeholder="Entrez La Date" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Nom Des Parents</label>
          <input type="text" id="" name="stud_Parent_Name" class="form-control form-control"placeholder="Entrez les parents" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Email</label>
          <input type="text" id="" name="stud_Email" class="form-control form-control" placeholder="Email" />
        </div>
        <div class="form-outline mb-4">
          <label class="form-label" for="">Parent id</label>
          <input type="number" id="" name="parent_id" class="form-control form-control" placeholder="Must be an existing id in parents tables" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger fw-bold" data-bs-dismiss="modal">Close</button>
        <button type="submit"  name="addStudent"  class="btn btn-info text-white fw-bold">Add Student</button>
      </div>
    </div>
  </div>
</form>
                    </div>
                </div>
            <hr>
    
    
            <main class="row ">
                <div class="container">
                    <div class="table-responsive-sm table-responsive-md px-4">
                    <table class="table align-middle table-borderless ">
                        <thead>
                        <tr class="text-capitalize  ">
                            <th scope="col" class="d-none d-sm-block"></th>
                            <th scope="col" class="text-muted h6 ">Matricule</th>
                            <th scope="col" class="d-none d-sm-table-cell text-muted h6">Nom complet</th>
                            <th scope="col" class="d-none d-sm-table-cell text-muted h6">Genre</th>
                            <th scope="col" class="text-muted h6">classe</th>
                            <th scope="col" class="text-muted h6">Adresse</th>
                            <th scope="col" class="text-muted h6">Date</th>
                            <th scope="col" class="text-muted h6">Nom des parents</th>
                            <th scope="col" class="d-none d-sm-table-cell text-muted h6">Email</th>
                            <th scope="col"></th>
                        </tr>

                        </thead>
                        
                        <tbody>
                        <?php  foreach ($data as $value) :?>
                        <tr class=" bg-white ">
                            <th scope="row" class="d-none d-sm-block rounded-circle"width="70" height="70"><img src="<?php echo URLROOT;?>/img/forest.jpg"  width="65px" alt="image représente étudiants"> </th>
                            <td><?php echo $value-> Matricule ;?></td>
                            <td class="d-none d-sm-table-cell"><?php echo $value-> Nom ;?></td>
                            <td class="d-none d-sm-table-cell"><?php echo $value-> Genre ;?></td>
                            <td><?php echo $value-> Classe ;?></td>
                            <td class="d-none d-sm-table-cell"><?php echo $value-> Adresse ;?></td>
                            <td class="d-none d-sm-table-cell"><?php echo $value-> Date_de_naissance ;?></td>
                            <td class="d-none d-sm-table-cell"><?php echo $value-> Nom_parents ;?></td>
                            <td class="d-none d-sm-table-cell"><?php echo $value-> Email ;?></td>
                            <td><a href="<?php echo URLROOT?>/etudiants/etudiantEdit/<?php echo $value-> id; ?>"><i class="fal fa-pen fs-6 text-info"></a></i></td>
                            <td><a href="<?php echo URLROOT?>/etudiants/deleteStudent/<?php echo $value-> id; ?>" onclick="return confirm(`Are You Sure ?`)"><i class="fal fa-trash fs-6 text-info"></i></a></td>
                        </tr>
                        <?php endforeach ;?>
                        </tbody>
                    </table>
                    </div>
                </div>    
            </main>
            <!-- end table  -->


            
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
    if(window.history.replaceState) {
    window.history.replaceState(null , null ,window.location.href);
}
  </script>
     </body>
  </html>