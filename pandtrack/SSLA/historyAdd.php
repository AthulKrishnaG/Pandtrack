<!--side Database start-->
<?php
    include("dbconnection.php");
    include("session.php");
?>
<!--side Header start-->
<?php include("header.php"); ?>
<!--side Header end-->
<?php include("menu.php"); ?>
<!--side menu end-->

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Patients History Info</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Patients History Info</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="content-body">
      <section id="horizontal-form-layouts">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-content collpase show">
                <div class="card-body">

                  <form class="form form-horizontal" action="phpcodes-Insert.php" method="post" novalidate>
                    <div class="form-body">
                      <h4 class="form-section"><i class="ft-user"></i> History Info</h4>

                      <!-- Select Patient -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="h_patient">Select Patient</label>
                        <div class="col-md-9">
                          <select id="h_patient" name="h_patient" class="form-control select2" required>
                            <option value="">--Select Patient--</option>
                            <?php
                              $queryemp = "SELECT p_id, p_name FROM patient ORDER BY p_name ASC";
                              $resultemp = mysqli_query($dbconnection, $queryemp);  
                              while($rowemp = mysqli_fetch_array($resultemp)) {
                                echo "<option value='{$rowemp['p_id']}'>{$rowemp['p_name']}</option>";
                              }
                            ?>
                          </select>
                        </div>
                      </div>

                      <!-- Days After Onset -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="h_days_after_the_onset_of_the_disease">
                          Days After Onset of Disease
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="h_days_after_the_onset_of_the_disease" name="h_days_after_the_onset_of_the_disease" class="form-control"
                                 placeholder="e.g., 7" min="0" max="365" required title="Enter a valid number of days">
                        </div>
                      </div>

                      <!-- Effective Medicines -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="h_effective_medicines">Effective Medicines</label>
                      <div class="col-md-9">
                            <select id="h_effective_medicines" name="h_effective_medicines" class="form-control" required>
                            <option value="">-- Select Medicine --</option>
                            <option value="Paracetamol">Paracetamol</option>
                            <option value="Ibuprofen">Ibuprofen</option>
                            <option value="Amoxicillin">Amoxicillin</option>
                            <option value="Azithromycin">Azithromycin</option>
                            <option value="Ciprofloxacin">Ciprofloxacin</option>
                            <option value="Metformin">Metformin</option>
                            <option value="Atorvastatin">Atorvastatin</option>
                            <option value="Omeprazole">Omeprazole</option>
                            <option value="Simvastatin">Simvastatin</option>
                            <option value="Losartan">Losartan</option>
                            <option value="Amlodipine">Amlodipine</option>
                            <option value="Levothyroxine">Levothyroxine</option>
                            <option value="Alprazolam">Alprazolam</option>
                            <option value="Metoprolol">Metoprolol</option>
                            <option value="Hydrochlorothiazide">Hydrochlorothiazide</option>
                            <option value="Furosemide">Furosemide</option>
                            <option value="Prednisone">Prednisone</option>
                            <option value="Tramadol">Tramadol</option>
                            <option value="Clopidogrel">Clopidogrel</option>
                            <option value="Warfarin">Warfarin</option>
                            <option value="Sertraline">Sertraline</option>
                            <option value="Tamsulosin">Tamsulosin</option>
                            <option value="Gabapentin">Gabapentin</option>
                            <option value="Zolpidem">Zolpidem</option>
                            <option value="Montelukast">Montelukast</option>
                            <option value="Fluoxetine">Fluoxetine</option>
                            <option value="Cetirizine">Cetirizine</option>
                            <option value="Doxycycline">Doxycycline</option>
                            <option value="Clindamycin">Clindamycin</option>
                            <option value="Naproxen">Naproxen</option>
                            <option value="Ranitidine">Ranitidine</option>
                            <option value="Lisinopril">Lisinopril</option>
                            <option value="Hydrocodone">Hydrocodone</option>
                            <option value="Amiodarone">Amiodarone</option>
                            <option value="Sildenafil">Sildenafil</option>
                            <option value="Methotrexate">Methotrexate</option>
                            <option value="Digoxin">Digoxin</option>
                            <option value="Clonazepam">Clonazepam</option>
                            <option value="Duloxetine">Duloxetine</option>
                            <option value="Venlafaxine">Venlafaxine</option>
                            <option value="Lorazepam">Lorazepam</option>
                            <option value="Risperidone">Risperidone</option>
                            <option value="Quetiapine">Quetiapine</option>
                            <option value="Olanzapine">Olanzapine</option>
                            <option value="Citalopram">Citalopram</option>
                            <option value="Escitalopram">Escitalopram</option>
                            <option value="Levofloxacin">Levofloxacin</option>
                            <option value="Hydroxychloroquine">Hydroxychloroquine</option>
                            <option value="Metronidazole">Metronidazole</option>
                            <option value="Aspirin">Aspirin</option>
                            <option value="Clarithromycin">Clarithromycin</option>
                            <option value="Azathioprine">Azathioprine</option>
                            <option value="Bisoprolol">Bisoprolol</option>
                            <option value="Carvedilol">Carvedilol</option>
                            <option value="Allopurinol">Allopurinol</option>
                            <option value="Colchicine">Colchicine</option>
                            <option value="Epinephrine">Epinephrine</option>
                            <option value="Famotidine">Famotidine</option>
                            <option value="Glipizide">Glipizide</option>
                            <option value="Glyburide">Glyburide</option>
                            <option value="Isosorbide Mononitrate">Isosorbide Mononitrate</option>
                            <option value="Loratadine">Loratadine</option>
                            <option value="Meloxicam">Meloxicam</option>
                            <option value="Methylprednisolone">Methylprednisolone</option>
                            <option value="Nitroglycerin">Nitroglycerin</option>
                            <option value="Pantoprazole">Pantoprazole</option>
                            <option value="Phenytoin">Phenytoin</option>
                            <option value="Pioglitazone">Pioglitazone</option>
                            <option value="Pravastatin">Pravastatin</option>
                            <option value="Rivaroxaban">Rivaroxaban</option>
                            <option value="Rosuvastatin">Rosuvastatin</option>
                            <option value="Spironolactone">Spironolactone</option>
                            <option value="Sulfamethoxazole">Sulfamethoxazole</option>
                            <option value="Tadalafil">Tadalafil</option>
                            <option value="Tiotropium">Tiotropium</option>
                            <option value="Valacyclovir">Valacyclovir</option>
                            <option value="Valsartan">Valsartan</option>
                            <option value="Varenicline">Varenicline</option>
                            <option value="Zolmitriptan">Zolmitriptan</option>
                            <option value="Acyclovir">Acyclovir</option>
                            <option value="Albuterol">Albuterol</option>
                            <option value="Budesonide">Budesonide</option>
                            <option value="Ceftriaxone">Ceftriaxone</option>
                            <option value="Chlorpheniramine">Chlorpheniramine</option>
                            <option value="Dextromethorphan">Dextromethorphan</option>
                            <option value="Diazepam">Diazepam</option>
                            <option value="Diphenhydramine">Diphenhydramine</option>
                            <option value="Enalapril">Enalapril</option>
                            <option value="Ezetimibe">Ezetimibe</option>
                            <option value="Fexofenadine">Fexofenadine</option>
                            <option value="Fluticasone">Fluticasone</option>
                            <option value="Guanfacine">Guanfacine</option>
                            <option value="Hydralazine">Hydralazine</option>
                            <option value="Indomethacin">Indomethacin</option>
                            <option value="Ketorolac">Ketorolac</option>
                            <option value="Labetalol">Labetalol</option>
                            <option value="Lansoprazole">Lansoprazole</option>
                            <option value="Methadone">Methadone</option>
                            <option value="Methocarbamol">Methocarbamol</option>
                            <option value="Metoclopramide">Metoclopramide</option>
                            <option value="Mometasone">Mometasone</option>
                            <option value="Nifedipine">Nifedipine</option>
                            <option value="Olmesartan">Olmesartan</option>
                            <option value="Ondansetron">Ondansetron</option>
                            <option value="Oxycodone">Oxycodone</option>
                            <option value="Paroxetine">Paroxetine</option>
                            <option value="Phenylephrine">Phenylephrine</option>
                            <option value="Prednisolone">Prednisolone</option>
                            <option value="Propranolol">Propranolol</option>
                            <option value="Risedronate">Risedronate</option>
                            <option value="Salmeterol">Salmeterol</option>
                            <option value="Tizanidine">Tizanidine</option>
                            <option value="Topiramate">Topiramate</option>
                            <option value="Valproate">Valproate</option>
                            <option value="Vecuronium">Vecuronium</option>
                            <!-- Add more predefined medicines as needed -->
                          </select>
                          <div class="invalid-feedback">Please select a medicine.</div>

                      
                     

                      <!-- Buttons -->
                      <div class="form-actions center">
                        <button type="reset" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" id="btnhistoryAdd" name="btnhistoryAdd" class="btn btn-info">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>
