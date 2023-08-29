<!-- Tela de Login -->
<div class="p-5 bg-body" id="login_div" style="transition-duration: 0.7s;">
    <div class="row mb-3 mt-3">
        <h3 class="text-center fw-bold">Entrar</h3>
        <hr>
    </div>

    <!-- Login -->
    <form class="needs-validation" novalidate action="backend/processar_login.php" method="post">
        <div class=" form-group mb-3">
            <label for="login_entry">Login de Usuário</label>

            <div class="input-group">
                <button class="btn btn-outline-secondary" type="button" disabled>
                    <img class="icons" src="assets/icons/user.png" alt="" width="15px">
                </button>

                <input class="form-control" type="text" name="login" id="login_entry" required>
            </div>

        </div>

        <!-- Senha -->
        <div class="form-group mb-5">
            <label for="password-entry">Senha</label>

            <div class="input-group">
                <button class="btn btn-outline-secondary" type="button" disabled>
                    <img class="icons" src="assets/icons/password.png" alt="" width="15px">
                </button>

                <input class="form-control" type="password" name="password" id="password_entry" required>

                <button class="btn btn-outline-secondary" type="button"
                    onclick="ShowPassword(document.getElementById('password_entry'))">
                    <img class="icons" src="assets/icons/show.png" alt="" width="15px">
                </button>
                <div class="invalid-feedback">Preencha os campos</div>
            </div>


            <div class="mt-3">
                <a href="" class="btn btn-sm"><small>Esqueci minha senha</small></a>
            </div>

            <div class="form-check form-switch my-2">
                <input class="form-check-input" type="checkbox" role="switch" name="is_master" id="is_master_entry">
                <label class="form-check-label" for="is_master_entry">Usuário Master</label>
            </div>

        </div>

        <!-- Botão Entrar -->
        <div class="form-group mb-3">
            <button href="index.html" class="btn w-100 btn-outline-danger">
                Entrar na Conta
            </button>
        </div>
    </form>

    <!-- Mostrar aba de cadastro -->
    <button type="button" class="show_cad_btn btn btn-sm w-100" onclick="ShowCad()">Não
        tenho conta,
        quero me
        cadastrar!</button>
</div>