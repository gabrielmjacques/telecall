<!-- Tela de Cadastro -->
<div class="container-cad bg-body h-100 shadow-lg" id="cadastro_div">
    <div class="p-5 position-relative">

        <div class="close-button">
            <button class="hide_cad_btn btn" onclick="HideCad()">X</button>
        </div>

        <div class="row mb-3 mt-3">
            <h3 class="text-center fw-bold">Cadastrar</h3>
            <hr>
        </div>

        <!-- Cadastro -->
        <form class="needs-validation" novalidate method="post" action="backend/processar_registro.php">

            <!-- Nome e Nascimento -->
            <div class="row mb-3">
                <div class="col-md-8 form-group mb-3">
                    <label for="fullname">Nome Completo</label>
                    <input class="form-control" type="text" name="fullname" id="fullname_entry"
                        placeholder="Insira seu nome completo" pattern="^(?!.*\s$)(?!^\s)[A-Za-zÀ-ÿ\s]{10,60}$"
                        required>

                    <div class="invalid-feedback">Nome deve ter entre 10 e 60 caracteres</div>
                </div>

                <div class="col-md-4 form-group">
                    <label for="birth_date">Data de Nascimento</label>
                    <input class="form-control" type="date" name="birth_date" id="birth_date_entry" min="1900-01-01"
                        max="9999-12-12" onkeyup="DateValidation()" required>

                    <div class="invalid-feedback">Selecione uma data válida <small>
                            (Você deve ser maior de
                            idade para se cadastrar)
                        </small></div>
                </div>
            </div>

            <!-- Nome Materno -->
            <div class="row mb-4">
                <div class="col form-group">
                    <label for="mother">Nome Materno</label>
                    <input class="form-control" type="text" name="mother" id="mother_entry"
                        placeholder="Insira o nome completo de sua mãe" pattern="^(?!.*\s$)(?!^\s)[A-Za-zÀ-ÿ\s]{10,60}$"
                        required>

                    <div class="invalid-feedback">Nome deve ter entre 10 e 60 caracteres</div>
                </div>
            </div>

            <!-- CPF e Gênero -->
            <div class="row mb-4">
                <div class="col-md-4 form-group mb-3">
                    <label for="cpf">CPF</label>
                    <input class="form-control" type="text" name="cpf" id="cpf_entry" placeholder="Ex. 000.000.000-00"
                        pattern="^.{14}$" required>

                    <div class="invalid-feedback">CPF inválido</div>
                </div>

                <div class="col-md-8">
                    <label for="gender">Gênero</label>
                    <select class="form-select" id="gender" name="gender">
                        <option value="mas">Masculino</option>
                        <option value="fem">Feminino</option>
                        <option value="oth">Outro</option>
                    </select>
                </div>
            </div>

            <!-- Celular e Telefone fixo -->
            <div class="row mb-4">
                <div class="col-md-6 form-group mb-3">
                    <label for="cel">Celular</label>
                    <input class="form-control" type="text" name="cel" id="cel_entry"
                        placeholder="Ex: +55 (21) 93030-1010" pattern="^.{19}$" required>

                    <div class="invalid-feedback">Celular inválido</div>
                </div>

                <div class="col-md-6 form-group">
                    <label for="tel_fixo">Telefone Fixo</label>
                    <input class="form-control" type="text" name="tel_fixo" id="tel_fixo_entry"
                        placeholder="Ex: +55 (21) 3030-1010" pattern="^.{18}$" required>

                    <div class="invalid-feedback">Telefone inválido</div>
                </div>
            </div>

            <!-- CEP -->
            <div class="row">
                <div class="col form-group mb-3">
                    <label for="cep">CEP</label>
                    <input class="form-control" type="text" name="cep" id="cep_entry" placeholder="00000-000"
                        pattern="^\d{5}-\d{3}$" required>

                    <div class="invalid-feedback">Endereço muito curto</div>
                </div>
            </div>

            <!-- Novo login -->
            <div class="row">
                <div class="col form-group mb-3">
                    <label for="new_login">Login</label>
                    <input class="form-control" type="text" name="new_login" id="new_login_entry"
                        placeholder="Crie seu login aqui" pattern="^[a-zA-Z]{6}$" maxlength="6" required>

                    <div class="invalid-feedback">
                        Deve conter exatamente 6 caracteres alfabéticos <br>
                    </div>
                </div>
            </div>

            <!-- Senha e Confirmar senha -->
            <div class="row">

                <div class="col-md-6 form-group mb-3">
                    <label for="new_password">Senha</label>

                    <div class="input-group">
                        <input class="form-control" type="password" name="new_password" id="new_password_entry"
                            placeholder="Crie sua senha" pattern="^[a-zA-Z]{8,}$" required
                            onkeyup="ConfirmPasswordValidation()">

                        <button class="btn btn-outline-secondary" type="button"
                            onclick="ShowPassword(document.getElementById('new_password_entry'))">
                            <img class="icons" src="assets/icons/show.png" alt="" width="15px">
                        </button>

                        <div class="invalid-feedback">
                            A senha deve conter no mínimo 8 caracteres alfabéticos
                        </div>
                    </div>

                </div>

                <div class="col-md-6 form-group mb-3">
                    <label for="confirm_password">Confirmar Senha</label>

                    <div class="input-group">
                        <input class="form-control" type="password" name="confirm_password" id="confirm_password_entry"
                            placeholder="Confirme sua senha" required onkeyup="ConfirmPasswordValidation()">

                        <button class="btn btn-outline-secondary" type="button"
                            onclick="ShowPassword(document.getElementById('confirm_password_entry'))">
                            <img class="icons" src="assets/icons/show.png" alt="" width="15px">
                        </button>

                        <div class="invalid-feedback">Deve coincidir com a senha</div>
                    </div>
                </div>

            </div>

            <!-- Criar Conta -->
            <div class="form-group mb-3">
                <button type="submit" class="btn w-100 btn-outline-danger">Criar
                    Conta</button>
            </div>
        </form>

        <!-- Fechar aba de cadastro -->
        <button type="button" class="hide_cad_btn btn btn-sm w-100" onclick="HideCad()">Já possuo
            conta, quero
            entrar!</button>

    </div>