# WebsitePonto

É a vitrine do trabalho: quem chega vê os serviços, os projetos já entregues e, se gostar, manda uma mensagem pelo formulário de contato. Por trás tem um painel simples para manter tudo isso atualizado sem precisar mexer no código a cada projeto novo.

## O site

- Home com apresentação, serviços, projetos em destaque, seção "Sobre" e formulário de contato
- Portfólio com uma página para cada projeto (`/portfolio/{slug}`), contando o desafio, a solução, a tecnologia, o prazo, o cliente e o link do projeto no ar
- Formulário de contato que salva a mensagem no banco e manda um e-mail de aviso

## O painel

Fica em `/admin`. Por lá dá para:

- Cadastrar e editar projetos do portfólio, com imagem de capa e galeria de fotos
- Cadastrar os serviços, cada um com seu ícone em SVG e a ordem em que aparece
- Mudar título do site, logo, favicon, e-mail, telefone, endereço e o texto do rodapé
- Gerenciar quem tem acesso e trocar a própria senha

Não existe nível de permissão: qualquer usuário cadastrado entra no painel com acesso total. Por isso, só crie conta para quem pode mexer em tudo.
