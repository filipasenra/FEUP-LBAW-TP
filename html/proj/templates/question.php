<?php

include_once("../templates/profile_activity.php");
include_once("../templates/topic.php");
include_once("../templates/popup.php");

function drawQuestion()
{
    drawHeaderActivity("João Pinheiro", "perguntou:", "", "22/02/2020");
?>
    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed neque arcu. Nunc eu elementum purus. Vestibulum finibus maximus vestibulum. </h2>

    <div class="description mt-3">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed neque arcu. Nunc eu elementum purus. Vestibulum finibus maximus vestibulum. In hendrerit fermentum purus ut luctus. Aliquam pharetra mollis erat, non euismod felis varius in. Donec gravida cursus dui, sed egestas magna venenatis non. Curabitur in tellus eu diam varius tempus eget sit amet lorem. Nulla non consectetur magna, a tincidunt est. Sed posuere ex vel bibendum vehicula. Morbi egestas dolor magna, ullamcorper convallis nibh consequat eu. Sed ac venenatis odio. Phasellus convallis ipsum laoreet, tempus dui sed, euismod velit. Maecenas euismod nisi orci, ac tempor justo eleifend vel. Sed diam dui, commodo ornare convallis a, facilisis vitae eros.

            Nam accumsan turpis sit amet sem semper, vel sodales sapien pretium. Integer est felis, mollis sed tempor vitae, imperdiet ac nibh. Sed in cursus ligula, ac molestie velit. Suspendisse quis ultricies dui, eu mattis est. Curabitur sit amet magna ultrices magna consectetur tempor. Pellentesque venenatis ligula ut mollis pellentesque. Duis imperdiet ex vel nibh hendrerit, eu auctor mauris porta. Quisque in consectetur elit. Sed quis faucibus ante. Nullam est turpis, rhoncus non metus quis, dignissim bibendum quam.</p>
    </div>

    <div class="row justify-content-between align-items-center my-3 px-0 mx-0">
        <div class="topics align-items-center">
            <?php
            drawTopicsInCard();
            ?>
        </div>

        <div class="info row justify-content-end align-items-center mx-0">
            <?php drawInfoContent("commentSectionQuestion"); ?>
        </div>

    </div>


    <div class="commentSection collapse" id="commentSectionQuestion">
        <?php drawCommentSection(); ?>
    </div>

<?php
}

function drawInfoContent($idOfCommentSection)
{
?>

    <button class="btn px-2 py-0" data-toggle="collapse" toggle="" data-placement="bottom" title="Deixe o seu comentário" data-target="#<?= $idOfCommentSection ?>" aria-expanded="false" aria-controls=<?= $idOfCommentSection ?>>
        <i class="far fa-comment"></i>
        <label style="margin-bottom: 0px" class="pl-1">Comentar</label>
    </button>

    <?php drawLikeButtons(); ?>

    <button class="btn px-1 py-0 ml-4" toggle="" data-placement="bottom" title="Guardar">
        <i class="far fa-star"></i>
    </button>


    <div class="dropdown">
        <button class="btn px-1 py-0 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-h"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Editar</a>
            <a class="dropdown-item" href="#">Eliminar</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" data-toggle="modal" data-target="#<?= $idOfCommentSection ?>">Reportar</a>
        </div>
    </div>

    <?php reportPopUp($idOfCommentSection); ?>


<?php
}

function drawRecomendations()
{

?>

    <h6>Recomendações</h6>
    <hr class="section-break" />
    <div>
        <a href="../pages/question.php">
            <p class="card-text">Será que o meu cão está demasiado gordo?</p>
        </a>
        <a href="../pages/question.php">
            <p class="card-text">Como domisticar um crocodilo?</p>
        </a>
    </div>

<?php
}

function drawAddQuestion($titlePage, $titleQuestion = "", $description = "", $topics = "")
{
?>
    <h3 class="font-weight-normal mb-3"><?= $titlePage ?></h3>
    <hr class="section-break" />

    <form>
        <div class="form-group">

            <div class="content mb-4">
                <label for="inputTitle">Titulo</label>
                <input id="inputTitle" class="form-control" placeholder="Titulo" required="" autofocus="" value="<?= $titleQuestion ?>">
            </div>

            <div class="content mb-4">
                <label for="textAreaDescription">Descrição</label>
                <textarea id="textAreaDescription" class="form-control" placeholder="Descrição" required="" autofocus="" rows="6"><?= $description ?></textarea>
            </div>

            <div class="content mb-4">
                <label for="inputTopics">Tópicos</label>
                <input id="inputTopics" class="form-control" placeholder="Tópicos" required="" autofocus="" value="<?= $topics ?>">
            </div>

            <div class="d-flex justify-content-end d-inline">
                <button class="btn btn-secondary mr-2">Cancelar</button>
                <button type="submit" class="btn btn-primary"><?= $titlePage ?>
            </div>

        </div>
    </form>

<?php
}
?>