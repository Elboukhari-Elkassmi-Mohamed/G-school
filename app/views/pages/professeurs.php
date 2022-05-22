<?php require APPROOT .'/views/inc/header.php'; ?>

     <body class="background-body">

          <!-- start side bar -->
             <?php require APPROOT . '/views/inc/sidebar.php'; ?>
            <!-- end side bar  -->
            <!-- start navbar -->
            <?php require APPROOT . '/views/inc/nav.php'; ?>
            <!-- start table  -->
            <div class="bg-light py-2 mt-5 ">
                <div class="d-flex align-items-center  justify-content-center justify-content-sm-between  mt-3">
                    <h5 class=" fw-bolder d-none d-sm-block mx-3">PROFESSEURS</h5>
                    <div class="d-flex align-items-center">
                        <i class="far fs-6 fa-sort me-3 text-info d-sm-block"></i>
                        <button type="button" class=" btn btn-info btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Contact</button>

<!-- Modal -->
<form class="modal fade"  action="<?php echo URLROOT?>/professeurs/addprof"  method="POST" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Professeur </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="form-outline mb-4">
          <label class="form-label" for="">Matricule </label>
          <input type="text" id="" name="prof_Matricule" class="form-control form-control"placeholder="Enter Your Full name" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Nom_complet </label>
          <input type="text" id=""  name="prof_NComplet" class="form-control form-control"placeholder="Enter Email" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Genre	</label>
          <input type="text" id="" name="prof_Genre" class="form-control form-control"placeholder="Enter Number" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Class</label>
          <input type="text" id="" name="prof_Class" class="form-control form-control"placeholder="Adresse" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Matiére</label>
          <input type="text" id="" name="prof_Matiere" class="form-control form-control"placeholder="Adresse" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Phone</label>
          <input type="text" id="" name="prof_Phone" class="form-control form-control"placeholder="Adresse" />
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"  name="add"  class="btn btn-primary">Add Contact</button>
      </div>
    </div>
  </div>
</form>


                    </div>
                </div>
            <hr>
    
    
            <main class="row ">
                <div class="container ">
                    <div class="table-responsive-sm table-responsive-md px-4">
                    <table class="table align-middle table-borderless ">
                        <thead>
                        <tr class="text-capitalize  ">
                            <th scope="col" class="text-muted h6 ">Matricule</th>
                            <th scope="col" class="d-none d-sm-table-cell text-muted h6">Nom complet</th>
                            <th scope="col" class="d-none d-sm-table-cell text-muted h6">Genre</th>
                            <th scope="col" class="text-muted h6">Class</th>
                            <th scope="col" class="text-muted h6">Matiére</th>
                            <th scope="col" class="text-muted h6">Phone</th>
                            <th scope="col"></th>
                        </tr>

                        </thead>
                        <?php  foreach ($data as $value) :?>
                        <tbody>
                            <!--     -->
                                <tr class=" bg-white ">
                                    <td class="d-none d-sm-table-cell"><?php echo $value-> Matricule ;?></td>
                                    <td class="d-none d-sm-table-cell"><?php echo $value-> Nom_complet ;?></td>
                                    <td class="d-none d-sm-table-cell"><?php echo $value-> Genre ;?></td>
                                    <td class="d-none d-sm-table-cell"><?php echo $value-> Classe ;?></td>
                                    <td class="d-none d-sm-table-cell"><?php echo $value-> Matiere ;?></td>
                                    <td class="d-none d-sm-table-cell"><?php echo $value-> Phone ;?></td>

                                    <td>
                                    <a href="#"><i class="fal fa-pen fs-6 text-info"></a></i>
                                    <a href="<?php echo URLROOT; ?>/professeurs/deletprof/<?php echo $value->id ?>"><i class="fal fa-trash "></i></a>
                                  </td>
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
     </body>
  </html>