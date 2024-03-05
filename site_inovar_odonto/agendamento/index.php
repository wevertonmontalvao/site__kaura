<?php
require_once './vendor/autoload.php';

$helperLoader = new SplClassLoader('Helpers', './vendor');
$helperLoader->register();

use Helpers\Config;

$config = new Config;
$config->load('./config/config.php');

?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agendamento de Consulta</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="jumbotron" style="background-color:rgb(0, 171, 168)">
        <div class="container">
            <img class="img-responsive" src="../images/logo5.png" alt="Inovar Odonto" height="100px" style="height: 100px">
            <p>Agende sua consulta com a melhor Clinica Odontologica de Belém.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Site Inovar &raquo;</a></p>
        </div>
    </div>

    <div class="col-md-6 col-md-offset-3">
        <form enctype="application/x-www-form-urlencoded;" id="contact-form" class="form-horizontal" role="form" method="post">
        <div class="form-group" id="clinica-field">
        <label class="col-lg-2 control-label"><?php echo $config->get('fields.clinica'); ?></label>
        <div class="col-lg-10">
        <label class="checkbox-inline">
        <input type="radio" id="inlineCheckbox1" name="clinica" value="1"> Comercio</label>
        <label class="checkbox-inline">
        <input type="radio" id="inlineCheckbox2" name="clinica" value="2"> Pedreira</label>
        <label class="checkbox-inline">
        <input type="radio" id="inlineCheckbox3" name="clinica" value="3"> Telegrafo</label>
        </div>
        </div>
            <div class="form-group" id="name-field">
                <label for="form-name" class="col-lg-2 control-label"><?php echo $config->get('fields.name'); ?></label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
                </div>
            </div>
            <div class="form-group" id="email-field">
                <label for="form-email" class="col-lg-2 control-label"><?php echo $config->get('fields.email'); ?></label>
                <div class="col-lg-10">
                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" >
                </div>
            </div>
            <div class="form-group" id="telefone-field">
                <label for="form-telefone" class="col-lg-2 control-label"><?php echo $config->get('fields.telefone'); ?></label>
                <div class="col-lg-10">
                    <input type="phone" class="form-control" id="form-telefone" name="form-telefone" placeholder="<?php echo $config->get('fields.telefone'); ?>" required>
                </div>
            </div>
            <div class="form-group" id="melhor-dia-field">
                <label for="form-melhor-dia" class="col-lg-2 control-label"><?php echo $config->get('fields.melhor-dia'); ?></label>
                <div class="col-lg-10">
                    <select class="form-control" id="form-melhor-dia" name="form-melhor-dia" required>
                    <option value="">Selecione o melhor dia</option>
                    <option value="segunda">Segunda</option>
                    <option value="terca">Terça</option>
                    <option value="quarta">Quarta</option>
                    <option value="quinta">Quinta</option>
                    <option value="sexta">Sexta</option>
                    <option value="sabado">Sabado</option>
                    </select>
                </div>
            </div>
            <div class="form-group" id="melhor-periodo-field">
                <label for="form-melhor-periodo" class="col-lg-2 control-label"><?php echo $config->get('fields.melhor-periodo'); ?></label>
                <div class="col-lg-10">
                    <select  class="form-control" id="form-melhor-periodo" name="form-melhor-periodo"  required>
                    <option value="">Selecione o Periodo</option>
                    <option value="manha">Manha</option>
                    <option value="tarde">Tarde</option>
                    <option value="noite">Noite</option>
                    </select>
                </div>
            </div>
            <div class="form-group" id="especialidade-field">
                <label for="form-especialidade" class="col-lg-2 control-label"><?php echo $config->get('fields.especialidade'); ?></label>
                <div class="col-lg-10">
                    <select class="form-control" id="form-especialidade" name="form-especialidade"  required>
                    <option value="">Escolha a especialidade</option>
                    <option value="Implantes Dentários">Implantes Dentários</option>
                    <option value="Tratamentos Estéticos">Tratamentos Estéticos</option>
                    <option value="Tratamento de Canal">Tratamento de Canal</option>
                    <option value="Tratamento de Gengiva">Tratamento de Gengiva</option>
                    <option value="Aparelho Ortodôntico">Aparelho Ortodôntico</option>
                    <option value="Limpeza e Flúor">Limpeza e Flúor</option>
                    <option value="Extração Dentária">Extração Dentária</option>
                    <option value="Harmonia Facial">Harmonia Facial</option>
                    <option value="Clareamento Dentário">Clareamento Dentário</option>
                    </select>
                </div>
            </div>              
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default"><?php echo $config->get('fields.btn-send'); ?></button>
                </div>
            </div>
        </form>
    </div>
    
    <script src="public/js/contact-form.js"></script>
    <script type="text/javascript">
        new ContactForm('#contact-form', {
            endpoint: './process.php'
        });
    </script>
</body>
</html>