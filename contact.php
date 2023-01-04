<?php

if($_SERVER["REQUEST_METHOD"] === "POST")

{
    $message[] = "";
    if(empty($_POST['nom']))
    {
        $message = 'Veuillez renseigner votre nom svp !';
    }

    elseif(empty($_POST['prenom']))
    {
        $message = 'Veuillez renseigner votre prenom svp !';
    }
    elseif(empty($_POST['email']))
    {
        $message = ' Veuillez renseigner votre mail svp';
    }
    elseif(empty($_POST['flexRadioDefault']))
    {
        $message = ' Veuillez selectionnner un choix svp';

    }else{
        $date = date('Y-m-d-H-i-s');
        $name = $_POST['nom'];
        $fileForm = $name . '_' . $date. '.txt';

        foreach($_POST as $key => $value) {
            $forms = filter_input(INPUT_POST, $key) . ': ';

            file_put_contents($fileForm, $forms, FILE_APPEND);
        }
        file_put_contents($fileForm, PHP_EOL, FILE_APPEND);
    }
        echo $message;

}elseif($_SERVER["REQUEST_METHOD"] === 'GET')
{
    ?>

    <section class="container-fluid">
        <form class="form " action="contact.php" method="POST">
            <fieldset >
                <legend>Formulaire de contact</legend>
                  <div class="mb-4 ">

                      <select class="form-select form-select-lg mb-4 " aria-label=".form-select-lg " name="civilite">
                          <option selected>Selectionné votre civilité</option>
                          <option value="mr">Mr</option>
                          <option value="mme">Mme</option>
                          <option value="mlle">Mlle</option>
                      </select>
                  </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nom</span>
                    <input type="text" name="nom" class="form-control" placeholder="Votre nom" aria-label="Nom" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Prenom</span>
                    <input type="text" name="prenom" class="form-control" placeholder="Votre prénom" aria-label="Prenom" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="email" class="form-control" placeholder="Username@example.fr" aria-label="Username">
                </div>

                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" value="emploi" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Proposition d'emploi
                        </label>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" value="info" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Proposition d'information
                        </label>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" value="prest" name="flexRadioDefault" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Proposition de prestation
                        </label>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </div>

            </fieldset>
        </form>
    </section>
<?php
}
?>