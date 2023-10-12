<!-- Modal de Acessibilidade -->
<button class="accessibility-menu" data-bs-toggle="modal" data-bs-target="#accessbilityModal">
    <img src="/telecall/assets/icons/accessibility.png" alt="">
</button>

<div class="modal fade" id="accessbilityModal" tabindex="-1" aria-labelledby="accessbilityModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Menu de Acessibilidade</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column gap-4">

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="theme_switch"
                        onclick="ChangeTheme()">
                    <label class="form-check-label" for="theme_switch">Modo
                        Escuro</label>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tamanho da Fonte</label> <br>
                    <button class="btn btn-primary" onclick="ChangeFontSize(20)">Normal</button>
                    <button class="btn btn-primary" onclick="ChangeFontSize(22)">Grande</button>
                    <button class="btn btn-primary" onclick="ChangeFontSize(24)">Extra Grande</button>
                    <p class="text-danger fw-bold mt-1">
                        <small>ATENÇÃO: Extra Grande pode causar poblemas na interface!</small>
                    </p>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>