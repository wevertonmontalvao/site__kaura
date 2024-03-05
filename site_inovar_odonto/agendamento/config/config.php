<?php

return [
    'subject' => [
        'prefix' => '[Agendamento de Consulta]'
    ],
    'emails' => [
        'to'   => 'andersonmegax@hotmail.com',
        'from' => 'contato_comercio@inovarodonto.com.br'
    ],
    'messages' => [
        'error'   => 'There was an error sending, please try again later.',
        'success' => 'Sua Consulta foi agendada com sucesso. aguarde a confirmação',
        'validation' => [
            'emptyname'    => 'Name is required.',
            'emptyemail'   => 'Email is invalid.',
            'emptysubject' => 'Subject is required.',
            'emptymessage' => 'Message is required.'
        ]
    ],
    'fields' => [
        'clinica'  => 'Unidade',
        'name'     => 'Nome',
        'email'    => 'Email',
        'telefone'    => 'Telefone',
        'melhor-dia' => 'Qual o Melhor Dia',
        'melhor-periodo' => 'Qual o Melhor Periodo',
        'especialidade' => 'Qual Especialidade',
        'subject'  => 'Assunto',
        'message'  => 'Mensagem',
        'btn-send' => 'Registrar Consulta'
    ]
];