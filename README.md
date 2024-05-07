**Sistema Integrado Viaonda RFID**

Este repositório contém o código-fonte de um sistema integrado com antena RFID . O sistema utiliza o framework Laravel e opera na faixa de frequência de 900 Hz.

### Descrição

O sistema integrado  foi desenvolvido para permitir a leitura e gerenciamento de tags RFID em uma variedade de aplicações, desde controle de acesso até rastreamento de inventário. Utilizando a tecnologia RFID na faixa de frequência de 900 Hz, o sistema é capaz de identificar e rastrear objetos em tempo real, proporcionando uma solução robusta e eficiente para as necessidades da empresa Viaonda.

### Recursos Principais

- **Leitura de Tags RFID**: Capacidade de ler e interpretar dados de tags RFID na faixa de frequência de 900 Hz.
  
- **Gerenciamento de Inventário**: Funcionalidade para gerenciar o inventário de forma eficiente, permitindo a identificação rápida e precisa de itens.

- **Controle de Acesso**: Possibilidade de integração com sistemas de controle de acesso para permitir ou negar a entrada com base na identificação por RFID.

- **API RESTful**: Interface de programação de aplicativos (API) RESTful para integração com outros sistemas e serviços.

### Tecnologias Utilizadas

- **Laravel**: Framework PHP moderno e robusto, proporcionando uma base sólida para o desenvolvimento do sistema.

- **PHP**: Linguagem de programação backend utilizada pelo framework Laravel.

- **SQlite**: Sistema de gerenciamento de banco de dados relacional para armazenamento de dados.

- **HTML/CSS/JavaScript**: Tecnologias padrão da web para construção da interface de usuário e interações dinâmicas.

### Instalação e Uso

1. Clone este repositório em sua máquina local:

   ```
   git clone https://github.com/seuusuario/IC-jet-admin
   ```

2. Instale as dependências do Composer:

   ```
   composer install
   ```

3. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente, incluindo a conexão com o banco de dados.

4. Gere a chave de aplicativo do Laravel:

   ```
   php artisan key:generate
   ```

5. Execute as migrações do banco de dados para criar as tabelas necessárias:

   ```
   php artisan migrate
   ```

6. Inicie o servidor de desenvolvimento:

   ```
   php artisan serve
   ```

7. Acesse o sistema em seu navegador no endereço `http://localhost:8000`.

### Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue para relatar bugs, sugerir novos recursos ou enviar pull requests.

### Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

---

Para mais informações sobre o sistema integrado Viaonda RFID, entre em contato com a equipe de desenvolvimento da Viaonda.
