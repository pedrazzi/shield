<?php

return [
    // Exceptions
    'unknownAuthenticator'  => '{0} não é um autenticador válido.',
    'unknownUserProvider'   => 'Não foi possível determinar o Provedor de Usuário a ser usado.',
    'invalidUser'           => 'Não foi possível localizar o usuário especificado.',
    'badAttempt'            => 'Não foi possível fazer login. Verifique suas credenciais.',
    'noPassword'            => 'Não é possível validar um usuário sem senha.',
    'invalidPassword'       => 'Não foi possível fazer login. Verifique sua senha.',
    'noToken'               => 'Cada solicitação deve ter um bearer token {0} no header.',
    'badToken'              => 'O token de acesso é inválido.',
    'oldToken'              => 'O token de acesso expirou.',
    'noUserEntity'          => 'A Entidade do Usuário deve ser fornecida para validação de senha.',
    'invalidEmail'          => 'Não foi possível verificar se o endereço de e-mail corresponde ao e-mail registrado.',
    'unableSendEmailToUser' => 'Desculpe, ocorreu um problema ao enviar o e-mail. Não foi possível enviar um e-mail para "{0}".',
    'throttled'             => 'Muitas solicitações feitas a partir deste endereço IP. Você pode tentar novamente em {0} segundos.',

    'email'           => 'Endereço de email',
    'username'        => 'Nome de usuário',
    'password'        => 'Senha',
    'passwordConfirm' => 'Senha (novamente)',
    'haveAccount'     => 'Já tem uma conta?',

    // Buttons
    'confirm' => 'Confirma',
    'send'    => 'Envia',

    // Registration
    'register'         => 'Registro',
    'registerDisabled' => 'O registro não é permitido no momento.',
    'registerSuccess'  => 'Bem vindo a bordo!',

    // Login
    'login'              => 'Login',
    'needAccount'        => 'Precisa de uma conta?',
    'rememberMe'         => 'Lembre de mim?',
    'forgotPassword'     => 'Esqueceu sua senha?',
    'useMagicLink'       => 'Use um link de login',
    'magicLinkSubject'   => 'Seu link de acesso',
    'magicTokenNotFound' => 'Não foi possível verificar o link.',
    'magicLinkExpired'   => 'Desculpe, o link expirou.',
    'checkYourEmail'     => 'Verifique seu e-mail!',
    'magicLinkDetails'   => 'Acabamos de lhe enviar um e-mail com um link de login dentro. É válido apenas por {0} minutos.',
    'successLogout'      => 'Você saiu com sucesso.',

    // Passwords
    'errorPasswordLength'       => 'As senhas devem ter pelo menos {0, number} caracteres.',
    'suggestPasswordLength'     => 'Frases secretas - até 255 caracteres - criam senhas mais seguras e fáceis de lembrar.',
    'errorPasswordCommon'       => 'A senha não deve ser uma senha comum.',
    'suggestPasswordCommon'     => 'A senha foi verificada em mais de 65 mil senhas comumente usadas ou senhas que vazaram por meio de hacks.',
    'errorPasswordPersonal'     => 'As senhas não podem conter informações pessoais refeitas.',
    'suggestPasswordPersonal'   => 'Variações em seu endereço de e-mail ou nome de usuário não devem ser usadas para senhas.',
    'errorPasswordTooSimilar'   => 'A senha é muito semelhante ao nome de usuário.',
    'suggestPasswordTooSimilar' => 'Não use partes do seu nome de usuário em sua senha.',
    'errorPasswordPwned'        => 'A senha {0} foi exposta devido a uma violação de dados e foi vista {1, number} vezes em {2} de senhas comprometidas.',
    'suggestPasswordPwned'      => '{0} nunca deve ser usado como senha. Se você estiver usando em qualquer lugar, altere-o imediatamente.',
    'errorPasswordEmpty'        => 'Uma senha é necessária.',
    'passwordChangeSuccess'     => 'Senha alterada com sucesso',
    'userDoesNotExist'          => 'A senha não foi alterada. Usuário não existe',
    'resetTokenExpired'         => 'Desculpe. Seu token de redefinição expirou.',

    // 2FA
    'email2FATitle'       => 'Autenticação de dois fatores',
    'confirmEmailAddress' => 'Confirme seu endereço de e-mail.',
    'emailEnterCode'      => 'Confirme seu email',
    'emailConfirmCode'    => 'Digite o código de 6 dígitos que acabamos de enviar para o seu endereço de e-mail.',
    'email2FASubject'     => 'Seu código de autenticação',
    'email2FAMailBody'    => 'Seu código de autenticação é:',
    'invalid2FAToken'     => 'O código estava incorreto.',
    'need2FA'             => 'Você deve concluir uma verificação de dois fatores.',
    'needVerification'    => 'Verifique seu e-mail para concluir a ativação da conta.',

    // Activate
    'emailActivateTitle'    => 'Ativação de e-mail',
    'emailActivateBody'     => 'Acabamos de enviar um e-mail para você com um código para confirmar seu endereço de e-mail. Copie esse código e cole abaixo.',
    'emailActivateSubject'  => 'Seu código de ativação',
    'emailActivateMailBody' => 'Por favor, use o código abaixo para ativar sua conta e começar a usar o site.',
    'invalidActivateToken'  => 'O código estava incorreto.',

    // Groups
    'unknownGroup' => '{0} não é um grupo válido.',
    'missingTitle' => 'Os grupos devem ter um título.',

    // Permissions
    'unknownPermission' => '{0} não é uma permissão válida.',
];
