# 🖥️ Gestmi 

O projeto envolve a criação de um sistema para gerenciamento de enxovais e itens em geral, integrado juntamente  com a tecnologia `RFID`

# 🛠️ Tecnologias Utilizadas

* [Laravel](https://laravel.com/): Laravel é um framework de aplicação web com sintaxe expressiva e elegante.
* [Bootstrap](https://getbootstrap.com/): Kit de ferramentas de front-end poderoso, extensível e repleto de recursos.
* [VsCode](https://code.visualstudio.com/): Livre. Construído em código aberto. Corre em todos os lugares.


## 📚 Requisitos da Linguagem


## Passo para utilização

1 - Inicialização do servidor, abra a pasta do código e digite o seguinte comando no terminal `Php Artisan Serve`.

2 -  Acesse o servidor em qualquer navegador por meio do IP padrão `http://127.0.0.1:8000/`. 




## 🧬 Estrutura do Projeto

O projeto foi dividido em 3 partes, separadas em analisador léxico, analisador sintático e semântico, e gerador de código intermediário.

### 🔍 Analisador Léxico

O analisador léxico é responsável por analisar a sequência de caracteres do código fonte e transformá-la em uma sequência de tokens.
Os tokens são estruturas que representam os elementos da linguagem, como palavras reservadas, identificadores, números, operadores, etc.
Em nossa implementação essa etapa é realizada pelo arquivo `muxtela.l`.

### 🧩 Analisador Sintático e Semântico
Essa etapa é responsável por analisar a sequência de tokens gerada pelo analisador léxico e verificar se ela está de acordo com a gramática da linguagem.
Além disso, o analisador semântico verifica se as operações realizadas no código são válidas.
Em nossa implementação essa etapa é realizada pelo arquivo `muxtela.y`.

### 🔄 Gerador de Código Intermediário
Essa etapa é responsável por gerar um código intermediário que será utilizado para a geração do código final.
O código intermediário é uma representação simplificada do código fonte, que é mais fácil de ser manipulada.
Por fim, o código intermediário é utilizado para a geração do código final.
Além disso, esta etapa está incluída no arquivo `muxtela.y`.

## 🧪 Testes Personalizados

Para testar o compilador, foram criados alguns arquivos de teste que estão localizados na pasta raíz do projeto.
Porém é possível criar novos arquivos de teste e executá-los utilizando o compilador.
Devemos selecionar qual arquivo `.txt` será utilizado para a execução do compilador, e em seguida executar o comando `./muxtela.exe seu_codigo.txt`.

## 🚀 Executando o Projeto

Para executar o projeto, é necessário ter o `flex` e o `bison` instalados em sua máquina.
Após a instalação, basta executar os seguintes comandos:

```bash
flex muxtela.l
bison -d muxtela.y
gcc -o muxtela muxtela.tab.c lex.yy.c
./muxtela.exe < arquivo_de_teste.txt
```

Obs: É interessante ressaltar que os comandos geram arquivos interdependentes, e por isso é necessário executá-los na ordem correta 
e com um tempo de espera entre eles.

## 🤝 Contribuições

Sinta-se à vontade para contribuir com este projeto criando solicitações de pull (pull requests) ou relatando problemas por meio de issues, caso encontre algum.







