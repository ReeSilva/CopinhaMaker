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
                <ul class="no-bullet">
                    <li ng-repeat="time in times">
                        {{time.nome}}
                    </li>
                </ul>
                <div class="small-10 medium-10 large-10 columns">
                    <input type="text" ng-model="novoTime" placeholder="Nome do time">
                </div>
                <div class="small-2 medium-2 large-2 columns">
                    <a href="javascript:void(0);" ng-click="addTimes()" class="button postfix">Salvar</a>
                </div>
            </div>
        </div>

    </div>
</div>