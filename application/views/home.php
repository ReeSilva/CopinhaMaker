<script src="<?php echo TEMPLATE; ?>js/home.js"></script>
<div ng-controller="HomeController">
    <div class="row">
        <div class="small-6 medium-6 large-6 small-offset-3 medium-offset-3 large-offset-3 columns">
            <h2 style="background-color: #f3f3f3; border: 1px solid #d6d6d6; border-radius: 3px; padding: 5px; text-align: center;">Copinha Maker!</h2>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="small-4 medium-4 large-4 columns" style="background-color: #f3f3f3; border: 1px solid #d6d6d6; border-radius: 3px; padding: 5px;">
            <div class="row collapse">
                <div class="small-10 medium-10 large-10 columns">
                    <input type="text" ng-model="qtdTimes" placeholder="Quantidade de times">
                </div>
                <div class="small-2 medium-2 large-2 columns">
                    <a href="javascript:void(0);" ng-click="startCopinha()" class="button postfix">Salvar</a>
                </div>
            </div>
        </div>

        <div class="small-6 medium-6 large-6 small-offset-2 medium-offset-2 large-offset-2" style="background-color: #f3f3f3; border: 1px solid #d6d6d6; border-radius: 3px; padding: 5px;">

        </div>
    </div>

    <hr>

    <div class="row">
        <div class="small-4 medium-4 large-4 columns" style="background-color: #f3f3f3; border: 1px solid #d6d6d6; border-radius: 3px; padding: 5px;">
            <h4>Novos times</h4>
            <input type="text" ng-repeat="novotime in novostimes" id="time-{{novotime.key}}" name="time-{{novotime.key}}" placeholder="Nome do time...">
        </div>
    </div>
</div>