<div class="alert alert-dark">
    pregunta 1 de 5
</div>
<p class="font-weight-bolder">¿para que sirve php?</p>

<form action="<?php echo site_url('quiz/process') ?>" method="post">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="choice_text" id="choice" value="">
        <label for="choice" class="form-check-label">
            Es un lenguuaje dinamico
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="choice_text" id="choice1" value="">
        <label for="choice1" class="form-check-label">
            Es un lenguuaje dinamico
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="choice_text" id="choice2" value="">
        <label for="choice2" class="form-check-label">
            Es un lenguuaje dinamico
        </label>
    </div>
    <input type="submit" value="Enviar" class="btn btn-primary mt-3">
</form>