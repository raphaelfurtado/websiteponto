<x-mail::message>
    # Novo Contato Recebido

    Você recebeu uma nova mensagem através do formulário de contato do site.

    **Nome:** {{ $contact->name }}
    **E-mail:** {{ $contact->email }}

    **Mensagem:**
    {{ $contact->message }}

    Para responder, basta enviar um e-mail para {{ $contact->email }}.

    Atenciosamente,
    Equipe WebsitePonto
</x-mail::message>