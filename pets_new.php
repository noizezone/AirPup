<?php require "layout/header.php";
require "lib/functions.php";
?>
<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $weight = $_POST['weight'];
    $bio = $_POST['bio'];

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $name = "";
    }

    if (isset($_POST['breed'])) {
        $name = $_POST['breed'];
    } else {
        $name = "";
    }

    if (isset($_POST['weight'])) {
        $name = $_POST['weight'];
    } else {
        $name = "";
    }

    if (isset($_POST['bio'])) {
        $name = $_POST['bio'];
    } else {
        $name = "";
    }

    $pets = getPets();
    $newPet = array(
        'name' => $name,
        'breed' => $breed,
        'weight' => $weight,
        'bio' => $bio,
        'age' => '',
        'image' => ''
    );

    $pets[] = $newPet;

    save_pets($pets);

    header("Location: /");
    die;

}


?>

    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h1>Add your pet! Squirrel!</h1>

                <form action="pets_new.php" method="POST">
                    <div class="form-group">
                        <label for="pet-name" class="control-label">Pet Name</label>
                        <input type="text" name="name" id="pet-home" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="pet-name" class="control-label">Breed</label>
                        <input type="text" name="breed" id="pet-home" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="pet-name" class="control-label">Weight (lbs)</label>
                        <input type="text" name="weight" id="pet-home" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="pet-name" class="control-label">Pet Bio</label>
                        <input type="text" name="bio" id="pet-home" class="form-control"/>
                    </div>


                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-heart"></span>
                        Add
                    </button>
                </form>
            </div>
        </div>
    </div>


<?php require "layout/footer.php"; ?>