# 🛠️ Help Desk System

Sistema de Help Desk para gerenciamento e acompanhamento de chamados técnicos.

## 📋 Descrição

O sistema permite que usuários autentiquem-se e gerenciem chamados de suporte técnico. Através da interface simples, é possível cadastrar problemas técnicos, consultar chamados existentes e, futuramente, acompanhar métricas e indicadores de SLA.

## 🔐 Funcionalidades Atuais

- **Tela de Login:** Autenticação de usuários.
- **Tela Home:** Boas-vindas com opções de navegação.
- **Cadastro de Chamado:**
  - Campo para título do problema.
  - Seleção de categoria (hardware, redes, impressora, etc.).
- **Consulta de Chamado:**
  - Visualização de chamados recém-criados.

## 🚧 Funcionalidades em Desenvolvimento

- **Dashboard do Usuário:**
  - Lista de chamados criados.
  - Status de cada chamado.
- **Dashboard do Técnico:**
  - Visualização de chamados mais recentes.
  - Filtros e indicadores.
- **Métricas de SLA:**
  - Tempo médio de resolução.
  - Índice de estouro do prazo.
- **Melhorias no Chamado:**
  - Upload de imagens e prints.
  - Indicação de técnicos disponíveis.
  - Definição de prioridade.
- **Gerenciamento de Chamados:**
  - Lista de todos os chamados.
  - Filtros por data e outros critérios.

## 🖼️ Telas do Sistema (em breve)

- [ ] Tela de Login  
- [ ] Tela Home com opções de navegação  
- [ ] Tela de Cadastro de Chamado  
- [ ] Tela de Consulta de Chamados  
- [ ] Dashboard do Usuário  
- [ ] Dashboard do Técnico  
- [ ] Tela Detalhada do Chamado com anexo  
- [ ] Tela com indicadores de SLA e performance  

## 🚀 Como Executar

1. Baixe o arquivo `helpdesk.sql` localizado em `admin/DB`.
2. Importe essa tabela no seu servidor local MySQL (ex: via phpMyAdmin).
3. Coloque o projeto em execução utilizando o **XAMPP** (diretório `htdocs`) ou outro servidor web compatível.
4. Acesse via navegador:  
   `http://localhost/nome-do-projeto`  
   ou em um servidor web na nuvem de sua preferência.
5. **Login de acesso:**  
   Usuário: `admin`  
   Senha: `5268@`

## 🧰 Tecnologias Utilizadas

- HTML
- CSS
- Bootstrap
- JavaScript
- PHP
- MySQL
